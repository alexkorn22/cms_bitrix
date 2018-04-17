<div class="form-repair d-none d-lg-block">
    <form class="repair repair_bg-red check-valid"  id="formOneRepairContent">
        <div class="form-titile">
            <p>Заявка на диагностику</p>
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
            <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Заказать диагностику</button>
        </div>
    </form>
</div>


<div id="msgBlock">
    <div id="thankMessage">
        <img src="<?= IMAGES_PATH ?>/clock.png" class="contacts-icons" alt="">
        <p>Спасибо, мы свяжемся <br>с вами в течения <br>рабочего дня</p>
    </div>
</div>


<div id="msgLoader">
    <div class="centerLoader">
        <div id="loader"></div>
    </div>
</div>