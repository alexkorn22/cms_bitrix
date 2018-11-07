<?
/** @var array $areaId */
/** @var ViewTemplate $this */
/** @var array $arParams */
/** @var array $arItem */
global $APPLICATION;
ProcurementGroup::findById($arItem['ID']);
?>
<!--<a href="--><?//=$arItem['DETAIL_PAGE_URL']?><!--"></a>-->

<div class="procurement_group-list__item" id="<?=$areaId;?>">
    <div class="row">
        <div class="col-sm-6 justify-content-center">
            <div class="procurement_group-list__wrap-image">
                <img
                        class="img-fluid"
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                />
            </div>
        </div>
        <div class="col-sm-6">
            <div class="procurement_group-list__wrap-desc">
                <div class="procurement_group-list__wrap-desc-content">
                    <div class="procurement_group-list__item-title">
                        <?=$arItem["NAME"]?>
                    </div>
                    <div class="procurement_group-list__item-desc">
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </div>
                </div>
                <div class="procurement_group-list__item-buttons">
                    <div class="row">
                        <div class="col-xl-6">
                            <? if (ProcurementGroup::issetGroupInSession($arItem['ID'])):?>
                                <a href="<?=$arItem['DETAIL_PAGE_URL']?>"
                                   class="btn btn_none-fill btn_small-mobile"
                                >
                                    Войти
                                </a>

                            <? else:?>
                                <a href="javascript:void(0)"
                                   class="btn btn_none-fill btn_small-mobile procurement-group__check-link"
                                   data-id_group="<?=$arItem['ID']?>"
                                >
                                    Войти
                                </a>
                            <? endif;?>
                        </div>
                        <div class="col-xl-6">
                            <?$APPLICATION->IncludeComponent(
                                "wedo:forms",
                                "procurement_group_query",
                                Array(
                                    "COMPONENT_TEMPLATE" => "catalog_form",
                                    "FORM_ID" => "procurement_group_query",
                                    "FORM_TYPE" => "procurement_group_query",
                                    "ORDER_TYPE" => "",
                                    "telegramChatId" => "-226178797",
                                    "groupId" => $arItem['ID'],
                                    "btnColor" => 'none-fill',
                                )
                            );?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<? return ?>
<div class="procurement_group-list__wrap-desc">
    <p><?=$arItem["NAME"]?></p>
    <p><?=$arItem["PREVIEW_TEXT"]?></p>
    <? if (ProcurementGroup::issetGroupInSession($arItem['ID'])):?>
       <a href="<?=$arItem['DETAIL_PAGE_URL']?>"
              class=""
            >
                Войти
            </a>

    <? else:?>
        <a href="javascript:void(0)"
              class="procurement-group__check-link"
              data-id_group="<?=$arItem['ID']?>"
            >
                Войти
        </a>
    <? endif;?>
</div>