<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CBitrixComponent::includeComponentClass("wedo:base_infoblock_component");

class PopularCM extends BaseInfoBlockComponent{
    private $filterValue;
    public function generateArFilter(){
        $this->setFilterValue();
        $this->arParams["AR_FILTER"] = Array();
        $this->arParams["AR_FILTER"]["IBLOCK_ID"] = $this->arParams["IBLOCK_ID"];
        $this->arParams["AR_FILTER"]["PROPERTY_POPULAR_CM_VALUE"]  =  $this->filterValue ;
    }

    public function setFilterValue (){
        if(CModule::IncludeModule("iblock"))
        {
            $property_enums = CIBlockPropertyEnum::GetList(Array(), Array("IBLOCK_ID"=>App::$config->coffeeMachineIblockId, "CODE"=>"POPULAR_CM"));
            while($enum_fields = $property_enums->GetNext())
            {
                $this->filterValue = '';
                if($enum_fields['XML_ID'] == 'POPULAR_TRUE'){
                    $this->filterValue = $enum_fields['VALUE'];
                }

            }
        }

    }

}
?>