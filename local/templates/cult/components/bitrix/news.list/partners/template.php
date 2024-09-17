<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<?php
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


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
