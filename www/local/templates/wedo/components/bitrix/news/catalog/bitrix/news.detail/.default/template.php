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
                        <video width="320" height="240" controls>
                            <source src="<?=$video['path']?>" type="video/mp4">
                        </video>
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