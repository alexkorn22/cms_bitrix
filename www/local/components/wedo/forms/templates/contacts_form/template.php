<div class="form-repair">
    <form class="repair repair_bg-red-opacity1 check-valid" id="<?=$arParams['form']?>" >
        <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
        <div id="content<?=$arParams['form']?>">
            <div class="form-titile">
                <p>Связаться с нами</p>
            </div>
            <?=bitrix_sessid_post()?>
            <div class="form-group">
                <input type="text" class="form-control custom-input" id="name" name="userName" placeholder="Имя" required="">
                <div class="invalid-feedback">
                    Вы не указали имя!
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control custom-input" id="phone"  name="phone" placeholder="Телефон" required="">
                <div class="invalid-feedback">
                    Вы не указали телефон!
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control custom-input" id="city" name="city" placeholder="Город" required="">
                <div class="invalid-feedback">
                    Вы не указали город!
                </div>
            </div>
            <div class="form-group">
                <textarea rows="2" class="form-control custom-input" id="comment" name="comment" placeholder="Комментарий"></textarea>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Заказать обратный звонок</button>
            </div>
        </div>
    </form>
</div>