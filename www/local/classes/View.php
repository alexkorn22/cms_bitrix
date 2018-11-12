<?php

class View
{
    protected $_path = '';

    public function __construct()
    {
        $this->_path = ROOT . '/local/templates/wedo/views/';
    }

    public function render($view,$vars = []) {
        $fileView = ROOT . $this->_path . $view . '.php';
        extract($vars);
        ob_start();
        if (is_file($fileView)){
            require $fileView;
        } else {
            echo ("<p>Не найден вид <b>$fileView</b></p>");
        }
        $content = ob_get_clean();
        return $content;
    }

}