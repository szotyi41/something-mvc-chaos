<?php

namespace Blog\Model;

use PDO;

class Blog
{

    private $connection;
    function __construct() {
        $this->connection = Database::getConnection();
    }

    public function getPosts() {
        $posts = array();
        $sql = "SELECT title, created, modified, content FROM posts";
        $query = $this->connection->query($sql);
        $result = $query->fetchAll();
        foreach ($result as $row) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function addPost($columns, $values) {
        $sql = "INSERT INTO posts ($columns) VALUES ($values)";
        return $this->connection->query($sql);
    }

    public function install() {
        $filename = ROOT_PATH . "Database\\install.sql";
        if(is_file($filename)) {
            echo "Exists";
        }
    }
}