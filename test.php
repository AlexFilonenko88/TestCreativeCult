<?php

/** @var $USER CUser */

require($_SERVER['DOCUMENT_ROOT'] . "/bitrix/header.php");
echo $USER->Update(1, array("PASSWORD" => 'admadm123#@'));
echo $USER->LAST_ERROR;
require($_SERVER['DOCUMENT_ROOT'] . "/bitrix/footer.php");