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
        $posts = array();
        $model = new \Blog\Model\Blog;
        $posts = $model->getPosts();

        foreach($posts as $post) {
            $_GET['title'] = $post['title'];
            $_GET['modified'] = $this->getTime($post['modified']);
            //$_GET['content'] = $post['content'];
            include ROOT_PATH . "View" . DIRECTORY_SEPARATOR . "BlogPost.php";
        }
    }

    public function getTime($dt) {
        $time = new \DateTime($dt);
        return $time->format("Y. F. d");
    }
}