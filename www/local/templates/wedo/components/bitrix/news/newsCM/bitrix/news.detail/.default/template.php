<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container">
    <div class="content-news">
        <div class="row">
            <div class="col">
                <div class="main-news-img" style="background-image: url('<?=$arResult['DETAIL_PICTURE']['SRC']?>')">
                    <div class="date-news">
                        <p><?=$arResult['time']['day']?>:</p>
                        <p><?=$arResult['time']['month']?></p>
                        <p><?=$arResult['time']['year']?></p>
                    </div>
                </div>
                <div class="title-in-news">
                    <p><?=$arResult['NAME']?></p>
                </div>
                <div class="text-news">
                    <p><?=$arResult['PREVIEW_TEXT']?></p>

                    <div class="img-in-text">
                        <img src="../../images/product/cm5.png">
                        <img src="../../images/product/cm5.png">
                        <img src="../../images/product/cm5.png">
                    </div>

                    <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более
                        менее осмысленного текста рыбы на русском языке, а начинающему <b>оратору отточить</b> навык публичных
                        выступлений в домашних условиях. <br><br> При создании генератора мы использовали небезизвестный
                        универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти
                        предложений в абзаце, что позволяет сделать текст более привлекательным и живым для Сайт
                        рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более
                        менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык
                        публичных выступлений в домашних условиях. При создании генератора мы использовали
                        небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом
                        от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным
                        и живым для <b>визуально-слухового восприятия</b>.</p>

                    <div class="img-in-text">
                        <img src="../../images/bg_photo_9000s.jpg">
                    </div>

                    <p>По своей сути рыбатекст является
                        альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение
                        при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском
                        языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.<br><br> По своей сути рыбатекст является
                        альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение
                        при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском
                        языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="news-bottom-tag">
        <div class="tag-line">
            <div class="row">
                <div class="col-sm-12 col-lg-9">
                    <nav class="priority-nav">
                        <ul class='tags-blog'>
                            <li><a href='#'>Обзоры</a></li>
                            <li><a href='#'>Рекомендации по эксплуатации</a></li>
                            <li><a href='#'>Сравнения</a></li>
                            <li><a href='#'>Инструкции по применению</a></li>
                            <li><a href='#'>Обслуживание и ремонт</a></li>
                        </ul>
                        <button class="more-tags">... Ещё</button>
                        <ul class='hidden-tags-blog hidden'></ul>
                    </nav>
                </div>
                <div class="col-cm-12 col-lg-3">
                    <div class="back-to-news-list">
                        <button class="btn btn_red btn_small-mobile btn_font-small" type="button">К списку новостей</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>