

<div class="modal fade" id="<?=$arParams['FORM_ID']?>" tabindex="-1" role="dialog" aria-labelledby="order-consultation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
        <div class="modal-content custom-modal-content custom-modal-content_bg-red">
            <form class="consultForms consultation" id="<?=$arParams['FORM_ID']?>" >
                <?=bitrix_sessid_post()?>
                <input type="hidden" name="FORM_TYPE" value="<?=$arParams['FORM_TYPE']?>">
                <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
                <? if( isset($arParams['orderType'])):?>
                    <input type="hidden" name="orderType" value="<?=$arParams['orderType']?>">
                <? endif; ?>
                <? if( isset($arParams['telegramChatId'])):?>
                    <input type="hidden" name="telegramChatId" value="<?=$arParams['telegramChatId']?>">
                <? endif; ?>
                <input type="hidden" name="id_group" value="">
                <div id="content<?=$arParams['FORM_ID']?>">
                    <div class="modal-header custom-modal-header">
                        <h5 class="modal-title custom-modal-title">Введите пароль для доступа</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <div class="form-group">
                            <input type="password" class="form-control custom-input" name="password" placeholder="Пароль" required>
                            <div class="invalid-feedback">
                                Вы не указали пароль!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer custom-modal-footer">
                    <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Вход</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>