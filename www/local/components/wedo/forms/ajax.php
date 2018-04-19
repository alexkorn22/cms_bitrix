<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
if (check_bitrix_sessid()) {
    require 'views/msg.php';
    // get Form Data :
    $postData = $request->getPostList();

    // send telegram message  :
    $idChat   = App::$config->telegramChatId;
    $message  = "\n\tNew Message !\n\n";
    $message .= "Name : ".$postData['userName'] ;
    $message .= "\nTel : ".$postData['phone'] ;
    $message .= "\nCity : ".$postData['city'] ;
    $message .= "\n\nComment :".$postData['comment'] ;
    $bot = new Telegram($idChat);
    $bot->sendMessage($message);
}else{
    die(header("HTTP/1.0 404 Not Found"));
}

?>

