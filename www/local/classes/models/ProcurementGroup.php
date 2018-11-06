<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ProcurementGroup
{
    const NAME_SESSION = 'procurementGroupValid';
    public $id;
    public $password;
    public $link;
    public $name;
    protected $iblockId = '';

    public static function findById($id)
    {
        CModule::IncludeModule('iblock');
        $model = new self();
        $arFilter = array(
           // 'IBLOCK_ID ' =>$arParams['IBLOCK_ID'],
            'ID' => $id
        );
        $arSelect = array('ID','IBLOCK_ID','NAME', 'DETAIL_PAGE_URL',"PROPERTY_*");
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
            $model->name = $arFields['NAME'];
        }
        return $model;
    }

    public function addToSession()
    {
        $_SESSION[App::NAME_SESSION][ProcurementGroup::NAME_SESSION][] = $this->id;
    }

    public static function issetGroupInSession($groupId)
    {
        if (!isset($_SESSION[App::NAME_SESSION][self::NAME_SESSION])) {
            return false;
        }
        return in_array($groupId, $_SESSION[App::NAME_SESSION][self::NAME_SESSION]);
    }

}