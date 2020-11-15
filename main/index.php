<?php
namespace Hyper;
use Hyper\ControllerBase;
use CoffeeCode\Router\Router;
include_once '../vendor/autoload.php';
class Controller extends ControllerBase{}

class HomeController extends Controller
{
    public function index()
    {
        echo "Hello World: Index";
    }
}

class UserController extends Controller
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


$router = new Router("http://localhost/main");

$router->namespace("Hyper");
$router->get("/", "HomeController:index");

$router->group("user");
$router->get("/", "UserController:index");
$router->get("/{id}", "UserController:show");

$router->dispatch();


?>