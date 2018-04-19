<div id="<?=$arParams['form']?>_msg">
    <?
        $clockImgSrc = IMAGES_PATH.'/clock.png';
        if($arParams['form'] == 'vertical' ||$arParams['form'] == 'horizontal' ){
            $clockImgSrc = IMAGES_PATH.'/clockWhite.png';
        }
    ?>
    <div id="thankMessage">
        <img src="<?=$clockImgSrc?>" class="contacts-icons" alt="">
        <p>Спасибо, мы свяжемся <br>с вами в течении <br>рабочего дня</p>
    </div>
</div>

<div id="<?=$arParams['form']?>_loader">
    <div class="loader"></div>
</div>