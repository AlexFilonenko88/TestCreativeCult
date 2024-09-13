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
CJSCore::Init(array("jquery"));
?>

<div class="support-bottom">
    <?php if ($arResult["NavPageCount"] > 1): ?>
        <?php if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]): ?>
            <?php
            $plus = $arResult["NavPageNomer"] + 1;
            $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;
            ?>
            <button data-url="<?= $url ?>" class="support-btn btn-secondary load_more">Показать Ещё</button>
        <?php else: ?>
            <button class="support-btn btn-secondary load_more">Загружено все</button>
        <?php endif ?>
    <?php endif ?>
</div>
