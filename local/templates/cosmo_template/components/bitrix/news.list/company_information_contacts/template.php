<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="contacts container" data-aos="fade-up">
    <div class="contacts-items">
        <div class="contacts-item">
            <h2><?= $arResult["ITEMS"][1]["PROPERTIES"]["DEPARTMENT"]["VALUE"]?></h2>
            <p><?= $arResult["ITEMS"][1]["PROPERTIES"]["COMPANY"]["VALUE"]?></p>
            <p><?= $arResult["ITEMS"][1]["PROPERTIES"]["ADDRESS"]["VALUE"]?></p>
            <div class="">
                <a href="tel:<?= $arResult["ITEMS"][1]["PROPERTIES"]["PHONE_1"]["VALUE"]?> "><?= $arResult["ITEMS"][1]["PROPERTIES"]["PHONE_1"]["VALUE"]?></a>
                <a href="tel:<?= $arResult["ITEMS"][1]["PROPERTIES"]["PHONE_2"]["VALUE"]?>"><?= $arResult["ITEMS"][1]["PROPERTIES"]["PHONE_2"]["VALUE"]?></a>
            </div>
            <a href="mailto:<?= $arResult["ITEMS"][1]["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?= $arResult["ITEMS"][1]["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
        </div>
        <div class="contacts-item">
            <h2><?= $arResult["ITEMS"][0]["PROPERTIES"]["DEPARTMENT"]["VALUE"]?></h2>
            <p><?= $arResult["ITEMS"][0]["PROPERTIES"]["COMPANY"]["VALUE"]?></p>
            <p><?= $arResult["ITEMS"][0]["PROPERTIES"]["ADDRESS"]["VALUE"]?></p>
            <div class="">
                <a href="tel:<?= $arResult["ITEMS"][0]["PROPERTIES"]["PHONE_1"]["VALUE"]?>"><?= $arResult["ITEMS"][0]["PROPERTIES"]["PHONE_1"]["VALUE"]?></a>
            </div>
            <a href="mailto:<?= $arResult["ITEMS"][0]["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?= $arResult["ITEMS"][0]["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
        </div>
    </div>
</div>