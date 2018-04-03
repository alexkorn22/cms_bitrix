<div class="col-lg-6 col-xl d-none d-lg-block">
    <a href="#" class="wrap-link-main-news">
        <div class="main-news" style="background-image: url('<?=$item['imageSrc']?>')">
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
<div class="col-lg-3 d-block d-lg-none">
    <div class="wrap-news">
        <a href="#">
            <div class="news" style="background-image:  url('<?=$item['imageSrc']?>')">
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
                    <?=$item['PROPERTIES']['DESCRIPTION']?>
                </p>
            </div>
        </a>
    </div>
</div>
<?

