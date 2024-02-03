<?php

namespace App\Core;

use App\Http\Response;
use App\Http\Request;

class Core
{
    public static function dispath(array $routes)
    {
        // base url
        $url = '/';

        // se url 'setado' e concatena a url
        isset($_GET['url']) && $url .= $_GET['url'];


        // Caso nao exista controller
        $routerFound = false;


        foreach ($routes as $route) {
            // pasando parametros, preg_replace vai troacr o {id} para o id passado na rota
            $pattern = '#^' . preg_replace('/{id}/', '(\w+)', $route['path']) . '$#';

            // criando pre fixo para instanciar controller
            $prefix = 'App\\Controllers\\';

            // Consertar erros de / nos finais da rota - rtrim tira elemento a direita
            $url !== '/' && $url = rtrim($url, '/');

            // 'match' na rota encontrada, com base no parametro
            if (preg_match($pattern, $url, $params)) {
                // esse params retorna um array, sendo o primeiro valor a rota, segundo valor o id passado no parametro sendo assim para pegar apenas o valor de parametro, eu 'corto' o primeiro valor com: 
                array_shift($params);

                // separando controller e metodo, tirando @
                [$controller, $method] = explode('@', $route['action']);

                // Restrigindo metodos
                if (Request::getMethod() !== $route['method']) {
                    Response::json([
                        'error' => 'Method not allowed',
                    ], 405);
                }

                // define para rota encontrada
                $routerFound = true;

                // instanciando o controller com metodo
                $controller = $prefix . $controller;
                $extendedController = new $controller();
                // consigo recuperar os metodos dentro do controller
                $extendedController->$method(new Request, new Response, $params);
            }
        }

        if (!$routerFound) {
            $controller = new \App\Controllers\NotFoundController();
            $controller->index(new Request, new Response);
        }
    }
}
