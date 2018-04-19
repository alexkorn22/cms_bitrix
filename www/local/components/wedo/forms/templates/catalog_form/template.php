

<button type="button" class="btn btn_<?=$arParams['btnColor']?> btn_small-mobile" data-toggle="modal" data-target="#<?=$arParams['form']?>order-consultation">Заказать консультацию</button>

<div class="modal fade" id="<?=$arParams['form']?>order-consultation" tabindex="-1" role="dialog" aria-labelledby="order-consultation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
        <div class="modal-content custom-modal-content custom-modal-content_bg-red">
            <?=bitrix_sessid_post()?>
            <form class="consultation" id="<?=$arParams['form']?>"><?=bitrix_sessid_post()?>
                <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
                <div id="content<?=$arParams['form']?>">
                    <div class="modal-header custom-modal-header">
                        <h5 class="modal-title custom-modal-title">Заявка на консультацию</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control custom-input" id="name" name="userName" placeholder="Имя" required>
                            <div class="invalid-feedback">
                                Вы не указали имя!
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control custom-input" id="phone" name="phone" placeholder="Телефон" required>
                            <div class="invalid-feedback">
                                Вы не указали телефон!
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control custom-input" id="city" placeholder="Город" name="city" required>
                            <div class="invalid-feedback">
                                Вы не указали город!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer custom-modal-footer">
                    <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Заказать консультацию</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>