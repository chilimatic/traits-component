<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15.09.16
 * Time: 09:55
 */
class ConfigCollectionTest extends PHPUnit_Framework_TestCase
{
    private static $composedClass;

    public static function setUpBeforeClass()
    {
        self::$composedClass = new Class() {
            use \chilimatic\lib\Traits\Comperator\StringValueBiggerThan;
        };
    }

    /**
     * @test
     */
    public function lowercaseAisSmallerThanLowercaseB() {
        self::assertTrue(self::$composedClass->compare("b", "a"));
    }

    /**
     * @test
     */
    public function uppercaseBIsBiggerThanLowercaseC() {
        self::assertFalse(self::$composedClass->compare("B", "c"));
    }

    /**
     * @test
     */
    public function emptyStringBiggerThanAnyChar() {
        self::assertFalse(self::$composedClass->compare("", "b"));
    }
}