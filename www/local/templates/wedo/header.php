<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/bootstrap/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/jqueryui/jquery-ui.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/dist/main.css');

    if (App::$config->debug) {
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/dump.css');
    }
    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/jquery-3.3.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/jquery-ui.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/dist/main.js');


     ?>
	<title><?$APPLICATION->ShowTitle()?></title>
    
    
</head>
<body>

<?$APPLICATION->ShowPanel();?>
<div id="main">
<header>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "blue_tabs",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "top",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "Y",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "blue_tabs"
        ),
        false
    );?>
</header>
<div id="wrap">
	