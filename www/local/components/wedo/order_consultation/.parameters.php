<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();



$arComponentParameters = array(
	"GROUPS" => array(
		
	),
	"PARAMETERS" => array(
		"PRODUCT_ID"  =>  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEDO_ ORDER_CONSULTATION_PARAM_PRODUCT_ID_NAME"),
			"TYPE" => "STRING",
		),
		"IBLOCK_ID"  =>  Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEDO_ ORDER_CONSULTATION_PARAM_IBLOCK_ID_NAME"),
			"TYPE" => "STRING",
		),
		
	),
);
?>
