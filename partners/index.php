<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle("Партнеры");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->SetPageProperty("keywords", "");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "banner",
    array(
        "AREA_FILE_SHOW" => "page",
        "AREA_FILE_SUFFIX" => "banner",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => "banner",
        "NAME" => "COSMO",
        "TITLE" => "Партнеры"
    ),
    false
); ?>

    <div class="partners small-margin-top container">
        <form class="contacts-form">
            <div class="contacts-form-selects">
                <div class="select">
                    <a href class="select-head">
                        <span class="select-head-text">Все услуги</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
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
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
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
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
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
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
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
        <div class="contacts-dealers-items">
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://polairgroup.ru/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img1.svg" alt="POLAIR GROUP">
                    <h3>POLAIR GROUP</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://polairgroup.ru/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://carboma.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img2.svg" alt="Carboma">
                    <h3>Carboma</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://carboma.com/" target="_blank" rel="nofollow" class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://dazzlpro.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img3.svg" alt="DAZZL">
                    <h3>DAZZL</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://dazzlpro.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://www.polair.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img4.svg" alt="POLAIR +">
                    <h3>POLAIR +</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://www.polair.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://www.radaxovens.ru/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img5.svg" alt="Radax">
                    <h3>Radax</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://www.radaxovens.ru/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://frost-eco.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img6.svg" alt="Frosteco">
                    <h3>Frosteco</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://frost-eco.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://www.rada2000.ru/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img7.svg" alt="RADA">
                    <h3>RADA</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://www.rada2000.ru/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="https://www.polairmedcare.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="../img/content/about-product-img8.svg" alt="POLAIR">
                    <h3>POLAIR</h3>
                    <p>
                        117105, Москва, Варшавское шоссе, 26, БЦ Варшавская Плаза, офис 403
                        <br>
                        <a href="tel:+7 (499) 955-46-63">+7 (499) 955-46-63</a>
                        <br><br>
                        <a href="mailto:moscow@idsgroup.ru">moscow@idsgroup.ru</a>
                    </p>
                    <a href="https://www.polairmedcare.com/" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>