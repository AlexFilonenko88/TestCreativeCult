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
<div class="section-banner container">
    <div class="section-banner-wrapper">
        <? if ($APPLICATION->GetCurPage() == "/contacts/" && $arResult["ITEMS"][2]["ID"] == "55"): ?>
            <video playsinline muted autoplay loop
                   poster="<?= $arResult["ITEMS"][2]["PROPERTIES"]["PICTURE"]["VALUE"] ?>"
                   src="<?= $arResult["ITEMS"][2]["PROPERTIES"]["VIDEO"]["VALUE"] ?>"></video>
            <div class=" section-banner-block">
                <p class="section-banner-name"><?= $arResult["ITEMS"][2]["PROPERTIES"]["HEADING"]["VALUE"] ?></p>
                <h2 class="section-banner-title"><?= $arResult["ITEMS"][2]["PROPERTIES"]["SECTION"]["VALUE"] ?></h2>
                <div class="section-banner-text">
                    <?= $arResult["ITEMS"][2]["PROPERTIES"]["DESCRIPTION"]["VALUE"] ?>
                </div>
            </div>
        <? endif; ?>
    </div>
</div>