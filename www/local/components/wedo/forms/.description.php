<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("WEDO_FORMS_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("WEDO_FORMS_COMPONENT_DESCRIPTION"),
	"ICON" => "/images/regions.gif",
	"SORT" => 500,
	"PATH" => array(
		"ID" => "wedo_main_components",
		"SORT" => 500,
		"NAME" => GetMessage("WEDO_FORMS_COMPONENTS_FOLDER_NAME"),
	),
);

?>