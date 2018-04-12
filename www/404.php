<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$APPLICATION->SetTitle("404 Not Found"); ?><div class="container-fluid">
	<div class="page-404">
		<div class="row">
			<div class="col">
				<div class="code-404">
					<p>
						404
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="description-error">
					<p>
						К сожалению, страница не найдена
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>
					Предлагаем вам посетить:
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="menu-left">
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
			</div>
			<div class="col-6">
				<div class="menu-right">
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
			</div>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>