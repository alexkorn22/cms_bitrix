<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// main images
foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $id){
    $img = CFile::GetFileArray($id);
    $arResult['MAIN_IMAGES'][] = [
        'SRC'       => $img['SRC'],
        'ID'        => $img['ID'],
        'FILE_NAME' => $img['FILE_NAME']
    ];
}

// convert price :
$EUR = new Currency(Currency::EUR);
$UAH = new Currency(Currency::UAH);
$arResult['PRICE_UAH'] = Currency::convert($arResult['PROPERTIES']['PRICE']['VALUE'],$EUR,$UAH);

// Дукоменты, График замены запчастей
foreach($arResult['PROPERTIES']['SCHEDULE']['VALUE'] as $id){
    $arResult['SCHEDULE_FILES'][] = CFile::GetFileArray($id);
    $fileData=  CFile::GetFileArray($id);
}

// instruction files :
foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $id){
    $arResult['INSTRUCTIONS_FILES'][] = CFile::GetFileArray($id);
}