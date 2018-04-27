<div class="f-contact">
    <div class="wrap-social-icons footer">
        <div class="social-icons footer">
            <a class="phone d-none d-sm-block" href="tel:<?=App::$config->telephone?>"><?=App::$config->telephone?></a>
            <a class="email d-none d-sm-block" href="mailto:<?=App::$config->email?>"><?=App::$config->email?></a>
            <div class="icon">
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