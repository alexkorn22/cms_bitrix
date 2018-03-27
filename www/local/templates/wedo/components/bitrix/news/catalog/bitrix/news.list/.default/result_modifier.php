<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

// получить свойства элемента :
$i = 0;
foreach ($arResult['ITEMS'] as $item){
    $props = CIBlockElement::GetByID($item['ID'])->GetNextElement()->GetProperties();
    foreach ($props as $prop){
        $arResult['ITEMS'][$i]['PROPERTIES'][]= $prop ;
    }
    $i++;
}