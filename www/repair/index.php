<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ремонт");
?><div class="head-banner head-banner_repair">
	<div class="container-fluid">
		<div class="tabs-lease-repair d-none d-lg-block">
			<div class="row">
				<div class="col">
					<ul>
						<li><a href="#advantege-repair">Преимущества</a></li>
						<li><a href="#scheme-of-work">Схема работы</a></li>
						<li><a href="#cost-repair">Стоимость</a></li>
						<li><a href="#garantee-repair">Гарантии</a></li>
						<li><a href="#service-centers-repair">Сервисные центры</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<div class="title-repair">
					<p>
						 Ремонт кофемашин <span class="wmf wmf_red">WMF</span> в Украине с гарантией
					</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="form-repair d-none d-lg-block">
					<form class="repair repair_bg-red check-valid" novalidate="">
						<div class="form-titile">
							<p>
								 Заявка на диагностику
							</p>
						</div>
						<div class="form-content">
							<div class="form-group custom-form-group">
 <input type="text" class="form-control custom-input" id="name" placeholder="Имя" required="">
								<div class="invalid-feedback">
									 Вы не указали имя!
								</div>
							</div>
							<div class="form-group custom-form-group">
 <input type="text" class="form-control custom-input" id="phone" placeholder="Телефон" required="">
								<div class="invalid-feedback">
									 Вы не указали телефон!
								</div>
							</div>
							<div class="form-group custom-form-group">
 <input type="text" class="form-control custom-input" id="city" placeholder="Город" required="">
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
				<div class="btn-order d-block d-lg-none">
 <button type="button" class="btn btn_red btn_small-mobile" data-toggle="modal" data-target="#order-diagnostics">Заказать диагностику</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div id="advantege-repair">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="section-title">
					<h2 class="title">Ремонт кофемашин WMF в Coffee Machine Service</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg">
				<div class="adv-item">
 <img alt="icon" src="<?=IMAGES_PATH?>/icons/repair-icon1.png">
					<p>
						 5 аккредитованных сервисных центров в Украине
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="adv-item">
 <img alt="icon" src="<?=IMAGES_PATH?>/icons/repair-icon2.png">
					<p>
						 Выезд техника для диагностики причины поломки
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="adv-item">
 <img alt="icon" src="<?=IMAGES_PATH?>/icons/repair-icon3.png">
					<p>
						 Подбор и продажа оригинальных деталей
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="adv-item">
 <img alt="icon" src="<?=IMAGES_PATH?>/icons/repair-icon4.png">
					<p>
						 Гарантия на узлы или кофеавтомат после ремонта
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="adv-item">
 <img alt="icon" src="<?=IMAGES_PATH?>/icons/repair-icon5.png">
					<p>
						 Сервис и обслуживание после выполнения работ
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="we-are-trusted">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="section-title">
					<h2 class="title">Нам доверяют ремонт кофемашин, потому что наши клиенты:</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="text column1">
					<p>
						 Получают быстрое реагирование на неисправность: техник будет на месте в течение рабочего дня. Это минимизирует простой суперавтомата.
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="text column2">
					<p>
						 Получают сервисное сопровождение кофеавтоматов после ремонта у себя в офисах, компаниях, торговых точках, заведениях общепита и т.д., что предупреждает возможные неисправности в будущем.
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="text column3">
					<p>
						 Благодаря нашим сметам заранее знают, во сколько обойдётся ремонт кофемашины и детали, а потому избегают дополнительных незапланированных расходов.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-clients-repair">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title">
					<h2 class="title">Наши клиенты</h2>
				</div>
			</div>
		</div>
		<div class="wrap-slider">
			<div class="clients-slider">
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client1.png" alt="">
				</div>
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client2.png" alt="">
				</div>
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client5.png" alt="">
				</div>
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client3.png" alt="">
				</div>
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client1.png" alt="">
				</div>
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client4.png" alt="">
				</div>
				<div class="slide">
 <img src="<?=IMAGES_PATH?>/client5.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div id="scheme-of-work">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="section-title">
					<h2 class="title">Схема работы</h2>
				</div>
			</div>
		</div>
		<div class="wrap-scheme d-none d-lg-block">
			<div class="row">
				<div class="col">
					<div class="wrap-circles">
						<div class="circle circle_active">
							<div class="title">
								<p class="number">
									 1
								</p>
								<p>
									 Заявка на диагностику
								</p>
							</div>
							<div class="content">
								<p>
									 Заполните заявку, и мы свяжемся с Вами для решения проблемы.
								</p>
							</div>
							<div class="footer">
 <a href="#order-diagnostics" data-toggle="modal" data-target="#order-diagnostics" role="button">Заказать диагностику</a>
							</div>
							 <a class="right-arrow-circle" >
                                    <img alt="Right" src="&lt;span id=" data-bx-app-ex-src="#BXAPP12#" data-bx-orig-src="<span id=" title="Код PHP: <?=IMAGES_PATH?>" class="bxhtmled-surrogate"><img title="Код PHP: <?=IMAGES_PATH?>" id="bxid483595006" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/icons/btn-arrow-right.png"&gt;
                                </a>
						</div>
						<div class="circle">
							<div class="title">
								<p class="number">
									 2
								</p>
								<p>
									 Диагностика
								</p>
							</div>
							<div class="content">
								<p>
									 Квалифицированный техник выедет на место, где установлен кофеавтомат, для диагностики и составления сметы. После согласования стоимости он выполнит ремонт кофемашины на месте. Если поломка требует капитального ремонта, может потребоваться отправка в один из наших сервисных центров по ремонту кофемашин в Украине.
								</p>
							</div>
							<div class="footer">
 <a href="#"></a>
							</div>
							 <a class="left-arrow-circle" >
                                    <img alt="Left" src="&lt;span id=" data-bx-app-ex-src="#BXAPP13#" data-bx-orig-src="<span id=" title="Код PHP: <?=IMAGES_PATH?>" class="bxhtmled-surrogate"><img title="Код PHP: <?=IMAGES_PATH?>" id="bxid239496983" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/icons/btn-arrow-left.png"&gt;
                                </a> <a class="right-arrow-circle" >
                                    <img alt="Right" src="&lt;span id=" data-bx-app-ex-src="#BXAPP14#" data-bx-orig-src="<span id=" title="Код PHP: <?=IMAGES_PATH?>" class="bxhtmled-surrogate"><img title="Код PHP: <?=IMAGES_PATH?>" id="bxid475177340" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/icons/btn-arrow-right.png"&gt;
                                </a>
						</div>
						<div class="circle">
							<div class="title">
								<p class="number">
									 3
								</p>
								<p>
									 Ремонт кофемашин
								</p>
							</div>
							<div class="content">
								<p>
									 Мы осуществим замену необходимых оригинальных деталей и узлов согласно составленной нашим специалистом и согласованной с вами смете, «под ключ», без дополнительных скрытых затрат.
								</p>
							</div>
							<div class="footer">
 <a href="#"></a>
							</div>
							 <a class="left-arrow-circle" >
                                    <img alt="Left" src="&lt;span id=" data-bx-app-ex-src="#BXAPP15#" data-bx-orig-src="<span id=" title="Код PHP: <?=IMAGES_PATH?>" class="bxhtmled-surrogate"><img title="Код PHP: <?=IMAGES_PATH?>" id="bxid242344463" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/icons/btn-arrow-left.png"&gt;
                                </a> <a class="right-arrow-circle" >
                                    <img alt="Right" src="&lt;span id=" data-bx-app-ex-src="#BXAPP16#" data-bx-orig-src="<span id=" title="Код PHP: <?=IMAGES_PATH?>" class="bxhtmled-surrogate"><img title="Код PHP: <?=IMAGES_PATH?>" id="bxid314170751" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/icons/btn-arrow-right.png"&gt;
                                </a>
						</div>
						<div class="circle">
							<div class="title">
								<p class="number">
									 4
								</p>
								<p>
									 Сервисное обслуживание
								</p>
							</div>
							<div class="content">
								<p>
									 Мы обеспечим ежемесячную поддержку и контроль работы кофеавтомата у вас на месте после проведенного ремонта. Сервис включает в себя визит техников 1-2 раза в месяц, проверку и настройку технических/технологических параметров и датчиков, текущий ремонт кофемашины согласно рекомендаций производителя.
								</p>
							</div>
							<div class="footer">
 <a href="#order-diagnostics" data-toggle="modal" data-target="#order-diagnostics" role="button">Заказать диагностику</a>
							</div>
							 <a class="left-arrow-circle" >
                                    <img alt="Left" src="&lt;span id=" data-bx-app-ex-src="#BXAPP17#" data-bx-orig-src="<span id=" title="Код PHP: <?=IMAGES_PATH?>" class="bxhtmled-surrogate"><img title="Код PHP: <?=IMAGES_PATH?>" id="bxid704592501" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/icons/btn-arrow-left.png"&gt;
                                </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-tabs-mobile d-block d-lg-none">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item tab-circle"> <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-home" aria-selected="true">1</a> </li>
				<li class="nav-item tab-circle"> <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-profile" aria-selected="false">2</a> </li>
				<li class="nav-item tab-circle"> <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-contact" aria-selected="false">3</a> </li>
				<li class="nav-item tab-circle"> <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-contact" aria-selected="false">4</a> </li>
			</ul>
		</div>
		<div class="tab-content d-block d-lg-none" id="pills-tabContent">
			<div class="tab-pane content-tabs-mobile fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
				<p class="title">
					 Заявка на диагностику
				</p>
				<p class="descr">
					 Заполните заявку, и мы свяжемся с Вами для решения проблемы.
				</p>
 <a href="#order-diagnostics" data-toggle="modal" data-target="#order-diagnostics" role="button">Заказать диагностику</a>
			</div>
			<div class="tab-pane content-tabs-mobile fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
				<p class="title">
					 Диагностика
				</p>
				<p class="descr">
					 Квалифицированный техник выедет на место, где установлен кофеавтомат, для диагностики и составления сметы. После согласования стоимости он выполнит ремонт кофемашины на месте. Если поломка требует капитального ремонта, может потребоваться отправка в один из наших сервисных центров по ремонту кофемашин в Украине.
				</p>
			</div>
			<div class="tab-pane content-tabs-mobile fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
				<p class="title">
					 Ремонт кофемашин
				</p>
				<p class="descr">
					 Мы осуществим замену необходимых оригинальных деталей и узлов согласно составленной нашим специалистом и согласованной с вами смете, «под ключ», без дополнительных скрытых затрат.
				</p>
			</div>
			<div class="tab-pane content-tabs-mobile fade" id="pills-4" role="tabpanel" aria-labelledby="pills-contact-tab">
				<p class="title">
					 Сервисное обслуживание
				</p>
				<p class="descr">
					 Мы обеспечим ежемесячную поддержку и контроль работы кофеавтомата у вас на месте после проведенного ремонта. Сервис включает в себя визит техников 1-2 раза в месяц, проверку и настройку технических/технологических параметров и датчиков, текущий ремонт кофемашины согласно рекомендаций производителя.
				</p>
 <a href="#order-diagnostics" data-toggle="modal" data-target="#order-diagnostics" role="button">Заказать диагностику</a>
			</div>
		</div>
	</div>
	<div id="cost-repair">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="section-title">
					<h2 class="title">Стоимость ремонта профессиональной кофемашины</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<div class="text">
					<div class="on-garantee">
						<p class="title">
							 Кофеавтомат на гарантии или сервисном обслуживании в Coffee Machine Service?
						</p>
						<p class="descr">
							 Выезд специалиста и диагностика причины поломки - бесплатно
						</p>
						<p class="descr">
							 Ремонт - бесплатно *
						</p>
						<p class="descr">
							 Стоимость запчастей - по результатам диагностики
						</p>
						<p class="footnote">
							 * Если поломка произошла не по вине заказчика
						</p>
					</div>
					<div class="no-garantee">
						<p class="title">
							 Кофеавтомат НЕ на гарантии или НЕ обслуживается в Coffee Machine Service?
						</p>
						<p class="descr">
							 Выезд специалиста 450 грн+3 грн/км
						</p>
						<p class="descr">
							 Стоимость ремонта и запчастей - по результатам диагностики
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="form-repair">
					<form class="repair repair_bg-red-opacity1 check-valid" novalidate="">
						<div class="form-titile">
							<p>
								 Заявка на диагностику
							</p>
						</div>
						<div class="form-content">
							<div class="form-group custom-form-group">
 <input type="text" class="form-control custom-input" id="name2" placeholder="Имя" required="">
								<div class="invalid-feedback">
									 Вы не указали имя!
								</div>
							</div>
							<div class="form-group custom-form-group">
 <input type="text" class="form-control custom-input" id="phone2" placeholder="Телефон" required="">
								<div class="invalid-feedback">
									 Вы не указали телефон!
								</div>
							</div>
							<div class="form-group custom-form-group">
 <input type="text" class="form-control custom-input" id="city2" placeholder="Город" required="">
								<div class="invalid-feedback">
									 Вы не указали город!
								</div>
							</div>
							<div class="form-group custom-form-group">
 <textarea class="form-control custom-textarea" id="comment2" rows="3" placeholder="Комментарий"></textarea>
							</div>
						</div>
						<div class="form-footer">
 <button type="submit" class="btn btn_black btn_small-mobile btn_font-small">Заказать диагностику</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrap-banner repair">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 d-none d-lg-block">
				<div class="wrap-banner-img">
					<div class="banner-img">
 <img src="<?=IMAGES_PATH?>/banners/banner-img4.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 offset-md-1">
				<div class="banner-text">
					<p class="title-banner">
						 Капитальный ремонт кофемашин после окончания срока гарантии:
					</p>
					<ul>
						<li>разборка кофемашины</li>
						<li>тестирование каждого узла</li>
						<li>замена всех требуемых узлов, запчастей, деталей</li>
					</ul>
					<p class="descr-banner">
						 Гарантия на суперавтомат после капитального ремонта 30000 порций или 1 год.
					</p>
					<p class="descr-banner">
						 Цена - 100 евро + запчасти
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div id="garantee-repair">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title">
					<h2 class="title">Гарантии</h2>
				</div>
				<div class="section-description">
					<p class="descr">
						 Компания Coffee Machine Service – официальный партнёр ТМ WMF в Украине. Мы обеспечиваем качественный ремонт кофемашин сертифицированными специалистами. Мы предоставляем гарантию на узлы, которые были заменены или отремонтированы. Капитальный ремонт кофемашин обеспечивает гарантию 30000 порций или 1 год на работу всего суперавтомата
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="service-centers-repair">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="section-title">
					<h2 class="title">Сервисные центры по ремонту кофемашин WMF в Украине</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="map-service-center">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => App::$config->apiKeyOtherOfficesMap,
		"CONTROLS" => array("SMALL_ZOOM_CONTROL","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:50.3576782;s:10:\"google_lon\";d:30.613006499999983;s:12:\"google_scale\";i:13;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:4:\"TEXT\";s:14:\"coffe machines\";s:3:\"LON\";d:23.88194061166996;s:3:\"LAT\";d:49.834717563792175;}i:1;a:3:{s:4:\"TEXT\";s:15:\"coffee machines\";s:3:\"LON\";d:30.619872955078108;s:3:\"LAT\";d:50.34513664681679;}}}",
		"MAP_HEIGHT" => "600",
		"MAP_ID" => "GOOGLE_MAP",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_DRAGGING")
	)
);?>
	</div>
</div>
 <!--Modal order-consultation-->
<div class="modal fade" id="order-diagnostics" tabindex="-1" role="dialog" aria-labelledby="order-diagnostics" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
		<div class="modal-content custom-modal-content custom-modal-content_bg-red">
			<div class="modal-header custom-modal-header">
				<h5 class="modal-title custom-modal-title">Заявка на диагностику</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
			</div>
			<form class="repair check-valid" novalidate="">
				<div class="modal-body custom-modal-body">
					<div class="form-group">
 <input type="text" class="form-control custom-input" id="name3" placeholder="Имя" required="">
						<div class="invalid-feedback">
							 Вы не указали имя!
						</div>
					</div>
					<div class="form-group">
 <input type="text" class="form-control custom-input" id="phone3" placeholder="Телефон" required="">
						<div class="invalid-feedback">
							 Вы не указали телефон!
						</div>
					</div>
					<div class="form-group">
 <input type="text" class="form-control custom-input" id="city3" placeholder="Город" required="">
						<div class="invalid-feedback">
							 Вы не указали город!
						</div>
					</div>
					<div class="form-group custom-form-group">
 <textarea class="form-control custom-textarea" id="comment3" rows="3" placeholder="Комментарий"></textarea>
					</div>
				</div>
				<div class="modal-footer custom-modal-footer">
 <button type="submit" class="btn btn_black btn_small-mobile ">Заказать диагностику</button>
				</div>
			</form>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>