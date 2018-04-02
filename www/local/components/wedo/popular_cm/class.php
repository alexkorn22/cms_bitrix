<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CBitrixComponent::includeComponentClass("wedo:order_consultation");

class PopularCM extends CTestComponent{
    public function generateArFilter(){
        $this->arParams["AR_FILTER"] = Array();
        $this->arParams["AR_FILTER"]["IBLOCK_ID"] = $this->arParams["IBLOCK_ID"];
        $this->arParams["AR_FILTER"]["PROPERTY_POPULAR_CM_VALUE"]  = "Да";
    }
}
?>