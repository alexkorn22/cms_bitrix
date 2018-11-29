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
		<div class="col-lg-7 col-md-12">
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
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-10 first-form-contacts">
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
    <div class="d-sm-block d-xs-block d-md-block">
        <?
        View::bxInclude('maps',['mapId'=> "GOOGLE_MAP"]);
        ?>
    </div>
</div>
<div class="other-offices">
	<div class="row">
		<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
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
		<div class="col-lg-5 col-md-12 col-sm-10 col-xs-10 ">
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