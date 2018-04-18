<? if($arParams['form'] == 'horizontal'):?>
    <div class="form-lease">
    <form class="lease lease_horizontal check-valid" id="<?=$arParams['form']?>">
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
<? elseif($arParams['form'] == 'vertical'): ?>
    <div class="form-lease d-none d-lg-block">
        <form class="lease lease_bg-black check-valid" id="<?=$arParams['form']?>">
            <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
            <div id="content<?=$arParams['form']?>">
                <div class="form-titile">
                    <p>Заявка на аренду</p>
                </div>
                <div class="form-content">
                    <div class="form-group custom-form-group">
                        <input type="text" class="form-control custom-input" id="name" placeholder="Имя" required>
                        <div class="invalid-feedback">
                            Вы не указали имя!
                        </div>
                    </div>
                    <div class="form-group custom-form-group">
                        <input type="text" class="form-control custom-input" id="phone" placeholder="Телефон" required>
                        <div class="invalid-feedback">
                            Вы не указали телефон!
                        </div>
                    </div>
                    <div class="form-group custom-form-group">
                        <input type="text" class="form-control custom-input" id="city" placeholder="Город" required>
                        <div class="invalid-feedback">
                            Вы не указали город!
                        </div>
                    </div>
                    <div class="form-group custom-form-group">
                        <textarea class="form-control custom-textarea" id="comment" rows="3" placeholder="Комментарий"></textarea>
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
<? elseif ($arParams['form']== 'modal'):?>
    <div class="modal fade" id="order-lease" tabindex="-1" role="dialog" aria-labelledby="order-lease" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
            <div class="modal-content custom-modal-content custom-modal-content_bg-red">
                <form class="repair check-valid" id="<?=$arParams['form']?>">
                    <? require $_SERVER["DOCUMENT_ROOT"].'/local/components/wedo/forms/views/msg.php';?>
                    <div id="content<?=$arParams['form']?>">
                        <div class="modal-header custom-modal-header">
                            <h5 class="modal-title custom-modal-title">Заявка на аренду</h5>
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
                            <button type="submit" class="btn btn_black btn_small-mobile ">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<? endif ;?>
