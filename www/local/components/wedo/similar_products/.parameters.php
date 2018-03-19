<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if(!CModule::IncludeModule("iblock"))
    return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(array("-"=>" "));
$arIBlocks=array();
$db_iblock = CIBlock::GetList(array("SORT"=>"ASC"), array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
    $arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];


$arComponentParameters = array(
    "GROUPS" => array(

    ),
    "PARAMETERS" => array(
        "IBLOCK_TYPE" => array(
            "PARENT" => "BASE",
            "NAME" => 'Тип инфоблока',
            "TYPE" => "LIST",
            "VALUES" => $arTypesEx,
            "DEFAULT" => "catalogs",
            "REFRESH" => "Y",
        ),
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("WEDO_SIMILAR_PRODUCTS_PARAM_INFOBLOK_NAME"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlocks,
            "DEFAULT" => App::$config->coffeeMachineIblockId,
            "ADDITIONAL_VALUES" => "Y",
            "REFRESH" => "Y",
        ),
        "PRODUCT_ID"  =>  Array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("WEDO_SIMILAR_PRODUCTS_PARAM_PRODUCT_ID_NAME"),
            "TYPE" => "STRING",
        ),

    ),
);
?>
