<form class="consultForms subscribe check-valid" id="<?=$arParams['FORM_ID']?>">
    <div class="row">
        <?=bitrix_sessid_post()?>
        <div class="text-left">
            <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
        </div>
        <? if( isset($arParams['orderType'])):?>
            <input type="hidden" name="orderType" value="<?=$arParams['orderType']?>">
        <? endif; ?>
        <? if( isset($arParams['telegramChatId'])):?>
            <input type="hidden" name="telegramChatId" value="<?=$arParams['telegramChatId']?>">
        <? endif; ?>
        <div id="content<?=$arParams['FORM_ID']?>">
            <div class="col-sm-12 col-lg-12">
                <div class="form-group custom-form-group">
                    <input type="email" class="form-control custom-input" id="Email" name="email" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Вы не указали Email!
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <button type="submit" class="btn btn_red btn_small-mobile btn_font-small">Подписаться</button>
            </div>
        </div>
    </div>
</form>