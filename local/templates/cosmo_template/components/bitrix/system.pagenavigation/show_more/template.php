<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->createFrame()->begin("Загрузка навигации");
?>

<? if ($arResult["NavPageCount"] > 1): ?>

    <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]): ?>
        <?
        $plus = $arResult["NavPageNomer"] + 1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;

        ?>

        <div class="support-bottom">
            <button class="support-btn btn-secondary load_more" data-url="<?= $url ?>">Показать Ещё</button>
        </div>

    <? else: ?>

        <div class="support-bottom">
            <div class="support-btn btn-secondary load_more">Загружено все</div>
        </div>

    <? endif ?>

<? endif ?>