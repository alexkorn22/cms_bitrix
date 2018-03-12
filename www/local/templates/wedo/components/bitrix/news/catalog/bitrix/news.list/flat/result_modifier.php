<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

// получить свойства элемента :
foreach ($arResult['ITEMS'] as $item){
    $props = CIBlockElement::GetByID($item['ID'])->GetNextElement()->GetProperties();
    foreach ($props as $prop){
        $arResult[$item['ID']][$prop['CODE']] = $prop['VALUE'] ;
    }
}