<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class FormsComponent extends CBitrixComponent{

	public function executeComponent(){

		if ($this->startResultCache()){

		    if( $this->arParams['FORM_ID'] != 'modalMain'){
                $this->arParams['FORM_ID']  = App::$ds->formNumber;
                App::$ds->formNumber++;
            }
            $this->includeComponentTemplate();
        }
	}
}
?>