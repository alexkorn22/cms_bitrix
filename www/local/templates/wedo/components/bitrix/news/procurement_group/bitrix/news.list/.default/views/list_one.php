<?
/** @var array $areaId */
/** @var ViewTemplate $this */
/** @var array $arParams */
/** @var array $arItem */
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
            <p><a href="javascript:void(0)"
                  class="procurement-group__check-link"
                  data-id_group="<?=$arItem['ID']?>"
                >
                    Войти
                </a>
            </p>
            <p><a href="#">Принять участие</a></p>
            <p><a href="<?=$arItem['DETAIL_PAGE_URL']?>">Принять участие</a></p>
        </div>
</div>
