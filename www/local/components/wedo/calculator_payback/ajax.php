<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
$APPLICATION->IncludeComponent(
    "wedo:calculator_payback",
    "ajax",
    Array(
        "IBLOCK_ID" => "12",
        "IBLOCK_TYPE" => "catalogs",
        "PRODUCT_ID" => "329"
    )
);
die();