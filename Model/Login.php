<?php

namespace Blog\Model;

use sqlite3;

class Login
{
    static public $database;
    static public $instance;
    static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Login();
        }
        return self::$instance;
    }

    public function __construct()
    {

    }

    public function tryLogIn() {

    }

}