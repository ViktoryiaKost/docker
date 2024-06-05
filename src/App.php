<?php
namespace app\src;

class App
{
    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $endpoint = $_SERVER['REQUEST_URI'];

        $controller = new Controller();

        switch ($method) {
            case 'GET':
                if ($endpoint === '/') {
                    $controller->index();
                }elseif ($endpoint === '/users/new'){
                    $controller->showForm();
                }else {
                    $controller->notFound();
                }
                break;

            case 'POST':
                if ($endpoint === '/users/create') {
                    $controller->createUser();
                }
                break;
            default:
                $controller->notFound();
        }
    }
}