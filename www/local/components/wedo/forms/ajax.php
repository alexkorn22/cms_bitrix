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
    $MsgData = [
        'name'    =>$postData['userName'],
        'phone'   => $postData['phone'],
        'city'   => $postData['city'],
        'comment' => $postData['comment']
    ];
    $alert = new Alert($MsgData);
    $pattern  = "Сообщение !";
    $pattern .= "\n\n";
    $pattern .="Имя:  %name%\n";
    $pattern .= "Телефон: %phone%\n";
    $pattern .= "Город: %city%\n";
    $pattern .= "Сообщение: %comment%\n";
    $alert->parseText($pattern);
    $alert->sendTelegram($idChat);
}else{
    die(header("HTTP/1.0 404 Not Found"));
}

?>

