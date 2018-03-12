<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$template = 'products';
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    $template,
    Array(
        "IBLOCK_TYPE" => 'catalogs',
        "IBLOCK_ID" => '12',
    )
);

?>