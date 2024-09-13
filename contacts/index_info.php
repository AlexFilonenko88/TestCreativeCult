<?php use Cult\Tools; ?>
<div class="contacts container" data-aos="fade-up">
    <div class="contacts-items">
        <div class="contacts-item">
            <h2>Офис продаж</h2>
            <p><?= Tools::getOption('SALE_OFFICE_NAME') ?></p>
            <p><?= Tools::getOption('SALE_OFFICE_ADDRESS') ?></p>
            <p><a href="tel:<?= Tools::formatPhone(Tools::getOption('SALE_OFFICE_PHONE')) ?>">
                    <?= Tools::getOption('SALE_OFFICE_PHONE') ?></a></p>
            <p><a href="mailto:<?= Tools::getOption('SALE_OFFICE_EMAIL') ?>">
                    <?= Tools::getOption('SALE_OFFICE_EMAIL') ?></a></p>
        </div>
        <div class="contacts-item">
            <h2>Производство</h2>
            <p><?= Tools::getOption('PRODUCTION_OFFICE_NAME') ?></p>
            <p><?= Tools::getOption('PRODUCTION_OFFICE_ADDRESS') ?></p>
            <p><a href="tel:<?= Tools::formatPhone(Tools::getOption('PRODUCTION_OFFICE_PHONE')) ?>">
                    <?= Tools::getOption('PRODUCTION_OFFICE_PHONE') ?></a></p>
            <p><a href="mailto:<?= Tools::getOption('PRODUCTION_OFFICE_EMAIL') ?>">
                    <?= Tools::getOption('PRODUCTION_OFFICE_EMAIL') ?></a></p>
        </div>
    </div>
</div>