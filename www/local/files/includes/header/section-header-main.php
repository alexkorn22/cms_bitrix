<?

$logoWMF = IMAGES_PATH.'/logos/LogoWMF_white.png';
$logoCMS = IMAGES_PATH.'/logos/logoFooter.png';

?>
<section id="header-main">
    <div class="container-fluid">
        <div id='container-video' class="d-none d-sm-block">
            <div class="mask-color"></div>
            <video src="<?=IMAGES_PATH?>/cms_video1.mp4" autoplay muted loop></video>
        </div>
        <div class="top-fixed-line">
            <div class="row top-line">
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