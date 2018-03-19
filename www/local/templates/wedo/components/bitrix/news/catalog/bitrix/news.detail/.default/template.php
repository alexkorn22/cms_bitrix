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
            <h2><?=$arResult["NAME"]?></h2>
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
                <h2><b>Характеристики:</b></h2><br/>
                <?foreach($arResult['PROPERTIES'] as $prop):?>
                    <?if(!empty($prop['VALUE']) && $prop['SORT'] < 5000 ):?>
                       <h3> <?=$prop['NAME']?> : <?=$prop['VALUE']?><br/></h3>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <div class="col-md-3">
                <h1>  Цена : <?=$arResult['PROPERTIES']['PRICE']['VALUE']?> EUR</h1>
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
                <h2><?=$arResult['PROPERTIES']['DESCRIPTION']['VALUE']?></h2>
            </div>
        </div>
        <hr/>
        <?if($arResult['PROPERTIES']['RENT']['VALUE'] == 'Да'):?>
        <div class="row">
            <div class="col-md-6">
                <h1>АРЕНДА </h1>
                <h2>Возможность арендовать  : <?=$arResult['PROPERTIES']['RENT']['VALUE']?></h2>
            </div>
        </div>
        <hr/>
        <?endif;?>
        <?if(!empty($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])):?>
            <div class="row">
                <div class="col-md-12">
                    <h1>ДОКУМЕНТЫ</h1>
                    <?foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $IdDoc):?>
                        <? $file = CFile::GetFileArray($IdDoc); ?>
                        <div>
                            <div class="col-md-6"> <h2> Название : <?=$file['FILE_NAME']?> </h2></div>
                            <div class="col-md-4"> <h2><a target="_blank" href="<?=$file['SRC']?>">Открыть</a></h2></div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <hr/>
        <?endif;?>
        <?if(!empty($arResult['PROPERTIES']['VIDEO']['VALUE'][0])):?>
            <h1>ВИДЕО</h1>
            <div class="row">
                <?foreach ($arResult['PROPERTIES']['VIDEO']['VALUE'] as $video):?>
                <div class="col-md-6">
                    <h2>Title  :<?=$video['title']?></h2>
                    <video width="320" height="240" controls>
                        <source src="<?=$video['path']?>" type="video/mp4">
                    </video>
                    <h2>Description  : <?=$video['desc']?></h2>
                </div>
                <?endforeach;?>
            </div>
            <hr/>
        <?endif;?>
        <?if (!empty($arResult['PROPERTIES']['SCHEDULE']['VALUE'])):?>
            <div class="row">
                <div class="col-md-6">
                    <h1>График замены запчастей кофемашины</h1>
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
    <h1 class="text-center alert alert-dark">
        Похожие товары
    </h1>
    <?$APPLICATION->IncludeComponent(
        "wedo:similar_products",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
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