<?
/** @var ViewTemplate $this */
/** @var array $arItem */

$props = $arItem['DISPLAY_PROPERTIES'];
?>
<div class="procurement-group-detail__wrap-info">
    <span class="procurement-group-detail__name-block procurement-group-detail__name-block_bold">Количество оборудования:</span>
    <span class="procurement-group-detail__name-block"> <?=$props['planned_count']['VALUE']?> / <?=$props['confirmed_count']['VALUE']?></span>
    <div class="procurement-group-detail__comment text-uppercase">подтверждено / запланировано</div>
</div>

<div class="procurement-group-detail__wrap-info">
    <div class="procurement-group-detail__name-block procurement-group-detail__name-block_bold">Участники:</div>
    <div><?=$props['participants']['DISPLAY_VALUE']?></div>
</div>

<div class="procurement-group-detail__wrap-info">
    <span class="procurement-group-detail__name-block procurement-group-detail__name-block_bold">Граничный срок: </span>
    <span class="procurement-group-detail__name-block"><?=$props['period_formation']['VALUE']?></span>
    <div class="procurement-group-detail__comment">до которого выполняется сбор участников</div>
</div>

<div class="procurement-group-detail__wrap-info">
    <div class="procurement-group-detail__name-block procurement-group-detail__name-block_bold">Информация для участников:</div>
    <div><?=$props['current_situation']['DISPLAY_VALUE']?></div>
</div>