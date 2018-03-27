<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кофемашины");
?>
<div id="wrap">
    <section id="cards-section">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h2 class="title">Профессиональные кофемашины WMF от официального дилера Coffee Machine Service</h2>
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
                        <h2 class="title">Профессиональные кофемашины для бизнеса, соответствующие любым требованиям</h2>
                    </div>
                    <div class="section-description">
                        <p class="descr">Coffee Machine Service позволяет приобрести профессиональные кофемашины WMF (Германия) в Украине с полным
                            сервисным сопровождением. Предлагая вам суперавтоматы WMF, мы ориентируемся на потребности
                            вашего бизнеса и решение ваших задач</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="wrap-wmf-cms">
                    <div class="block wmf">
                        <div class="block-title">
                            <p><span class="firm">WMF - </span><span>самые мощные профессиональные</span><span> кофемашины-суперавтоматы</span></p>
                        </div>
                        <div class="content-wmf-cmf">
                            <div class="c-image">
                                <img src="<?=IMAGES_PATH?>/wmf-image.png" class="d-none d-lg-block" alt="WMF">
                            </div>
                            <div class="c-text">
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
                                        Каталог кофемашин
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block cms">
                        <div class="block-title">
                            <p><span class="firm">Coffee Machine Service</span><span> официальный партнёр </span><span>компании WMF в Украине</span></p>
                        </div>
                        <div class="content-wmf-cmf">
                            <div class="c-image">
                                <img src="<?=IMAGES_PATH?>/cms-image.png" class="d-none d-lg-block" alt="CMS">
                            </div>
                            <div class="c-text">
                                <ul>
                                    <li>Подбор кофеавтомата под ваши задачи</li>
                                    <li>Бесплатный сервис в любом городе Украины</li>
                                    <li>Пять центров по ремонту</li>
                                    <li>Оригинальные запчасти на профессиональные кофемашины WMF</li>
                                </ul>
                            </div>
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
                        <h2 class="title">Наши клиенты</h2>
                    </div>
                    <div class="section-description">
                        <p class="descr">Профессиональные кофемашины WMF приносят прибыль владельцам супермаркетов, фастфудов,
                            кофеен, АЗС, отелей и компаний по всей Украине благодаря сотрудничеству с компанией Coffee Machine Service.
                            Станьте одним из них!</p>
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
    </section>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>