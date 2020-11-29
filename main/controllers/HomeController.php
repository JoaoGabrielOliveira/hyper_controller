<?php
namespace Hyper\Controller;

use Hyper\Controller\ApplicationController;

class HomeController extends ApplicationController
{
    public function index()
    {
        echo "Hello World: Index<br/>";
        echo $this->teste;
    }
}

?>