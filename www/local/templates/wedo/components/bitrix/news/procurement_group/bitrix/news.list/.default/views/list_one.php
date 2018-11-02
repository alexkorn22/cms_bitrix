<?
/** @var array $areaId */
/** @var ViewTemplate $this */
/** @var array $arParams */
/** @var array $arItem */
?>
<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
<div class="row procurement_group-list__item" id="<?=$areaId;?>">

        <div class="col-md-4">
            <img
                    class="img-fluid"
                    border="0"
                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                    width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                    height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                    style="float:left"
            />
        </div>
        <div class="col-md-8">
            <p><?=$arItem["NAME"]?></p>
            <p><?=$arItem["PREVIEW_TEXT"]?></p>
        </div>
</div>
</a>