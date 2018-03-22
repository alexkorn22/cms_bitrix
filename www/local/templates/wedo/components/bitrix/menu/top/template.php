<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

    <div class="f-menu right">
        <ul>
            <? foreach($arResult as $arItem):?>
                <li class="item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endforeach?>
        </ul>
    </div>

<?endif?>