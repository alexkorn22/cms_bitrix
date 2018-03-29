<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#service-maintenance" class="title-item" data-toggle="collapse" aria-expanded="false"
           aria-controls="service-maintenance">
            <div>Сервисное обслуживание</div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="service-maintenance" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title">
                    <h2 class="title d-none d-md-block">Сервисное обслуживание</h2>
                </div>
            </div>
        </div>
        <div class="wrap-banner third">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="wrap-banner-img">
                            <div class="banner-img">
                                <img src="<?=IMAGES_PATH?>/banners/banner-img3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 offset-md-1">
                        <div class="banner-text">
                            <p class="descr-banner">Бесплатное сервисное обслуживание при покупке кофемашины!</p>
                            <button type="button" class="btn btn_red btn_font-small btn_small-mobile"><a href="#">Подробнее</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="section-title">
                    <h2 class="title">Сервисное обслуживание кофемашины <?=$arResult["NAME"]?> позволяет</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="service-advantages">
                    <img src="<?=IMAGES_PATH?>/icons/icon-squares.png" alt="advantages">
                    <p><span>Предупреждать поломки</span>, поддерживать работоспособность суперавтомата</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-advantages">
                    <img src="<?=IMAGES_PATH?>/icons/icon-squares.png" alt="advantages">
                    <p><span>Обеспечивать правильную технологию</span> приготовления напитков</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-advantages">
                    <img src="<?=IMAGES_PATH?>/icons/icon-squares.png" alt="advantages">
                    <p><span>Контролировать и нормировать расход</span> кофе, молока, воды</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11">
                <div class="range-of-services">
                    <p>Сервисное обслуживание кофемашины <?=$arResult["NAME"]?> в Coffee Machine Service предполагает комплекс услуг: </p>
                    <ul>
                        <li>визит техника 1-2 раза в месяц</li>
                        <li>проверка технических и технологических параметров</li>
                        <li>проверка и настройка датчиков</li>
                        <li>проверка и настройка калькуляций</li>
                        <li>замена кит-наборов и деталей согласно рекомендаций производителя для сохранения гарантии</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="order-consultation">
                    <button type="button" class="btn btn_red btn_small-mobile" data-toggle="modal" data-target="#order-consultation">Заказать консультацию</button>
                </div>
            </div>
        </div>
        <?if (!empty($arResult['PROPERTIES']['SCHEDULE']['VALUE'])):?>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="section-title">
                        <h2 class="title d-md-block">График замены запчастей кофемашины модели <?=$arResult["NAME"]?></h2>
                    </div>
                </div>
            </div>

            <div class="schedule">
                <? foreach($arResult['SCHEDULE_FILES'] as $file):?>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="icon">
                                <img src="<?=IMAGES_PATH?>/file_types/icon-pdf.png" alt="PDF">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="name">
                                <p><?=$file['FILE_NAME']?></p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="open">
                                <a href="<?=$file['SRC']?>" target="_blank">Открыть</a>
                            </div>
                        </div>
                    </div>
                <?endforeach; ?>
            </div>
        <? endif;?>
    </div>
</div>