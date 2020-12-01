<?php
namespace Hyper;
class ControllerBase
{
    protected $controller;

    public function render($view, $data = null):void
    {
        $this->getNameView();

        $this->includeHelper();
        $this->includeView($view);
    }

    protected function getNameView():void
    {
        $class_name = strtolower(basename(str_replace("\\", DIRECTORY_SEPARATOR, get_called_class())));
        $pattern = '/(controller)/';
        $this->controller = preg_replace($pattern,'',$class_name);
    }

    protected function includeView(string $view):void
    {
        $view_path = dirname(__DIR__) . "\\main\\views\\$this->controller\\$view.*";
        $files = glob($view_path);
        $files[0] ?? include_once $files[0];
    }

    protected function includeHelper():void
    {
        $view_path = dirname(__DIR__) . "\\main\\helper\\" . $this->controller . "Helper.php";
        $files = glob($view_path);
        $files[0] ?? include_once $files[0];
    }
}