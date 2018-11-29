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

    public static function bxInclude($view,$vars = []) {
        global $APPLICATION;
        extract($vars);
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "standard.php",
                "PATH" => "/local/files/includes/{$view}.php"
            )
        );
    }

}