<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
<footer>
    <div id="upbutton"></div>
    <div class="container-fluid">
        <div class="row wrap-content-footer">
            <div class="col-sm-12 order-1 order-md-1 col-md-3">
                <div class="f-logo">
                    <a href="/">
                        <img src="<?=$logo->getSrcResized();?>" alt="CMS">
                    </a>
                </div>
            </div>
            <div class="col-sm-12 order-3 order-md-2 col-md-3">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "left",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "Y",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "left"
                    ),
                    false
                );?>
            </div>
            <div class="col-sm-12 order-2 order-md-3 col-md-3">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "Y",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "top",
                    ),
                    false
                );?>
            </div>
            <div class="col-sm-12 order-4 order-md-4 col-md-3">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/local/files/includes/contacts.php"
                    )
                );?>
            </div>
        </div>
        <div class="row wrap-copyright">
            <div class="col">
                <div class="copyright">
                    <a href="http://wedo.com.ua" target="_blank">Сайт разработан и поддерживается компанией WEDO</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
</body>
</html>