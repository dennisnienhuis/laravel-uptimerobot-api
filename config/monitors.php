<?php

    return [
        'uptimerobot' => [
            'format'         => 'json',
            'noJsonCallback' => 1,
			'api_key'        => env('UPTIME_ROBOT_API_KEY', ''),
        ],
    ];
