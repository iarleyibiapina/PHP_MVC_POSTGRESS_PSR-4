<?php

namespace APP\Controllers;

use App\Http\Request;
use App\Http\Response;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        echo "Welcome";
    }

    public function show(Request $request, Response $response, array $params)
    {
        echo "Welcome";
    }

    public function create(Request $request, Response $response)
    {
        echo "Welcome";
    }
    public function store(Request $request, Response $response)
    {
        echo "Welcome";
    }
    public function edit(Request $request, Response $response, array $params)
    {
        echo "Welcome";
    }
    public function update(Request $request, Response $response, array $params)
    {
        echo "Welcome";
    }
    public function delete(Request $request, Response $response, array $params)
    {
        echo "Welcome";
    }
}
