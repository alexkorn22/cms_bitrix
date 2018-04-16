<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#raschet-okup" class="title-item" data-toggle="collapse" data-parent="#accordion-on-mobile">
            <div>Расчёт окупаемости</div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="raschet-okup" class="collapse custom-collapse">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title">
                    <h2 class="title d-none d-md-block">Расчёт окупаемости</h2>
                </div>
                <div class="section-description">
                    <p class="descr">Воспользуйтесь калькулятором, чтобы спрогнозировать срок окупеаемости кофемашины </p>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "wedo:calculator_payback",
            "",
            Array(
                "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
                "IBLOCK_TYPE" => "catalogs",
                "PRODUCT_ID" => $arResult['ID']
            )
        );?>
    </div>
</div>