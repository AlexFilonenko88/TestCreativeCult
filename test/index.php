<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "custom_city", Array(
	"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
		"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
		"IBLOCK_ID" => "7",	// Инфоблок
		"IBLOCK_TYPE" => "city",	// Тип инфоблока
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"VIEW_MODE" => "LIST",	// Вид списка подразделов
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>