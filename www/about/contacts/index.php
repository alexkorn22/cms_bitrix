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
		 <h2>Официальный представитель WMF в Украине</h2>
	</div>
	 <?$APPLICATION->IncludeComponent(
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
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:50.108314617701055;s:10:\"google_lon\";d:34.889345354049055;s:12:\"google_scale\";i:5;s:10:\"PLACEMARKS\";a:5:{i:0;a:3:{s:4:\"TEXT\";s:37:\"Coffee machines service  г. Киев\";s:3:\"LON\";d:30.521539848537486;s:3:\"LAT\";d:50.41490388593943;}i:1;a:3:{s:4:\"TEXT\";s:55:\"Coffee machine service г .Краматорск###RN###\";s:3:\"LON\";d:37.588037248391856;s:3:\"LAT\";d:48.75664257371441;}i:2;a:3:{s:4:\"TEXT\";s:41:\"Coffee machine service г. Харьков\";s:3:\"LON\";d:36.26530605152061;s:3:\"LAT\";d:49.98400088866017;}i:3;a:3:{s:4:\"TEXT\";s:46:\"Coffee machines service г. Днепр###RN###\";s:3:\"LON\";d:35.05841257976226;s:3:\"LAT\";d:48.44904157907147;}i:4;a:3:{s:4:\"TEXT\";s:45:\"Coffee machine service г. Запорожье\";s:3:\"LON\";d:35.10988533179648;s:3:\"LAT\";d:47.839747189313705;}}}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "GOOGLE_MAP",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_KEYBOARD",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
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