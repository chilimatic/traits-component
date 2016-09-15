<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15.09.16
 * Time: 10:12
 */

class ClassExistsTest extends PHPUnit_Framework_TestCase
{
    private static $composedClass;

    public static function setUpBeforeClass()
    {
        self::$composedClass = new Class() {
            use \chilimatic\lib\Traits\ClassExists;
        };
    }

    /**
     * @test
     */
    public function checkIfClassExistsWithNamespace() {
        self::assertTrue(self::$composedClass->exists("ClassExists", "\\chilimatic\\lib\\Traits\\"));
    }
}