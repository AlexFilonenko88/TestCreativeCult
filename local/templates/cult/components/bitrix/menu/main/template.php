<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <ul class="header-nav">
        <?php foreach ($arResult as $arItem): ?>
            <li>
                <a href="<?= $link = $arItem['LINK'] ?>" class="<?= $link != '#' ?: 'header-menu-btn' ?>">
                    <?= $arItem['TEXT'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>