<div id="<?=$arParams['FORM_ID']?>_msg">
    <?
        $clockImgSrc = IMAGES_PATH.'/clock.png';
        if($arParams['FORM_TYPE'] == 'whiteClock'){
            $clockImgSrc = IMAGES_PATH.'/clockWhite.png';
        }
    ?>
    <div id="thankMessage">
        <img src="<?=$clockImgSrc?>" class="contacts-icons" alt="">
        <p>Спасибо, мы свяжемся <br>с вами в течении <br>рабочего дня</p>
    </div>
</div>

<div id="<?=$arParams['FORM_ID']?>_loader">
    <div class="loader"></div>
</div>