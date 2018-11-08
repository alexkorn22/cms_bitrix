<?
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!ProcurementGroup::issetGroupInSession($arResult['ID'])) {
    LocalRedirect($arParams['IBLOCK_URL']);
}
// resize image :
$resizedImg = CFile::ResizeImageGet( $arResult['DETAIL_PICTURE']['ID'],array('width'=>600, 'height'=>600), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
$arResult['MAIN_IMAGES'][] = [
    'SRC'       => $resizedImg['src'],
    'ID'        =>  $arResult['DETAIL_PICTURE']['ID'],
    'FILE_NAME' => $arResult['DETAIL_PICTURE']['FILE_NAME'],
    'ALT'       => $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'],
    'TITLE'     => $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
];

foreach ($arResult['PROPERTIES']['images']['VALUE'] as $id){
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



