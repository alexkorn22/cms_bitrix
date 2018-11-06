<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if (!$request->isAjaxRequest()) {
    return;
}
if (check_bitrix_sessid()) {
    if ($request->getPost('FORM_TYPE') == 'procurement_group_check') {
        CBitrixComponent::includeComponentClass("wedo:forms");
        $result = FormsComponent::procurementGroupCheckAjax($request);
        echo json_encode($result);
        return;
    }
    if ($request->getPost('FORM_TYPE') == 'procurement_group_query') {
        CBitrixComponent::includeComponentClass("wedo:forms");
        $formComponent = new FormsComponent();
        $result = $formComponent->procurementGroupQueryAjax();
        echo json_encode($result);
        return;
    }
    echo json_encode(['success' => true]);
    // получить чат ID с каждой формы :
    $idChat   = App::$config->telegramChatId;
    $chatForm = $request->getPost('telegramChatId');
    if(isset($chatForm)){
        $idChat = $chatForm;
    }

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

