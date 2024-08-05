<?php

/**
 * __construct():
 * => This method gets called automatically every time the object of a particular class is created.
 * __destruct():
 * => As the name suggests this method is called when the object is destroyed and no longer in use.
 */
class MagicMethod
{
    public static $connection;

    public function __construct()
    {
        self::connect();
    }

    protected static function connect()
    {
        if (!self::$connection) {
            self::$connection = new PDO("sqlite:database.sqlite");
        }
        return self::$connection;
    }
    public function instance(){
        return self::$connection;
    }
    public function __destruct()
    {
        self::$connection = null;
    }
}
