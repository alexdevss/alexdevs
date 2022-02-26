<?php 
    return [
        'mail' => [
            'subject' => [
                'to_client' => 'Mensaje recibido - alexdevs',
                'to_me' => 'Nuevo cliente - alexdevs',
                'to_me_spy' => 'Intento de algo - alexdevs',
            ],
            'view' => [
                'to_client' => 'mail.client',
                'to_me' => 'mail.new_client',
                'to_me_spy' => 'mail.alert_spy',
            ],
        ],
        'cookies' => [
            'XSRF-TOKEN' => [
                'name' => 'XSRF-TOKEN',
                'used_to' => 'Se usa para el correcto funcionamiento de la web',
                'personal_data' => 'No almacena información personal'
            ]
            ],
        'badIps' => []
    ];
?>