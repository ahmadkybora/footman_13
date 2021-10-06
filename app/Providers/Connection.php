<?php

namespace App\Providers;

use Illuminate\Database\Capsule\Manager as Con;

class Connection {
    public function __construct()
    {
        $db = new Con;
        $db->addConnection([
            'driver' => $_ENV['DB_DRIVER'],
            'host' => $_ENV['DB_HOST'],
            'database' => $_ENV['DB_NAME'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $db->setAsGlobal();
        $db->bootEloquent();
    }
}