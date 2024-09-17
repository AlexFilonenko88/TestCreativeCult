<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle("Партнеры");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->SetPageProperty("keywords", "");
?><? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "banner",
    array(
        "AREA_FILE_SHOW" => "page",
        "AREA_FILE_SUFFIX" => "banner",
        "COMPONENT_TEMPLATE" => "banner",
        "EDIT_TEMPLATE" => "",
        "NAME" => "COSMO",
        "TITLE" => "Партнеры"
    )
); ?>

<? $APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "partners_smart_filter", array(
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "DISPLAY_ELEMENT_COUNT" => "N",    // Показывать количество
    "FILTER_NAME" => "arrFilter",    // Имя выходящего массива для фильтрации
    "FILTER_VIEW_MODE" => "horizontal",    // Вид отображения
    "IBLOCK_ID" => "5",    // Инфоблок
    "IBLOCK_TYPE" => "partners",    // Тип инфоблока
    "PAGER_PARAMS_NAME" => "arrPager",    // Имя массива с переменными для построения ссылок в постраничной навигации
    "POPUP_POSITION" => "left",
    "PREFILTER_NAME" => "smartPreFilter",    // Имя входящего массива для дополнительной фильтрации элементов
    "SAVE_IN_SESSION" => "N",    // Сохранять установки фильтра в сессии пользователя
    "SECTION_CODE" => "",    // Код раздела
    "SECTION_CODE_PATH" => "",
    "SECTION_DESCRIPTION" => "-",    // Описание
    "SECTION_ID" => "",    // ID раздела инфоблока
    "SECTION_TITLE" => "-",    // Заголовок
    "SEF_MODE" => "N",    // Включить поддержку ЧПУ
    "SEF_RULE" => "",    // Правило для обработки
    "SMART_FILTER_PATH" => "",
    "TEMPLATE_THEME" => "blue",    // Цветовая тема
    "XML_EXPORT" => "N",    // Включить поддержку Яндекс Островов
    "AJAX_MODE" => "Y"
),
    false
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>