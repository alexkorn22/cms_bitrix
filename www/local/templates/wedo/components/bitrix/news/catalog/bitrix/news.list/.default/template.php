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

<div class="row container">
    <div class="container">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	    <div>
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
                <h3>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    <div>
                        Цена : <?=$arResult[$arItem['ID']]['PRICE']?> EUR
                    </div>
                    <div>
                        Количество порций в день : <?=$arResult[$arItem['ID']]['NUM_SERVINGS']?>
                    </div>
                    <div>
                        Производительность в часы пик, порций/час : <?=$arResult[$arItem['ID']]['NUM_SERVINGS_HOUR']?>
                    </div>

                </h3>
            <div class="row">
                <div class="col-xs-5">
                    <div class="bx-newslist-more"><a class="btn btn-primary btn-lg" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo GetMessage("CT_BNL_GOTO_DETAIL")?></a></div>
                </div>
            </div>
	    </div>
	</div>
<?endforeach;?>
</div>
</div>
