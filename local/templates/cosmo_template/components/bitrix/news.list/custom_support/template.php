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

<div class="support-items">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="support-card" data-aos="fade-up">
            <a href="<?= $arItem["PROPERTIES"]["PATH_FILE"]["VALUE"] ?>"
               download="<?= $arItem["PROPERTIES"]["PATH_FILE"]["VALUE"] ?>"
               class="support-card-link">
                <div class="support-card-wrapper">
                    <img src="<?= $arItem["PROPERTIES"]["PATH_FILE"]["VALUE"] ?>" alt="">
                    <div class="support-card-content">
                        <h3><?= $arItem["PROPERTIES"]["TEXT"]["VALUE"] ?></h3>
                        <a href="<?= $arItem["PROPERTIES"]["PATH_FILE"]["VALUE"] ?>"
                           download="<?= $arItem["PROPERTIES"]["PATH_FILE"]["VALUE"] ?>"
                           class="support-card-download">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                      fill="#F8EBE2"/>
                                <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                      fill="#F8EBE2"/>
                            </svg>
                            Скачать
                        </a>
                    </div>
                </div>
            </a>
        </div>
    <? endforeach; ?>
    <?= $arResult['NAV_STRING'] ?>
</div>
</div>