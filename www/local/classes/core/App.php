<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class App{
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

}