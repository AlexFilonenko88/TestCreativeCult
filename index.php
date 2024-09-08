<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Cosmo");
?>
    <div class="main-banner container">
        <div class="main-banner-wrapper">
            <div id="mainSlider" class="main-banner-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">@@include('template/cards/main-banner-card.html', {title: 'ВИТРИНЫ
                        KC71'})
                    </div>
                    <div class="swiper-slide">@@include('template/cards/main-banner-card-second.html', {title:
                        'Полувертикальные KC2'})
                    </div>
                    <div class="swiper-slide">@@include('template/cards/main-banner-card.html', {title:
                        'Полувертикальные KC45'})
                    </div>
                    <div class="swiper-slide">@@include('template/cards/main-banner-card-second.html', {title: 'ВИТРИНЫ
                        KC72'})
                    </div>
                </div>
            </div>
            <div class="main-banner-btns">
                <button class="main-banner-btn main-banner-btn-prev">
                    <img src="../img/icons/main-arrow-prev.svg" alt="" parse-svg>
                </button>
                <button class="main-banner-btn main-banner-btn-next">
                    <img src="../img/icons/main-arrow-next.svg" alt="" parse-svg>
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
                @@include('template/cards/main-category-card.html', {title: 'Вертикальные витрины', img:
                '../img/content/main-category-img1.png'})
                @@include('template/cards/main-category-card.html', {title: 'Полувертикальные витрины', img:
                '../img/content/main-category-img2.png'})
            </li>
            <li id="models" class="main-content-item main-content-models ">
                @@include('template/cards/main-model-card.html', {title: 'Вертикальные витрины', img:
                '../img/content/main-model-img1.png', text: ''})
                @@include('template/cards/main-model-card.html', {title: 'Полувертикальные витрины', img:
                '../img/content/main-model-img2.png', text: ''})
                @@include('template/cards/main-model-card.html', {title: 'Вертикальные витрины', img:
                '../img/content/main-model-img1.png', text: ''})
            </li>
        </ul>
    </div>

    <div class="main-projects container" data-aos="fade-up">
        <h2>Проекты</h2>
        <div class="main-projects-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    @@include('template/cards/main-project-card.html', {title: 'Торговая сеть Миндаль открывает
                    суперстор в новой концепции', img: '../img/content/main-project-img1.png', date: '02 / 02 / 2023 '})
                </div>
                <div class="swiper-slide">
                    @@include('template/cards/main-project-card.html', {title: 'Магазин «Магнит»', img:
                    '../img/content/main-project-img2.jpg', date: '28 / 01 / 2022 '})
                </div>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>