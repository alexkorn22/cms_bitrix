<?
/**
 * @var $arResult
 * @var CBitrixComponentTemplate $this
 * @var array $product
 * @var float $cmPriceService - сервисное обслуживание в месяц
 * @var float $cmPrice - цена кофемашини
 * @var float $cmServings - количество порций в день
 * @var float $priceCofee - цена за 1 кг. кофе
 * @var float $priceSale - цена реализации напитка
 * @var float $costPrice - себестоимость напитка
 * @var float $marga - маржа в месяц
 * @var float $paybackPeriod - срок окупаемости
 */
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
extract($arResult);

?>
<div id="calculator-payback">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <form>
                            <br>
                            <div class="form-group">
                                <? if (isset($arResult['products'])):?>
                                    <select class="custom-select" id="productId">
                                        <? foreach($arResult['products'] as $item):?>
                                            <option
                                                    value="<?=$item['ID']?>"
                                                <? if ($item['ID'] == $product['ID']):?>
                                                    selected
                                                <? endif;?>
                                                    data-servings="<?=$item['servings']?>"
                                            >
                                                <?=$item['NAME']?>
                                            </option>
                                        <? endforeach;?>

                                    </select>
                                <? endif;?>

                            </div>
                            <div class="form-group">
                                <label for="priceCofee">Цена за 1 кг. кофе</label>
                                <input type="text" class="form-control" id="priceCofee" value="<?=$priceCofee?>">
                            </div>
                            <div class="form-group">
                                <label for="priceSale">Цена реализации напитка</label>
                                <input type="text" class="form-control" id="priceSale" value="<?=$priceSale?>">
                            </div>
                            <div class="form-group">
                                <label for="cmServings">Количество порций в день</label>
                                <input type="text" class="form-control" id="cmServings" value="<?=$cmServings?>">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="result">
                    <?
                    require ROOT . $this->getComponent()->getPath(). '/views/result.php';
                    ?>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    new CalculatorPayback("<?=$this->getComponent()->getPath() . "/ajax.php"?>");
</script>