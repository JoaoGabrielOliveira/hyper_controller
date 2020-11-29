<?php
namespace Hyper\Controller;

use Hyper\Controller\ApplicationController;

class UserController extends ApplicationController
{
    public function index()
    {
        echo "Hello World: User:index";
    }

    public function show($data)
    {
        $this->render('show', $data);
    }
}

?>