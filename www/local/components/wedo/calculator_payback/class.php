<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CCalculatorPaybackComponent extends CBitrixComponent{

    /**
     * @var \Bitrix\Main\HttpRequest
     */
    protected $request;

    public function getPriceCoffee(){
        $res = App::$config->priceCofeeKg;
        if ($this->request->isPost() && $this->request->getPost('priceCofee')) {
            $res = (int)$this->request->getPost('priceCofee');
        }
        return $res;
    }

    public function getPriceSale(){
        $res = App::$config->priceSaleCoffee;
        if ($this->request->isPost() && $this->request->getPost('priceSale')) {
            $res = (int)$this->request->getPost('priceSale');
        }
        return $res;
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

	protected function getIdOneProduct() {
        $filter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ACTIVE'=> 'Y'
        ];
        $res = CIBlockElement::GetList([],$filter,false,false);
        $id = 0;
        while ($prod = $res->GetNextElement()) {
            if (!$id) {
                $id = $prod->fields['ID'];
            }
            $product['ID'] = $prod->fields['ID'];
            $product['NAME'] = $prod->fields['NAME'];
            $props = $prod->GetProperties(false,[]);
            $product['servings'] = $props['NUM_SERVINGS']['VALUE'];
            $this->arResult['products'][] = $product;
        }

        return $id;
    }

	protected function getDataCoffeMachine() {
        if ($this->arParams['PRODUCT_ID'] != 0) {
            $id = $this->arParams['PRODUCT_ID'];
        } else {
            $id = $this->getIdOneProduct();
        }
        $filter = [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ID' => $id
        ];
        $price = 0;
        $servings = 0;
        $res = CIBlockElement::GetList([],$filter,false,false);
        $product = $res->GetNextElement();
        $props = $product->GetProperties(false,[]);
        $keys = ['ID','NAME'];
        foreach ($keys as $key) {
            $this->arResult['product'][$key] = $product->fields[$key];
        }

        if (isset($props['PRICE']['VALUE'])) {
            $price = (int)$props['PRICE']['VALUE'];
        }
        if (isset($props['NUM_SERVINGS']['VALUE'])) {
            $servings = (int)$props['NUM_SERVINGS']['VALUE'];
        }
        if ($this->request->isPost() && $this->request->getPost('cmServings')) {
            $servings = (int)$this->request->getPost('cmServings');
        }
        $this->arResult['cmPriceService'] = 0;

        if ($props['RENT']['VALUE_ENUM_ID'] != '1') {
            $this->arResult['cmPriceService'] = $props['SERVICE_PRICE']['VALUE'];
        }
        $this->arResult['cmPrice'] = $price;
        $EUR = new Currency(Currency::EUR);
        $this->arResult['cmPriceResult'] = round($EUR->convertTo($price,Currency::UAH));
        $this->arResult['cmServings'] = $servings;

    }

    protected function getKoeffForCostPrice() {
        $koeff = App::$config->koeffForCostPriceCoffee;
        return $koeff;
    }

    protected function getMargin() {
        $margin = 0;
        $margin =  ($this->arResult['priceSale'] - $this->arResult['costPrice'])* $this->arResult['cmServings'] * 30 - $this->arResult['cmPriceService'];
        return $margin;
    }

    public function formatCurrency($value) {
        return $value;
    }

    /**
     *  http://dl3.joxi.net/drive/2018/03/07/0000/0874/13162/62/e2d3446c3d.jpg
     */
	public function executeComponent(){
        \Bitrix\Main\Loader::includeModule('iblock');
        $this->request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
		//$this->generateArOrder();
		//$this->generateArFilter();
		//$this->generateArSelect();
        $this->getDataCoffeMachine();
        $this->arResult['priceCofee'] = $this->getPriceCoffee();
        $this->arResult['priceSale'] = $this->getPriceSale();
        $this->arResult['costPrice'] = round($this->arResult['priceCofee'] / $this->getKoeffForCostPrice(), 2);
        $this->arResult['marga'] = $this->getMargin();
        $this->arResult['paybackPeriod'] = $this->arResult['cmPriceResult'] / $this->arResult['marga'];
        // round
        $this->arResult['paybackPeriod'] = round($this->arResult['paybackPeriod']);
        $this->includeComponentTemplate();
//		if ($this->startResultCache()){
//			$this->getItems();
//			$this->includeComponentTemplate();
//		}
	}
}
?>