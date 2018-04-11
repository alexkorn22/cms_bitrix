<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['time']=[
    'year'  => date('Y', strtotime($arResult['TIMESTAMP_X'])),
    'month' => date('M', strtotime($arResult['TIMESTAMP_X'])),
    'day'   => date('d', strtotime($arResult['TIMESTAMP_X']))
];

// Получить список доступные тегы :
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>App::$config->newsIblockId, "CODE"=>"TAGS"));
while($enum_fields = $property_enums->GetNext())
{
    $arResult['TAGS'][$enum_fields['VALUE']]='/blog/?tag='.$enum_fields['VALUE'];
}