<?php

namespace App\Providers;
require_once __DIR__ . '/../../database/config.php';

class QueryBuilder
{
    public function selectAll($table)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function find($table, $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table} WHERE id={$id}");
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function where($table, $key, $value)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table} WHERE $key= '$value'");
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($table, $params)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(' ,', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
    }

    public function update($table, $id, $params)
    {
        $maked = [];
        foreach ($params as $key => $value) {
            $maked[] = "$key=:$key";
        }
        $sql = sprintf(
            "update %s set %s where id=$id",
            $table,
            implode(', ', $maked)
        );
        $this->pdo->prepare($sql)->execute($params);
    }

    public function delete($table, $id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$table} WHERE id={$id}");
        $stmt->execute();
    }
}
