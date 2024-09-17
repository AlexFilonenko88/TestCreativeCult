<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->SetPageProperty("keywords", "");
?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"banner", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "banner",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => "banner",
		"NAME" => "COSMO",
		"TITLE" => "Контакты"
	),
	false
); ?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "info",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"NAME" => "",
		"TITLE" => ""
	),
	false
); ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>