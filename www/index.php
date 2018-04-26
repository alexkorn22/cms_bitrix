<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Профессиональные кофемашины WMF | Coffee Machine Service");
$APPLICATION->SetTitle("Кофемашины ");
?><section id="cards-section">
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<div class="section-title">
				<h1 class="title">Профессиональные кофемашины WMF от официального представителя Coffee Machine Service</h1>
			</div>
		</div>
	</div>
	<div class="menu-cards">
		<div class="row justify-content-center">
			<div class="col-md-3 dont-padding">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/local/files/includes/cards/sells.php"
	)
);?>
			</div>
			<div class="col-md-3 dont-padding">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/local/files/includes/cards/arenda.php"
	)
);?>
			</div>
			<div class="col-md-3 dont-padding">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/local/files/includes/cards/remont.php"
	)
);?>
			</div>
			<div class="col-md-3 dont-padding">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/local/files/includes/cards/service.php"
	)
);?>
			</div>
		</div>
	</div>
</div>
 </section>

 <section id="wmf-cms">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <p class="title">Профессиональные кофемашины для бизнеса, соответствующие любым требованиям</p>
                    </div>
                    <div class="section-description">
                        <p class="descr">Coffee Machine Service позволяет приобрести профессиональные кофемашины WMF (Германия) в Украине с полным
                            сервисным сопровождением. Предлагая вам суперавтоматы WMF, мы ориентируемся на потребности
                            вашего бизнеса и решение ваших задач</p>
                    </div>
                </div>
            </div>
            <div class="wrap-slider">
                <div class="b-wmf">
                    <div class="slide">
                        <div class="b-wmf__img">
                            <img src="<?=IMAGES_PATH?>/wmf-logo.png" alt="WMF">
                        </div>
                        <p class="b-wmf__text__title d-block d-md-none"><span class="firm">WMF - </span><span>самые мощные профессиональные</span><span> кофемашины-суперавтоматы</span></p>
                    </div>
                    <div class="slide">
                        <div class="b-wmf__text">
                            <p class="b-wmf__text__title"><span class="firm">WMF - </span><span>самые мощные профессиональные</span><span> кофемашины-суперавтоматы</span></p>
                            <div class="b-wmf__text__descr">
                                <ul>
                                    <li>для работы в местах с большим потоком людей</li>
                                    <li>не требуют работы баристa</li>
                                    <li>гарантийный срок 30000 порций</li>
                                    <li>сервисное обслуживание и ремонт в Украине</li>
                                </ul>
                                <div class="wrap-link">
                                    <a href="/catalog/" class="more-info">
                                        <div class="wrap-arrow">
                                            <div class="scroll-arrow"></div>
                                            <div class="scroll-arrow"></div>
                                            <div class="scroll-arrow"></div>
                                        </div>
                                        Каталог кофемашин</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-slider">
                <div class="b-cms">
                    <div class="slide">
                        <div class="b-cms__text d-none d-md-flex">
                            <p class="b-cms__text__title"><span class="firm">Coffee Machine Service</span> официальный представитель компании WMF в Украине</p>
                            <div class="b-cms__text__descr">
                                <ul>
                                    <li>подбор кофеавтомата под ваши задачи</li>
                                    <li>бесплатный сервис в любом городе Украины</li>
                                    <li>пять центров по ремонту</li>
                                    <li>оригинальные запчасти на профессиональные кофемашины WMF</li>
                                </ul>
                            </div>
                        </div>
                        <div class="b-cms__img d-flex d-md-none">
                            <img src="<?=IMAGES_PATH?>/cms-logo-circle.png" alt="CMS">
                        </div>
                        <p class="b-cms__text__title d-block d-md-none"><span class="firm">Coffee Machine Service</span> официальный представитель компании WMF в Украине</p>
                    </div>
                    <div class="slide">
                        <div class="b-cms__text d-flex d-md-none">
                            <p class="b-cms__text__title"><span class="firm">Coffee Machine Service</span> официальный представитель компании WMF в Украине</p>
                            <div class="b-cms__text__descr">
                                <ul>
                                    <li>подбор кофеавтомата под ваши задачи</li>
                                    <li>бесплатный сервис в любом городе Украины</li>
                                    <li>пять центров по ремонту</li>
                                    <li>оригинальные запчасти на профессиональные кофемашины WMF</li>
                                </ul>
                            </div>
                        </div>
                        <div class="b-cms__img d-none d-md-flex">
                            <img src="<?=IMAGES_PATH?>/cms-logo-circle.png" alt="CMS">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="clients">
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<div class="section-title">
				<p class="title">Наши клиенты</p>
			</div>
			<div class="section-description">
				<p class="descr">
					 Профессиональные кофемашины WMF приносят прибыль владельцам супермаркетов, фастфудов, кофеен, АЗС, отелей и компаний по всей Украине благодаря сотрудничеству с компанией Coffee Machine Service. Станьте одним из них!
				</p>
			</div>
		</div>
	</div>
	 <!-- our clients slider--> <?$APPLICATION->IncludeComponent(
	"wedo:clients",
	"",
Array()
);?>
</div>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>