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
        // return $response::json([
        //     'name' => "foo",
        // ]);

        return Response::json([
            // 'data' => UserService::findById($params[0]),
            'msg' => 'fromView',
            'data' => UserService::getAll(),
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

        $user = UserService::getById($params[0]);
        if (isset($user['error'])) {
            return Response::json([
                'error' => $user['error'],
            ]);
        }
        if (isset($user['error_db'])) {
            return Response::json([
                'error' => $user['error_db'],
            ]);
        }

        return Response::json([
            // 'data' => UserService::findById($params[0]),
            'msg' => 'fromView',
            'data' => $user,
        ]);
    }

    public function create(Request $request, Response $response)
    {
        return Response::redirect('http://localhost/');
    }
    public function store(Request $request, Response $response)
    {
        return Response::json([
            'data' => $request::body(),
        ]);
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
