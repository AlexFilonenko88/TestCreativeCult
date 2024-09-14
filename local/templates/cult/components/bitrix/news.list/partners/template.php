<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="partners small-margin-top container">
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <form class="contacts-form" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
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
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="contacts-dealers-card" data-aos="fade-up">
                <div class="contacts-dealers-card-block">
                    <a href="<?= $arItem["PROPERTIES"]["COMPANY_WEBSITE"]["VALUE"] ?>" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-link"></a>
                    <img src="<?= $arItem["PROPERTIES"]["LINK_PATH"]["VALUE"] ?>" alt="POLAIR GROUP">
                    <h3><?= $arItem["PROPERTIES"]["NAME_COMPANY"]["VALUE"] ?></h3>
                    <p>
                        <?= $arItem["PROPERTIES"]["ADDRESS"]["VALUE"] ?>
                        <br>
                        <a href="tel:<?= $arItem["PROPERTIES"]["TELEPHONE"]["VALUE"] ?>">
                            <?= $arItem["PROPERTIES"]["TELEPHONE"]["VALUE"] ?></a>
                        <br><br>
                        <a href="mailto:<?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?>">
                            <?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?></a>
                    </p>
                    <a href="<?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?>" target="_blank" rel="nofollow"
                       class="contacts-dealers-card-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.036 7.44655L10.574 7.38299L12.1093 5.84777L16.608 5.8745L17.687 5.87603L17.7029 6.96941L17.7394 7.00587L17.7036 7.04165L17.7661 11.5046L16.2309 13.0398L16.1284 8.61685L6.96443 17.7808L5.83305 16.6495L15.036 7.44655Z"
                                  fill="#404040"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>