<?php

namespace App\Models;


class Database
{
    public function getConnection()
    {
        try {
            $pdo = new \PDO("pgsql:host=" . $_ENV['POSTGRES_HOST'] . "; port=" . $_ENV['POSTGRES_PORT'] . "; dbname=" . $_ENV['POSTGRES_DB'] . "", $_ENV['POSTGRES_USER'], $_ENV['POSTGRES_PASSWORD']);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \Exception($e->errorInfo[0]);
        }
    }
}
