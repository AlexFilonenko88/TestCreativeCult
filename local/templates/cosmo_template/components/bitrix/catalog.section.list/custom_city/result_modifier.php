<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['SECTIONS_1'] = [];

$arResult['SECTIONS_2'] = [];

foreach ($arResult['SECTIONS'] as $arSection) {
    $arResult['SECTIONS_' . $arSection["DEPTH_LEVEL"]][] = ["NAME" => $arSection["NAME"], "ID"=> $arSection["ID"]];
}
?>

