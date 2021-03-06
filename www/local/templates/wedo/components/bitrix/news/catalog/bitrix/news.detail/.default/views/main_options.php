<div id="osnovnoe">
    <div class="row">
        <div class="col-lg-6">
            <div class="image-product">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="product-img-main">
                            <? foreach ($arResult['MAIN_IMAGES'] as $img): ?>
                                <div class="img-main">
                                    <img src="<?= $img['SRC'] ?>" class="img-fluid" alt="<?= $img['ALT'] ?>"
                                         title="<?= $img['TITLE'] ?>">
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div class="product-img-preview">
                            <? foreach ($arResult['MAIN_IMAGES'] as $img): ?>
                                <div class="preview">
                                    <img src="<?= $img['SRC'] ?>" class="img-fluid" alt="<?= $img['ALT'] ?>"
                                         title="<?= $img['TITLE'] ?>" itemprop="image">
                                </div>
                            <? endforeach; ?>
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
                            <? foreach ($arResult['PROPERTIES'] as $prop): ?>
                                <? if (!empty($prop['VALUE']) && $prop['SORT'] < 5000): ?>
                                    <p class="item"><span><?= $prop['NAME'] ?></span><span><?= $prop['VALUE'] ?></span>
                                    </p>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <? if ($isSale):?>
                        <div class="product-price">
                            <p><?= $arResult['PRICE_UAH'] ?> грн.<span>*</span></p>
                            <span itemprop="price" class="d-none"><?= $arResult['PRICE_UAH'] ?></span>
                            <span itemprop="priceCurrency" class="d-none">UAH</span>
                        </div>
                    <? else:?>
                        <div class="product-price product-price_null">

                        </div>
                    <? endif;?>

                </div>
                <div class="product-button">

                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "catalog_form",
                        Array(
                            'form'=>'modalMain',
                            'btnColor' =>'red',
                            "orderType" => "Заявка на консультацию (".$arResult['NAME'].")"
                        )
                    );
                    ?>
                </div>
                <? if ($isSale):?>
                    <div class="price-comment">
                        <p><span>*</span> Цена за базовую модель 1</p>
                        <p>Цена на другие модели может отличаться</p>
                    </div>
                <? else:?>
                    <div class="price-comment price-comment_null">
                    </div>
                <? endif;?>

            </div>
        </div>
    </div>
    <div class="product-description">
        <div class="row">
            <div class="col">
                <p class="title">Описание</p>
                <p class="text toggle-text" itemprop="description"><?= $arResult['PREVIEW_TEXT'] ?></p>
            </div>
        </div>
    </div>

</div>
