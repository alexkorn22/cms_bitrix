<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#documents" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="documents">
            <div>Инструкции по эксплуатации <?=$arResult['NAME']?></div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="documents" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="section-title">
                    <h2 class="title">Инструкции по эксплуатации <?=$arResult["NAME"]?> </h2>
                </div>
            </div>
        </div>
        <div class="instructions">
            <?foreach($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $IdDoc):?>
                <? $file = CFile::GetFileArray($IdDoc); ?>
                <div class="row item">
                    <div class="col-lg-2">
                        <div class="icon">
                            <img src="<?=IMAGES_PATH?>/file_types/icon-pdf.png" alt="PDF">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="name">
                            <p><?=$file['FILE_NAME']?></p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="open">
                            <a href="<?=$file['SRC']?>" target="_blank">Открыть</a>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>

    </div>
</div>