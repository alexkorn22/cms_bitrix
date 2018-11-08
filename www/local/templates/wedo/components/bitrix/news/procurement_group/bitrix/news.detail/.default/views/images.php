<?
/** @var ViewTemplate $this */
/** @var array $arItem */
?>

<div class="image-product">
    <div class="row">
        <div class="col-md-9 col-lg-9">
            <div class="product-img-main">
                <? foreach ($arItem['MAIN_IMAGES'] as $img): ?>
                    <div class="img-main">
                        <img src="<?= $img['SRC'] ?>" class="img-fluid" alt="<?= $img['ALT'] ?>"
                             title="<?= $img['TITLE'] ?>">
                    </div>
                <? endforeach; ?>
            </div>
        </div>
        <div class="col-md-3 col-lg-2">
            <div class="product-img-preview">
                <? foreach ($arItem['MAIN_IMAGES'] as $img): ?>
                    <div class="preview">
                        <img src="<?= $img['SRC'] ?>" class="img-fluid" alt="<?= $img['ALT'] ?>"
                             title="<?= $img['TITLE'] ?>" itemprop="image">
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>