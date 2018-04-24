<div class="wrap-banner blog col-md-12">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="banner-text">
                    <p class="title-banner">Хотите получать свежие обзоры и советы каждый четверг?</p>
                    <p class="descr-banner">Подписывайтесь!</p>

                    <form class="subscribe check-valid" novalidate>
                        <div class="row"><?=bitrix_sessid_post()?>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group custom-form-group">
                                    <input type="email" class="form-control custom-input" id="phone" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Вы не указали Email!
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <button type="submit" class="btn btn_red btn_small-mobile btn_font-small">Подписаться</button>
                            </div>
                        </div>
                    </form>

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