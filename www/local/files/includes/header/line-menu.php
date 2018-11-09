<?
$logoWMF = IMAGES_PATH.'/logos/LogoWMF.png';
$logoCMS = IMAGES_PATH.'/logos/LogoCMS.png';
?>
<div id="line-menu">
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
                            <img class="img-fluid logo-center__img" src="<?=$logoCMS?>" alt="WMF">
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                <div class="wrap-social-icons normal-top">
                    <div class="social-icons">
                        <a class="phone black" href="tel:<?=str_replace(' ','',App::$config->telephone)?>">
                            <span class="phone__span"><?=App::$config->telephone?></span>
                            <span class="phone__icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </a>

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