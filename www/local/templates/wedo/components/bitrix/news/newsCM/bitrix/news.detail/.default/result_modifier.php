<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['time']=[
    'year'  => date('Y', strtotime($arResult['TIMESTAMP_X'])),
    'month' => date('M', strtotime($arResult['TIMESTAMP_X'])),
    'day'   => date('d', strtotime($arResult['TIMESTAMP_X']))
];