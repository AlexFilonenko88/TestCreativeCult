<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cosmo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
    <meta property="og:url" content="../img/og-logo.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">

    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= SITE_TEMPLATE_PATH ?> . /assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= SITE_TEMPLATE_PATH ?> . /assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?= SITE_TEMPLATE_PATH ?> . /assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?> . /assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?> . /assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--    <link type="text/css" href="css/main.css" rel="stylesheet">-->
    <!--    <link type="text/css" href="css/aos.css" rel="stylesheet">-->
    <!--    <link type="text/css" href="css/fancybox.css" rel="stylesheet">-->
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/main.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/aos.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/fancybox.css");
    ?>
</head>
<body>
<header class="header">
    <div class="container">
        <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="/">
                    <img src="../img/logo.svg" alt="">
                </a>
            </div>
            <ul class="header-nav">
                <li>
                    <a href="#" class="header-menu-btn">Продукция</a>
                </li>
                <li>
                    <a href="/about.html">Компания</a>
                </li>
                <li>
                    <a href="/projects.html">Проекты</a>
                </li>
                <li>
                    <a href="/news.html">Новости</a>
                </li>
                <li>
                    <a href="/support.html">Поддержка</a>
                </li>
                <li>
                    <a href="/partners.html">Партнеры</a>
                </li>
                <li>
                    <a href="/contacts.html">Контакты</a>
                </li>
            </ul>
            <button class="header-btn">
                <img src="../img/icons/burger-icon.svg" alt="" parse-svg>
            </button>
        </div>
    </div>
    <div class="burger">
        <div class="burger-wrapper">
            <div class="burger-wrapper-block">
                <video playsinline muted autoplay loop poster="../img/bg-video-picture.png"
                       src="../img/bg-video.mp4"></video>
                <div class="burger-top">
                    <div class="burger-logo">
                        <img src="../img/logo.svg" alt="">
                    </div>
                    <button class="burger-close">
                        <img src="../img/icons/close-small-icon.svg" alt="" parse-svg>
                    </button>
                </div>
                <ul class="burger-nav">
                    <li class="burger-item burger-level">
                        <a href="#" class="burger-item-link burger-item-level">Продукция
                            <img src="../img/icons/chevron-right-icon.svg" alt="" parse-svg>
                        </a>
                        <div class="burger-submenu">
                            <div class="burger-submenu-top">
                                <button class="burger-submenu-close">
                                    <img src="../img/icons/chevron-left-icon.svg" alt="" parse-svg>
                                </button>
                                <p class="burger-submenu-title">Продукция</p>
                                <button class="burger-close">
                                    <img src="../img/icons/close-small-icon.svg" alt="" parse-svg>
                                </button>
                            </div>
                            <ul class="burger-submenu-nav">
                                <li>
                                    <a href="#" class="burger-item-link burger-item-level">Вертикальные витрины
                                        <img src="../img/icons/chevron-right-icon.svg" alt="" parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="../img/icons/chevron-left-icon.svg" alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Вертикальные витрины</p>
                                            <button class="burger-close">
                                                <img src="../img/icons/close-small-icon.svg" alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC713</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71356</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC7131</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC7</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/tg-icon.svg" alt="" parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/vk-icon.svg" alt="" parse-svg>
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
                                        <img src="../img/icons/chevron-right-icon.svg" alt="" parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="../img/icons/chevron-left-icon.svg" alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Полувертикальные витрины</p>
                                            <button class="burger-close">
                                                <img src="../img/icons/close-small-icon.svg" alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71312345678901</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC713190</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/tg-icon.svg" alt="" parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/vk-icon.svg" alt="" parse-svg>
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
                                        <img src="../img/icons/chevron-right-icon.svg" alt="" parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="../img/icons/chevron-left-icon.svg" alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Гастрономические витрины</p>
                                            <button class="burger-close">
                                                <img src="../img/icons/close-small-icon.svg" alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC713123</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC713123</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/tg-icon.svg" alt="" parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/vk-icon.svg" alt="" parse-svg>
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
                                        <img src="../img/icons/chevron-right-icon.svg" alt="" parse-svg>
                                    </a>
                                    <div class="burger-submenu">
                                        <div class="burger-submenu-top">
                                            <button class="burger-submenu-close">
                                                <img src="../img/icons/chevron-left-icon.svg" alt="" parse-svg>
                                            </button>
                                            <p class="burger-submenu-title">Гастрономические витрины</p>
                                            <button class="burger-close">
                                                <img src="../img/icons/close-small-icon.svg" alt="" parse-svg>
                                            </button>
                                        </div>
                                        <ul class="burger-submenu-nav">
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC713</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC71</p>
                                                </a>
                                            </li>
                                            <li class="burger-submenu-card">
                                                <a href="#">
                                                    <img src="../img/content/submenu-img-1.png" alt="">
                                                    <p>Витрины KC7131</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="burger-contacts">
                                            <div class="burger-socials">
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/tg-icon.svg" alt="" parse-svg>
                                                </a>
                                                <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                                    <img src="../img/icons/vk-icon.svg" alt="" parse-svg>
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
                                        <img src="../img/icons/tg-icon.svg" alt="" parse-svg>
                                    </a>
                                    <a href="#" target="_blank" rel="nofollow" class="burger-social">
                                        <img src="../img/icons/vk-icon.svg" alt="" parse-svg>
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
                            <img src="../img/icons/tg-icon.svg" alt="" parse-svg>
                        </a>
                        <a href="#" target="_blank" rel="nofollow" class="burger-social">
                            <img src="../img/icons/vk-icon.svg" alt="" parse-svg>
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
        <video playsinline muted autoplay loop poster="../img/bg-video-picture.png" src="../img/bg-video.mp4"></video>
        <div class="container">
            <div class="header-menu-wrapper">
                <button class="header-menu-close">
                    <img src="../img/icons/close-icon.svg" alt="" parse-svg>
                </button>
                <ul class="header-menu-items">
                    <li class="header-menu-item active">
                        <p class="header-menu-item-name">Вертикальные витрины</p>
                        <img class="header-menu-item-img" src="../img/content/menu-img-1.png" alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Вертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-4.png" alt="">
                                        </div>
                                        <h3>Витрины KC71312</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Полувертикальные витрины</p>
                        <img class="header-menu-item-img" src="../img/content/menu-img-2.png" alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Полувертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71312</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-4.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Полувертикальные витрины</p>
                        <img class="header-menu-item-img" src="../img/content/menu-img-3.png" alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Полувертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC7132</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC713</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Низкотемпературные решения</p>
                        <img class="header-menu-item-img" src="../img/content/menu-img-4.png" alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Низкотемпературные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-4.png" alt="">
                                        </div>
                                        <h3>Витрины KC890</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC70</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
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
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Вертикальные витрины и еще вертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC70</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC567</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC723</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <img class="header-menu-item-img" src="../img/content/menu-img-1.png" alt="">
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Полувертикальные витрины</p>
                        <img class="header-menu-item-img" src="../img/content/menu-img-2.png" alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Полувертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC7</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-2.png" alt="">
                                        </div>
                                        <h3>Витрины KC71</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
                                        </div>
                                        <h3>Витрины KC7131</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-3.png" alt="">
                                        </div>
                                        <h3>Витрины KC71234</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu-item">
                        <p class="header-menu-item-name">Вертикальные витрины</p>
                        <img class="header-menu-item-img" src="../img/content/menu-img-4.png" alt="">
                        <div class="header-menu-submenu">
                            <button class="header-menu-submenu-close">
                                <img src="../img/icons/chevron-menu-icon.svg" alt="" parse-svg>
                                Вертикальные витрины
                            </button>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="">
                                            <img src="../img/content/submenu-img-1.png" alt="">
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
