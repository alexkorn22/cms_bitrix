<div class="col-lg-6 d-none d-lg-block main-news-block">
    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="wrap-link-main-news">
        <div class="main-news" style="background-image: url('<?=$item['PREVIEW_PICTURE']['SRC']?>')">
            <div class="date-news">
                <p><?=$item['time']['day']?>:</p>
                <p><?=$item['time']['month']?></p>
                <p><?=$item['time']['year']?></p>
            </div>
            <div class="title">
                <p><?=$item['NAME']?></p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 d-block d-lg-none main-news-block">
    <div class="wrap-news">
        <a href="<?=$item['DETAIL_PAGE_URL']?>">
            <div class="news" style="background-image:  url('<?=$item['PREVIEW_PICTURE']['SRC']?>')">
                <div class="date-news date-news_small">
                    <p><?=$item['time']['day']?>:</p>
                    <p><?=$item['time']['month']?></p>
                    <p><?=$item['time']['year']?></p>
                </div>

            </div>
            <div class="title-news">
                <p><?=$item['NAME']?></p>
            </div>
            <div class="descr-news">
                <p>
                    <?=$item['PREVIEW_TEXT']?>
                </p>
            </div>
        </a>
    </div>
</div>
<?

