<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['time']=[
    'year'  => date('Y', strtotime($arResult['TIMESTAMP_X'])),
    'month' => date('M', strtotime($arResult['TIMESTAMP_X'])),
    'day'   => date('d', strtotime($arResult['TIMESTAMP_X']))
];
$res = CIBlockElement::GetProperty(App::$config->newsIblockId, $arResult['ID'], "sort", "asc", array("CODE" => "TAGS"));
while ($ob = $res->GetNext())
{
    $arResult['TAGS'][$ob['VALUE_ENUM']]= $arParams['SECTION_URL'].'?tag='.$ob['VALUE_ENUM'];
}
