<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function getAll()
    {
        try {
            $users = User::all();

            return $users;
        } catch (\Exception $e) {
            if ($e->getMessage() == '08006') return ['error_db' => 'Erro de conexao com o banco'];
            return "Excp in service " . $e->getMessage();
        }
    }

    public static function getById(int $id)
    {
        try {
            $user = User::find($id);

            return $user;
        } catch (\Exception $e) {
            if ($e->getMessage() == '08006') return ['error_db' => 'Erro de conexao com o banco'];
            return $e->getMessage();
        }
    }
}
