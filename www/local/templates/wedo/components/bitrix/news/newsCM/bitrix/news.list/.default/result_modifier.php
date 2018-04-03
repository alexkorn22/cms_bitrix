<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as &$item){

    // получение свойства элемента :
    $props = CIBlockElement::GetByID($item['ID'])->GetNextElement()->GetProperties();
    $item['PROPERTIES'] = [];
    foreach ($props as $key => $value){
        $item['PROPERTIES'][$key] = $value['VALUE'];
    }
    // time of the news
    $item['time']=[
        'year'  => date('Y', strtotime($item['TIMESTAMP_X'])),
        'month' => date('M', strtotime($item['TIMESTAMP_X'])),
        'day'   => date('d', strtotime($item['TIMESTAMP_X']))
    ];
    // image source
    $item['imageSrc'] = CFile::getPath($item['PREVIEW_PICTURE']['ID']);

}