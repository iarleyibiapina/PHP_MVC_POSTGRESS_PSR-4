<?php

namespace App\Models;

use App\Models\Database;

class User extends Database
{
    public static function all()
    {
        try {
            $pdo = self::getConnection();

            $stm = $pdo->query('SELECT * FROM "user"');

            // retorna array vazio caso não exista usuario
            return $stm->fetchAll(\PDO::FETCH_ASSOC ?? []);
        } catch (\PDOException $e) {
            throw new \Exception("Excp in model" . $e->errorInfo[0]);
        }
    }

    public static function find(int $id)
    {
        try {

            $pdo = self::getConnection();

            $stm = $pdo->prepare('SELECT * FROM "user" WHERE id = ?');
            $stm->execute([$id]);

            if ($stm->rowCount() > 0) {
                return $stm->fetchAll(\PDO::FETCH_ASSOC);
            }
            return [];
        } catch (\PDOException $e) {
            throw new \Exception($e->errorInfo[0]);
        }
    }
}
