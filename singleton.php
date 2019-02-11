<?php

/**
 * Implement singleton method and then add magic methods as protected to avoid
 * creating more than one instance of the class singleton extends.
 *
 * Class Singleton
 */
class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static;
        }

        return self::$instance;
    }

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }
}

class Config extends Singleton
{
    public $data = [
        'db' => [
            'host' => '127.0.0.1'
        ]
    ];
}

$config = Config::getInstance();
