<?php

namespace Blog\Model;

use PDO;

class Blog
{

    private $connection;
    function __construct() {
        $this->connection = Database::getConnection();
        $this->getPosts();
    }

    private function getPosts() {
        $sql = "SELECT * FROM posts";
        $query = $this->connection->query($sql);
        $result = $query->fetchAll();
        foreach ($result as $row) {
            echo $row['title'];
        }
    }

    private function install() {
        $filename = ROOT_PATH . "Database\\install.sql";
        if(is_file($filename)) {
            echo "Exists";
        }
    }
}