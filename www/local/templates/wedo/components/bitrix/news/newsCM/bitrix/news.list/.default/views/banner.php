<div class="wrap-banner blog col-md-12">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="banner-text">
                    <p class="title-banner email-form-text">Хотите получать свежие обзоры и советы каждый четверг?</p>
                    <p class="descr-banner email-form-text">Подписывайтесь!</p>

                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "email_form",
                        Array(
                            "orderType" => "EMAIL_FORM",
                            "FORM_TYPE"=>"whiteClock"
                        )
                    );
                    ?>

                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="wrap-banner-img">
                    <div class="banner-img">
                        <img src="<?=IMAGES_PATH?>/banners/airplane.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>