<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<? $curPage = $APPLICATION->GetCurPage(); ?>

    <div class="f-menu left">
        <ul>
            <? foreach($arResult as $arItem):?>
                <? if($curPage == $arItem["LINK"]) :?>
                    <li class="item"><a class="menuLink" href="#"><?=$arItem["TEXT"]?></a></li>
                <? else:?>
                    <li class="item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?endif;?>
            <?endforeach?>
        </ul>
    </div>

<?endif?>