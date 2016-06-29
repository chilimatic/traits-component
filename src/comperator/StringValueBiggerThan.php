<?php
namespace chilimatic\lib\Traits\Comperator;

use chilimatic\lib\Traits\String\AsciiTrait;

/**
 * Class StringValueBiggerThan
 * @package chilimatic\lib\Traits\Comperator
 */
Trait StringValueBiggerThan
{
    use AsciiTrait;

    /**
     * @param string $str1
     * @param string $str2
     *
     * @return bool
     */
    public function compare(string $str1, string $str2) : bool
    {
        switch (true) {
            case (!$str1 && $str2):
                return true;
            case ($str1 && !$str2):
                return false;
            case ($this->getAsciiStringCharacterValueSum($str1) > $this->getAsciiStringCharacterValueSum($str2)):
                return true;
            case ($this->getAsciiStringCharacterValueSum($str1) < $this->getAsciiStringCharacterValueSum($str2)):
                return false;
        }

        return true;
    }


}