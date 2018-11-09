<div id="line-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 col-sm-2 col-md-2 col-lg-2">
                <div class="wrap-logo">
                    <a href="/">
                        <img src="<?=$blackLogoPathWithoutResize?>" alt="CMS">
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