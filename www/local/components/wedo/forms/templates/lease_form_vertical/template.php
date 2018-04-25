<div class="form-lease d-none d-lg-block">
    <form class="consultForms lease lease_bg-black check-valid" id="<?=$arParams['FORM_ID']?>"><?=bitrix_sessid_post()?>
        <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
        <div id="content<?=$arParams['FORM_ID']?>">
            <div class="form-titile"><?=bitrix_sessid_post()?>
                <p>Заявка на аренду</p>
            </div>
            <div class="form-content">
                <div class="form-group custom-form-group">
                    <input type="text" class="form-control custom-input" id="name" name="userName" placeholder="Имя" required>
                    <div class="invalid-feedback">
                        Вы не указали имя!
                    </div>
                </div>
                <div class="form-group custom-form-group">
                    <input type="text" class="form-control custom-input" id="phone" name="phone" placeholder="Телефон" required>
                    <div class="invalid-feedback">
                        Вы не указали телефон!
                    </div>
                </div>
                <div class="form-group custom-form-group">
                    <input type="text" class="form-control custom-input" id="city" name="city" placeholder="Город" required>
                    <div class="invalid-feedback">
                        Вы не указали город!
                    </div>
                </div>
                <div class="form-group custom-form-group">
                    <textarea class="form-control custom-textarea" id="comment" rows="3" name="comment" placeholder="Комментарий"></textarea>
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn_red btn_small-mobile btn_font-small">Отправить</button>
            </div>
        </div>
    </form>
</div>
<div class="btn-order d-block d-lg-none">
    <button type="button" class="btn btn_black btn_small-mobile" data-toggle="modal" data-target="#order-lease">Заявка на аренду</button>
</div>