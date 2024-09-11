<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="section-banner container">
        <div class="section-banner-wrapper">
            <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/img/bg-video-picture.png"
                   src="<?= SITE_TEMPLATE_PATH ?>/img/bg-video.mp4"></video>
            <div class="section-banner-block">
                <p class="section-banner-name">COSMO</p>
                <h2 class="section-banner-title">КОНТАКТЫ</h2>
                <div class="section-banner-text">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/cosmo_template/include/inf.php"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="contacts container" data-aos="fade-up">
        <div class="contacts-items">
            <div class="contacts-item">
                <h2>ОФИС ПРОДАЖ</h2>
                <p>ООО “Даззл”</p>
                <p>Москва, ул. Дзержинского, 100</p>
                <div class="">
                    <a href="tel:8 800 000-00-00 ">8 800 000-00-00 </a>
                    <a href="tel:+7 (495) 000-00-00">+7 (495) 000-00-00</a>
                </div>
                <a href="mailto:info@mail.ru">info@mail.ru</a>
            </div>
            <div class="contacts-item">
                <h2>ПРОИЗВОДСТВО</h2>
                <p>ООО “Даззл”</p>
                <p>Москва, ул. Дзержинского, 100</p>
                <div class="">
                    <a href="tel:+7 (495) 000-00-00">+7 (495) 000-00-00</a>
                </div>
                <a href="mailto:info@mail.ru">info@mail.ru</a>
            </div>
        </div>
    </div>

    <div class="contacts-dealers container" data-aos="fade-up">
        <h2>ДИЛЕРСКАЯ СЕТЬ</h2>
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
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "custom_sirvice",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "N",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "COMPONENT_TEMPLATE" => "custom_sirvice",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "N",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(0 => "", 1 => "",),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "3",
                                    "IBLOCK_TYPE" => "products",
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
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(0 => "", 1 => "",),
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
                        </ul>
                    </div>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "custom_city",
                    array(
                        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMPONENT_TEMPLATE" => ".default",
                        "COUNT_ELEMENTS" => "N",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "FILTER_NAME" => "sectionsFilter",
                        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                        "IBLOCK_ID" => "7",
                        "IBLOCK_TYPE" => "city",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array(0 => "", 1 => "",),
                        "SECTION_ID" => "",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(0 => "", 1 => "",),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "2",
                        "VIEW_MODE" => "LIST"
                    )
                ); ?>
                <div class="select">
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
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "custom_sirvice",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "N",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "COMPONENT_TEMPLATE" => "custom_sirvice",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "N",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(0 => "", 1 => "",),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "7",
                                    "IBLOCK_TYPE" => "city",
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
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(0 => "", 1 => "",),
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contacts-form-btns">
                <button type="submit" class="contacts-form-btn btn-primary">ПОКАЗАТЬ</button>
                <input type="button" value="СБРОС" class="contacts-form-clear">
            </div>
        </form>
        <?
        global $arrFilter;
        $arrFilter = [];
        if (isset($_GET["service"]) && !empty($_GET["service"])) {
            $arrFilter["PROPERTY_SERVICE"] = $_GET["service"];
        }
        if (isset($_GET["city"]) && !empty($_GET["city"])) {
            $arrFilter["PROPERTY_CITY"] = $_GET["city"];
        }

        $APPLICATION->IncludeComponent(
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
                "FILTER_NAME" => "arrFilter",
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