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

?>
<div class="bx-newslist">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
<? $countCMachines = 1 ; $countBanners   = 1 ; $price=0; ?>

<!-- first block -->
    <div class="container-fluid catalog">
        <!-- products section -->
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="wrap-product">
                <div class="row">
                    <div class="col-12 order-1 d-block d-lg-none">
                        <div class="wrap-title-charact">
                            <div class="title-product">
                                <?=$arItem["NAME"]?>
                            </div>
                            <div class="sub-title-product">
                                <?=$arItem["SLOGAN"]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 order-2 order-lg-1 col-md-6 col-lg-3">
                        <div class="wrap-img">
                            <div class="img-product">
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 order-4 order-lg-2 col-md-12 col-lg-6">
                        <div class="wrap-title-charact">
                            <div class="title-product d-none d-lg-block">
                                <?=$arItem["NAME"]?>
                            </div>
                            <div class="sub-title-product d-none d-lg-block">
                                <?=$arItem["SLOGAN"]?>
                            </div>
                            <div class="characteristics">
                                <div class="list-group">
                                    <?foreach($arItem['PROPERTIES'] as $prop):?>
                                        <?if($prop['CODE'] == 'PRICE'){$price = $prop['VALUE'];}?>
                                        <?if(!empty($prop['VALUE']) && $prop['SORT'] < 5000 ):?>
                                            <p class="item"> <span><?=$prop['NAME']?> </span><span> <?=$prop['VALUE']?></span></p>
                                        <?endif;?>
                                    <?endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 order-3 order-lg-3 col-md-6 col-lg-3">
                        <div class="wrap-price">
                            <div class="rpice">
                                <p><?=$price?> грн.</p>
                            </div>
                            <div class="btn-more-info">
                                <button type="button" class="btn btn_none-fill btn_small-mobile"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Banners -->
            <?if($countCMachines %2 == 0 ):?>
                        <?  include ROOT.$this->GetFolder() .'/banners/'.($countBanners).'.php' ?>
                <? $countBanners++; ?>
            <?endif;?>
            <? $countCMachines++; ?>
        <?endforeach;?>
        <!-- -->
    </div>
<!-- -->