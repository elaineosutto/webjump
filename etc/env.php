<?php
return [
    'backend' => [
        'frontName' => 'admin123'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '6hpnf8hqh5wkadcwxi1syconchz4or39'
    ],
    'db' => [
        'table_prefix' => 'mgng_',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'elain213_mage542',
                'username' => 'elain213_mage542',
                'password' => 'Sd!ps4)52p',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'a53_'
            ],
            'page_cache' => [
                'id_prefix' => 'a53_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'elainesutto.dev.br'
    ],
    'install' => [
        'date' => 'Tue, 08 Mar 2022 00:42:04 -0300'
    ]
];
