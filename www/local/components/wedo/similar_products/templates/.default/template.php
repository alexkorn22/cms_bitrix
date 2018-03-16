<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<div class="row">
    <?foreach($arResult['ITEMS'] as $item):?>
        <div class="col-md-4 text-center border border-light">
            <a href="/catalog/<?=$item['ID']?>/"><img src="<?=CFile::GetPath($item['PREVIEW_PICTURE'])?>" width="200" height="200"></a>
            <h2><?=$item['NAME']?></h2>
            <h2><?=$item['PRICE']?> EUR</h2>
            <a href="/catalog/<?=$item['ID']?>/" class="btn btn-primary">Подробнее</a>
        </div>
    <?endforeach;?>
</div>