<?php
declare(strict_types=1);

namespace chilimatic\lib\Traits\String;

/**
 * Class AsciiTrait
 * @package chilimatic\lib\Traits\String
 */
Trait AsciiTrait
{
    /**
     * @param string $str
     *
     * @return bool|string
     */
    public function getBinaryRepresentation(string $str) : string
    {
        $out = '';
        for ($i = 0, $l = strlen($str); $i < $l; $i++) {
            $dec = ord($str[$i]); //determine symbol ASCII-code
            $out .= sprintf('%08d', base_convert($dec, 10, 2)); //convert to binary representation and add leading zeros
        }

        return $out;
    }

    /**
     * additive value of all characters in a lex
     *
     * @param string $str
     *
     * @return int
     */
    public function getAsciiStringCharacterValueSum(string $str) : int
    {
        $sum = 0;
        for ($i = 0, $l = strlen($str); $i < $l; $i++) {
            $sum += ord($str[$i]);
        }

        return $sum;
    }
}