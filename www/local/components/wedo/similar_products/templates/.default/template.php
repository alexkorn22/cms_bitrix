<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
    <?foreach($arResult['ITEMS'] as $item):?>
        <div class="similar-product">
            <a href="<?=$item['DETAIL_PAGE_URL']?>">
                <img src="<?=$item['IMAGE_SRC']?>" alt="<?=$item['NAME']?>">
                <p><?=$item['NAME']?></p>
            </a>
        </div>
    <?endforeach;?>