<div class="form-repair d-none d-lg-block">
    <form class="consultForms repair repair_bg-red<?=$arParams['Background']?> check-valid" id="<?= $arParams['FORM_ID'] ?>">
        <? require $_SERVER["DOCUMENT_ROOT"] . '/local/components/wedo/forms/views/msg.php'; ?>
        <? if( isset($arParams['orderType'])):?>
            <input type="hidden" name="orderType" value="<?=$arParams['orderType']?>">
        <? endif; ?>
        <? if( isset($arParams['telegramChatId'])):?>
            <input type="hidden" name="telegramChatId" value="<?=$arParams['telegramChatId']?>">
        <? endif; ?>
        <div id="content<?= $arParams['FORM_ID'] ?>">
            <div class="form-titile">
                <p>Заявка на диагностику</p>
            </div><?= bitrix_sessid_post() ?>
            <div class="form-content">
                <div class="form-group custom-form-group">
                    <input type="text" class="form-control custom-input" id="name" name="userName" placeholder="Имя (название, номер объекта)"
                           required>
                    <div class="invalid-feedback">
                        Вы не указали имя!
                    </div>
                </div>
                <div class="form-group custom-form-group">
                    <input type="text" class="form-control custom-input" id="phone" name="phone" placeholder="Телефон"
                           required>
                    <div class="invalid-feedback">
                        Вы не указали телефон!
                    </div>
                </div>
                <div class="form-group custom-form-group">
                    <input type="text" class="form-control custom-input" name="city" id="city" placeholder="Город (адрес)"
                           required>
                    <div class="invalid-feedback">
                        Вы не указали город!
                    </div>
                </div>
                <div class="form-group custom-form-group">
                    <textarea class="form-control custom-textarea" id="comment" name="comment" rows="3"
                              placeholder="Комментарий (краткое описание неисправности)"></textarea>
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Заказать диагностику (ремонт)
                </button>
            </div>
        </div>
    </form>
</div>

