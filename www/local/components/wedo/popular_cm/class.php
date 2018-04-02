<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CBitrixComponent::includeComponentClass("wedo:order_consultation");

class PopularCM extends CTestComponent{
    public $filter = [
        'properties'=>
        [
            'POPULAR_CM'=>'POPULAR_TRUE'
        ]
    ];
}
?>