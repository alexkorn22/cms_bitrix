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

$columns = 3 ; // elements/row
$i = 1; //  elements
$rows = 1; // rows
$banner = true;
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="section-title blog">
                <h1 class="title">Блог</h1>
            </div>
        </div>
    </div>
    <div class="tag-line">
        <div class="row d-none d-md-block">
            <div class="col">
                <nav class="priority-nav">
                    <ul class='tags-blog'>
                        <? foreach ($arResult['TAGS'] as $name => $link):?>
                            <li><a class="<?if($arResult['CURR_TAG'] == $name):?> active-tag <?endif;?> " href='<?=$link?>'> <?=$name?> </a><a href="<?=$arParams['SECTION_URL']?>" class="<?if($arResult['CURR_TAG'] == $name):?> close-tag <?endif;?>"></a></li>
                        <? endforeach;?>
                    </ul>
                    <button class="more-tags">... Ещё</button>
                    <ul class='hidden-tags-blog hidden'></ul>
                </nav>
            </div>
        </div>
        <div class="row d-block d-md-none">
            <div class="col">
                <div class="dropdown custom-dropdown-tag">
                    <button class="btn btn_transparent dropdown-toggle" type="button" id="dropdownMenuTag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Темы <span id="meatBalls" <?if(!empty($arResult['CURR_TAG'])):?>class="redColor"<?endif;?> >...</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-tag" aria-labelledby="dropdownMenuTag">
                        <? foreach ($arResult['TAGS'] as $name => $link):?>
                            <li class="dropdown-item dropdown-item-tag<?if($arResult['CURR_TAG'] == $name):?> active <?endif;?>"><a href='<?=$link?>'> <?=$name?></a>
                                <?if($arResult['CURR_TAG'] == $name):?>
                                    <a href="<?=$arParams['SECTION_URL']?>" class="close-tag"></a>
                                <?endif;?>
                            </li>
                        <? endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-line">
            <div class="row">
                <? foreach ($arResult['ITEMS'] as $item):?>
                    <? $oddRows = $rows%2 != 0 ; ?>
                    <?if($oddRows && $i==1 || !$oddRows && $i == $columns):?> <!-- if $rows is odd and $i==1 -->
                    <!-- Начало первой новости -->
                        <?  include ROOT.$this->GetFolder() .'/views/main_news.php' ?>
                    <!-- Конец первой новости -->
                    <? else:?>
                        <?  include ROOT.$this->GetFolder() .'/views/news.php' ?>
                    <? endif;?>
                    <?
                        if($i==$columns){
                            $rows++;
                            if($banner){
                                include ROOT.$this->GetFolder() .'/views/banner.php';
                                $banner = false;
                            }
                            $i = 0 ;
                        }
                        $i++;
                    ?>
                <? endforeach;?>
            </div>
    </div>
</div>

<? if(count($arResult['ITEMS']) < 3 ): ?>
    <?  include ROOT.$this->GetFolder() .'/views/banner.php'; ?>
<? endif;?>

<div class="container-fluid">
   <?=$arResult['NAV_STRING']?>
</div>
<script>
    TagsBlog();
</script>