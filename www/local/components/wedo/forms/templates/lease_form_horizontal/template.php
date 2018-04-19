<div class="form-lease">
    <form class="lease lease_horizontal check-valid" id="<?=$arParams['form']?>"><?=bitrix_sessid_post()?>
        <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>

        <div id="content<?=$arParams['form']?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="form-titile">
                            <p>Заявка на аренду</p>
                        </div>
                    </div>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group custom-form-group">
                                <input type="text" class="form-control custom-input" id="name2" placeholder="Имя" required>
                                <div class="invalid-feedback">
                                    Вы не указали имя!
                                </div>
                            </div>
                            <div class="form-group custom-form-group">
                                <input type="text" class="form-control custom-input" id="phone2" placeholder="Телефон" required>
                                <div class="invalid-feedback">
                                    Вы не указали телефон!
                                </div>
                            </div>
                            <div class="form-group custom-form-group">
                                <input type="text" class="form-control custom-input" id="city2" placeholder="Город" required>
                                <div class="invalid-feedback">
                                    Вы не указали город!
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group custom-form-group">
                                <textarea class="form-control custom-textarea" id="comment2" rows="3" placeholder="Комментарий"></textarea>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn_red btn_small-mobile btn_font-small btn_fix-size">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>