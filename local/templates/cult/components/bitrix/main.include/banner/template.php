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

<div class="section-banner container">
    <div class="section-banner-wrapper">
        <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/img/bg-video-picture.png"
               src="<?= SITE_TEMPLATE_PATH ?>/img/bg-video.mp4"></video>
        <div class="section-banner-block">
            <p class="section-banner-name"><?= $arParams['NAME'] ?></p>
            <h2 class="section-banner-title"><?= $arParams['TITLE'] ?></h2>
            <div class="section-banner-text"><?php if ($arResult["FILE"] <> '') include($arResult["FILE"]); ?></div>
        </div>
    </div>
</div>