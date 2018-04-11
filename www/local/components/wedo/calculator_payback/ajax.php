<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
if ($request->getPost('action') == 'recalculate') {
    $APPLICATION->IncludeComponent(
        "wedo:calculator_payback",
        "ajax",
        Array(
            "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
            "IBLOCK_TYPE" => "catalogs",
            "PRODUCT_ID" => $request->getPost('productId'),
            "VIEW" => $request->getPost('view')
        )
    );
    die();
}
