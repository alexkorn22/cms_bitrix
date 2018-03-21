<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH .'/images/favicon.png" type="image/x-icon">');
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/bootstrap/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/jqueryui/jquery-ui.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/slick/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/slick/slick-theme.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/dist/main.css');

    if (App::$config->debug) {
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/libs/dump.css');
    }
    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/jquery-3.3.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/bootstrap.bundle.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/jquery-ui.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/libs/slick.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/dist/main.js');

     ?>
	<title><?$APPLICATION->ShowTitle()?></title
</head>
<body>
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
                        <img src="<?=IMAGES_PATH?>/logo.png" alt="CMS">
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
                    <h1 class="title-header">
                        Кофемашины <br><span>WMF</span> в Украине
                    </h1>
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
                <div class="col col-sm-2 col-md-2 col-lg-2">
                    <div class="wrap-logo">
                        <img src="<?=IMAGES_PATH?>/logo_black.png" class="d-none d-sm-block" alt="CMS">
                        <img src="<?=IMAGES_PATH?>/logo-small.png" class="d-block d-sm-none" alt="CMS">
                    </div>
                </div>
                <div class="col col-sm-10 col-md-10 col-lg-10">
                    <div class="wrap-social-icons normal-top">
                        <div class="social-icons">
                            <a class="phone" href="tel:<?=App::$config->telephone?>"><?=App::$config->telephone?></a>
                            <a href="<?=App::$config->facebookLink?>" class="social facebook"></a>
                            <a href="<?=App::$config->instagramLink?>" class="social insta"></a>
                            <a href="<?=App::$config->youtubeLink?>" class="social youtube"></a>
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
                    <img src="<?=IMAGES_PATH?>/logo.png" class="d-none d-sm-block" alt="CMS">
                    <img src="<?=IMAGES_PATH?>/logo-small.png" class="d-block d-sm-none" alt="CMS">
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
                            <a class="phone" href="tel:<?=App::$config->telephone?>"><?=App::$config->telephone?></a>
                            <a href="<?=App::$config->facebookLink?>" class="social facebook"></a>
                            <a href="<?=App::$config->instagramLink?>" class="social insta"></a>
                            <a href="<?=App::$config->youtubeLink?>" class="social youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?else:?>
    <div id="main">
    <header>
        <div class="container-line-menu">
            <div id="line-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-sm-2 col-md-2 col-lg-2">
                            <div class="wrap-logo">
                                <img src="<?=IMAGES_PATH?>/logo_black.png" class="d-none d-sm-block" alt="CMS">
                                <img src="<?=IMAGES_PATH?>/logo-small.png" class="d-block d-sm-none" alt="CMS">
                            </div>
                        </div>
                        <div class="col col-sm-10 col-md-10 col-lg-10">
                            <div class="wrap-social-icons normal-top">
                                <div class="social-icons">
                                    <a class="phone black d-none d-sm-block" href="tel:<?=App::$config->telephone?>"><?=App::$config->telephone?></a>
                                    <a href="<?=App::$config->facebookLink?>" class="social facebook"></a>
                                    <a href="<?=App::$config->instagramLink?>" class="social insta"></a>
                                    <a href="<?=App::$config->youtubeLink?>" class="social youtube"></a>
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
                            <img src="<?=IMAGES_PATH?>/logo.png" class="d-none d-sm-block" alt="CMS">
                            <img src="<?=IMAGES_PATH?>/logo-small.png" class="d-block d-sm-none" alt="CMS">
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
                                    <a class="phone" href="tel:<?=App::$config->telephone?>"><?=App::$config->telephone?></a>
                                    <a href="<?=App::$config->facebookLink?>" class="social facebook"></a>
                                    <a href="<?=App::$config->instagramLink?>" class="social insta"></a>
                                    <a href="<?=App::$config->youtubeLink?>" class="social youtube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<? endif;?>
<div id="wrap">
