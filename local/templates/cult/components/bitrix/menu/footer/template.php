<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <ul class="footer-nav">
        <?php foreach ($arResult as $arItem): ?>
            <li><a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>