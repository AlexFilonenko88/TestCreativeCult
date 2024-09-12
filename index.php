<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Cosmo");
?>
    <div class="main-banner container">
        <div class="main-banner-wrapper">
            <div id="mainSlider" class="main-banner-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-banner-card">
                            <img class="main-banner-card-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img1.png" alt="">
                            <img class="main-banner-card-img-m" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img1-m.png" alt="">
                            <div class="main-banner-card-block">
                                <h2 class="main-banner-card-title">ВИТРИНЫ KC71</h2>
                                <p>В мире, где роскошь становится обязательством, Cosmo выделяется как идеальный выбор
                                    для тех,
                                    кто ценит качество, стиль и функциональность. Идеальное слияние эстетики и
                                    практичности в каждой детали.
                                </p>
                                <a href="/product.html" class="main-banner-card-link">О модели</a>
                                <a href="/product.html" class="main-banner-card-btn btn-secondary">О модели</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-banner-card main-banner-card-second">
                            <img class="main-banner-card-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img2.png" alt="">
                            <img class="main-banner-card-img-m" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img2-m.png" alt="">
                            <div class="main-banner-card-block">
                                <h2 class="main-banner-card-title">Полувертикальные KC2</h2>
                                <p>В мире, где роскошь становится обязательством, Cosmo выделяется как идеальный выбор
                                    для тех,
                                    кто ценит качество, стиль и функциональность. Идеальное слияние эстетики и
                                    практичности в каждой детали.
                                </p>
                                <a href="/product.html" class="main-banner-card-link">О модели</a>
                                <a href="/product.html" class="main-banner-card-btn btn-secondary">О модели</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-banner-card">
                            <img class="main-banner-card-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img1.png" alt="">
                            <img class="main-banner-card-img-m" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img1-m.png" alt="">
                            <div class="main-banner-card-block">
                                <h2 class="main-banner-card-title">Полувертикальные KC45</h2>
                                <p>В мире, где роскошь становится обязательством, Cosmo выделяется как идеальный выбор
                                    для тех,
                                    кто ценит качество, стиль и функциональность. Идеальное слияние эстетики и
                                    практичности в каждой детали.
                                </p>
                                <a href="/product.html" class="main-banner-card-link">О модели</a>
                                <a href="/product.html" class="main-banner-card-btn btn-secondary">О модели</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-banner-card main-banner-card-second">
                            <img class="main-banner-card-img" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img2.png" alt="">
                            <img class="main-banner-card-img-m" src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-banner-img2-m.png" alt="">
                            <div class="main-banner-card-block">
                                <h2 class="main-banner-card-title">ВИТРИНЫ KC72</h2>
                                <p>В мире, где роскошь становится обязательством, Cosmo выделяется как идеальный выбор
                                    для тех,
                                    кто ценит качество, стиль и функциональность. Идеальное слияние эстетики и
                                    практичности в каждой детали.
                                </p>
                                <a href="/product.html" class="main-banner-card-link">О модели</a>
                                <a href="/product.html" class="main-banner-card-btn btn-secondary">О модели</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-banner-btns">
                <button class="main-banner-btn main-banner-btn-prev">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/main-arrow-prev.svg" alt="" parse-svg>
                </button>
                <button class="main-banner-btn main-banner-btn-next">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/main-arrow-next.svg" alt="" parse-svg>
                </button>
            </div>
            <div class="main-banner-pagination">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="main-content container">
        <ul class="main-content-tabs">
            <li class="main-content-tab active">
                <a href="#categories">КАТЕГОРИИ</a>
            </li>
            <li class="main-content-tab ">
                <a href="#models">МОДЕЛЬНЫЙ РЯД</a>
            </li>
        </ul>
        <ul class="main-content-items">
            <li id="categories" class="main-content-item main-content-category active">
                <div class="main-content-category-card" data-aos="fade-up">
                    <a href="/catalog.html">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-category-img1.png" alt="">
                        <div class="">
                            <h3>Вертикальные витрины</h3>
                            <a class="main-content-category-card-link" href="/catalog.html">Перейти в категорию</a>
                        </div>
                    </a>
                </div>
                <div class="main-content-category-card" data-aos="fade-up">
                    <a href="/catalog.html">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-category-img2.png" alt="">
                        <div class="">
                            <h3>Полувертикальные витрины</h3>
                            <a class="main-content-category-card-link" href="/catalog.html">Перейти в категорию</a>
                        </div>
                    </a>
                </div>
            </li>
            <li id="models" class="main-content-item main-content-models ">
                <div class="main-content-models-card" data-aos="fade-up">
                    <a href="/catalog.html">
                        <div class="main-content-models-card-wrapper">
                            <div class="main-content-models-card-block">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-model-img1.png" alt="">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-models-img-hover.png" alt="">
                            </div>
                            <div class="main-content-models-card-content">
                                <h3>
                                    Вертикальные витрины
                                </h3>
                                <a href="/catalog.html" class="main-content-models-card-link">Перейти в категорию</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="main-content-models-card" data-aos="fade-up">
                    <a href="/catalog.html">
                        <div class="main-content-models-card-wrapper">
                            <div class="main-content-models-card-block">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-model-img2.png" alt="">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-models-img-hover.png" alt="">
                            </div>
                            <div class="main-content-models-card-content">
                                <h3>
                                    Полувертикальные витрины
                                </h3>
                                <a href="/catalog.html" class="main-content-models-card-link">Перейти в категорию</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="main-content-models-card" data-aos="fade-up">
                    <a href="/catalog.html">
                        <div class="main-content-models-card-wrapper">
                            <div class="main-content-models-card-block">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-model-img1.png" alt="">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-models-img-hover.png" alt="">
                            </div>
                            <div class="main-content-models-card-content">
                                <h3>
                                    Вертикальные витрины
                                </h3>
                                <a href="/catalog.html" class="main-content-models-card-link">Перейти в категорию</a>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main-projects container" data-aos="fade-up">
        <h2>Проекты</h2>
        <div class="main-projects-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main-projects-card">
                        <a href="#">
                            <div class="main-projects-card-wrapper">
                                <div class="main-projects-card-block">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-project-img1.png" alt="">
                                </div>
                                <div class="main-projects-card-content">
                                    <p class="main-projects-card-text">Проекты с витринами KC71 (COSMO)</p>
                                    <h3>Торговая сеть Миндаль открывает суперстор в новой концепции</h3>
                                    <div class="main-projects-card-sign">
                                        <p class="">02 / 02 / 2023 </p>
                                        <p>МИНИМАРКЕТ</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-projects-card">
                        <a href="#">
                            <div class="main-projects-card-wrapper">
                                <div class="main-projects-card-block">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/content/main-project-img2.jpg" alt="">
                                </div>
                                <div class="main-projects-card-content">
                                    <p class="main-projects-card-text">Проекты с витринами KC71 (COSMO)</p>
                                    <h3>Магазин «Магнит»</h3>
                                    <div class="main-projects-card-sign">
                                        <p class="">28 / 01 / 2022 </p>
                                        <p>МИНИМАРКЕТ</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>