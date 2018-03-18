<?php

namespace Blog\Controller;

class Controller {

	static public $instance; 
	static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Controller();
        }
        return self::$instance;
	}

	public function __construct()
    {
        if(empty($_SESSION)) session_start();

        require_once ROOT_PATH . "Model\Blog.php";
        $blog = new \Blog\Model\Blog;

    }


}

?>