<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class FormsComponent extends CBitrixComponent{

    public $formType;

	public function executeComponent(){

		if ($this->startResultCache()){

		    if(!isset($this->arParams['FORM_ID'])){
                $this->arParams['FORM_ID']  = App::$ds->formNumber;
                App::$ds->formNumber++;
            }
            $this->includeComponentTemplate();
        }
	}

    public static function procurementGroupCheckAjax(\Bitrix\Main\HttpRequest $request)
    {
        $result = [];
        $result['FORM_TYPE'] = $request->getPost('FORM_TYPE');
        $result['success'] = false;
        $model = ProcurementGroup::findById($request->getPost('id_group'));
        if (!empty($model->password) && $model->password == $request->getPost('password')) {
            $result['success'] = true;
            $result['link'] = $model->link;
            $model->addToSession();
        } else {
            $result['message'] = '<p>Неправильный пароль</p>';
        }
        return $result;
	}

    public function procurementGroupQueryAjax()
    {
        $result = [];
        $this->formType = $this->request->getPost('FORM_TYPE');
        $result['success'] = false;
        $model = ProcurementGroup::findById($this->request->getPost('groupId'));
        $MsgData = [
            'name'    => $this->request->getPost('userName'),
            'phone'   => $this->request->getPost('phone'),
            'city'    => $this->request->getPost('city'),
            'comment' => $this->request->getPost('comment'),
            'orderType' => 'Запрос на участие в закупочной группе',
            'groupName' => $model->name,
        ];
        $idChat = $this->request->getPost('telegramChatId');
        if (!$idChat) {
            return $result;
        }
        $alert = new Alert($MsgData);
        $pattern  = "(%orderType%)";
        $pattern .= "\n\n";
        $pattern .="Имя:  %name%\n";
        $pattern .= "Телефон: %phone%\n";
        $pattern .= "Город: %city%\n";
        $pattern .= "Закупочная группа: %groupName%\n";
        $alert->parseText($pattern);
        $alert->sendTelegram($idChat);
        $result['success'] = true;
        return $result;
    }
}
?>