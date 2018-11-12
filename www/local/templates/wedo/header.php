<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
    <? App::Header()?>
    <? if (!App::$config->debug):?>
    <?=App::$config->scriptGoogleAnalytics;?>
    <?endif;?>
    <?php
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH .'/images/favicon.png" type="image/x-icon">');
    Asset::getInstance()->addString('<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');

    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/bootstrap/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/jqueryui/jquery-ui.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/slick/slick.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/slick/slick-theme.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/dist/main.css');

    if (App::$config->debug) {
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/dump.css');
    }
    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/jquery-3.3.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/jquery-ui.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/slick.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/dist/main.js');
    Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    ?>

	<title><?$APPLICATION->ShowTitle()?></title>
    <? if (!App::$config->debug):?>
        <?=App::$config->scriptYandexMetrica;?>
    <?endif;?>
</head>
<body>

<div id="main">
<?$APPLICATION->ShowPanel();?>
<? if($APPLICATION->GetCurPage() == '/'):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "standard.php",
            "PATH" => "/local/files/includes/header/section-header-main.php"
        )
    );?>
    <div class="container-line-menu">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "standard.php",
                "PATH" => "/local/files/includes/header/line-menu.php"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "standard.php",
                "PATH" => "/local/files/includes/header/overlay-menu.php"
            )
        );?>
</div>
<?else:?>
    <header>
        <div class="container-line-menu">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "standard.php",
                    "PATH" => "/local/files/includes/header/line-menu.php"
                )
            );?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "standard.php",
                    "PATH" => "/local/files/includes/header/overlay-menu.php"
                )
            );?>
        </div>
    </header>
<? endif;?>

<?


// breadcrumb:
$pagesWithoutBCrumb = [
    '/'
];
$currPage           = $APPLICATION->GetCurPage();
$page_404           =  defined('ERROR_404') && ERROR_404=='Y' ;

if(!(in_array($currPage,$pagesWithoutBCrumb) || $page_404)): ?>
    <div class="container-fluid">
        <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "",
        Array()
    );?>
    </div>
<?endif;?>





<div id="wrap">
