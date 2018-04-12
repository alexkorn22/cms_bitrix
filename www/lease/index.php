<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аренда");
?>

	<div class="head-banner head-banner_lease">
		<div class="container-fluid">
			<div class="tabs-lease-repair d-none d-lg-block">
				<div class="row">
					<div class="col">
						<ul>
							<li><a href="#advantages-lease">Преимущества</a></li>
							<li><a href="#models-for-rent">Модели для аренды</a></li>
							<li><a href="#rent-terms">Условия аренды</a></li>
							<li><a href="#payback-calculator">Калькулятор окупаемости</a></li>
							<li><a href="#clients-in-lease">Наши клиенты</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-xl-7">
					<div class="title-lease">
						<h1>Аренда кофемашин <span class="wmf wmf_black">WMF</span> в Украине</h1>
					</div>
				</div>
				<div class="col-lg-6 col-xl-5">
					<div class="form-lease d-none d-lg-block">
						<form class="lease lease_bg-black check-valid" novalidate>
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
						</form>
					</div>
					<div class="btn-order d-block d-lg-none">
						<button type="button" class="btn btn_black btn_small-mobile" data-toggle="modal" data-target="#order-lease">Заявка на аренду</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div id="advantages-lease">
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="section-title">
						<h2 class="title">Кофемашина в аренду – шагните в мир профессионального кофейного бизнеса </h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="item-advantages">
						<img src="<?=IMAGES_PATH?>/icons/icon-squares.png" alt="advantages">
						<p><span>Нет стартовых затрат</span> на покупку дорогостоящего оборудования и зарплату бариста</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="item-advantages">
						<img src="<?=IMAGES_PATH?>/icons/icon-squares.png" alt="advantages">
						<p><span>Нет ежемесячной фиксированной платы</span> или процента от продаж напитков</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="item-advantages">
						<img src="<?=IMAGES_PATH?>/icons/icon-squares.png" alt="advantages">
						<p><span>Бесплатная настройка</span> кофемашины и ежемесячное сервисное обслуживание</p>
					</div>
				</div>
			</div>
		</div>

		<div id="models-for-rent">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="section-title">
						<h2 class="title">Мы предлагаем самые востребованные кофемашины в аренду </h2>
					</div>
				</div>
			</div>

            <!-- popular cms -->

            <?$APPLICATION->IncludeComponent(
                "wedo:popular_cm",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
                ),
                false
            );?>
            
			<div class="row">
				<div class="col">
					<div class="descr-model-for-rent">
						<p>Профессиональная кофемашина в аренду должна полностью отвечать задачам вашего бизнеса, приносить прибыль и минимизировать затраты. Наши консультанты подберут комплектацию, учитывающую эти требования.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="rent-terms">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="section-title">
                        <h2 class="title">Условия аренды профессиональных кофемашин WMF</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 not-dotted">
					<div class="wrap-circle">
						<div class="circle">
							<div class="text">
								<p>Подать заявку на услугу «Кофемашина в аренду»</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 not-dotted">
					<div class="wrap-circle">
						<div class="circle">
							<div class="text">
								<p>Заключить договор с компанией Coffee Machine Service</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 not-dotted">
					<div class="wrap-circle">
						<div class="circle">
							<div class="text">
								<p>Мы установим кофеавтомат «под ключ» в вашем офисе или торговой точке</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 not-dotted">
					<div class="wrap-circle">
						<div class="circle">
							<div class="text">
								<p>Вы будете ежемесячно закупать кофе в установленном для вас количестве</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- calculations -->
        <?$APPLICATION->IncludeComponent(
            "wedo:calculator_payback",
            "arenda_page",
            Array(
                "IBLOCK_ID" => App::$config->coffeeMachineIblockId,
                "IBLOCK_TYPE" => "catalogs",
                "TEMPLATE"=>"arenda_page",
                "PRODUCT_ID" => 0
            )
        );?>
        <div class="comment-table">
            <p>* Рекомендованные значения для данной модели кофемашины</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-lease">
                    <form class="lease lease_horizontal check-valid" novalidate>
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
                    </form>
                </div>
            </div>
        </div>

		<div id="clients-in-lease">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-title">
							<h2 class="title">Наши клиенты</h2>
						</div>
						<div class="section-description">
							<p class="descr">Аренда профессиональных кофемашин пользуется популярностью среди владельцев предприятий, фастфудов,
								супермаркетов, торговых точек, АЗС, которые заботятся о том, чтобы их клиенты и сотрудники наслаждались
								кофе высшего качества и превосходного вкуса.</p>
						</div>
					</div>
				</div>
				<!-- наши клиеты компонент -->
                <?$APPLICATION->IncludeComponent(
                    "wedo:clients",
                    "",
                    Array()
                );?>
			</div>
		</div>
	</div>
    <div class="modal fade" id="order-lease" tabindex="-1" role="dialog" aria-labelledby="order-lease" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
            <div class="modal-content custom-modal-content custom-modal-content_bg-red">
                <div class="modal-header custom-modal-header">
                    <h5 class="modal-title custom-modal-title">Заявка на аренду</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="repair check-valid" novalidate>
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
                </form>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>