<?php

namespace App\Models;


class Database
{
    public static function getConnection()
    {
        try {
            $pdo = new \PDO("pgsql:host=" . $_ENV['POSTGRES_HOST'] . "; port=" . $_ENV['POSTGRES_PORT'] . "; dbname=" . $_ENV['POSTGRES_DB'] . "", $_ENV['POSTGRES_USER'], $_ENV['POSTGRES_PASS']);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \Exception("excp in connection " . $e->errorInfo[0]);
        }
    }
}
