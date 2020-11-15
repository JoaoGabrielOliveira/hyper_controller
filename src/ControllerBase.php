<?php
namespace Hyper;
class ControllerBase
{
    protected $view;

    public function render($view, $data = null)
    {
        $this->getNameView();
        $view_path = dirname(__DIR__) . "\\main\\views\\$this->view\\$view.php";
        if (file_exists($view_path))
        {
            echo "Arquivo existe: \"$view_path\"\n";
            include $view_path;
        }
        else  echo "Não existe \"$view_path\"";
    }

    protected function getNameView()
    {
        $class_name = strtolower(basename(str_replace("\\", DIRECTORY_SEPARATOR, get_called_class())));
        $pattern = '/(controller)/';
        $this->view = preg_replace($pattern,'',$class_name);
    }
}