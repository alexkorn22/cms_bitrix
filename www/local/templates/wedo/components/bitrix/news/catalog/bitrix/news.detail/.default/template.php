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
    <div class="container-fluid product">
        <div class="row">
            <div class="col">
                <div class="title-product">
                    <div class="title">
                        <p><?=$arResult["NAME"]?></p>
                    </div>
                    <div class="sub-title">
                        <p><?=$arResult['PROPERTIES']['TAG']['VALUE']?></p>
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
        <!-- include main oprions -->
        <?  include ROOT.$this->GetFolder() .'/sections/main_options.php' ?>

        <div id="accordion-on-mobile">
            <!-- Расчёт окупаемости -->
            <?  include ROOT.$this->GetFolder() .'/sections/calculations.php' ?>

            <? if($arResult['PROPERTIES']['SIMILAR_PRODUCTS']['VALUE'] != FALSE):?>
            <!-- похожие товары -->
                <?  include ROOT.$this->GetFolder() .'/sections/similar_products.php' ?>
            <? endif; ?>
            <!-- Сервисное обслуживание -->
            <?  include ROOT.$this->GetFolder() .'/sections/services.php' ?>
            <?if(!empty($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])):?>
            <!-- Дукоменты -->
                <?  include ROOT.$this->GetFolder() .'/sections/documents.php' ?>
            <? endif; ?>

            <?if(!empty($arResult['PROPERTIES']['VIDEO']['VALUE'][0])):?>
                <!-- Videos -->
                <?  include ROOT.$this->GetFolder() .'/sections/videos.php' ?>
            <? endif; ?>

            <?if($arResult['PROPERTIES']['RENT']['VALUE'] == 'Да'):?>
                <!-- Аренда -->
                <?  include ROOT.$this->GetFolder() .'/sections/arenda.php' ?>
            <?endif;?>
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
