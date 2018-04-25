<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
if (check_bitrix_sessid()) {
    require 'views/msg.php';
    // send telegram message  :
    $idChat   = App::$config->telegramChatId;
    $MsgData = [
        'name'    => $request->getPost('userName'),
        'phone'   => $request->getPost('phone'),
        'city'    => $request->getPost('city'),
        'comment' => $request->getPost('comment')
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

