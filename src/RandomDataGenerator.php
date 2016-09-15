<?php
declare(strict_types=1);
namespace chilimatic\lib\Traits;

/**
 * Class RandomDataGenerator
 * @package chilimatic\lib\Traits
 */
Trait RandomDataGenerator
{

    /**
     * generates a random int
     *
     * @param int $length
     *
     * @return int
     */
    public static function getRandomInt(int $length = 10) : int
    {
        $time = time();
        mt_srand($time);
        $tmp = mt_rand();

        return (int)substr(number_format($tmp, 0, '', ''), 0, $length);
    }

    /**
     * function copied from
     * http://stackoverflow.com/questions/4356289/php-random-string-generator
     *
     * @param $length int
     *
     * @return string
     */
    public static function randomString(int $length = 10) : string
    {
        $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

}