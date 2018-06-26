<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

    <div class="f-menu left">
        <ul>
            <? foreach($arResult as $arItem):?>
                <?php
                $aClass = '';
                if ($arItem["LINK"]=='/about/contacts/#service-centers') {
                    $aClass = 'menuLinkService';
                }
                ?>
                <li class="item <?if ($arItem["SELECTED"]):?>active<?endif;?>">
                    <? if($arItem["SELECTED"]) :?>
                        <span><?=$arItem["TEXT"]?></span>
                    <?else:?>
<!--                        menuLink-->
                        <a class="<?=$aClass?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    <?endif;?>
                </li>

            <?endforeach?>
        </ul>
    </div>

<?endif?>