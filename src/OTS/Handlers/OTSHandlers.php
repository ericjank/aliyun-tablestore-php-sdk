<?php

namespace Aliyun\OTS\Handlers;

use Aliyun\OTS;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Guzzle\HandlerStackFactory;
use Hyperf\Utils\Coroutine;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;

class OTSHandlers
{
    /** var OTSClientConfig */
    private $clientConfig;

    /** var GuzzleHttp\Client */
    private $httpClient;

    /** var RetryHandler */
    private $retryHandler;

    /** var ProtoBufferDecoder */
    private $protoBufferDecoder;

    /** var ProtoBufferEncoder */
    private $protoBufferEncoder;

    /** var ErrorHandler */
    private $errorHandler;

    /** var HttpHeaderHandler */
    private $httpHeaderHandler;

    /** var HttpHandler */
    private $httpHandler;
    
    /**
     * @var HandlerStack[]
     */
    protected static $stacks = [];

    public function __construct(\Aliyun\OTS\OTSClientConfig $config, string $name = 'default')
    {
        $this->clientConfig = $config;
        $this->retryHandler = new RetryHandler();
        $this->protoBufferDecoder = new ProtoBufferDecoder();
        $this->protoBufferEncoder = new ProtoBufferEncoder();
        $this->errorHandler = new ErrorHandler();
        $this->httpHeaderHandler = new HttpHeaderHandler();
        $this->httpHandler = new HttpHandler();
        $this->httpClient = make(Client::class, [
            'config' => [
                'handler'   => $this->getDefaultHandler($name),
                'base_uri'  => $config->getEndPoint(),
                'timeout'   => $config->connectionTimeout,
            ]
        ]);
    }
    
    protected function getDefaultHandler($name)
    {
        $factory = new HandlerStackFactory();
        return $factory->create([
            'min_connections' => config('tablestore.'.$name.'.min_connections', 1),
            'max_connections' => config('tablestore.'.$name.'.max_connections', 10),
            'wait_timeout'    => config('tablestore.'.$name.'.wait_timeout', 10),
            'max_idle_time'   => config('tablestore.'.$name.'.max_idle_time', 60),
        ]);
    }

    public function doHandle($apiName, array $request) 
    {
        $context = new RequestContext($this->clientConfig, $this->httpClient, $apiName, $request);

        while (true) {
            $this->retryHandler->handleBefore($context);
            $this->protoBufferDecoder->handleBefore($context);
            $this->protoBufferEncoder->handleBefore($context);
            $this->errorHandler->handleBefore($context);
            $this->httpHeaderHandler->handleBefore($context);
            $this->httpHandler->handleBefore($context);

            $this->httpHandler->handleAfter($context);
            $this->httpHeaderHandler->handleAfter($context);
            $this->errorHandler->handleAfter($context);
            $this->protoBufferEncoder->handleAfter($context);
            $this->protoBufferDecoder->handleAfter($context);
            $this->retryHandler->handleAfter($context);

            if ($context->otsServerException != null) {
                if ($context->shouldRetry) {
                    usleep($context->retryDelayInMilliSeconds * 1000);
                    $context->otsServerException = null;
                    continue;
                } else {
                    throw $context->otsServerException;
                }
            } else {
                break;
            }
        }

        return $context->response;
    }
}
