<?php

namespace App\Core;

class Core
{
    public static function dispath(array $routes)
    {
        // base url
        $url = '/';

        // se url 'setado' e concatena a url
        isset($_GET['url']) && $url .= $_GET['url'];

        foreach ($routes as $route) {
            // pasando parametros, preg_replace vai troacr o {id} para o id passado na rota
            $pattern = '#^' . preg_replace('/{id}/', '(\w+)', $route['path']) . '$#';

            // 'match' na rota encontrada, com base no parametro
            if (preg_match($pattern, $url, $params)) {
                // esse params retorna um array, sendo o primeiro valor a rota, segundo valor o id passado no parametro sendo assim para pegar apenas o valor de parametro, eu 'corto' o primeiro valor com: 
                array_shift($params);
                var_dump($params);
            }
        }
    }
}
