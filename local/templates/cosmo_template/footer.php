<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
                <p>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/cosmo_template/include/cosmo_inc.php"
                        )
                    ); ?>
                </p>
            </div>
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
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/templates/cosmo_template/include/address.php"
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
                            "PATH" => "/local/templates/cosmo_template/include/terms_use.php"
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
                            "PATH" => "/local/templates/cosmo_template/include/privacy_policy.php"
                        )
                    ); ?>
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="popup popup-offer" id="modal1">
    <div class="popup-background"></div>
    <div class="popup-wrapper">
        <div class="popup-head">
            <h3>Обратная связь</h3>
            <button class="popup-close">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.792893 26.2071C1.18342 26.5976 1.81658 26.5976 2.20711 26.2071L26.2071 2.20711C26.5976 1.81658 26.5976 1.18342 26.2071 0.792893C25.8166 0.402369 25.1834 0.402369 24.7929 0.792893L0.792893 24.7929C0.402369 25.1834 0.402369 25.8166 0.792893 26.2071Z"
                          fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M26.2071 26.2071C26.5976 25.8166 26.5976 25.1834 26.2071 24.7929L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792893 0.792893C0.402369 1.18342 0.402369 1.81658 0.792893 2.20711L24.7929 26.2071C25.1834 26.5976 25.8166 26.5976 26.2071 26.2071Z"
                          fill="currentColor"/>
                </svg>
            </button>
        </div>
        <p class="popup-text">Заполните форму и мы свяжемся с вами по указанным контактам:</p>
        <form>
            <div class="popup-inputs">
                <label class="input">
                    <span>Имя</span>
                    <input type="text" name="name">
                </label>
                <label class="input">
                    <span>Фамилия</span>
                    <input type="text" name="secondName">
                </label>
                <label class="input">
                    <span>E-mail</span>
                    <input type="email" name="email">
                </label>
                <label class="input">
                    <span>Телефон</span>
                    <input type="tel" name="tel">
                </label>
            </div>
            <label class="popup-textarea textarea">
                <span>Ваше сообщение</span>
                <textarea name="text"></textarea>
            </label>
            <div class="popup-form-bottom">
                <div class="popup-form-policy">
                    <label class="checkbox">
                        <input type="checkbox" checked name="policy">
                        <div class="checked"></div>
                    </label>
                    <p>Согласен с <a href="#"> Политикой конфиденциальности и условиями сайта</a></p>
                </div>
                <button class="popup-form-btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
</div>
<div class="popup popup-accept">
    <div class="popup-background"></div>
    <div class="popup-wrapper">
        <div class="popup-head">
            <h3>Сообщение <br> отправлено</h3>
            <button class="popup-close">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.792893 26.2071C1.18342 26.5976 1.81658 26.5976 2.20711 26.2071L26.2071 2.20711C26.5976 1.81658 26.5976 1.18342 26.2071 0.792893C25.8166 0.402369 25.1834 0.402369 24.7929 0.792893L0.792893 24.7929C0.402369 25.1834 0.402369 25.8166 0.792893 26.2071Z"
                          fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M26.2071 26.2071C26.5976 25.8166 26.5976 25.1834 26.2071 24.7929L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792893 0.792893C0.402369 1.18342 0.402369 1.81658 0.792893 2.20711L24.7929 26.2071C25.1834 26.5976 25.8166 26.5976 26.2071 26.2071Z"
                          fill="currentColor"/>
                </svg>
            </button>
        </div>
        <p class="popup-text">Благодарим за обращение, мы свяжемся с вами в течение рабочего дня</p>
    </div>
</div>
<div class="cookie">
    <p>
        Мы используем <a href="/policy/">cookie</a>, чтобы улучшить сайт для вас.
        Вы можете отключить передачу cookie в настройках вашего браузера.
    </p>
    <button class="cookie-btn">Принять</button>
    <style>
        :root {
            --cookie-bg-color: #ffffff;
            --cookie-text-color: #010101;
            --cookie-link-color: #010101;
            --cookie-btn-bg-color: #F8EBE2;
            --cookie-btn-text-color: #000000;
        }

        .cookie {
            position: fixed;
            z-index: 1000;
            left: -55.56vw;
            bottom: 1.39vw;
            max-width: 19.44vw;
            padding: 1.11vw 1.39vw;
            border-radius: 0.56vw;
            background: var(--cookie-bg-color);
            transition: all 0.3s ease;
            box-shadow: 0px 0px 0.83vw rgba(0, 0, 0, 0.2);
        }

        .cookie.active {
            left: 1.39vw;
            bottom: 1.39vw;
        }

        .cookie p {
            font-size: 0.97vw;
            color: var(--cookie-text-color);
        }

        .cookie p a {
            font-size: 0.97vw;
            text-decoration: underline;
            color: var(--cookie-link-color);
            transition: all 0.3s ease;
        }

        .cookie p a:hover {
            opacity: 0.8;
        }

        .cookie button {
            font-size: 1.11vw;
            color: var(--cookie-btn-text-color);
            background: var(--cookie-btn-bg-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1.11vw;
            padding: 1.11vw 1.39vw;
            border: none;
            border-radius: 0.56vw;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cookie button:hover {
            background: #FFE8D8;
        }

        .cookie button:active {
            transition: all 0.1s ease;
            color: #F8EBE2;
            background: #121212;
        }

        @media screen and (max-width: 992px) {
            .cookie {
                left: -80vw;
                bottom: 5.33vw;
                max-width: 74.67vw;
                padding: 4.27vw 5.33vw;
                border-radius: 2.13vw;
                box-shadow: 0px 0px 3.20vw rgba(0, 0, 0, 0.2);
            }

            .cookie.active {
                left: 5.33vw;
                bottom: 5.33vw;
            }

            .cookie p {
                font-size: 3.73vw
            }

            .cookie p a {
                font-size: 3.73vw;
            }

            .cookie p a:hover {
                opacity: 1;
            }

            .cookie button {
                font-size: 4.27vw;
                margin-top: 4.27vw;
                padding: 4.27vw 5.33vw;
                border-radius: 2.13vw;
            }

            .cookie button:hover {
                background: #F8EBE2;
            }

            .cookie button:active {
                transition: all 0.1s ease;
                color: #F8EBE2;
                background: #121212;
            }
        }
    </style>
    <script>
        function checkCiteCookie() {
            let cookieDate = localStorage.getItem('acceptedCookieCite');
            let cookieNotificationBlock = document.querySelector('.cookie');
            let cookieBtn = cookieNotificationBlock.querySelector('.cookie-btn');

            if (!cookieDate || (+cookieDate + 31536000000) < Date.now()) {
                cookieNotificationBlock.classList.add('active');

            } else {
                cookieNotificationBlock.classList.remove('active');
            }

            cookieBtn.onclick = () => {
                closeCookieModal()
            }

            function closeCookieModal() {
                localStorage.setItem('acceptedCookieCite', Date.now());
                cookieNotificationBlock.classList.remove('active');
            }
        }

        setTimeout(checkCiteCookie, 1000);
    </script>
</div>
</body>
</html>
