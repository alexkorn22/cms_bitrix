<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
extract($arResult);
$help = '
                    $cmPriceService - сервисное обслуживание в месяц
                    $cmPrice - цена кофемашини
                    $cmServings - количество порций в день
                    $priceCofee - цена за 1 кг. кофе
                    $priceSale - цена реализации напитка
                    $costPrice - себестоимость напитка
                    $marga - маржа в месяц
                    $paybackPeriod - срок окупаемости
                ';

require ROOT . $this->getComponent()->getPath(). '/views/'.$arParams['VIEW'].'.php';

?>
