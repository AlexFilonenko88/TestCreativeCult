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

<div class="select">
    <a href class="select-head">
        <span class="select-head-text">Все страны</span>
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.03118 4.28243C1.40608 3.90586 2.01392 3.90586 2.38882 4.28243L8.75 10.672L15.1112 4.28243C15.4861 3.90586 16.0939 3.90586 16.4688 4.28243C16.8437 4.65901 16.8437 5.26956 16.4688 5.64614L9.42882 12.7176C9.05392 13.0941 8.44608 13.0941 8.07118 12.7176L1.03118 5.64614C0.656274 5.26956 0.656274 4.65901 1.03118 4.28243Z"
                  fill="currentColor"/>
        </svg>
        <input type="text" name="country" readonly hidden class="select-input">
    </a>
    <div class="select-drop">
        <ul class="select-list">
            <li class="select-item"><a href="#">Все страны</a></li>
            <? foreach ($arResult['SECTIONS_1'] as $arSection): ?>
                <li class="select-item"><a href="#" data-id="<?= $arSection["ID"] ?>"><?= $arSection["NAME"] ?></a></li>
            <? endforeach; ?>
        </ul>
    </div>
</div>
<div class="select">
    <a href class="select-head">
        <span class="select-head-text">Все регионы</span>
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.03118 4.28243C1.40608 3.90586 2.01392 3.90586 2.38882 4.28243L8.75 10.672L15.1112 4.28243C15.4861 3.90586 16.0939 3.90586 16.4688 4.28243C16.8437 4.65901 16.8437 5.26956 16.4688 5.64614L9.42882 12.7176C9.05392 13.0941 8.44608 13.0941 8.07118 12.7176L1.03118 5.64614C0.656274 5.26956 0.656274 4.65901 1.03118 4.28243Z"
                  fill="currentColor"/>
        </svg>
        <input type="text" name="region" readonly hidden class="select-input">
    </a>
    <div class="select-drop">
        <ul class="select-list">
            <li class="select-item"><a href="#">Все регионы</a></li>
            <? foreach ($arResult['SECTIONS_2'] as $arSection): ?>
                <li class="select-item"><a href="#" data-id="<?= $arSection["ID"] ?>"><?= $arSection["NAME"] ?></a></li>
            <? endforeach; ?>
        </ul>
    </div>
</div>