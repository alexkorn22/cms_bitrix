<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ProcurementGroup
{
    public $id;
    public $password;
    public $link;
    protected $iblockId = '';


    public static function findById($id)
    {
        CModule::IncludeModule('iblock');
        $model = new self();
        $arFilter = array(
           // 'IBLOCK_ID ' =>$arParams['IBLOCK_ID'],
            'ID' => $id
        );
        $arSelect = array('ID','IBLOCK_ID', 'DETAIL_PAGE_URL',"PROPERTY_*");
        $res = CIBlockElement::GetList(
            array(),
            $arFilter,
            false,
            false,
            $arSelect
        );
        if($ob = $res->GetNextElement()) {
            $arFields            = $ob->GetFields();
            $arProps               = $ob->GetProperties();
            $model->id = $arFields['ID'];
            $model->link = $arFields['DETAIL_PAGE_URL'];
            $model->password = $arProps['password_enter']['VALUE'];
        }
        return $model;
    }



}