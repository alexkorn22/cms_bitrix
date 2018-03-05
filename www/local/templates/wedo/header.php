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


	