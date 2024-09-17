<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var CUser $USER
 */

use Bitrix\Main\Page\Asset,
    Bitrix\Main\Loader;

Loader::includeModule('cult');

?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fancy.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/custom.css"); ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/swiper.js"); ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/fancybox.js"); ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js"); ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js"); ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js?1"); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <meta property="og:site_name" content="<?= $_SERVER['HTTP_HOST'] ?>">
    <meta property="og:title" content="<?php $APPLICATION->ShowTitle(); ?>">
    <meta property="og:description" content="<?php $APPLICATION->ShowProperty('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] ?><?= SITE_TEMPLATE_PATH ?>/img/og-image.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
    <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] ?>/">
    <meta property="twitter:card" content="summary_large_image">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="//<?= $_SERVER['HTTP_HOST'] ?><?= SITE_TEMPLATE_PATH ?>/img/favicon.svg"
          type="image/svg+xml">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>

<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="/">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="">
                </a>
            </div>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "main",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "main",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "main"
                ),
                false
            ); ?>
            <button class="header-btn">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/burger-icon.svg" alt="" parse-svg>
            </button>
        </div>
    </div>
    <div class="burger">
        <div class="burger-wrapper">
            <div class="burger-wrapper-block">
                <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/img/bg-video-picture.png"
                       src="<?= SITE_TEMPLATE_PATH ?>/img/bg-video.mp4"></video>
                <div class="burger-top">
                    <div class="burger-logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="">
                    </div>
                    <button class="burger-close">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-small-icon.svg" alt="" parse-svg>
                    </button>
                </div>
                <ul class="burger-nav">
                    <li class="burger-item burger-level">
                        <a href="#" class="burger-item-link burger-item-level">Продукция
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-right-icon.svg" alt="" parse-svg>
                        </a>
                        <div class="burger-submenu">
                            <div class="burger-submenu-top">
                                <button class="burger-submenu-close">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-left-icon.svg" alt=""
                                         parse-svg>
                                </button>
                                <p class="burger-submenu-title">Продукция</p>
                                <button class="burger-close">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-small-icon.svg" alt=""
                                         parse-svg>
                                </button>
                            </div>
                            <ul class="burger-submenu-nav">
                                <li>
                                    <a href="#" class="burger-item-link burger-item-level">Вертикальные витрины
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-right-icon.svg" alt=""
                                             parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-left-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Вертикальные витрины</p>
                                            <button class="burger-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-small-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC713</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71356</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC7131</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC7</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                            </div>
                                            <p>Москва, Ленинский проспект, дом 37, корпус 1, 4 этаж</p>
                                            <button class="btn-secondary popup-open" data-modal-id="modal1">СВЯЗАТЬСЯ С
                                                НАМИ
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="burger-item-link burger-item-level">Полувертикальные витрины
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-right-icon.svg" alt=""
                                             parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-left-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Полувертикальные витрины</p>
                                            <button class="burger-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-small-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71312345678901</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC713190</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                            </div>
                                            <p>Москва, Ленинский проспект, дом 37, корпус 1, 4 этаж</p>
                                            <button class="burger-contacts-btn btn-secondary popup-open">СВЯЗАТЬСЯ С
                                                НАМИ
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="burger-item-link burger-item-level">Гастрономические витрины
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-right-icon.svg" alt=""
                                             parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-left-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Гастрономические витрины</p>
                                            <button class="burger-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-small-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC713123</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC713123</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                            </div>
                                            <p>Москва, Ленинский проспект, дом 37, корпус 1, 4 этаж</p>
                                            <button class="btn-secondary popup-open" data-modal-id="modal1">СВЯЗАТЬСЯ С
                                                НАМИ
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="burger-item-link burger-item-level">Гастрономические витрины
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-right-icon.svg" alt=""
                                             parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-left-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Гастрономические витрины</p>
                                            <button class="burger-close">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-small-icon.svg"
                                                     alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC713</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png"
                                                         alt="">
                                                    <p>Витрины KC7131</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt=""
                                                         parse-svg>
                                                </a>
                                            </div>
                                            <p>Москва, Ленинский проспект, дом 37, корпус 1, 4 этаж</p>
                                            <button class="btn-secondary popup-open" data-modal-id="modal1">СВЯЗАТЬСЯ С
                                                НАМИ
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="burger-contacts">
                                <div class="burger-socials">
                                    <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt="" parse-svg>
                                    </a>
                                    <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt="" parse-svg>
                                    </a>
                                </div>
                                <p>Москва, Ленинский проспект, дом 37, корпус 1, 4 этаж</p>
                                <button class="btn-secondary popup-open" data-modal-id="modal1">СВЯЗАТЬСЯ С НАМИ
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="burger-item"><a href="/about.html" class="burger-item-link">Компания</a></li>
                    <li class="burger-item"><a href="/projects.html" class="burger-item-link">Проекты</a></li>
                    <li class="burger-item"><a href="/news.html" class="burger-item-link">Новости</a></li>
                    <li class="burger-item"><a href="/support.html" class="burger-item-link">Поддержка</a></li>
                    <li class="burger-item"><a href="/partners.html" class="burger-item-link">Партнеры</a></li>
                    <li class="burger-item"><a href="/contacts.html" class="burger-item-link">Контакты</a></li>
                </ul>
                <div class="burger-contacts">
                    <div class="burger-socials">
                        <a href="#" target="_blank" rel="nofollow" class="burger-social">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt="" parse-svg>
                        </a>
                        <a href="#" target="_blank" rel="nofollow" class="burger-social">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt="" parse-svg>
                        </a>
                    </div>
                    <p>Москва, Ленинский проспект, дом 37, корпус 1, 4 этаж</p>
                    <button class="btn-secondary popup-open" data-modal-id="modal1">СВЯЗАТЬСЯ С НАМИ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="header-menu-bg"></div>
        <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/img/bg-video-picture.png"
               src="<?= SITE_TEMPLATE_PATH ?>/img/bg-video.mp4"></video>
        <div class="container">
            <div class="header-menu-wrapper">
                <button class="header-menu-close">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/close-icon.svg" alt="" parse-svg>
                </button>
                <ul class="header-menu-items">
                    <li class="header-menu-item active">
                        <p class="header-menu-item-name">Вертикальные витрины</p>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-1.png"
                             alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Вертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-4.png" alt="">
                                        </div>
                                        <h3>Витрины KC71312</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Полувертикальные витрины</p>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-2.png"
                             alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Полувертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71312</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-4.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Полувертикальные витрины</p>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-3.png"
                             alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Полувертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC7132</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Низкотемпературные решения</p>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-4.png"
                             alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Низкотемпературные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-4.png" alt="">
                                        </div>
                                        <h3>Витрины KC890</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC70</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC56</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Вертикальные витрины и еще вертикальные витрины</p>
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Вертикальные витрины и еще вертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC70</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC567</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC723</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-1.png"
                             alt="">
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Полувертикальные витрины</p>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-2.png"
                             alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Полувертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC7</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC71234</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Вертикальные витрины</p>
                        <img class="header-menu-item-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/menu-img-4.png"
                             alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Вертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main class="page">
    