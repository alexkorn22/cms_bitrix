<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#video-product" class="title-item" data-toggle="collapse" data-parent="#accordion-on-mobile">
            <div>Видео о <?=$arResult['NAME']?></div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="video-product" class="collapse custom-collapse">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="section-title">
                    <h2 class="title d-none d-md-block">Видео о <?=$arResult["NAME"]?></h2>
                </div>
            </div>
        </div>
        <div class="wrap-videos">
            <div class="row">
                <?foreach ($arResult['PROPERTIES']['VIDEO']['VALUE'] as $video):?>
                    <? if(strpos($video['path'], 'youtube') !== false): ?> <!-- youtube video -->
                        <?php
                        $src         = $video['path'];
                        $youtubeSrc  =  'https://www.youtube.com/embed/';
                        $youtubeSrc .= substr($src, strpos($src, "=") + 1);
                        ?>
                        <div class="col-md-6">
                            <div class="video">
                                <iframe src="<?=$youtubeSrc?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="description-video">
                                <p><?=$video['desc']?></p>
                            </div>
                        </div>
                    <?else: ?> <!-- Video from site -->
                        <div class="col-md-6">
                            <div class="video">
                                <video controls>
                                    <source src="<?=$video['path']?>">
                                </video>
                            </div>
                            <div class="description-video">
                                <p><?=$video['desc']?></p>
                            </div>
                        </div>
                    <?endif;?>


                <? endforeach; ?>
            </div>
        </div>
        <!-- include component modal-->
        <div class="row">
            <div class="col">
                <div class="order-consultation">
                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "catalog_form",
                        Array(
                            'btnColor' =>'black'
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>