<div class="modal fade" id="order-lease" tabindex="-1" role="dialog" aria-labelledby="order-lease" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
            <div class="modal-content custom-modal-content custom-modal-content_bg-red">
                <form class="consultForms repair check-valid" id="<?=$arParams['FORM_ID']?>"><?=bitrix_sessid_post()?>
                    <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
                    <? if( isset($arParams['orderType'])):?>
                        <input type="hidden" name="orderType" value="<?=$arParams['orderType']?>">
                    <? endif; ?>
                    <? if( isset($arParams['telegramChatId'])):?>
                        <input type="hidden" name="telegramChatId" value="<?=$arParams['telegramChatId']?>">
                    <? endif; ?>
                    <div id="content<?=$arParams['FORM_ID']?>">
                        <div class="modal-header custom-modal-header">
                            <h5 class="modal-title custom-modal-title">Заявка на аренду</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control custom-input" id="name3" name="userName" placeholder="Имя" required>
                                <div class="invalid-feedback">
                                    Вы не указали имя!
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control custom-input" id="phone3" name="phone" placeholder="Телефон" required>
                                <div class="invalid-feedback">
                                    Вы не указали телефон!
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control custom-input" id="city3" name="city" placeholder="Город" required>
                                <div class="invalid-feedback">
                                    Вы не указали город!
                                </div>
                            </div>
                            <div class="form-group custom-form-group">
                                <textarea class="form-control custom-textarea" id="comment3" name="comment" rows="3" placeholder="Комментарий"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer custom-modal-footer">
                            <button type="submit" class="btn btn_black btn_small-mobile ">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>