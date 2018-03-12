<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CCalculatorPaybackComponent extends CBitrixComponent{

    public function getPriceCoffee(){
        return 600;
    }

    public function getPriceSale(){
        return 12;
    }



	public function generateArOrder(){
		$this->arParams["AR_ORDER"] = Array();
	}

	public function generateArSelect(){
		$this->arParams["AR_SELECT"] = Array();
	}

	public function generateArFilter(){
		$this->arParams["AR_FILTER"] = Array();
		$this->arParams["AR_FILTER"]["IBLOCK_ID"] = $this->arParams["IBLOCK_ID"];
	}

	public function getItems(){
		if (!CModule::IncludeModule("iblock")){
			$this->AbortResultCache();
			ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));

			return;
		}

		$arFilter = $this->arParams["AR_FILTER"];
		$arOrder = $this->arParams["AR_ORDER"];
		$arSelect = $this->arParams["AR_SELECT"];

		$this->arResult["ITEMS"] = Array();
		$rs = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
		while ($ob = $rs->GetNextElement()){
			$arFields = $ob->GetFields();
			$arFields["PROPS"] = $ob->GetProperties();

			$this->arResult["ITEMS"][] = $arFields;
		}
	}

	protected function getDataCoffeMachine() {
        if ($this->arParams['PRODUCT_ID'] != 0) {
            $id = $this->arParams['PRODUCT_ID'];
        } else {
            $id = 329;
        }
        $filter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ID' => $id
        ];
        $res = CIBlockElement::GetList([],$filter);
        dd($res->GetNextElement()->GetProperties());
    }

	public function executeComponent(){
        \Bitrix\Main\Loader::includeModule('iblock');
		//$this->generateArOrder();
		//$this->generateArFilter();
		//$this->generateArSelect();
        $this->getDataCoffeMachine();
        $this->arResult['priceCofee'] = $this->getPriceCoffee();
        $this->arResult['priceSale'] = $this->getPriceSale();

		if ($this->startResultCache()){
			$this->getItems();

			$this->includeComponentTemplate();
		}
	}
}
?>