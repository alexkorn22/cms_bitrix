<?php

use Bitrix\Highloadblock\HighloadBlockTable;

class Currency
{
    private $currency;
    private $id;
    private $code;
    private $rate ;
    private $multiplicity ;

    const EUR = 'EUR';
    const USD = 'USD';
    const UAH = 'UAH';

    public function __construct($currencyCode)
    {
        $this->code   = $currencyCode;
        $this->setCurrencyData();
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getRate(){
        return $this->rate;
    }


    public static function convert($amount= 0,$from,$to){
       $convertedPrice = $amount * ( ($from->rate/$from->multiplicity) / ($to->rate/$to->multiplicity) );
       return $convertedPrice;
    }

    public function convertTo($amount,$currency){
        $currencyObj = new Currency($currency);
        return Currency::convert($amount,$this,$currencyObj);
    }

    public function setCurrencyData(){
        $arHLBlock          = HighloadBlockTable::getById(App::$config->pricesHighBlockId)->fetch();
        $obEntity           = HighloadBlockTable::compileEntity($arHLBlock);
        // git list :
        $strEntityDataClass = $obEntity->getDataClass();
        $rsData             = $strEntityDataClass::getList();
        while ($arItem = $rsData->Fetch()) {
            if($arItem['UF_CODE'] == $this->code){
                $this->rate         = $arItem['UF_RATE'];
                $this->id           = $arItem['ID'];
                $this->multiplicity = $arItem['UF_MULTIPLICITY'];
            }
        }
    }

}


