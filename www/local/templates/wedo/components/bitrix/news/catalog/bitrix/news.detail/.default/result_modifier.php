<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// main images
foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $id){
    $arResult['MAIN_IMAGES_SRC'][]  = CFile::GetPath($id);
}

// Дукоменты, График замены запчастей
foreach($arResult['PROPERTIES']['SCHEDULE']['VALUE'] as $id){
    $arResult['SCHEDULE_FILES'][] = CFile::GetFileArray($id);
}

// instruction files :
foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $id){
    $arResult['INSTRUCTIONS_FILES'][] = CFile::GetFileArray($id);
}