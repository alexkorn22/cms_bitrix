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
	<div class="row">
		<div class="col-md-7">
			<div class="main-contacts container">
				<div class="main-office">
 <img src="<?= IMAGES_PATH ?>/contacts_icons/home-icon.png" class="contacts-icons" alt="">
					<h2 class="main-office-text">
						 Главный офис<span class="red-star"> *</span>
					</h2>
				</div>
				<div class="other-contacts">
 <img src="<?= IMAGES_PATH ?>/contacts_icons/maps-icon.png" class="contacts-icons" alt="">
						<div class="other-contacts-text"><?=App::$config->mainOffice['city']?><br/><?=App::$config->mainOffice['address']?></div>
				</div>
				<div class="other-contacts">
 <img src="<?= IMAGES_PATH ?>/contacts_icons/phone-icon.png" class="contacts-icons" alt=""> <a href="tel: <?=App::$config->telephone?>" class="other-contacts-text"> <?=App::$config->telephone?> </a>
				</div>
				<div class="other-contacts">
 <img src="<?= IMAGES_PATH ?>/contacts_icons/message-icon.png" class="contacts-icons-message" alt=""> <a href="mailto:<?=App::$config->email?>" class="other-contacts-text"><?=App::$config->email?> </a>
				</div>
				<div class="note">
 <span class="red-star">*</span> Сервисное обслуживание осуществляется на територии<br>
					 Заказчика в любом городе Украины
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="map-main-office">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => App::$config->apiKeyMainOfficeMap,
		"CONTROLS" => array("SMALL_ZOOM_CONTROL","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:47.83633326052939;s:10:\"google_lon\";d:35.14422888858121;s:12:\"google_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:15:\"coffee machines\";s:3:\"LON\";d:35.14456148249906;s:3:\"LAT\";d:47.8364376856332;}}}",
		"MAP_HEIGHT" => "380",
		"MAP_ID" => "G_MAP_MAIN_OFFICE",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_KEYBOARD")
	)
);?>
			</div>
		</div>
	</div>
</div>
<div class="googleMap">
	<div class="map-heading" id="service-centers">
		 <h2>Сервисные центры по ремонту кофемашин WMF в Украине</h2>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => App::$config->apiKeyOtherOfficesMap,
		"CONTROLS" => array("SMALL_ZOOM_CONTROL","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:50.3576782;s:10:\"google_lon\";d:30.613006499999983;s:12:\"google_scale\";i:13;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:4:\"TEXT\";s:14:\"coffe machines\";s:3:\"LON\";d:23.88194061166996;s:3:\"LAT\";d:49.834717563792175;}i:1;a:3:{s:4:\"TEXT\";s:15:\"coffee machines\";s:3:\"LON\";d:30.619872955078108;s:3:\"LAT\";d:50.34513664681679;}}}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "GOOGLE_MAP",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_KEYBOARD")
	)
);?>
</div>
<div class="other-offices">
	<div class="row">
		<div class="col-md-8 col-sm-12 col-xs-12">
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
                            <a href="tel:<?=$office['phone']?>">т. <?=$office['phone']?></a>
                        </div>
                    </div>
                <?endforeach;?>
			</div>
		</div>
		<div class="col-lg-3 col-sm-10 col-xs-10">
                    <?
                    $APPLICATION->IncludeComponent(
                        "wedo:forms",
                        "contacts_form",
                        Array()
                    );
                    ?>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>