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
        <div class="row">
            <h3><?=$arResult["NAME"]?></h3>
        </div><br/>
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
                <h2><b>Характеристики:</b></h2><br/>
                <?foreach($arResult['properties'] as $prop):?>
                    <?if(!empty($prop['VALUE'])):?>
                       <h3> <?=$prop['NAME']?> : <?=$prop['VALUE']?><br/></h3>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <div class="col-md-3">
                <h1>  Цена : <?=$arResult['PRICE']?> EUR</h1>
                <div>
                    <button class="btn btn-primary btn-lg">
                        Заказать консультацию
                    </button>
                </div>
            </div>

        </div><hr/>
        <div class="row">
            <div class="col-md-6">
                <h1>ОПИСАНИЕ </h1>
                <h2><?=$arResult['DESCRIPTION']?></h2>
            </div>
        </div>
        <hr/>
        <?if($arResult['RENT'] == 'Да'):?>
        <div class="row">
            <div class="col-md-6">
                <h1>АРЕНДА </h1>
                <h2>Возможность арендовать  : <?=$arResult['RENT']?></h2>
            </div>
        </div>
        <hr/>
        <?endif;?>
        <?if(!empty($arResult['docs'])):?>
            <div class="row">
                <div class="col-md-6">
                    <h1>ДОКУМЕНТЫ</h1>
                    <?for($i=0; $i<count($arResult['docs']); $i++):?>
                        <h2> Name : <?=$arResult['docs']['docNames'][$i]?> / Link : <?=$arResult['docs']['docLinks'][$i]?></h2>
                    <?endfor;?>
                </div>
            </div>
            <hr/>
        <?endif;?>
	</div>

</div>

