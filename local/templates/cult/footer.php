<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var CUser $USER
 */

?>
</main>

<footer class="footer container">
    <div class="footer-wrapper">
        <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/img/bg-video-picture.png"
               src="<?= SITE_TEMPLATE_PATH ?>/img/bg-video.mp4"></video>
        <div class="footer-top">
            <div class="footer-logo">
                <a href="/">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="">
                </a>
                <p>© 2024 cosmo, Inc.</p>
            </div>
            <div class="footer-top-block">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "footer",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "footer",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "footer"
                    ),
                    false
                ); ?>
                <div class="footer-contacts-mobile">
                    <img src="" alt="">
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt="" parse-svg>
                    </a>
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt="" parse-svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-block">
                <div class="footer-contacts">
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt="" parse-svg>
                    </a>
                    <a href="#" target="_blank" rel="nofollow" class="footer-contact">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt="" parse-svg>
                    </a>
                </div>
                <button class="btn-secondary popup-open" data-modal-id="modal1">Связаться с нами</button>
                <p class="footer-address">Москва, Ленинский проспект, <br> дом 37, корпус 1, 4 этаж</p>
            </div>
            <div class="footer-bottom-block">
                <a href="#" class="footer-bottom-link">Правила пользования</a>
                <a href="#" class="footer-bottom-link">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>


</body>
</html>