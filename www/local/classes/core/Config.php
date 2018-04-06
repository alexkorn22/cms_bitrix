<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * Class Config
 * @property bool debug;
 * @property string priceCofeeKg;
 * @property string priceSaleCoffee;
 * @property string koeffForCostPriceCoffee;
 * @property string coffeeMachineIblockId;
 * @property string pricesHighBlockId;
 * @property string newsIblockId;
 * @property string telephone;
 * @property string email;
 * @property string facebookLink;
 * @property string instagramLink;
 * @property string youtubeLink;
 * @property string apiKeyMainOfficeMap;
 * @property string apiKeyOtherOfficesMap;
 * @property array officesList;
 * @property array mainOffice;
 */
class Config
{
    protected $data = [];
    public $debug = false;
    protected $default = [
        'coffeeMachineIblockId' => 12,
        'newsIblockId' => 13,
        'pricesHighBlockId' => 1,
        'priceCofeeKg' => 600, // цена за 1 кг. кофе
        'priceSaleCoffee' => 12, // цена реализации напитка
        'koeffForCostPriceCoffee' => 120, // коэффициент для расчета себестоимости одной чашки кофе
        'telephone' => '+38 (050) 449-06-00',
        'email' => 'cms@cms.com.ua',
        'facebookLink' => '#',
        'instagramLink' => '#',
        'youtubeLink' => '#',
        'apiKeyMainOfficeMap'=>'AIzaSyDZWJcFQabrMDUPmXaiU7wlZ74dzm_virI',
        'apiKeyOtherOfficesMap'=>'AIzaSyAz1W2wSLUwOGipJpjwRI0HeZm69dSLeBE',
        'officesList'=>[],
        'mainOffice'=>[]
    ];

    public function __construct(){
        $debug = COption::GetOptionString("grain.customsettings", 'debug');

        if ($debug == 'Y') {
            $this->debug = true;
        }
        $this->readFileConfig();
    }

    protected function readFileConfig(){
//        if (!$this->debug) {
//            return;
//        }
        $config = include_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/config.php';
        if (!empty($config)) {
            foreach ($config as $key => $item) {
                if ($key == 'debug') {
                    continue;
                }
                $this->data[$key] = $item;
            }
        }
    }


    public function __get($name){
        if (!isset($this->data[$name])) {
            $this->data[$name] = COption::GetOptionString("grain.customsettings", $name);
        }
        if (empty($this->data[$name])) {
            $this->data[$name] = $this->getDefault($name);
        }
        return $this->data[$name];
    }

    public function setDebug($debug){
        $adminDebug = "N";
        if($debug){
            $adminDebug = "Y";
        }

        $this->debug = $debug;
        COption::SetOptionString("grain.customsettings",'debug', $adminDebug);

    }


    protected function getDefault($name)
    {
        if (isset($this->default[$name])) {
            return $this->default[$name];
        }
        return NULL;
    }


}