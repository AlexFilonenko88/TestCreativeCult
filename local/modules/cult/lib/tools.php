<?php

namespace Cult;

use Bitrix\Main\Config\Option;
use Bitrix\Main\Grid\Declension;

class Tools
{
    /**
     * Возвращает нужное склонение
     *
     * @param $one - пример
     * @param $four - примера
     * @param $five - примеров
     * @param $value - склоняемое значение
     * @return string
     */
    public static function delclension($one, $four, $five, $value): string
    {
        $declension = new Declension($one, $four, $five);
        return $declension->get($value);
    }

    /**
     * Возвращает значение опции по ее имени
     *
     * @param string $name - Имя опции
     * @return string
     */
    public static function getOption(string $name): string
    {
        return Option::get('cult', $name);
    }

    /**
     * Возвращает форматированный номер телефона
     *
     * @param $phone - Номер телефона
     * @return array|string
     */
    public static function formatPhone($phone): array|string
    {
        return str_replace([' ', '(', ')', '-'], '', $phone);
    }

    /**
     * Дебаг
     *
     * @param $in
     * @return void
     */
    public static function dump($in)
    {
        echo '<pre>';
        var_dump($in);
        echo '</pre>';
    }

    public static function InDir($path): bool
    {
        return \CSite::InDir($path . 'index.php');
    }

    /**
     * Возвращает год создания и текущий год сайта
     *
     * @param int $date год создания сайта
     * @return void
     */
    public static function copyrightDate(int $date): void
    {
        $date_now = date('Y');
        if ($date_now > $date) {
            echo $date . '—' . $date_now;
        } else {
            echo $date_now;
        };
    }
}