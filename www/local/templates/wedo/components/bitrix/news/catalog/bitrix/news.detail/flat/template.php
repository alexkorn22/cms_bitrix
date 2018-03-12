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
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
$this->addExternalCss("/bitrix/css/main/font-awesome.css");
$this->addExternalCss($this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');
CUtil::InitJSCore(array('fx'));
?>
<div class="bx-newsdetail">
	<div class="bx-newsdetail-block" id="<?echo $this->GetEditAreaId($arResult['ID'])?>">

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

	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3 class="bx-newsdetail-title"><?=$arResult["NAME"]?></h3>
	<?endif;?>
        <b>Характеристики:</b><br/>
        <?foreach($arResult['properties'] as $prop):?>
            <?if(!empty($prop['VALUE'])):?>
                <?=$prop['NAME']?> : <?=$prop['VALUE']?><br/>
            <?endif;?>
        <?endforeach;?>

	<div class="row">
		<div class="col-xs-5">
		</div>
	</div>
	</div>
</div>

