<?
/*
 <?
// подключение служебной части пролога
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

// подключение визуальной части пролога
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");

// проверка что пролог подключен
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>
Содержимое страницы
<?

// подключение визуальной части эпилога
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_before.php");

// подключение служебной части эпилога
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
 */

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

//***** AUTOLOAD CLASSES *****
$pathArtorgClasses = '/local/classes/';
$arClasses = getArClasses($pathArtorgClasses);
$pathArtorgClasses = '/local/classes/core/';
$arClasses = getArClasses($pathArtorgClasses,$arClasses);

CModule::AddAutoloadClasses(
    '', // не указываем имя модуля
    // массив: ключ - имя класса, значение - путь относительно корня сайта к файлу с классом
    $arClasses
);


/**
 * Функция возвращает массив для добавления классов в Автолоад
 * @param $path - путь к папке с классами
 * @return array - ключ - имя класса, значение - путь относительно корня сайта к файлу с классом
 */

function getArClasses($path,$arResult = array()){
    $scandir = scandir($_SERVER["DOCUMENT_ROOT"].$path);
    if (empty($scandir))
        return $arResult;
    foreach (scandir($_SERVER["DOCUMENT_ROOT"].$path) as $nameFile ) {
        if (substr($nameFile,-4) <> '.php') {
            continue;
        }
        $nameClass = substr($nameFile, 0, -4);
        $arResult[$nameClass] = $path . $nameFile;
    }
    return $arResult;
}
App::Init();
include_once $_SERVER['DOCUMENT_ROOT'] . '/local/files/events.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/local/files/functions.php';


?>
