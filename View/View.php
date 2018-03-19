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
        include 'Template/head.html';
        $this->loadPosts();
    }

    public function loadPosts() {
        $posts = array();
        $model = new \Blog\Model\Blog;
        $posts = $model->getPosts();

        if(!empty($posts)) {
            foreach ($posts as $post) {
                $_GET['title'] = $post['title'];
                $_GET['date'] = $this->getTime($post['modified']);
                $_GET['content'] = $post['content'];
                $_GET['tags'] = $this->getTags($post['tags']);
                include ROOT_PATH . "View" . DIRECTORY_SEPARATOR . "BlogPost.php";
            }
        } else {
            include ROOT_PATH . "View" . DIRECTORY_SEPARATOR . "Template" . DIRECTORY_SEPARATOR . "nopost.html";
        }
    }

    public static function getTags($tags) {
        return explode(",", $tags);
    }

    public static function getTime($dt) {
        //$time = new \DateTime($dt);
        return $dt;//$time->format("Y. F. d");
    }
}