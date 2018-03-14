<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');

    // JS
//    CJSCore::Init(array("jquery"));
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');


     ?>
	<title><?$APPLICATION->ShowTitle()?></title>
    
    
</head>
<body>
<?$APPLICATION->ShowPanel();?>
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

	