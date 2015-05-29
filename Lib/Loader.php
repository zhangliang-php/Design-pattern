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
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}