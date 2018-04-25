<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
if (check_bitrix_sessid()) {
    require 'views/msg.php';
    $idChat   = App::$config->telegramChatId;

    if($request->getPost('orderType') == "EMAIL_FORM"){
        $MsgData = [
            'email'    => $request->getPost('email'),
            'orderType' => $request->getPost('orderType')
        ];
        $alert = new Alert($MsgData);
        $pattern  = "(свежие обзоры и советы каждый четверг)";
        $pattern .= "\n\n";
        $pattern .="Почта:  %email%\n";
        $alert->parseText($pattern);
        $alert->sendTelegram($idChat);
        exit();
    }

        // send telegram message  :
        $MsgData = [
            'name'    => $request->getPost('userName'),
            'phone'   => $request->getPost('phone'),
            'city'    => $request->getPost('city'),
            'comment' => $request->getPost('comment'),
            'orderType' => $request->getPost('orderType')
        ];
        $alert = new Alert($MsgData);
        $pattern  = "(%orderType%)";
        $pattern .= "\n\n";
        $pattern .="Имя:  %name%\n";
        $pattern .= "Телефон: %phone%\n";
        $pattern .= "Город: %city%\n";
        $pattern .= "Коммент: %comment%\n";
        $alert->parseText($pattern);
        $alert->sendTelegram($idChat);
}else{
    die(header("HTTP/1.0 404 Not Found"));
}

?>
