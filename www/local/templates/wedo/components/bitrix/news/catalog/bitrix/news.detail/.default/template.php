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
$documentsExist = !empty($arResult['PROPERTIES']['DOCUMENTS']['VALUE']);
$videosExist    = !empty($arResult['PROPERTIES']['VIDEO']['VALUE'][0]);
$isRent         = $arResult['PROPERTIES']['RENT']['VALUE_XML_ID'] == 'RENT_TRUE';
?>
    <div class="container-fluid product">
        <div class="row">
            <div class="col">
                <div class="title-product">
                    <div class="title">
                        <h1><?=$arResult['TITLE_H1']?></h1>
                    </div>
                    <div class="sub-title">
                        <p><?=$arResult['PROPERTIES']['SLOGAN']['VALUE']?></p>
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
                        <?if($documentsExist):?>
                            <li><a href="#documents">Документы</a></li>
                        <? endif; ?>
                        <?if($videosExist):?>
                            <li><a href="#video-product">Видео</a></li>
                        <? endif; ?>
                        <?if($isRent):?>
                            <li><a href="#lease-product">Аренда</a></li>
                        <? endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- require main oprions -->
        <?  require ROOT.$this->GetFolder() .'/views/main_options.php' ?>

        <div id="accordion-on-mobile">
            <!-- Расчёт окупаемости -->
            <?  require ROOT.$this->GetFolder() .'/views/calculations.php' ?>

            <? if($arResult['PROPERTIES']['SIMILAR_PRODUCTS']['VALUE'] != FALSE):?>
            <!-- похожие товары -->
                <?  require ROOT.$this->GetFolder() .'/views/similar_products.php' ?>
            <? endif; ?>
            <!-- Сервисное обслуживание -->
            <?  require ROOT.$this->GetFolder() .'/views/services.php' ?>

            <!-- Дукоменты -->
            <?if($documentsExist):?>
                <?  require ROOT.$this->GetFolder() .'/views/documents.php' ?>
            <? endif; ?>

            <!-- Videos -->
            <?if($videosExist):?>
                <?  require ROOT.$this->GetFolder() .'/views/videos.php' ?>
            <? endif; ?>

            <!-- Аренда -->
            <?if($isRent):?>
                <?  require ROOT.$this->GetFolder() .'/views/arenda.php' ?>
            <?endif;?>
        </div>

    </div>

<!--Modal order-consultation-->