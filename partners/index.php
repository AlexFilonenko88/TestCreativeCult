<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Партнеры");
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "common_block_partners",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "common_block_partners",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "", 1 => "",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "8",
        "IBLOCK_TYPE" => "common_block_partners",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Партнеры",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0 => "VIDEO", 1 => "HEADING", 2 => "PICTURE", 3 => "DESCRIPTION", 4 => "SECTION", 5 => "",),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>

    <div class="partners small-margin-top container">
        <form class="contacts-form">
            <div class="contacts-form-selects">
                <div class="select">
                    <a href class="select-head">
                        <span class="select-head-text">Все услуги</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.03118 4.28243C1.40608 3.90586 2.01392 3.90586 2.38882 4.28243L8.75 10.672L15.1112 4.28243C15.4861 3.90586 16.0939 3.90586 16.4688 4.28243C16.8437 4.65901 16.8437 5.26956 16.4688 5.64614L9.42882 12.7176C9.05392 13.0941 8.44608 13.0941 8.07118 12.7176L1.03118 5.64614C0.656274 5.26956 0.656274 4.65901 1.03118 4.28243Z"
                                  fill="currentColor"/>
                        </svg>
                        <input type="text" name="service" readonly hidden class="select-input">
                    </a>
                    <div class="select-drop">
                        <ul class="select-list">
                            <li class="select-item"><a href="#">Все услуги</a></li>
                            <li class="select-item"><a href="#">Услуга 1</a></li>
                            <li class="select-item"><a href="#">Услуга 2</a></li>
                            <li class="select-item"><a href="#">Услуга 3</a></li>
                            <li class="select-item"><a href="#">Услуга 4</a></li>
                            <li class="select-item"><a href="#">Услуга 5</a></li>
                            <li class="select-item"><a href="#">Услуга 6</a></li>
                            <li class="select-item"><a href="#">Услуга 7 </a></li>
                            <li class="select-item"><a href="#">Услуга 8</a></li>
                        </ul>
                    </div>
                </div>
                <div class="select">
                    <a href class="select-head">
                        <span class="select-head-text">Все страны</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.03118 4.28243C1.40608 3.90586 2.01392 3.90586 2.38882 4.28243L8.75 10.672L15.1112 4.28243C15.4861 3.90586 16.0939 3.90586 16.4688 4.28243C16.8437 4.65901 16.8437 5.26956 16.4688 5.64614L9.42882 12.7176C9.05392 13.0941 8.44608 13.0941 8.07118 12.7176L1.03118 5.64614C0.656274 5.26956 0.656274 4.65901 1.03118 4.28243Z"
                                  fill="currentColor"/>
                        </svg>
                        <input type="text" name="country" readonly hidden class="select-input">
                    </a>
                    <div class="select-drop">
                        <ul class="select-list">
                            <li class="select-item"><a href="#">Все страны</a></li>
                            <li class="select-item"><a href="#">Россия</a></li>
                            <li class="select-item"><a href="#">Беларусь</a></li>
                            <li class="select-item"><a href="#">Казахстан</a></li>
                            <li class="select-item"><a href="#">Китай</a></li>
                            <li class="select-item"><a href="#">Япония</a></li>
                        </ul>
                    </div>
                </div>
                <div class="select disabled">
                    <a href class="select-head">
                        <span class="select-head-text">Все регионы</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.03118 4.28243C1.40608 3.90586 2.01392 3.90586 2.38882 4.28243L8.75 10.672L15.1112 4.28243C15.4861 3.90586 16.0939 3.90586 16.4688 4.28243C16.8437 4.65901 16.8437 5.26956 16.4688 5.64614L9.42882 12.7176C9.05392 13.0941 8.44608 13.0941 8.07118 12.7176L1.03118 5.64614C0.656274 5.26956 0.656274 4.65901 1.03118 4.28243Z"
                                  fill="currentColor"/>
                        </svg>
                        <input type="text" name="region" readonly hidden class="select-input">
                    </a>
                    <div class="select-drop">
                        <ul class="select-list">
                            <li class="select-item"><a href="#">Все регионы</a></li>
                            <li class="select-item"><a href="#">Регион 1</a></li>
                            <li class="select-item"><a href="#">Регион 2</a></li>
                            <li class="select-item"><a href="#">Регион 3</a></li>
                            <li class="select-item"><a href="#">Регион 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="select disabled">
                    <a href class="select-head">
                        <span class="select-head-text">Все города</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.03118 4.28243C1.40608 3.90586 2.01392 3.90586 2.38882 4.28243L8.75 10.672L15.1112 4.28243C15.4861 3.90586 16.0939 3.90586 16.4688 4.28243C16.8437 4.65901 16.8437 5.26956 16.4688 5.64614L9.42882 12.7176C9.05392 13.0941 8.44608 13.0941 8.07118 12.7176L1.03118 5.64614C0.656274 5.26956 0.656274 4.65901 1.03118 4.28243Z"
                                  fill="currentColor"/>
                        </svg>
                        <input type="text" name="city" readonly hidden class="select-input">
                    </a>
                    <div class="select-drop">
                        <ul class="select-list">
                            <li class="select-item"><a href="#">Все города</a></li>
                            <li class="select-item"><a href="#">Краснодар</a></li>
                            <li class="select-item"><a href="#">Москва</a></li>
                            <li class="select-item"><a href="#">Санкт-петербург</a></li>
                            <li class="select-item"><a href="#">Екатеринбург</a></li>
                            <li class="select-item"><a href="#">Нижний новгород</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contacts-form-btns">
                <button type="submit" class="contacts-form-btn btn-primary">ПОКАЗАТЬ</button>
                <input type="button" value="СБРОС" class="contacts-form-clear">
            </div>
        </form>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "custom_partner",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "custom_partner",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0 => "", 1 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "partners",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0 => "ADDRESS", 1 => "NAME_COMPANY", 2 => "LINK_PATH", 3 => "TELEPHONE", 4 => "EMAIL", 5 => "",),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>