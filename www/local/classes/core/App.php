<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class App{

    const NAME_SESSION = 'art';

    /**
     * @var DataStore
     */
    public static $ds;
    /**
     * @var Debug
     */
    public static $debug;
    /**
     * @var Config
     */
    public static $config;



    public static function Init() {
        App::$ds = new DataStore();
        App::$debug = new Debug();
        App::$config = new Config();

    }

    public static function Header() {
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        if ($request->get('clearSession')) {
            $_SESSION[self::NAME_SESSION] = [];
        }
    }

}