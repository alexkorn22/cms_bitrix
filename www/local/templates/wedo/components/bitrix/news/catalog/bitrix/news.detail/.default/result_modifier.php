<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application,
    Bitrix\Main\Web\Uri;

// main images
foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $id){
    $img = CFile::GetFileArray($id);
// resize image :
    $resizedImg = CFile::ResizeImageGet( $img['ID'],array('width'=>600, 'height'=>600), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
    $arResult['MAIN_IMAGES'][] = [
        'SRC'       => $resizedImg['src'],
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
if (is_array($arResult['PROPERTIES']['SCHEDULE']['VALUE'])) {
    foreach($arResult['PROPERTIES']['SCHEDULE']['VALUE'] as $id){
        $arResult['SCHEDULE_FILES'][] = CFile::GetFileArray($id);
        $fileData=  CFile::GetFileArray($id);
    }
}

// instruction files :
if (is_array($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])) {
    foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $id){
        $arResult['INSTRUCTIONS_FILES'][] = CFile::GetFileArray($id);
    }
}

// title h1
$arResult['TITLE_H1'] = $arResult['NAME'];
if(!empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])){
    $arResult['TITLE_H1'] = $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'];
}

// Ссылка на страницу аренда :
$request = Application::getInstance()->getContext()->getRequest();
$uri = new Uri('/lease/');
$uri->addParams($request->getQueryList()->toArray());
$uri->addParams(array("cm" => $arResult['ID']));
$arResult['leaseLink']= $uri->getUri();
