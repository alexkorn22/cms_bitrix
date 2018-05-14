<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application;
foreach ($arResult['ITEMS'] as &$item){
    // Date :
    $date = new DateTime($item['PROPERTIES']['DATE']['VALUE']);
    $item['time']=[
        'year'  => $date->format("Y"),
        'month' => $date->format("M"),
        'day'   => $date->format("d")
    ];
    // resize images :
    $resizedImg = CFile::ResizeImageGet($item["PREVIEW_PICTURE"]["ID"], array('width'=>300, 'height'=>300), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
    $item['IMG']=[
        'SRC'=>$resizedImg["src"],
        'ALT'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'],
        'TITLE'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
    ];
}

// Получить список доступные тегы :
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>App::$config->newsIblockId, "CODE"=>"TAGS"));
while($enum_fields = $property_enums->GetNext())
{
    $arResult['TAGS'][$enum_fields['VALUE']]=$arParams['SECTION_URL'].'?tag='.$enum_fields['VALUE'];
}

// current page tag :
$req = Application::getInstance()->getContext()->getRequest();
$arResult['CURR_TAG'] = $req->getQuery("tag");


?>


