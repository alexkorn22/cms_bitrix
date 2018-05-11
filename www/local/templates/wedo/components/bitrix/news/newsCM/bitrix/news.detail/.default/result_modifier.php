<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$date  = explode('.',$arResult['PROPERTIES']['DATE']['VALUE']);
$month = date("F", mktime(0, 0, 0, $date[1], 10));
$day   = $date[0];
$year  = $date[2];
$arResult['time']=[
    'year'  => $year,
    'month' => $month,
    'day'   => $day
];
$res = CIBlockElement::GetProperty(App::$config->newsIblockId, $arResult['ID'], "sort", "asc", array("CODE" => "TAGS"));
while ($ob = $res->GetNext())
{
    $arResult['TAGS'][$ob['VALUE_ENUM']]= $arParams['SECTION_URL'].'?tag='.$ob['VALUE_ENUM'];
}

$resizedImg = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']["ID"], array('width'=>300, 'height'=>300), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
$arResult['IMG']=[
    'SRC'=>$resizedImg["src"],
    'ALT'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'],
    'TITLE'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
];
