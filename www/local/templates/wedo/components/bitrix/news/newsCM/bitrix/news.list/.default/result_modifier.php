<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as &$item){
    // time of the news
    $item['time']=[
        'year'  => date('Y', strtotime($item['TIMESTAMP_X'])),
        'month' => date('M', strtotime($item['TIMESTAMP_X'])),
        'day'   => date('d', strtotime($item['TIMESTAMP_X']))
    ];
}

// Получить список доступные тегы :
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>App::$config->newsIblockId, "CODE"=>"TAGS"));
while($enum_fields = $property_enums->GetNext())
{
    $arResult['TAGS'][$enum_fields['VALUE']]=$arParams['SECTION_URL'].'?tag='.$enum_fields['VALUE'];
}


?>


