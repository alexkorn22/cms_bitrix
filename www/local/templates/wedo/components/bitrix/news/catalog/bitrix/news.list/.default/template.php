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
<? $countCMachines = 1 ; $countBanners   = 1 ; ?>
<?if(empty($arResult["ITEMS"])):?>
    <div>
        <p>
            Кофе машина не найдена !
        </p>
    </div>
<?endif;?>
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
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" onclick="#">
                                    <img src="<?=$arItem["IMG"]["SRC"]?>" alt="<?=$arItem["IMG"]["ALT"]?>" title="<?=$arItem["IMG"]["TITLE"]?>">
                                </a>
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
                            <? if ($arItem['PROPERTIES']['isSale']):?>
                                <div class="rpice">
                                    <p><?= $arItem['PRICE_UAH']?> грн.</p>
                                </div>
                            <? else:?>
                                <div class="rpice price_null">
                                </div>
                            <? endif;?>


                            <div class="btn-more-info">
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" onclick="#" class="btn btn_none-fill btn_small-mobile">Подробнее</a>
                            </div>
                            <? if ($arItem['PROPERTIES']['isRent']):?>
                                <div class="btn-more-info btn-more-info_rent">
                                    <a href="<?=$arItem["leaseLink"]?>"
                                       onclick="#"
                                       class="btn btn_none-fill btn_small-mobile"
                                    >
                                        Аренда
                                    </a>
                                </div>
                            <? endif;?>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Banners -->
            <?if($countCMachines %2 == 0 ):?>
                <?
                    $file = ROOT.$this->GetFolder() .'/banners/'.($countBanners).'.php';
                    if (file_exists($file)) {
                        include $file;
                    }
                    $countBanners++;
                ?>
            <?endif;?>
            <? $countCMachines++; ?>
        <?endforeach;?>
        <!-- -->
    </div>
<!-- -->