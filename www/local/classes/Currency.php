<?php

use Bitrix\Highloadblock\HighloadBlockTable;

class Currency
{
    private $currency;
    private $id;
    private $rate ;
    private $multiplicity ;

    const EUR = 5;
    const USD = 6;
    const UAH = 7;

    public function __construct($idCurrency)
    {
        $this->id   = $idCurrency;
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
        $arHLBlock          = HighloadBlockTable::getById(1)->fetch();
        $obEntity           = HighloadBlockTable::compileEntity($arHLBlock);
        // git list :
        $strEntityDataClass = $obEntity->getDataClass();
        $rsData             = $strEntityDataClass::getList();
        while ($arItem = $rsData->Fetch()) {
            if($arItem['ID'] == $this->id){
                $this->rate         = $arItem['UF_RATE'];
                $this->multiplicity = $arItem['UF_MULTIPLICITY'];
            }
        }
    }

}


