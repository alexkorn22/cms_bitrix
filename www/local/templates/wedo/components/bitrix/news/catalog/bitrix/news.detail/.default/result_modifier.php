<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


// получить свойства элемента :;
    $props = CIBlockElement::GetByID($arResult['ID'])->GetNextElement()->GetProperties();
    foreach ($props as $prop){
        $arResult['properties'][]= $prop;
    }
