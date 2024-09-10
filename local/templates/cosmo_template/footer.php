<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
</main>
<footer class="footer container">
    <div class="footer-wrapper">
        <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-video-picture.png"
               src="<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-video.mp4"></video>
        <div class="footer-top">
            <div class="footer-logo">
                <a href="/">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.svg" alt="">
                </a>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/cosmo_inc.php"
                    )
                ); ?>
            </div>
            <div class="footer-top-block">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "custom_footer_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => "custom_footer_menu",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N"
                    ),
                    false
                ); ?>
                <div class="footer-contacts-mobile">
                    <img src="" alt="">
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/tg-icon.svg" alt="" parse-svg>
                    </a>
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/vk-icon.svg" alt="" parse-svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-block">
                <div class="footer-contacts">
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/tg-icon.svg" alt="" parse-svg>
                    </a>
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/vk-icon.svg" alt="" parse-svg>
                    </a>
                </div>
                <button class="btn-secondary popup-open" data-modal-id="modal1">Связаться с нами</button>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/address.php"
                    )
                ); ?>
            </div>
            <div class="footer-bottom-block">
                <a href="#" class="footer-bottom-link">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/terms_use.php"
                        )
                    ); ?>
                </a>
                <a href="#" class="footer-bottom-link">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/privacy_policy.php"
                        )
                    ); ?>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
