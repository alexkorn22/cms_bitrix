<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// main images
foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $id){
    $img = CFile::GetFileArray($id);
    $arResult['MAIN_IMAGES'][] = [
        'SRC'       => $img['SRC'],
        'ID'        => $img['ID'],
        'FILE_NAME' => $img['FILE_NAME'],
        'ALT'       => $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'],
        'TITLE'     => $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
    ];
}

// convert price :
$EUR = new Currency(Currency::EUR);
$arResult['PRICE_UAH'] = round($EUR->convertTo($arResult['PROPERTIES']['PRICE']['VALUE'],Currency::UAH));

// Дукоменты, График замены запчастей
foreach($arResult['PROPERTIES']['SCHEDULE']['VALUE'] as $id){
    $arResult['SCHEDULE_FILES'][] = CFile::GetFileArray($id);
    $fileData=  CFile::GetFileArray($id);
}

// instruction files :
foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $id){
    $arResult['INSTRUCTIONS_FILES'][] = CFile::GetFileArray($id);
}

// title h1
$arResult['TITLE_H1'] = $arResult['NAME'];
if(!empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])){
    $arResult['TITLE_H1'] = $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'];
}
