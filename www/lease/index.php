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
                    <?$APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "lease_form_vertical",
                        Array(
                            "FORM_TYPE"=>"whiteClock",
                            "orderType" => "Заявка на аренду"
                        )
                    );?>
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <? $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "lease_form_horizontal",
                        Array(
                            "FORM_TYPE"=>"whiteClock",
                            "orderType" => "Заявка на аренду"
                        )
                );
                ?>
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
    <?$APPLICATION->IncludeComponent(
        "wedo:forms",
        "lease_form_modal",
        Array("orderType" => "Заявка на аренду")
    );
    ?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>