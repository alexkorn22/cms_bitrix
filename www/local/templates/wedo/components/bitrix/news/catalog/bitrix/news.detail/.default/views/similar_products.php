<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#pohozchie-tovari" class="title-item" data-toggle="collapse" data-parent="#accordion-on-mobile">
            <div>Похожие товары</div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="pohozchie-tovari" class="collapse custom-collapse">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title">
                    <h2 class="title d-none d-md-block">Похожие товары</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="slider-similar-products">
                    <?$APPLICATION->IncludeComponent(
                        "wedo:similar_products",
                        "",
                        array(
                            "IBLOCK_TYPE" => "catalogs",
                            "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
                            "PRODUCT_ID" => $arResult['ID']
                        ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>