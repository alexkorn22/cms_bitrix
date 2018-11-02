<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->AddChainItem("Контакты", "/about/contacts");
?><div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="section-title contact">
                <h1 class="title">Контакты</h1>
            </div>
        </div>
    </div>
	<div class="row container-fluid">
		<div class="col-md-7">
			<div class="main-contacts container">
				<div class="other-contacts">
 <img src="<?= IMAGES_PATH ?>/contacts_icons/phone-icon.png" class="contacts-icons" alt=""> <a href="tel: <?=App::$config->telephone?>" class="other-contacts-text"> Телефон, Viber, Telegram<br/><?=App::$config->telephone?> </a>
				</div>
				<div class="other-contacts">
 <img src="<?= IMAGES_PATH ?>/contacts_icons/message-icon.png" class="contacts-icons-message" alt=""> <a href="mailto:<?=App::$config->email?>" class="other-contacts-text"><?=App::$config->email?> </a>
				</div>
				<div class="note">
                     Сервисное обслуживание осуществляется на територии<br>
					 Заказчика в любом городе Украины
				</div>
			</div>
		</div>
        <div class="col-md-5 col-sm-10 col-xs-10 first-form-contacts">
            <?
            $APPLICATION->IncludeComponent(
                "wedo:forms",
                "contacts_form",
                Array(
                   "orderType" => "Заказ обратный звонок"
                )
            );
            ?>
        </div>
	</div>
</div>
<div class="googleMap">
	<div class="map-heading" id="service-centers">
		 <h2>Официальные представители WMF в Украине</h2>
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
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:48.981552997384;s:10:\"google_lon\";d:33.668085263255;s:12:\"google_scale\";i:7;s:10:\"PLACEMARKS\";a:5:{i:0;a:3:{s:4:\"TEXT\";s:207:\"Coffee Мachine Service  ###RN###г. Киев###RN###ул. Антоновича 172###RN###т. +380 (44) 239-55-88###RN###т. +380 (66) 239-55-88###RN###т. +380 (63) 239-55-88###RN###т. +380 (68) 239-55-88\";s:3:\"LON\";d:30.521539848537;s:3:\"LAT\";d:50.414903885939;}i:1;a:3:{s:4:\"TEXT\";s:131:\"Coffee Machine Service ###RN###г .Краматорск###RN###ул.Архипа Куинджи 1###RN###т. +380 ‎(50) 531-77-88\";s:3:\"LON\";d:37.588037248392;s:3:\"LAT\";d:48.756642573714;}i:2;a:3:{s:4:\"TEXT\";s:152:\"Coffee Machine Service###RN###г. Харьков###RN###ул. Тарасовская, 3###RN###т. +380 (57) 752-49-69###RN###т. ‎+380 (50) 605-00-10\";s:3:\"LON\";d:36.265306051521;s:3:\"LAT\";d:49.98400088866;}i:3;a:3:{s:4:\"TEXT\";s:140:\"Coffee Machine Service ###RN###г. Днепр###RN###пр. Гагарина 12###RN###т. +380 (50) 449-06-00###RN###т. +380 (67) 621-32-52\";s:3:\"LON\";d:35.058412579762;s:3:\"LAT\";d:48.449041579071;}i:4;a:3:{s:4:\"TEXT\";s:145:\"Coffee Machine Service###RN###г. Запорожье###RN###ул. Нижнеднепровская 6а, оф 11###RN###т. +38‎0 (67) 954-75-22\";s:3:\"LON\";d:35.109885331796;s:3:\"LAT\";d:47.839747189314;}}}",
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
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:49.197394217348;s:10:\"google_lon\";d:33.887811825755;s:12:\"google_scale\";i:6;s:10:\"PLACEMARKS\";a:5:{i:0;a:3:{s:4:\"TEXT\";s:207:\"Coffee Мachine Service  ###RN###г. Киев###RN###ул. Антоновича 172###RN###т. +380 (44) 239-55-88###RN###т. +380 (66) 239-55-88###RN###т. +380 (63) 239-55-88###RN###т. +380 (68) 239-55-88\";s:3:\"LON\";d:30.521539848537;s:3:\"LAT\";d:50.414903885939;}i:1;a:3:{s:4:\"TEXT\";s:131:\"Coffee Machine Service ###RN###г .Краматорск###RN###ул.Архипа Куинджи 1###RN###т. +380 ‎(50) 531-77-88\";s:3:\"LON\";d:37.588037248392;s:3:\"LAT\";d:48.756642573714;}i:2;a:3:{s:4:\"TEXT\";s:152:\"Coffee Machine Service###RN###г. Харьков###RN###ул. Тарасовская, 3###RN###т. +380 (57) 752-49-69###RN###т. ‎+380 (50) 605-00-10\";s:3:\"LON\";d:36.265306051521;s:3:\"LAT\";d:49.98400088866;}i:3;a:3:{s:4:\"TEXT\";s:140:\"Coffee Machine Service ###RN###г. Днепр###RN###пр. Гагарина 12###RN###т. +380 (50) 449-06-00###RN###т. +380 (67) 621-32-52\";s:3:\"LON\";d:35.058412579762;s:3:\"LAT\";d:48.449041579071;}i:4;a:3:{s:4:\"TEXT\";s:145:\"Coffee Machine Service###RN###г. Запорожье###RN###ул. Нижнеднепровская 6а, оф 11###RN###т. +38‎0 (67) 954-75-22\";s:3:\"LON\";d:35.109885331796;s:3:\"LAT\";d:47.839747189314;}}}",
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
</div>
<div class="other-offices">
	<div class="row">
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="row">
                <?foreach (App::$config->officesList as $office):?>
                    <div class="col-md-5 offices-data">
                        <div class="office-city">
                            <?=$office['city']?>
                        </div>
                        <div>
                            <?=$office['address']?>
                        </div>
                        <div class="phone">
                            <? foreach ($office['phone'] as $phone):?>
                                <a href="tel:<?=$phone?>">т. <?=$phone?></a><br/>
                            <? endforeach; ?>
                        </div>
                    </div>
                <?endforeach;?>
			</div>
		</div>
		<div class="col-md-5 col-sm-10 col-xs-10 ">
                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "contacts_form",
                        Array(
                           "orderType" => "Заказ обратный звонок"
                        )
                    );
                    ?>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>