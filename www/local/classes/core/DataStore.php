<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * Class DataStore
 * @property bool useFooterTabs;
 * @property array callBack;
 * @property string formNumber;
 * @property tmp;
 */
class DataStore{
    protected $data = [
        "formNumber" => 1
    ];

    public function __get($name){
        if (!isset($this->data[$name])) {
            return null;
        }
        return $this->data[$name];
    }

    public function __set($name, $value){
        $this->data[$name] = $value;
    }

}