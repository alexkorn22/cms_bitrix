<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аренда");
?>

<?
$APPLICATION->IncludeComponent(
    "wedo:calculator_payback",
    "",
    Array(
        "IBLOCK_ID" => "3",
        "IBLOCK_TYPE" => "news",
        "PRODUCT_ID" => "0"
    )
)
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>