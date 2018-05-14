<?
use Bitrix\Main\Application;
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
$req = Application::getInstance()->getContext()->getRequest();

?>

<div id="payback-calculator" >
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="section-title">
                <h2 class="title">Кофемашина в аренду: как рассчитать прибыль?</h2>
            </div>
            <div class="section-description">
                <p class="descr">Воспользуйтесь калькулятором, чтобы спрогнозировать ваш ежемесячный доход от продажи кофе</p>
            </div>
        </div>
    </div>
        <div class="calculate-raschet">
            <div class="row justify-content-center">

                <div class="col-12 col-lg">
                        <? if (isset($arResult['products'])): ?>
                            <div class="wrap-select">
                                <div class="form-group">
                                    <label for="productId">Кофемашина</label>
                                    <select class="form-control custom-select" id="productId">
                                        <? foreach ($arResult['products'] as $item): ?>
                                            <? if($item['RENT'] == 'RENT_TRUE'):?>
                                                <option
                                                        value="<?= $item['ID'] ?>"
                                                    <? if ($item['ID'] == $product['ID'] || $req->getQuery('CM') == $item['ID']): ?>
                                                        selected
                                                    <? endif; ?>
                                                        data-servings="<?= $item['servings'] ?>"
                                                >
                                                    <?= $item['NAME'] ?>
                                                </option>
                                            <?endif;?>
                                        <? endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        <? endif; ?>
                </div>
                <div class="col-12 col-lg">
                    <div class="wrap-input">
                        <div class="form-group">
                            <label for="fild-coffee">Цена 1 кг. кофе (грн)</label>
                            <input type="text" class="form-control custom-input" id="priceCofee" value="<?=$priceCofee?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="wrap-input">
                        <div class="form-group">
                            <label for="fild-realizaciy">Цена реализации (грн)</label>
                            <input type="text" class="form-control custom-input" id="priceSale" value="<?=$priceSale?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="wrap-input">
                        <div class="form-group">
                            <label for="fild-porcii">Количество порций в день*</label>
                            <input type="text" class="form-control custom-input" id="cmServings" value="<?=$cmServings?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="wrap-input srok-okupaemosti">
                        <div class="form-group">
                            <label for="fild-srok-okupaemosti">Маржинальный доход в месяц (грн)</label>
                            <div class="custom-input" id="monthIncome"><?=$arResult['marga']?></div>
                        </div>
                        <p>
                            <a class="" data-toggle="collapse" href="#open-table-calculate" role="button" aria-expanded="false" aria-controls="open-table-calculate">
                                Подробнее
                            </a>
                        </p>
                    </div>
                </div>

                <div id="result">
                    <div class="collapse" id="open-table-calculate">
                        <?
                        require ROOT . $this->getComponent()->getPath(). '/views/lease_table.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="comment-table">
    <p>* Рекомендованное количество порций для данной кофемашины - <span id="recommendedCubsDay"><?=$cmServings?></span> порций в день</p>
</div>

<script>
    new CalculatorPayback("<?=$this->getComponent()->getPath() . "/ajax.php"?>",'','lease_table');
</script>