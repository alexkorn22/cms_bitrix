<?
$logoWMF = IMAGES_PATH.'/logos/LogoWMF_white.png';
$logoCMS = IMAGES_PATH.'/logos/logoFooter.png';
?>
<div class="overlay">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 d-none d-md-block">
                <div class="wrap-logo">
                    <a href="/">
                        <img class="img-fluid" src="<?=$logoWMF?>" alt="WMF">
                    </a>
                </div>
            </div>
            <div class="col-8 col-sm-8 col-md-4 col-lg-4">
                <div class="wrap-logo">
                    <div class="d-flex justify-content-center align-content-center logo-center">
                        <a href="/" class="logo-center__link">
                            <img class="img-fluid logo-center__img" src="<?=$logoCMS?>" alt="CMS">
                        </a>
                    </div>
                </div>
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
