<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
    <?foreach($arResult['ITEMS'] as $item):?>
        <div class="similar-product">
            <a href="/catalog/<?=$item['ID']?>/">
                <img src="<?=CFile::GetPath($item['PREVIEW_PICTURE'])?>" alt="">
                <p><?=$item['NAME']?></p>
            </a>
        </div>
    <?endforeach;?>