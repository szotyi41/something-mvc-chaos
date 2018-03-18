<?php

namespace Blog;

class AutoLoader
{
    function __construct()
    {
        spl_autoload_register(array(__CLASS__, '_loadClasses'));
    }

    function _loadClasses($class)
    {
        $class = str_replace(array(__NAMESPACE__, 'Blog', '\\'), '/', $class);
        $file = ROOT_PATH . $class . '.php';
        if (is_file($file)) require_once $file;
    }
}