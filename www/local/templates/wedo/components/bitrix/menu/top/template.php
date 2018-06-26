<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="f-menu right">
        <ul>
            <? foreach($arResult as $arItem):?>
                <li class="item <?if ($arItem["SELECTED"]):?>active<?endif;?>">
                    <? if($arItem["SELECTED"]) :?>
                        <span><?=$arItem["TEXT"]?></span>
                    <? else:?>
                        <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    <?endif;?>
                </li>
            <?endforeach?>
        </ul>
    </div>

<?endif?>