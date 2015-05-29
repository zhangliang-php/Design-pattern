<?php
/**
 * Class Loader
 */
class Loader
{
    /**
     * @param $class
     */
    static function autoload($class)
    {
        require SRC_DIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}