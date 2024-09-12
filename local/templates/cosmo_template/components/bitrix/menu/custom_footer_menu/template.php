<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="footer-top-block">
    <? if (!empty($arResult)): ?>
        <ul class="footer-nav">

            <?
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <? if ($arItem["SELECTED"]):?>
                <li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
            <? else:?>
                <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
            <? endif ?>

            <? endforeach ?>

        </ul>
    <? endif ?>
    <div class="footer-contacts-mobile">
        <img src="" alt="">
        <a href="#" target="_blank" rel="nofollow" class="footer-contact">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/tg-icon.svg" alt="" parse-svg>
        </a>
        <a href="#" target="_blank" rel="nofollow" class="footer-contact">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/vk-icon.svg" alt="" parse-svg>
        </a>
    </div>
</div>
