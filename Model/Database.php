<?php

namespace Blog\Model;

use PDO;

class Database
{
    static public $instance;
    static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    static public $connection;
    static public function setConnection() {
        $file = "sqlite:" . DB_FILE;
        self::$connection = new PDO($file);
        self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    static public function getConnection() {
        if(self::$connection === null) {
            self::setConnection();
        }

        return self::$connection;
    }

}