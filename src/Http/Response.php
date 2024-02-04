<?php

namespace App\Http;

class Response
{
    // response em json
    public static function json(array $data = [], int $statusCode = 200, array $headers = ['Content-Type' => 'application/json'])
    {
        http_response_code(200);

        // echo "<pre>";
        // var_dump($data['data']);
        // echo "</pre>";
        foreach ($data['data'][0] as $key => $value) {
            header($key . ":" . $value);
        }

        echo json_encode($data);
    }
    public static function setHeaders(array $headers = ['Content-Type' => 'application/json'])
    {
        foreach ($headers as $key => $value) {
            header($key . ":" . $value);
        }
    }
    public static function setStatusCode(int $statusCode = 200)
    {
        http_response_code($statusCode);
    }
    public static function redirect(string $url)
    {
        header("Location: " . $url);
    }
}
