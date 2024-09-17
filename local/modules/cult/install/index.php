<?php

use Bitrix\Main\ModuleManager;

class Cult extends CModule
{
    var $MODULE_ID = 'cult';
    var $MODULE_NAME = 'CULT';
    var $MODULE_DESCRIPTION = "Вспомогательный модуль";
    var $MODULE_VERSION = "1.0.0";
    var $MODULE_VERSION_DATE = "2024-05-06 10:00:00";

    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
    }

    public function DoUninstall()
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}
