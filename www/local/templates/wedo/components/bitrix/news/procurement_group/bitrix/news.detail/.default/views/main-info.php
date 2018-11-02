<?
/** @var ViewTemplate $this */
/** @var array $arItem */

?>

<h1><?=$arItem['NAME']?></h1>
<p><span>Количество подтверждено/ запланировано<span> <span><?=$arItem['DISPLAY_PROPERTIES']['planned_count']['VALUE']?>/<?=$arItem['DISPLAY_PROPERTIES']['confirmed_count']?></span></p>
<p><span>Граничный срок<span> <span><?=$arItem['DISPLAY_PROPERTIES']['period_formation']['VALUE']?></span></p>

<p><span>Текущая ситуация<span> <span><?=$arItem['DISPLAY_PROPERTIES']['current_situation']['DISPLAY_VALUE']?></span></p>