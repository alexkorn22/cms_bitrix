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
                    <h1><?=$arResult['NAME']?></h1>
                </div>
                <div class="text-news">
                    <p><?=$arResult['DETAIL_TEXT']?></p>
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
                            <? foreach ($arResult['TAGS'] as $name => $link):?>
                                <li><a href='<?=$link?>' onclick="#"> <?=$name?> </a></li>
                            <? endforeach;?>
                        </ul>
                        <button class="more-tags">... Ещё</button>
                        <ul class='hidden-tags-blog hidden'></ul>
                    </nav>
                </div>
                <div class="col-cm-12 col-lg-3">
                    <div class="back-to-news-list">
                        <a href="<?=$arParams['SECTION_URL']?>" class="btn btn_red btn_small-mobile btn_font-small">К списку новостей</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>