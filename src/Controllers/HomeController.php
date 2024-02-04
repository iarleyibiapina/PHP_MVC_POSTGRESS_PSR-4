<?php

namespace APP\Controllers;

use App\Http\Request;
use App\Http\Response;
use App\Services\UserService;
use App\Utils\RenderView;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        return $response::json([
            'name' => "foo",
        ]);
    }

    public function show(Request $request, Response $response, array $params)
    {
        //     try {
        //         // nome da view, variaveis que vao ser exibidas na view
        //         return RenderView::render('home', [
        //             'title' => "titulo gerado por meio do php",
        //             'id' => $params[0],
        //             'data' => [
        //                 'name' => 'foo',
        //                 'last_name' => 'bar',
        //             ]
        //         ]);
        //     } catch (\Exception $err) {
        //         return $response::json([
        //             'error' => $err->getMessage(),
        //         ], 400);
        //     }

        return Response::json([
            // 'data' => UserService::findById($params[0]),
            'msg' => 'fromView',
            'data' => UserService::getAll(),
        ]);
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
