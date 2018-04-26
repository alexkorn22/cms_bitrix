<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ремонт");
$modalNumber = 100 ;
?>

    <div class="head-banner head-banner_repair">
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
                        <h1>Ремонт кофемашин <span class="wmf wmf_red">WMF</span> в Украине с гарантией</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "repair_form",
                        Array("orderType"=>"Заказ диагностику")
                    );
                    ?>
                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "repair_form_modal",
                        Array(
                            'FORM_ID'=>'modalMain',
                            "orderType"=>"Заказ диагностику"
                        )
                    );
                    ?>
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
                        <img src="<?=IMAGES_PATH?>/icons/repair-icon1.png" alt="icon">
                        <p>5 аккредитованных сервисных центров в Украине</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="adv-item">
                        <img src="<?=IMAGES_PATH?>/icons/repair-icon2.png" alt="icon">
                        <p>Выезд техника для диагностики причины поломки</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="adv-item">
                        <img src="<?=IMAGES_PATH?>/icons/repair-icon3.png" alt="icon">
                        <p>Подбор и продажа оригинальных деталей</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="adv-item">
                        <img src="<?=IMAGES_PATH?>/icons/repair-icon4.png" alt="icon">
                        <p>Гарантия на узлы или кофеавтомат после ремонта</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="adv-item">
                        <img src="<?=IMAGES_PATH?>/icons/repair-icon5.png" alt="icon">
                        <p>Сервис и обслуживание после выполнения работ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="we-are-trusted">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="section-title">
                        <p class="title">Нам доверяют ремонт кофемашин, потому что наши клиенты:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="text column1">
                        <p>Получают <span>быстрое реагирование</span> на неисправность: техник будет на месте в течение рабочего дня. Это минимизирует простой суперавтомата.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text column2">
                        <p>Получают <span>сервисное сопровождение</span> кофеавтоматов после ремонта у себя в офисах, компаниях, торговых точках, заведениях общепита и т.д., что предупреждает возможные неисправности в будущем.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text column3">
                        <p>Благодаря нашим сметам заранее знают, во сколько обойдётся ремонт кофемашины и детали, а потому <span>избегают дополнительных</span> незапланированных <span>расходов.</span></p>
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
                                    <p class="number">1</p>
                                    <p>Заявка на диагностику</p>
                                </div>
                                <div class="content">
                                    <p>Заполните заявку, и мы свяжемся с Вами для решения проблемы.</p>
                                </div>
                                <div class="footer">
                                    <a href="#<?=$modalNumber?>order-diagnostics" data-toggle="modal" data-target="#<?=$modalNumber?>order-diagnostics" role="button">Заказать диагностику</a><? $modalNumber++;?>
                                </div>
                                <a class="right-arrow-circle">
                                    <img src="<?=IMAGES_PATH?>/icons/btn-arrow-right.png" alt="Right">
                                </a>
                            </div>
                            <div class="circle">
                                <div class="title">
                                    <p class="number">2</p>
                                    <p>Диагностика</p>
                                </div>
                                <div class="content">
                                    <p>Квалифицированный техник выедет на место, где установлен кофеавтомат, для диагностики и составления сметы. После согласования стоимости он выполнит ремонт кофемашины на месте. Если поломка требует капитального ремонта, может потребоваться отправка в один из наших сервисных центров по ремонту кофемашин в Украине.</p>
                                </div>
                                <div class="footer">
                                    <a href="#"></a>
                                </div>
                                <a class="left-arrow-circle">
                                    <img src="<?=IMAGES_PATH?>/icons/btn-arrow-left.png" alt="Left">
                                </a>
                                <a class="right-arrow-circle">
                                    <img src="<?=IMAGES_PATH?>/icons/btn-arrow-right.png" alt="Right">
                                </a>
                            </div>
                            <div class="circle">
                                <div class="title">
                                    <p class="number">3</p>
                                    <p>Ремонт кофемашин</p>
                                </div>
                                <div class="content">
                                    <p>Мы осуществим замену необходимых оригинальных деталей и узлов согласно составленной нашим специалистом и согласованной с вами смете, «под ключ», без дополнительных скрытых затрат.</p>
                                </div>
                                <div class="footer">
                                    <a href="#"></a>
                                </div>
                                <a  class="left-arrow-circle">
                                    <img src="<?=IMAGES_PATH?>/icons/btn-arrow-left.png" alt="Left">
                                </a>
                                <a  class="right-arrow-circle">
                                    <img src="<?=IMAGES_PATH?>/icons/btn-arrow-right.png" alt="Right">
                                </a>
                            </div>
                            <div class="circle">
                                <div class="title">
                                    <p class="number">4</p>
                                    <p>Сервисное обслуживание</p>
                                </div>
                                <div class="content">
                                    <p>Мы обеспечим ежемесячную поддержку и контроль работы кофеавтомата у вас на месте после проведенного ремонта. Сервис включает в себя визит техников 1-2 раза в месяц, проверку и настройку технических/технологических параметров и датчиков, текущий ремонт кофемашины согласно рекомендаций производителя.</p>
                                </div>
                                <div class="footer">
                                    <a href="#<?=$modalNumber?>order-diagnostics" data-toggle="modal" data-target="#<?=$modalNumber?>order-diagnostics" role="button">Заказать диагностику</a><? $modalNumber++;?>
                                </div>
                                <a class="left-arrow-circle">
                                    <img src="<?=IMAGES_PATH?>/icons/btn-arrow-left.png" alt="Left">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="wrap-tabs-mobile d-block d-lg-none">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item tab-circle">
                        <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-home" aria-selected="true">1<img src="<?=IMAGES_PATH?>/icons/icons8-long-arrow-right-w.png"></a>
                    </li>
                    <li class="nav-item tab-circle">
                        <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-profile" aria-selected="false">2<img src="<?=IMAGES_PATH?>/icons/icons8-long-arrow-right-w.png"></a>
                    </li>
                    <li class="nav-item tab-circle">
                        <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-contact" aria-selected="false">3<img src="<?=IMAGES_PATH?>/icons/icons8-long-arrow-right-w.png"></a>
                    </li>
                    <li class="nav-item tab-circle">
                        <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-contact" aria-selected="false">4</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content d-block d-lg-none" id="pills-tabContent">
                <div class="tab-pane content-tabs-mobile fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p class="title">Заявка на диагностику</p>
                    <p class="descr">Заполните заявку, и мы свяжемся с Вами для решения проблемы.</p>
                    <a href="#<?=$modalNumber?>order-diagnostics" data-toggle="modal" data-target="#<?=$modalNumber?>order-diagnostics" role="button">Заказать диагностику</a><? $modalNumber++;?>
                </div>
                <div class="tab-pane content-tabs-mobile fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <p class="title">Диагностика</p>
                    <p class="descr">Квалифицированный техник выедет на место, где установлен кофеавтомат, для диагностики и составления сметы. После согласования стоимости он выполнит ремонт кофемашины на месте. Если поломка требует капитального ремонта, может потребоваться отправка в один из наших сервисных центров по ремонту кофемашин в Украине.</p>
                </div>
                <div class="tab-pane content-tabs-mobile fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <p class="title">Ремонт кофемашин</p>
                    <p class="descr">Мы осуществим замену необходимых оригинальных деталей и узлов согласно составленной нашим специалистом и согласованной с вами смете, «под ключ», без дополнительных скрытых затрат.</p>
                </div>
                <div class="tab-pane content-tabs-mobile fade" id="pills-4" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <p class="title">Сервисное обслуживание</p>
                    <p class="descr">Мы обеспечим ежемесячную поддержку и контроль работы кофеавтомата у вас на месте после проведенного ремонта. Сервис включает в себя визит техников 1-2 раза в месяц, проверку и настройку технических/технологических параметров и датчиков, текущий ремонт кофемашины согласно рекомендаций производителя.</p>
                    <a href="#<?=$modalNumber?>order-diagnostics" data-toggle="modal" data-target="#<?=$modalNumber?>order-diagnostics" role="button">Заказать диагностику</a><? $modalNumber++;?>
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
                            <p class="title">Кофеавтомат на гарантии или сервисном обслуживании в Coffee Machine Service?</p>
                            <p class="descr">Выезд специалиста и диагностика причины поломки - бесплатно</p>
                            <p class="descr">Ремонт - бесплатно <span>*</span></p>
                            <p class="descr">Стоимость запчастей - по результатам диагностики</p>
                            <p class="footnote"><span>*</span> Если поломка произошла не по вине заказчика</p>

                        </div>
                        <div class="no-garantee">
                            <p class="title">Кофеавтомат НЕ на гарантии или НЕ обслуживается в Coffee Machine Service?</p>
                            <p class="descr">Выезд специалиста от 450 грн. + стоимость доезда</p>
                            <p class="descr">Стоимость ремонта и запчастей - по результатам диагностики</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "repair_form",
                        Array(
                            "Background" => "-opacity1",
                            "orderType"=>"Заказ диагностику"
                        )
                    );
                    ?>
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
                        <p class="title-banner">Капитальный ремонт кофемашин после окончания срока гарантии:</p>
                        <ul>
                            <li>разборка кофемашины</li>
                            <li>тестирование каждого узла</li>
                            <li>замена всех требуемых узлов, запчастей, деталей</li>
                        </ul>
                        <p class="descr-banner">Гарантия на суперавтомат после капитального ремонта 30000 порций или 1 год.</p>
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
                        <p class="descr">Компания Coffee Machine Service – официальный представитель ТМ WMF в Украине. Мы обеспечиваем качественный ремонт кофемашин сертифицированными специалистами. Мы предоставляем гарантию на узлы, которые были заменены или отремонтированы. Капитальный ремонт кофемашин обеспечивает гарантию 30000 порций или 1 год на работу всего суперавтомата</p>
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
        <div class="d-sm-none d-none d-md-block">
            <? $APPLICATION->IncludeComponent(
                "bitrix:map.google.view",
                ".default",
                array(
                    "API_KEY" => App::$config->apiKeyOtherOfficesMap,
                    "CONTROLS" => array(
                        0 => "SMALL_ZOOM_CONTROL",
                        1 => "TYPECONTROL",
                        2 => "SCALELINE",
                    ),
                    "INIT_MAP_TYPE" => "ROADMAP",
                    "MAP_DATA" => "a:4:{s:10:\"google_lat\";d:48.981552997383716;s:10:\"google_lon\";d:33.668085263254966;s:12:\"google_scale\";i:7;s:10:\"PLACEMARKS\";a:5:{i:0;a:3:{s:4:\"TEXT\";s:207:\"Coffee Мachine Service  ###RN###г. Киев###RN###ул. Антоновича 172###RN###т. +380 (44) 239-55-88###RN###т. +380 (66) 239-55-88###RN###т. +380 (63) 239-55-88###RN###т. +380 (68) 239-55-88\";s:3:\"LON\";d:30.521539848537;s:3:\"LAT\";d:50.414903885939;}i:1;a:3:{s:4:\"TEXT\";s:131:\"Coffee Machine Service ###RN###г .Краматорск###RN###ул.Архипа Куинджи 1###RN###т. +380 ‎(50) 531-77-88\";s:3:\"LON\";d:37.588037248392;s:3:\"LAT\";d:48.756642573714;}i:2;a:3:{s:4:\"TEXT\";s:152:\"Coffee Machine Service###RN###г. Харьков###RN###ул. Тарасовская, 3###RN###т. +380 (57) 752-49-69###RN###т. ‎+380 (50) 605-00-10\";s:3:\"LON\";d:36.265306051521;s:3:\"LAT\";d:49.98400088866;}i:3;a:3:{s:4:\"TEXT\";s:139:\"Coffee Machine Service ###RN###г. Днепр###RN###пр. Гагарина 12###RN###т. +380 (50) 449-06-0###RN###т. +380 (67) 621-32-52\";s:3:\"LON\";d:35.058412579762;s:3:\"LAT\";d:48.449041579071;}i:4;a:3:{s:4:\"TEXT\";s:145:\"Coffee Machine Service###RN###г. Запорожье###RN###ул. Нижнеднепровская 6а, оф 11###RN###т. +38‎0 (67) 954-75-22\";s:3:\"LON\";d:35.109885331796;s:3:\"LAT\";d:47.839747189314;}}}",
                    "MAP_HEIGHT" => "500",
                    "MAP_ID" => "GOOGLE_MAP",
                    "MAP_WIDTH" => "100%",
                    "OPTIONS" => array(
                        0 => "ENABLE_DRAGGING",
                        1 => "ENABLE_KEYBOARD",
                    ),
                    "COMPONENT_TEMPLATE" => ".default"
                ),
                false
            ); ?>
        </div>

        <div class="d-sm-block d-xs-block d-md-none">
            <? $APPLICATION->IncludeComponent(
	"bitrix:map.google.view", 
	".default", 
	array(
		"API_KEY" => App::$config->apiKeyOtherOfficesMap,
		"CONTROLS" => array(
			0 => "SMALL_ZOOM_CONTROL",
			1 => "TYPECONTROL",
			2 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:49.19739421734824;s:10:\"google_lon\";d:33.887811825754966;s:12:\"google_scale\";i:6;s:10:\"PLACEMARKS\";a:5:{i:0;a:3:{s:4:\"TEXT\";s:207:\"Coffee Мachine Service  ###RN###г. Киев###RN###ул. Антоновича 172###RN###т. +380 (44) 239-55-88###RN###т. +380 (66) 239-55-88###RN###т. +380 (63) 239-55-88###RN###т. +380 (68) 239-55-88\";s:3:\"LON\";d:30.521539848537;s:3:\"LAT\";d:50.414903885939;}i:1;a:3:{s:4:\"TEXT\";s:131:\"Coffee Machine Service ###RN###г .Краматорск###RN###ул.Архипа Куинджи 1###RN###т. +380 ‎(50) 531-77-88\";s:3:\"LON\";d:37.588037248392;s:3:\"LAT\";d:48.756642573714;}i:2;a:3:{s:4:\"TEXT\";s:152:\"Coffee Machine Service###RN###г. Харьков###RN###ул. Тарасовская, 3###RN###т. +380 (57) 752-49-69###RN###т. ‎+380 (50) 605-00-10\";s:3:\"LON\";d:36.265306051521;s:3:\"LAT\";d:49.98400088866;}i:3;a:3:{s:4:\"TEXT\";s:139:\"Coffee Machine Service ###RN###г. Днепр###RN###пр. Гагарина 12###RN###т. +380 (50) 449-06-0###RN###т. +380 (67) 621-32-52\";s:3:\"LON\";d:35.058412579762;s:3:\"LAT\";d:48.449041579071;}i:4;a:3:{s:4:\"TEXT\";s:145:\"Coffee Machine Service###RN###г. Запорожье###RN###ул. Нижнеднепровская 6а, оф 11###RN###т. +38‎0 (67) 954-75-22\";s:3:\"LON\";d:35.109885331796;s:3:\"LAT\";d:47.839747189314;}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "GOOGLE_MAP2",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DRAGGING",
			1 => "ENABLE_KEYBOARD",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?>
        </div>

        <div class="slider-clients-repair">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2 class="title">Наши клиенты</h2>
                    </div>
                </div>
            </div>
            <!-- slider of clients -->
            <?$APPLICATION->IncludeComponent(
                "wedo:clients",
                "",
                Array()
            );?>
        </div>
    </div>
        <?
           for ($i=100; $i<=$modalNumber ; $i++){
               $APPLICATION->IncludeComponent(
                   "wedo:forms",
                   "repair_form_modal",
                   Array(
                       "FORM_ID" => $i,
                       "orderType"=>"Заказ диагностику"
                   )
               );
           }
        ?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>