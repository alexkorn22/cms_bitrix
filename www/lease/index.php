<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аренда");
?>

<?$APPLICATION->IncludeComponent(
	"wedo:calculator_payback",
	"",
	Array(
		"IBLOCK_ID" => App::$config->coffeeMachineIblockId,
		"IBLOCK_TYPE" => "catalogs",
		"PRODUCT_ID" => 0
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>