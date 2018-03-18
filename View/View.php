<?php

namespace Blog\View;

class View
{
    static public $instance;
    static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new View();
        }
        return self::$instance;
    }

    function __construct()
    {

    }
}