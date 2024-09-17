<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle("Партнеры1");
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
); ?> <br>
<? $APPLICATION->IncludeComponent(
    "bitrix:catalog.smart.filter",
    "",
    array(
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DISPLAY_ELEMENT_COUNT" => "Y",
        "FILTER_NAME" => "arrFilter",
        "FILTER_VIEW_MODE" => "vertical",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "partners",
        "PAGER_PARAMS_NAME" => "arrPager",
        "POPUP_POSITION" => "left",
        "PREFILTER_NAME" => "smartPreFilter",
        "SAVE_IN_SESSION" => "N",
        "SECTION_CODE" => "",
        "SECTION_DESCRIPTION" => "-",
        "SECTION_ID" => "",
        "SECTION_TITLE" => "-",
        "SEF_MODE" => "N",
        "TEMPLATE_THEME" => "blue",
        "XML_EXPORT" => "N"
    )
); ?><br>
<? $APPLICATION->IncludeComponent(
    "bitrix:news",
    "",
    array(
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("", ""),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("", ""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "partners",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array("", ""),
        "LIST_PROPERTY_CODE" => array("", ""),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_MODE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "N",
        "VARIABLE_ALIASES" => array("ELEMENT_ID" => "ELEMENT_ID", "SECTION_ID" => "SECTION_ID"),
        "arrFilter" => "arrFilter"
    )
); ?> <br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>