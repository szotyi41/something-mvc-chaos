<?php

namespace Blog\Login;

class Login {

	static public $instance; 
	static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Controller();
        }
        return self::$instance;
	}

	function init() {
	    Model\Blog
    }

	function get() {
		return !empty($_SESSION['login']);
	}

	function setName($name) {
		$_SESSION['login_name'] = $name;
	}

}

?>