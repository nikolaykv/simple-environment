<?php

// pattern singleton class
namespace application\core;

/**
 * Class Cookie
 * @package application\core
 */
class Cookie
{
    /**
     * @return bool|static
     */
    public static function instance()
    {
        static $instance = false;
        if( $instance === false )
        {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Cookie constructor.
     */
    private function __construct() {}

    private function __clone() {}

    private function __sleep() {}

    private function __wakeup() {}

    /**
     * @param $name
     * @param $value
     * @param int $time
     */
    public static function setCookie($name, $value, $time = 31556926) {
        setcookie($name, $value, time() + $time, '/') ;
    }
}