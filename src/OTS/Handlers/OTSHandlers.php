<?php

namespace Aliyun\OTS\Handlers;

use Aliyun\OTS;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Guzzle\HandlerStackFactory;
use Hyperf\Utils\Coroutine;
use GuzzleHttp\HandlerStack;

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

    public function __construct(\Aliyun\OTS\OTSClientConfig $config)
    {
        $this->clientConfig = $config;
        $this->retryHandler = new RetryHandler();
        $this->protoBufferDecoder = new ProtoBufferDecoder();
        $this->protoBufferEncoder = new ProtoBufferEncoder();
        $this->errorHandler = new ErrorHandler();
        $this->httpHeaderHandler = new HttpHeaderHandler();
        $this->httpHandler = new HttpHandler();
        
        $clientFactory      = ApplicationContext::getContainer()->get(ClientFactory::class);
        $this->httpClient   = $clientFactory->create([
            'handler'   => $this->getDefaultHandler(),
            'base_uri'  => $config->getEndPoint(),
            'timeout'   => $config->connectionTimeout,
        ]);

    }
    
    protected function getDefaultHandler()
    {
        $id = (int) Coroutine::inCoroutine();

        if (isset(self::$stacks[$id]) && self::$stacks[$id] instanceof HandlerStack) {
            return self::$stacks[$id];
        }
        $factory = ApplicationContext::getContainer()->get(HandlerStackFactory::class);
        return self::$stacks[$id] = $factory->create([
            'min_connections'    => 100,
            'max_connections'    => 120,
            'wait_timeout'       => 3.0 ,
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
