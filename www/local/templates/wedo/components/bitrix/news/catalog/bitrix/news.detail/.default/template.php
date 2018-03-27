<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
CUtil::InitJSCore(array('fx'));
?>
<div class="container">
	<div  id="<?echo $this->GetEditAreaId($arResult['ID'])?>">
        <div class="row text-center">
            <div><?=$arResult["NAME"]?></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?if($arParams["DISPLAY_PICTURE"]!="N"):?>
                    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
                        <div class="bx-newsdetail-img">
                            <img
                                    src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                                    width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                                    height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                                    alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                                    title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                            />
                        </div>
                    <?endif;?>
                <?endif;?>
            </div>
            <div class="col-md-offset-1 col-md-4">
                <div><b>Характеристики:</b></div>
                <?foreach($arResult['PROPERTIES'] as $prop):?>
                    <?if(!empty($prop['VALUE']) && $prop['SORT'] < 5000 ):?>
                       <div> <?=$prop['NAME']?> : <?=$prop['VALUE']?></div>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <div class="col-md-3">
                <div>  Цена : <?=$arResult['PROPERTIES']['PRICE']['VALUE']?> EUR</div>
                <div>
                    <button class="btn btn-primary btn-lg">
                        Заказать консультацию
                    </button>
                </div>
            </div>
        </div><hr/>
        <div class="row">
            <div class="col-md-6">
                <div>Описание </div>
                <div><?=$arResult['PROPERTIES']['DESCRIPTION']['VALUE']?></div>
            </div>
        </div>
        <hr/>
        <?if($arResult['PROPERTIES']['RENT']['VALUE'] == 'Да'):?>
        <div class="row">
            <div class="col-md-6">
                <div>Аренда </div>
                <div>Возможность арендовать  : <?=$arResult['PROPERTIES']['RENT']['VALUE']?></div>
            </div>
        </div>
        <hr/>
        <?endif;?>
        <?if(!empty($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])):?>
            <div class="row">
                <div class="col-md-12">
                    <div>Документы</div>
                    <?foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $IdDoc):?>
                        <? $file = CFile::GetFileArray($IdDoc); ?>
                        <div>
                            <div class="col-md-6"> <div> Название : <?=$file['FILE_NAME']?> </div></div>
                            <div class="col-md-4"> <div><a target="_blank" href="<?=$file['SRC']?>">Открыть</a></div></div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <hr/>
        <?endif;?>
        <?if(!empty($arResult['PROPERTIES']['VIDEO']['VALUE'][0])):?>
            <div>Видео</div>
            <div class="row">
                <?foreach ($arResult['PROPERTIES']['VIDEO']['VALUE'] as $video):?>
                <div class="col-md-6">
                    <div>Title  :<?=$video['title']?></div>
                    <? if(strpos($video['path'], 'youtube') !== false): ?> <!-- youtube video -->
                        <?php
                            $src         = $video['path'];
                            $youtubeSrc  =  'https://www.youtube.com/embed/';
                            $youtubeSrc .= substr($src, strpos($src, "=") + 1);
                        ?>
                        <iframe width="320" height="240"
                                src="<?=$youtubeSrc?>">
                        </iframe>
                    <?else: ?> <!-- Video from site -->
                        <iframe width="320" height="240"
<!--                                src=""> --><?//=$video['path']?>
                        </iframe>
                    <?endif;?>
                    <div>Description  : <?=$video['desc']?></div>
                </div>
                <?endforeach;?>
            </div>
            <hr/>
        <?endif;?>
        <?if (!empty($arResult['PROPERTIES']['SCHEDULE']['VALUE'])):?>
            <div class="row">
                <div class="col-md-6">
                    <div>График замены запчастей кофемашины</div>
                    <? foreach($arResult['PROPERTIES']['SCHEDULE']['VALUE'] as $id):?>
                        <img src="<?=CFile::GetPath($id);?>" height="500" width="500">
                    <?endforeach;?>
                </div>
            </div>
            <hr/>
        <?endif;?>
	</div>

    <? if($arResult['PROPERTIES']['SIMILAR_PRODUCTS']['VALUE'] != FALSE):?>
    <!-- Similar products component -->
    <?$APPLICATION->IncludeComponent(
        "wedo:similar_products",
        "",
        array(
            "IBLOCK_TYPE" => "catalogs",
            "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
            "PRODUCT_ID" => $arResult['ID']
        ),
        false
    );?>
    <!-- -->
    <hr/>
    <? endif;?>
</div>


<div id="wrap">
    <div class="container-fluid product">
        <div class="row">
            <div class="col">
                <div class="title-product">
                    <div class="title">
                        <p>WMF 1100 S</p>
                    </div>
                    <div class="sub-title">
                        <p>Сделайте первый шаг к профессиональному кофе</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-kartochka d-none d-lg-block">
            <div class="row">
                <div class="col">
                    <ul>
                        <li><a href="#osnovnoe">Основное</a></li>
                        <li><a href="#raschet-okup">Расчёт окупаемости</a></li>
                        <li><a href="#pohozchie-tovari">Похожие товары</a></li>
                        <li><a href="#service-maintenance">Сервисное обслуживание</a></li>
                        <li><a href="#documents">Документы</a></li>
                        <li><a href="#video-product">Видео</a></li>
                        <li><a href="#lease-product">Аренда</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="osnovnoe">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-product">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <div class="product-img-main">
                                    <div class="img-main">
                                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="img-main">
                                        <img src="<?=IMAGES_PATH?>/product/cm2.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="img-main">
                                        <img src="<?=IMAGES_PATH?>/product/cm3.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="img-main">
                                        <img src="<?=IMAGES_PATH?>/product/img_1100s.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2">
                                <div class="product-img-preview">
                                    <div class="preview">
                                        <img src="<?=IMAGES_PATH?>/product/cm1.png" alt="">
                                    </div>
                                    <div class="preview">
                                        <img src="<?=IMAGES_PATH?>/product/cm2.png" alt="">
                                    </div>
                                    <div class="preview">
                                        <img src="<?=IMAGES_PATH?>/product/cm3.png" alt="">
                                    </div>
                                    <div class="preview">
                                        <img src="<?=IMAGES_PATH?>/product/img_1100s.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-product">
                        <div class="product-charact">
                            <p class="title-charact">Характеристики</p>
                            <div class="characteristics">
                                <div class="list-group">
                                    <?foreach($arResult['PROPERTIES'] as $prop):?>
                                        <?if(!empty($prop['VALUE']) && $prop['SORT'] < 5000 ):?>
                                            <p class="item"><span><?=$prop['NAME']?></span><span><?=$prop['VALUE']?></span></p>
                                        <?endif;?>
                                    <?endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="product-price">
                            <p><?=$arResult['PROPERTIES']['PRICE']['VALUE']?> грн. <span>*</span></p>
                        </div>
                        <div class="product-button">
                            <button type="button" class="btn btn_red btn_small-mobile" data-toggle="modal" data-target="#order-consultation">Заказать консультацию</button>
                        </div>
                        <div class="price-comment">
                            <p><span>*</span> Цена за базовую модель 1</p>
                            <p>Цена на другие модели может отличаться</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-description">
                <div class="row">
                    <div class="col">
                        <p class="title">Описание</p>
                        <p class="text toggle-text"><?=$arResult['PROPERTIES']['DESCRIPTION']['VALUE']?></p>
                    </div>
                </div>
            </div>

        </div>

        <div id="accordion-on-mobile">
            <div class="card custom-card">
                <div class="custom-card-header d-block d-md-none">
                    <a href="#raschet-okup" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="raschet-okup">Расчёт окупаемости</a>
                </div>
                <div id="raschet-okup" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title">
                                <h2 class="title d-none d-md-block">Расчёт окупаемости</h2>
                            </div>
                            <div class="section-description">
                                <p class="descr">Воспользуйтесь калькулятором, чтобы спрогнозировать срок окупеаемости кофемашины </p>
                            </div>
                        </div>
                    </div>
                    <div class="calculate-raschet">
                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                                <div class="wrap-input">
                                    <div class="form-group">
                                        <label for="fild-coffee">Цена 1 кг. кофе (грн) *</label>
                                        <input type="text" class="form-control custom-input" id="fild-coffee" value="600">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="wrap-input">
                                    <div class="form-group">
                                        <label for="fild-realizaciy">Цена реализации (грн) *</label>
                                        <input type="text" class="form-control custom-input" id="fild-realizaciy" value="12">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="wrap-input">
                                    <div class="form-group">
                                        <label for="fild-porcii">Количество порций в день *</label>
                                        <input type="text" class="form-control custom-input" id="fild-porcii" value="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="wrap-input srok-okupaemosti">
                                    <div class="form-group">
                                        <label for="fild-srok-okupaemosti">Срок окупаемости (месяцев)</label>
                                        <input type="text" class="form-control custom-input" id="fild-srok-okupaemosti" value="4">
                                    </div>
                                    <p>
                                        <a class="" data-toggle="collapse" href="#open-table-calculate" role="button" aria-expanded="false" aria-controls="open-table-calculate">
                                            Подробнее
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="open-table-calculate">
                        <div class="card card-body custom-card">
                            <div class="wrapp-table">
                                <div class="col-table"><p>Цена кофемашины  (грн)</p> <div>300 000</div></div>
                                <div class="col-table"><p>Себестоимость напитка (грн)</p> <div>5</div></div>
                                <div class="col-table"><p>Цена реализации напитка (грн)</p> <div>12</div></div>
                                <div class="col-table"><p>Количество порций в день</p> <div>100</div></div>
                                <div class="col-table"><p>Сервисное обслуживание в месяц (грн)</p> <div>0</div></div>
                                <div class="col-table"><p class="bold-col-table">Маржинальный доход в месяц (грн)</p> <div class="bold-col-table">2600</div></div>
                                <div class="col-table"><p>Срок окупаемости (месяцев)</p> <div>0</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-table">
                        <p>* Рекомендованные значения для данной модели кофемашины</p>
                    </div>
                </div>
            </div>
            <!-- похожие товары -->
            <? if($arResult['PROPERTIES']['SIMILAR_PRODUCTS']['VALUE'] != FALSE):?>
                <div class="card custom-card">
                <div class="custom-card-header d-block d-md-none">
                    <a href="#pohozchie-tovari" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="pohozchie-tovari">Похожие товары</a>
                </div>
                <div id="pohozchie-tovari" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title">
                                <h2 class="title d-none d-md-block">Похожие товары</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="slider-similar-products">
                                <?$APPLICATION->IncludeComponent(
                                    "wedo:similar_products",
                                    "",
                                    array(
                                        "IBLOCK_TYPE" => "catalogs",
                                        "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
                                        "PRODUCT_ID" => $arResult['ID']
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? endif; ?>
            <div class="card custom-card">
                <div class="custom-card-header d-block d-md-none">
                    <a href="#service-maintenance" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="service-maintenance">Сервисное обслуживание</a>
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
                                <h2 class="title">Сервисное обслуживание кофемашины WMF 1100 S позволяет</h2>
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
                                <p>Сервисное обслуживание кофемашины WMF 1100 S в Coffee Machine Service предполагает комплекс услуг: </p>
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
                </div>
            </div>
            <div class="card custom-card">
                <div class="custom-card-header d-block d-md-none">
                    <a href="#documents" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="documents">График замены запчастей кофемашины модели WMF 1100 S</a>
                </div>
                <div id="documents" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="section-title">
                                <h2 class="title d-none d-md-block">График замены запчастей кофемашины модели WMF 1100 S</h2>
                            </div>
                        </div>
                    </div>
                    <div class="schedule">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="icon">
                                    <img src="<?=IMAGES_PATH?>/file_types/icon-pdf.png" alt="PDF">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="name">
                                    <p>Надо заголовок документы, наверное</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="open">
                                    <a href="#" target="_blank">Открыть</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="section-title">
                                <h2 class="title">Инструкции по эксплуатации WMF 1100 S </h2>
                            </div>
                        </div>
                    </div>
                    <?if(!empty($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])):?>
                        <div class="instructions">
                            <?foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $IdDoc):?>
                                <? $file = CFile::GetFileArray($IdDoc); ?>
                            <div class="row item">
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
                            <?endforeach;?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
            <!-- Videos -->
            <?if(!empty($arResult['PROPERTIES']['VIDEO']['VALUE'][0])):?>
                <div class="card custom-card">
                <div class="custom-card-header d-block d-md-none">
                    <a href="#video-product" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="video-product">Видео о WMF 1100 S</a>
                </div>
                <div id="video-product" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="section-title">
                                <h2 class="title d-none d-md-block">Видео о WMF 1100 S</h2>
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
                                            <div class="video">
                                                <iframe src="<?=$video['path']?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="description-video">
                                            <p><?=$video['desc']?></p>
                                        </div>
                                    </div>
                                 <?endif;?>


                            <? endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="order-consultation">
                                <button type="button" class="btn btn_black btn_small-mobile" data-toggle="modal" data-target="#order-consultation">Заказать консультацию</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? endif; ?>
            <?if($arResult['PROPERTIES']['RENT']['VALUE'] == 'Да'):?>
                <div class="card custom-card">
                <div class="custom-card-header d-block d-md-none">
                    <a href="#lease-product" class="title-item" data-toggle="collapse"  aria-expanded="false" aria-controls="lease-product">Аренда WMF 1100 S</a>
                </div>
                <div id="lease-product" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title">
                                <h2 class="title d-none d-md-block">Аренда WMF 1100 S</h2>
                            </div>
                            <div class="section-description">
                                <p class="descr">Вы можете взять кофемашину WMF 1100 S в аренду на выгодных условиях.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="order-consultation">
                                <button type="button" class="btn btn_red btn_font-small btn_small-mobile">Подробнее об условиях аренды</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?endif;?>

        </div>

    </div>
</div>


<!--Modal order-consultation-->
<div class="modal fade" id="order-consultation" tabindex="-1" role="dialog" aria-labelledby="order-consultation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
        <div class="modal-content custom-modal-content custom-modal-content_bg-red">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title custom-modal-title">Заявка на консультацию</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="consultation" novalidate>
                <div class="modal-body custom-modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" id="name" placeholder="Имя" required>
                        <div class="invalid-feedback">
                            Вы не указали имя!
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" id="phone" placeholder="Телефон" required>
                        <div class="invalid-feedback">
                            Вы не указали телефон!
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" id="city" placeholder="Город" required>
                        <div class="invalid-feedback">
                            Вы не указали город!
                        </div>
                    </div>
                </div>
                <div class="modal-footer custom-modal-footer">
                    <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Заказать консультацию</button>
                </div>
            </form>
        </div>
    </div>
</div>
