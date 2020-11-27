<?php
namespace Hyper;
class ControllerBase
{
    protected $controller;

    public function render($view, $data = null)
    {
        $this->getNameView();
        $view_path = dirname(__DIR__) . "\\main\\views\\$this->controller\\$view.*";
        $view_path = glob($view_path)[0];
        include_once $view_path;
    }

    protected function getNameView()
    {
        $class_name = strtolower(basename(str_replace("\\", DIRECTORY_SEPARATOR, get_called_class())));
        $pattern = '/(controller)/';
        $this->controller = preg_replace($pattern,'',$class_name);
    }
}