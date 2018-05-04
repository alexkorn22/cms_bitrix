<div class="col-lg-3 news-block">
    <div class="wrap-news">
    <a href="<?=$item['DETAIL_PAGE_URL']?>" onclick="#">
        <div class="news" style="background-image: url('<?=$item['IMG']['SRC']?>')">
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