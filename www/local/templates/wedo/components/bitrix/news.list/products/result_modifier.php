<?php

// получить свойства элемента :
foreach ($arResult['ITEMS'] as $item){
    $props = CIBlockElement::GetByID($item['ID'])->GetNextElement()->GetProperties();
    foreach ($props as $prop){
        $arResult[$item['ID']][$prop['CODE']] = $prop['VALUE'] ;
    }

    if(isset($_GET['productId']) && $_GET['productId']== $item['ID']){
        $arResult['oneProduct'] = $item ;
    }
}
