<?php

namespace App\Utils;

class RenderView
{
    // instanciando a view
    public static function render(string $view, array $args = [])
    {
        // transforma array associativo em 'chave para nome da variavel'
        extract($args);

        if (file_exists(__DIR__ . "/../Views/{$view}.php")) {
            require_once __DIR__ . "/../Views/{$view}.php";
        } else {
            throw new \Exception("View {$view} nao existe");
        }
    }
}
