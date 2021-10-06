<?php

namespace App\Providers;

class Migrations {
    private $pdo;
    public function __construct($pdo)
    {
        $pdo = new Connection();
        return $pdo->pdo;
    }
}