<?php defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Config\Option;

/** @global CMain $APPLICATION */
defined('CULT_MODULE_NAME') or define('CULT_MODULE_NAME', 'cult');

function ShowParamsHTMLByarray($arParams)
{
    foreach ($arParams as $Option) {
        if (is_array($Option)) {
            $Option[0] = 'CULT_' . $Option[0];
        }
        __AdmSettingsDrawRow(CULT_MODULE_NAME, $Option);
    }
}

IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/options.php');
IncludeModuleLangFile(__FILE__);

$tabControl = new CAdminTabControl('tabControl', [
    [
        'DIV' => 'edit1',
        'TAB' => 'Настройки',
        'TITLE' => 'Настройка параметров модуля',
    ],
]);

$arAllOptions['COMMON'] = [
    'Контакты',
    ['PHONE_MAIN', 'Основной телефон', Option::get(CULT_MODULE_NAME, 'PHONE_MAIN'), ['text', 38]],
    ['TOWN', 'Город', Option::get(CULT_MODULE_NAME, 'TOWN'), ['text', 38]],
    ['ADDRESS', 'Адрес', Option::get(CULT_MODULE_NAME, 'ADDRESS'), ['text', 38]],
    ['ADDRESS_FULL', 'Полный адрес', Option::get(CULT_MODULE_NAME, 'ADDRESS_FULL'), ['textarea', 3, 40]],
    'Офис продаж',
    ['SALE_OFFICE_NAME', 'Наименование', Option::get(CULT_MODULE_NAME, 'SALE_OFFICE_NAME'), ['text', 38]],
    ['SALE_OFFICE_PHONE', 'Телефон', Option::get(CULT_MODULE_NAME, 'SALE_OFFICE_PHONE'), ['text', 38]],
    ['SALE_OFFICE_EMAIL', 'Электронный адрес', Option::get(CULT_MODULE_NAME, 'SALE_OFFICE_EMAIL'), ['text', 38]],
    ['SALE_OFFICE_ADDRESS', 'Почтовый адрес', Option::get(CULT_MODULE_NAME, 'SALE_OFFICE_ADDRESS'), ['textarea', 3, 40]],
    'Производство',
    ['PRODUCTION_OFFICE_NAME', 'Наименование', Option::get(CULT_MODULE_NAME, 'PRODUCTION_OFFICE_NAME'), ['text', 38]],
    ['PRODUCTION_OFFICE_PHONE', 'Телефон', Option::get(CULT_MODULE_NAME, 'PRODUCTION_OFFICE_PHONE'), ['text', 38]],
    ['PRODUCTION_OFFICE_EMAIL', 'Электронный адрес', Option::get(CULT_MODULE_NAME, 'PRODUCTION_OFFICE_EMAIL'), ['text', 38]],
    ['PRODUCTION_OFFICE_ADDRESS', 'Почтовый адрес', Option::get(CULT_MODULE_NAME, 'PRODUCTION_OFFICE_ADDRESS'), ['textarea', 3, 40]],
    'Ссылки на социальные сети',
    ['SOCIAL_VK', 'ВКонтакте', Option::get(CULT_MODULE_NAME, 'SOCIAL_VK'), ['text', 60]],
    ['SOCIAL_OD', 'Одноклассники', Option::get(CULT_MODULE_NAME, 'SOCIAL_OD'), ['text', 60]],
    ['SOCIAL_TG', 'Telegram', Option::get(CULT_MODULE_NAME, 'SOCIAL_TG'), ['text', 60]],
    ['SOCIAL_YT', 'Youtube', Option::get(CULT_MODULE_NAME, 'SOCIAL_YT'), ['text', 60]],
    ['note' => 'Удалите адрес ссылки, чтобы скрыть с сайта'],
];

if (isset($_REQUEST['save']) && check_bitrix_sessid()) {
    foreach ($_POST as $key => $option) {
        if (strpos($key, 'CULT_') !== false) {
            if (is_array($option)) {
                $option = implode(',', $option);
            }
            Option::set(CULT_MODULE_NAME, str_replace('CULT_', '', $key), $option);
        }
    }
    LocalRedirect($APPLICATION->GetCurPage() . "?mid=" . urlencode(CULT_MODULE_NAME) . "&lang=" . urlencode(LANGUAGE_ID) . "&" . $tabControl->ActiveTabParam());
}
?>

<form name='minboxoptions' method='POST'
      action='<?php echo $APPLICATION->GetCurPage() ?>?mid=<?= htmlspecialcharsbx($mid) ?>&amp;lang=<?php echo LANG ?>'>
    <?= bitrix_sessid_post() ?>
    <?php
    $tabControl->Begin();

    $tabControl->BeginNextTab();
    ShowParamsHTMLByArray($arAllOptions['COMMON']);
    $tabControl->EndTab();

    $tabControl->Buttons(); ?>
    <input type='submit' class='adm-btn-save' name='save' value='Сохранить'>
    <?= bitrix_sessid_post(); ?>

    <?php $tabControl->End(); ?>
</form>