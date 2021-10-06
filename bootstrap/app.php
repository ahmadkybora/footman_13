<?php

require_once __DIR__. "/../config/database.php";
require_once __DIR__. "/../routes/web.php";
require_once __DIR__. "/../routes/api.php";

/**
 * this statement for create database table
 */
//require_once __DIR__ . '/../database/migrations/Create-Users-Table.php';
//require_once __DIR__ . '/../database/migrations/Create-Roles-Table.php';
//require_once __DIR__ . '/../database/migrations/Create-Permissions-Table.php';

/**
 * this instance for connection
 */
new App\Providers\Connection();

/**
 * this instance for router
 */
new App\Providers\BaseRoute($router);