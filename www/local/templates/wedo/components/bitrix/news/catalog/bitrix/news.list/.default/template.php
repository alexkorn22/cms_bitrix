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
<?endif;?><br/>

    <? $countCMachines = 1 ;
       $countBanners   = 1 ; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="row">
        <div class="container">
	        <div class="col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?if($arParams["DISPLAY_PICTURE"]!="N"):?>
                        <?if (is_array($arItem["PREVIEW_PICTURE"])):?>
                            <div>
                                <img
                                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                    />
                            </div>
                        <?endif;?>
                    <?endif;?>
            </div>
	        <div class="col-md-4">
                    <div class="row">
                        <div>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                            <div>
                                Цена : <?=$arResult[$arItem['ID']]['PRICE']?> EUR
                            </div>
                        </div>
                         <div class="col-xs-5">
                              <div class="bx-newslist-more"><a class="btn btn-primary btn-lg" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo GetMessage("CT_BNL_GOTO_DETAIL")?></a></div>
                          </div>
                    </div>
            </div>
        </div>
    </div>
    <?if($countCMachines %2 == 0 ):?>
        <div class="row text-center">
            <div class="col-md-12">
            <?  include ROOT.$this->GetFolder() .'/banners/'.($countBanners).'.php' ?>
            </div>
        </div>
        <? $countBanners++; ?>
    <?endif;?>
    <? $countCMachines++; ?>
<?endforeach;?>