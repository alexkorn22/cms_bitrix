<div id="osnovnoe">
    <div class="row">
        <div class="col-lg-6">
            <div class="image-product">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="product-img-main">
                            <? foreach($arResult['MAIN_IMAGES'] as $img):?>
                                <div class="img-main">
                                    <img src="<?=$img['SRC']?>" class="img-fluid" alt="<?=$arResult['NAME']?>">
                                </div>
                            <? endforeach;?>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div class="product-img-preview">
                            <? foreach($arResult['MAIN_IMAGES'] as $img):?>
                                <div class="preview">
                                    <img src="<?=$img['SRC']?>" class="img-fluid" alt="<?=$arResult['NAME']?>">
                                </div>
                            <? endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-product">
                <div class="product-charact">
                    <p class="title-charact">Характеристики</p>
                    <div class="characteristics">
                        <div class="list-group">
                            <?foreach($arResult['PROPERTIES'] as $prop):?>
                                <?if(!empty($prop['VALUE']) && $prop['SORT'] < 5000 ):?>
                                    <p class="item"><span><?=$prop['NAME']?></span><span><?=$prop['VALUE']?></span></p>
                                <?endif;?>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="product-price">
                    <p><?=$arResult['PRICE_UAH']?> грн. <span>*</span></p>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn_red btn_small-mobile" data-toggle="modal" data-target="#order-consultation">Заказать консультацию</button>
                </div>
                <div class="price-comment">
                    <p><span>*</span> Цена за базовую модель 1</p>
                    <p>Цена на другие модели может отличаться</p>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description">
        <div class="row">
            <div class="col">
                <p class="title">Описание</p>
                <p class="text toggle-text"><?=$arResult['PREVIEW_TEXT']?></p>
            </div>
        </div>
    </div>

</div>