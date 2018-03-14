<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


// получить свойства элемента :;
    $props = CIBlockElement::GetByID($arResult['ID'])->GetNextElement()->GetProperties();
    foreach ($props as $prop){
        if($prop['CODE'] == 'PRICE'){
            $arResult['PRICE'] = $prop['VALUE'];
        }elseif($prop['CODE'] == 'DESCRIPTION'){
            $arResult['DESCRIPTION'] = $prop['VALUE'];
        }elseif($prop['CODE'] == 'RENT'){
            $arResult['RENT'] = $prop['VALUE'];
        }else{
            $arResult['properties'][]= $prop;
        }
    }

// Получить дукементы :
    $documents = $arResult['DISPLAY_PROPERTIES']['DOCUMENTS'];
    foreach ($documents['DISPLAY_VALUE'] as $key => $value){
        $arResult['docs']['docLinks'][]=$value;
    }
    foreach ($documents['FILE_VALUE'] as $key => $value){ // $value is an array
        $arResult['docs']['docNames'][]= $value['FILE_NAME'];
    }


