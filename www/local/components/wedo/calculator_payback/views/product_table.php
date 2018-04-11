<?
$productId = $arParams['PRODUCT_ID'];
?>
<div class="collapse show" id="open-table-calculate">
    <div class="card card-body custom-card">
        <div class="wrapp-table">
            <div class="col-table"><p>Цена кофемашины  (грн)</p> <div><?=$arResult['cmPriceResult']?></div></div>
            <div class="col-table"><p>Себестоимость напитка (грн)</p> <div><?=$arResult['costPrice']?></div></div>
            <div class="col-table"><p>Цена реализации напитка (грн)</p> <div><?=App::$config->priceSaleCoffee?></div></div>
            <div class="col-table"><p>Количество порций в день</p> <div><?=$arResult['cmServings']?></div></div>
            <div class="col-table"><p>Сервисное обслуживание в месяц (грн)</p> <div><?=$arResult['cmPriceService']?></div></div>
            <div class="col-table"><p>Маржинальный доход в месяц (грн)</p> <div><span id="monthIncomeTable"><?=$arResult['marga']?></span></div></div>
            <div class="col-table"><p class="bold-col-table" >Срок окупаемости (месяцев)</p> <div  class="bold-col-table" id="paybackPeriod"><?=$arResult['paybackPeriod']?></div></div>
        </div>
    </div>
</div>