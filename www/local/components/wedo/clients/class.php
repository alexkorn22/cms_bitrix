<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ClientsComponent extends CBitrixComponent{

	public function executeComponent(){

		if ($this->startResultCache()){
			$this->includeComponentTemplate();
		}
	}
}
?>