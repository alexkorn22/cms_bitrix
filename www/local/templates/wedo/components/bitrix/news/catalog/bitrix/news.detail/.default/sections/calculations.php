<div class="card custom-card">
    <div class="custom-card-header d-block d-md-none">
        <a href="#raschet-okup" class="title-item" data-toggle="collapse" aria-expanded="false" aria-controls="raschet-okup">
            <div>Расчёт окупаемости</div>
            <div class="arrow-down"><img src="<?=IMAGES_PATH?>/icons/btn-arrow-down.png" alt="down"></div>
        </a>
    </div>
    <div id="raschet-okup" class="collapse custom-collapse" data-parent="#accordion-on-mobile">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title">
                    <h2 class="title d-none d-md-block">Расчёт окупаемости</h2>
                </div>
                <div class="section-description">
                    <p class="descr">Воспользуйтесь калькулятором, чтобы спрогнозировать срок окупеаемости кофемашины </p>
                </div>
            </div>
        </div>
        <div class="calculate-raschet">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="wrap-input">
                        <div class="form-group">
                            <label for="fild-coffee">Цена 1 кг. кофе (грн) *</label>
                            <input type="text" class="form-control custom-input" id="fild-coffee" value="600">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap-input">
                        <div class="form-group">
                            <label for="fild-realizaciy">Цена реализации (грн) *</label>
                            <input type="text" class="form-control custom-input" id="fild-realizaciy" value="12">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap-input">
                        <div class="form-group">
                            <label for="fild-porcii">Количество порций в день *</label>
                            <input type="text" class="form-control custom-input" id="fild-porcii" value="100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap-input srok-okupaemosti">
                        <div class="form-group">
                            <label for="fild-srok-okupaemosti">Срок окупаемости (месяцев)</label>
                            <input type="text" class="form-control custom-input" id="fild-srok-okupaemosti" value="4">
                        </div>
                        <p>
                            <a class="" data-toggle="collapse" href="#open-table-calculate" role="button" aria-expanded="false" aria-controls="open-table-calculate">
                                Подробнее
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="open-table-calculate">
            <div class="card card-body custom-card">
                <div class="wrapp-table">
                    <div class="col-table"><p>Цена кофемашины  (грн)</p> <div>300 000</div></div>
                    <div class="col-table"><p>Себестоимость напитка (грн)</p> <div>5</div></div>
                    <div class="col-table"><p>Цена реализации напитка (грн)</p> <div>12</div></div>
                    <div class="col-table"><p>Количество порций в день</p> <div>100</div></div>
                    <div class="col-table"><p>Сервисное обслуживание в месяц (грн)</p> <div>0</div></div>
                    <div class="col-table"><p class="bold-col-table">Маржинальный доход в месяц (грн)</p> <div class="bold-col-table">2600</div></div>
                    <div class="col-table"><p>Срок окупаемости (месяцев)</p> <div>0</div></div>
                </div>
            </div>
        </div>
        <div class="comment-table">
            <p>* Рекомендованные значения для данной модели кофемашины</p>
        </div>
    </div>
</div>