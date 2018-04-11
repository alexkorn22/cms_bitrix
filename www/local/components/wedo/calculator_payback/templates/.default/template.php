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
                <div class="calculate-raschet">
                    <div class="row justify-content-center">
                        <? if (isset($arResult['products'])): ?>
                            <div class="form-group">
                                    <select class="custom-select" id="productId">
                                        <? foreach ($arResult['products'] as $item): ?>
                                            <option
                                                    value="<?= $item['ID'] ?>"
                                                <? if ($item['ID'] == $product['ID']): ?>
                                                    selected
                                                <? endif; ?>
                                                    data-servings="<?= $item['servings'] ?>"
                                            >
                                                <?= $item['NAME'] ?>
                                            </option>
                                        <? endforeach; ?>
                                    </select>
                            </div>
                        <? endif; ?>
                            <div class="col-lg-3">
                                <div class="wrap-input">
                                    <div class="form-group">
                                        <label for="fild-coffee">Цена 1 кг. кофе (грн) *</label>
                                        <input type="text" class="form-control custom-input" id="priceCofee" value="<?=$priceCofee?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="wrap-input">
                                    <div class="form-group">
                                        <label for="fild-realizaciy">Цена реализации (грн) *</label>
                                        <input type="text" class="form-control custom-input" id="priceSale" value="<?=$priceSale?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="wrap-input">
                                    <div class="form-group">
                                        <label for="fild-porcii">Количество порций в день *</label>
                                        <input type="text" class="form-control custom-input" id="cmServings" value="<?=$cmServings?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="wrap-input srok-okupaemosti">
                                    <div class="form-group">
                                        <label for="fild-srok-okupaemosti">Срок окупаемости (месяцев)</label>
                                        <input type="text" class="form-control custom-input" id="paybackPeriod" value="<?=$paybackPeriod?>">
                                    </div>
                                    <p>
                                        <a class="" data-toggle="collapse" href="#open-table-calculate" role="button" aria-expanded="false" aria-controls="open-table-calculate">
                                            Подробнее
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>

                <div id="result">
                    <div class="collapse" id="open-table-calculate">
                        <?
                            require ROOT . $this->getComponent()->getPath(). '/views/product_table.php';
                        ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    new CalculatorPayback("<?=$this->getComponent()->getPath() . "/ajax.php"?>",'','product_table');
</script>