<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#lease-product" class="title-item" data-toggle="collapse" data-parent="#accordion-on-mobile">
            <div>Аренда <?=$arResult['NAME']?></div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="lease-product" class="collapse custom-collapse">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title">
                    <h2 class="title d-none d-md-block">Аренда <?=$arResult["NAME"]?></h2>
                </div>
                <div class="section-description">
                    <p class="descr">Вы можете взять кофемашину <?=$arResult["NAME"]?> в аренду на выгодных условиях.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="order-consultation">
                    <a class="btn btn_red btn_font-small btn_small-mobile" href="/lease?CM=<?=$arResult['NAME']?>">Подробнее об условиях аренды</a>
                </div>
            </div>
        </div>
    </div>
</div>