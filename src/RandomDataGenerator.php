<?php
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
    public static function getRandomInt($length = 10) : int
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
    public static function randomString($length = 10) : int
    {
        $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

}