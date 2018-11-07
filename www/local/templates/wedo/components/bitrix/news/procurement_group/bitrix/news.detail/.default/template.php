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
$view = new ViewTemplate($this);
?>
<div class="procurement-group-detail">
    <div class="row">
        <div class="col-12">
            <h1 class="procurement-group-detail__title"><?=$arResult['NAME']?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?=$view->render('main-info', ['arItem' => $arResult])?>
        </div>
        <div class="col-md-6">
            <img
                    class="img-fluid"
                    src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                    alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                    title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
            />
        </div>
    </div>
</div>

