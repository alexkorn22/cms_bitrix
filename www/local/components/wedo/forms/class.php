<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class FormsComponent extends CBitrixComponent{

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
}
?>