<?php

use Bitrix\Highloadblock\HighloadBlockTable;

class Currency
{
    private $currency;
    private $id;
    private $code;
    private $rate ;
    private $multiplicity ;

    const EUR = 'UF_EUR';
    const USD = 'UF_USD';
    const UAH = 'UF_UAH';

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


    public static function convert($amount= 1,$from,$to){
       $convertedPrice = $amount * ( ($from->rate/$from->multiplicity) / ($to->rate/$to->multiplicity) );
       return $convertedPrice;
    }

    public function setCurrencyData(){
        $arHLBlock          = HighloadBlockTable::getById(App::$config->PRICES_HLBLOCK)->fetch();
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


