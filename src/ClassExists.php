<?php
namespace chilimatic\lib\Traits;

/**
 * Class ClassExists
 * @package chilimatic\lib\Traits
 */
Trait ClassExists {

    /**
     * @type string
     */
    private $nameSpaceDelimiter = '\\';

    /**
     * @param string $name
     * @param string $namespace
     * @param bool $autoLoad
     * @return bool
     */
    public function exists(string $name, string $namespace = '\\', bool $autoLoad = true) : bool
    {
        if (!$name) {
            return false;
        }

        // it's easier to just concat them and remove double \ afterwards
        $className = $namespace . $this->nameSpaceDelimiter . $name;

        $className = str_replace(
            $this->nameSpaceDelimiter.$this->nameSpaceDelimiter,
            $this->nameSpaceDelimiter,
            $className
        );

        return class_exists($className, $autoLoad);
    }


}