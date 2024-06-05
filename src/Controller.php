<?php
namespace app\src;
class Controller
{
    public function index()
    {
        require __DIR__ . '/views/index.php';
    }

    public function showForm()
    {
        require __DIR__ . '/views/form.php';
    }

    public function createUser()
    {
        $email= $_POST['email'];
        $name= $_POST['name'];
        $gender= $_POST['gender'];
        $status= $_POST['status'];
        if ($email && $name && $gender && $status) {

            echo $email . "\n" . $name . "\n". $gender . "\n". $status;

        } else {
            $response = [
                'status' => 'error',
                'message' => 'Missing required fields'
            ];
            echo json_encode($response);
        }


    }

    public function notFound()
    {
        http_response_code(404);
        require __DIR__ . '/views/404.php';
    }

}