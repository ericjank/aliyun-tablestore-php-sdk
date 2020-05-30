<?php

declare(strict_types=1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  50172189@qq.com
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */
return [
    'default' => [
        'end_point'            => env('TABLESTORE_END_POINT',''),
        'access_key_id'        => env('TABLESTORE_ACCESS_KEY_ID',''),
        'access_key_secret'    => env('TABLESTORE_ACCESS_KEY_SECRET',''),
        'instance_name'        => env('TABLESTORE_INSTANCE_NAME',''),
        'sts_token'            => env('TABLESTORE_STS_TOKEN', null), // 临时访问token
        'connection_timeout'   => (float) env('TABLESTORE_CONNECTION_TIMEOUT', 2.0),
        'socket_timeout'       => (float) env('TABLESTORE_SOCKET_TIMEOUT', 2.0),
        // 'error_handler'     => "App\ModelAts\Model::myErrorLogHandler",
        // 'debug_log_handler' => "App\ModelAts\Model::myDebugLogHandler",
        // 'retry_policy'      => new DefaultRetryPolicy(), // 重试机制
        // 连接池配置
        'pool' => [
            'min_connections'   => (int) env('TABLESTORE_POOL_MIN', 1 ),
            'max_connections'   => (int) env('TABLESTORE_POOL_MAX', 20 ),
            'wait_timeout'      => (float) env('TABLESTORE_POOL_WAIT', 4.0 ),
            'max_idle_time'     => (int) env('TABLESTORE_POOL_IDLE', 1 ),
        ],
    ],
];
