<?php

use App\Providers\Migrations;

class CreatePermissionsTable extends Migrations{

    public function create()
    {
        $sql = "CREATE TABLE permissions IF NOT EXISTS (
            id INT NOT NULL AUTO_INCREMENT UNIQUE, 
            name VARCHAR(255) NOT NULL, 
            )";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($sql);
    }
}