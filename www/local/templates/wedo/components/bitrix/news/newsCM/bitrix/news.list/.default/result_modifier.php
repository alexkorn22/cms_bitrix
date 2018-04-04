<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as &$item){
    // time of the news
    $item['time']=[
        'year'  => date('Y', strtotime($item['TIMESTAMP_X'])),
        'month' => date('M', strtotime($item['TIMESTAMP_X'])),
        'day'   => date('d', strtotime($item['TIMESTAMP_X']))
    ];
}