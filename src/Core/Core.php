<?php

namespace App\Core;

class Core
{
    public static function dispath(array $routes)
    {
        echo "<pre>";
        print_r($routes);
        echo "</pre>";
    }
}
