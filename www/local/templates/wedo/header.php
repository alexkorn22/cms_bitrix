<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
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

    $logo          = new ImageResize(IMAGES_PATH.'/logo.png');
    $blackLogo     = new ImageResize(IMAGES_PATH.'/logo_black.png');
    $logoPath      = $logo->getLink(ImageResize::SIZE_LOGO);
    $blackLogoPath = $blackLogo->getLink(ImageResize::SIZE_LOGO);

    ?>

	<title><?$APPLICATION->ShowTitle()?></title>
    <? if (!App::$config->debug):?>
        <?=App::$config->scriptYandexMetrica;?>
    <?endif;?>
</head>
<body>
<div class="preloader-wrap">
    <div class="percentage" id="precent"></div>
</div>
<div id="main">
<?$APPLICATION->ShowPanel();?>
<? if($APPLICATION->GetCurPage() == '/'):?>
    <section id="header-main">
    <div class="container-fluid">
        <div id='container-video' class="d-none d-sm-block">
            <div class="mask-color"></div>
            <video src="<?=IMAGES_PATH?>/cms_video1.mp4" autoplay muted loop></video>
        </div>
        <div class="top-fixed-line">
            <div class="row top-line">
                <div class="col">
                    <div class="wrap-logo">
                        <a href="/">
                            <img src="<?=$logoPath?>" alt="CMS">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="burger-menu">
                        <div class="navigation">
                            <div class="burger">
                                <span class="burger_global top_bun"></span>
                                <span class="burger_global patty"></span>
                                <span class="burger_global bottom_bun"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-line">
            <div class="col-12 col-lg-11">
                <div class="wrap-title">
                    <p class="title-header">
                        Кофемашины <br><span>WMF</span> в Украине
                    </p>
                </div>
            </div>
            <div class="col-lg-1 d-none d-lg-block">
                <div class="scroll-indicator">
                    <img src="<?=IMAGES_PATH?>/mouse.png" alt="scroll">
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container-line-menu">
    <div id="line-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 col-sm-2 col-md-2 col-lg-2">
                    <div class="wrap-logo">
                        <a href="/">
                            <img src="<?=$blackLogoPath?>" alt="CMS">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-10 col-md-10 col-lg-10">
                    <div class="wrap-social-icons normal-top">
                        <div class="social-icons">
                            <a class="phone black" href="tel:<?=str_replace(' ','',App::$config->telephone)?>"><?=App::$config->telephone?></a>
                            <? if(!empty(App::$config->facebookLink)):?>
                                <a href="<?=App::$config->facebookLink?>" class="social facebook  d-none d-sm-block"></a>
                            <?endif;?>
                            <? if(!empty(App::$config->instagramLink)):?>
                                <a href="<?=App::$config->instagramLink?>" class="social insta  d-none d-sm-block"></a>
                            <?endif;?>
                            <? if(!empty(App::$config->youtubeLink)):?>
                                <a href="<?=App::$config->youtubeLink?>" class="social youtube  d-none d-sm-block"></a>
                            <?endif;?>
                            <div class="burger-menu">
                                <div class="navigation after-head">
                                    <div class="burger after-head">
                                        <span class="burger_global top_bun black"></span>
                                        <span class="burger_global patty black"></span>
                                        <span class="burger_global bottom_bun black"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay">
        <div class="container-fluid">
            <div class="row">
                <div class="wrap-logo">
                    <??>
                    <a href="/">
                        <img src="<?=$logoPath?>" alt="CMS">
                    </a>
                </div>
                <div class="burger-menu in-menu">
                    <div class="navigation">
                        <div class="burger">
                            <span class="burger_global top_bun"></span>
                            <span class="burger_global patty"></span>
                            <span class="burger_global bottom_bun"></span>
                        </div>
                    </div>
                </div>
                <div class="wrap-menu-item">
                    <div class="col">
                        <div class="left-menu">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "left",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "left"
                                ),
                                false
                            );?>
                        </div>
                    </div>
                    <div class="vr d-none d-sm-block">&nbsp;</div>
                    <div class="col">
                        <div class="right-menu">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
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
                                    "COMPONENT_TEMPLATE" => "top",
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
                <div class="wrap-social-icons">
                    <div class="col col-lg-6">
                        <div class="social-icons">
                            <a class="phone" href="tel:<?=str_replace(' ','',App::$config->telephone)?>"><?=App::$config->telephone?></a>
                            <? if(!empty(App::$config->facebookLink)):?>
                                <a href="<?=App::$config->facebookLink?>" class="social facebook"></a>
                            <?endif;?>
                            <? if(!empty(App::$config->instagramLink)):?>
                                <a href="<?=App::$config->instagramLink?>" class="social insta"></a>
                            <?endif;?>
                            <? if(!empty(App::$config->youtubeLink)):?>
                                <a href="<?=App::$config->youtubeLink?>" class="social youtube"></a>
                            <?endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?else:?>
    <header>
        <div class="container-line-menu">
            <div id="line-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 col-sm-2 col-md-2 col-lg-2">
                            <div class="wrap-logo">
                                <a href="/">
                                    <img src="<?=$blackLogoPath?>" alt="CMS">
                                </a>
                            </div>
                        </div>
                        <div class="col col-sm-10 col-md-10 col-lg-10">
                            <div class="wrap-social-icons normal-top">
                                <div class="social-icons">
                                    <a class="phone black" href="tel:<?=str_replace(' ','',App::$config->telephone)?>"><?=App::$config->telephone?></a>

                                    <? if(!empty(App::$config->facebookLink)):?>
                                        <a href="<?=App::$config->facebookLink?>" class="social facebook  d-none d-sm-block"></a>
                                    <?endif;?>
                                    <? if(!empty(App::$config->instagramLink)):?>
                                        <a href="<?=App::$config->instagramLink?>" class="social insta  d-none d-sm-block"></a>
                                    <?endif;?>
                                    <? if(!empty(App::$config->youtubeLink)):?>
                                        <a href="<?=App::$config->youtubeLink?>" class="social youtube  d-none d-sm-block"></a>
                                    <?endif;?>

                                    <div class="burger-menu">
                                        <div class="navigation after-head">
                                            <div class="burger after-head">
                                                <span class="burger_global top_bun black"></span>
                                                <span class="burger_global patty black"></span>
                                                <span class="burger_global bottom_bun black"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wrap-logo">
                            <a href="/">
                                <img src="<?=$logoPath?>" alt="CMS">
                            </a>
                        </div>
                        <div class="burger-menu in-menu">
                            <div class="navigation">
                                <div class="burger small-top">
                                    <span class="burger_global top_bun"></span>
                                    <span class="burger_global patty"></span>
                                    <span class="burger_global bottom_bun"></span>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-menu-item">
                            <div class="col">
                                <div class="left-menu">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "left",
                                        array(
                                            "ALLOW_MULTI_SELECT" => "N",
                                            "CHILD_MENU_TYPE" => "left",
                                            "DELAY" => "N",
                                            "MAX_LEVEL" => "1",
                                            "MENU_CACHE_GET_VARS" => array(
                                            ),
                                            "MENU_CACHE_TIME" => "3600",
                                            "MENU_CACHE_TYPE" => "Y",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "ROOT_MENU_TYPE" => "left",
                                            "USE_EXT" => "N",
                                            "COMPONENT_TEMPLATE" => "left"
                                        ),
                                        false
                                    );?>
                                </div>
                            </div>
                            <div class="vr d-none d-sm-block">&nbsp;</div>
                            <div class="col">
                                <div class="right-menu">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "top",
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
                                            "COMPONENT_TEMPLATE" => "top",
                                        ),
                                        false
                                    );?>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-social-icons">
                            <div class="col col-lg-6">
                                <div class="social-icons">
                                    <a class="phone" href="tel:<?=str_replace(' ','',App::$config->telephone)?>"><?=App::$config->telephone?></a>
                                    <? if(!empty(App::$config->facebookLink)):?>
                                        <a href="<?=App::$config->facebookLink?>" class="social facebook "></a>
                                    <?endif;?>
                                    <? if(!empty(App::$config->instagramLink)):?>
                                        <a href="<?=App::$config->instagramLink?>" class="social insta"></a>
                                    <?endif;?>
                                    <? if(!empty(App::$config->youtubeLink)):?>
                                        <a href="<?=App::$config->youtubeLink?>" class="social youtube"></a>
                                    <?endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
