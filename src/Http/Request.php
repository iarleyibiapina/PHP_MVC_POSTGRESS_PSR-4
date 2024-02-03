<?php

namespace App\Http;

class Request
{
    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function body()
    {
        // pegando tudo que esta sendo enviado para o php, retorna json, por isso json_decode
        $json = json_decode(file_get_contents("php:input//"));

        // dependendo do caso, API, ou consulta, pode ser trocando method post para $json e passar metodo pela funçao direto
        $data = match (self::getMethod()) {
            'GET'    => $_GET,
            'POST'   => $json,
            'PUT'    => $json,
            'DELETE' => $json,
            default  => []
        };

        return $data;
    }
}
