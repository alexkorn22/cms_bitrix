<div class="row">
    <div class="col">
        <div class="slider-models-for-rent">
            <? foreach ($arResult['PRODUCTS'] as $item):?>
                <div class="models">
                    <a href="<?=$item['DETAIL_PAGE_URL']?>/">
                        <img src="<?=$item['IMAGE_SRC']?>" alt="">
                        <p><?=$item['NAME']?></p>
                    </a>
                </div>
            <? endforeach;?>
        </div>
    </div>
</div>