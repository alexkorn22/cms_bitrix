<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
if (check_bitrix_sessid()) {
    require 'views/msg.php';
}else{
    die(header("HTTP/1.0 404 Not Found"));
}

?>

