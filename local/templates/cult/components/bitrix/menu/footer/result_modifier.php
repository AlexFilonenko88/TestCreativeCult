<?php
$arPrepItems = [];
if (!empty($arResult)) {
    foreach ($arResult as $key => $item) {
        if ($item["DEPTH_LEVEL"] === 1) {
            $arPrepItems[] = $item;
        } else {
            $array = array_keys($arPrepItems);
            $arPrepItems[end($array)]['subitems'][] = $item;
        }
    }
}

$arResult = $arPrepItems;