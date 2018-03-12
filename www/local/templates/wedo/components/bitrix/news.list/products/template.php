<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog Coffee machines</title>
</head>
<body>
        <? foreach ($arResult['ITEMS'] as $item ):?>
            <div style="border:2px solid lightgray; padding: 10px;">
                <a href="/catalog?productId=<?=$item['ID']?>&clear_cache=Y" >
                    <img src="<?=$item['PREVIEW_PICTURE']['SRC'] ?>" style="width:13%;">
                </a>
                <h2><?=$item['NAME']?></h2>
                <p>Price : <?=$arResult[$item['ID']]['PRICE']?> <?=$arResult[$item['ID']]['CURRENCY']?> </p>
                <b>Characteristics</b> :<br/>
                Количество порций в день : <?=$arResult[$item['ID']]['NUM_SERVINGS']?><br/>
                Возможность арендовать   : <?=$arResult[$item['ID']]['RENT']?>
            </div><br/>
        <?endforeach;?>

</body>
</html>