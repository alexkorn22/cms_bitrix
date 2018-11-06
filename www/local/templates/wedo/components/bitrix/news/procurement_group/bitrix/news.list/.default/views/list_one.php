<?
/** @var array $areaId */
/** @var ViewTemplate $this */
/** @var array $arParams */
/** @var array $arItem */
global $APPLICATION;
ProcurementGroup::findById($arItem['ID']);
?>
<!--<a href="--><?//=$arItem['DETAIL_PAGE_URL']?><!--"></a>-->
<div class="row procurement_group-list__item" id="<?=$areaId;?>">

        <div class="col-md-4">
            <img
                    class="img-fluid"
                    border="0"
                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
            />
        </div>
        <div class="col-md-8">
            <p><?=$arItem["NAME"]?></p>
            <p><?=$arItem["PREVIEW_TEXT"]?></p>
            <? if (ProcurementGroup::issetGroupInSession($arItem['ID'])):?>
                <p><a href="<?=$arItem['DETAIL_PAGE_URL']?>"
                      class=""
                    >
                        Войти
                    </a>
                </p>
            <? else:?>
                <p><a href="javascript:void(0)"
                      class="procurement-group__check-link"
                      data-id_group="<?=$arItem['ID']?>"
                    >
                        Войти
                    </a>
                </p>
            <? endif;?>

            <p><?$APPLICATION->IncludeComponent(
                    "wedo:forms",
                    "procurement_group_query",
                    Array(
                        "COMPONENT_TEMPLATE" => "catalog_form",
                        "FORM_ID" => "procurement_group_query",
                        "FORM_TYPE" => "procurement_group_query",
                        "ORDER_TYPE" => "",
                        "telegramChatId" => "-226178797",
                        "groupId" => $arItem['ID'],
                    )
                );?></p>
            <p><a href="<?=$arItem['DETAIL_PAGE_URL']?>">Принять участие</a></p>
        </div>
</div>
