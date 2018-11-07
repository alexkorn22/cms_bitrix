<?php


class ViewTemplate
{
    public $componentTemplate;
    protected $_path = '';

    public function __construct(CBitrixComponentTemplate $componentTemplate)
    {
        $this->componentTemplate = $componentTemplate;
        $this->_path = $componentTemplate->GetFolder() . '/views/';
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