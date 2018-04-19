<div class="modal fade" id="order-diagnostics" tabindex="-1" role="dialog" aria-labelledby="order-lease" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
        <div class="modal-content custom-modal-content custom-modal-content_bg-red">
            <form class="repair check-valid" id="<?=$arParams['form']?>">
                <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
                <div id="content<?=$arParams['form']?>">
                    <div class="modal-header custom-modal-header">
                        <h5 class="modal-title custom-modal-title">Заявка на диагностику</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control custom-input" id="name3" placeholder="Имя" required>
                            <div class="invalid-feedback">
                                Вы не указали имя!
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control custom-input" id="phone3" placeholder="Телефон" required>
                            <div class="invalid-feedback">
                                Вы не указали телефон!
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control custom-input" id="city3" placeholder="Город" required>
                            <div class="invalid-feedback">
                                Вы не указали город!
                            </div>
                        </div>
                        <div class="form-group custom-form-group">
                            <textarea class="form-control custom-textarea" id="comment3" rows="3" placeholder="Комментарий"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer custom-modal-footer">
                        <button type="submit" class="btn btn_black btn_small-mobile">Заказать диагностику</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
