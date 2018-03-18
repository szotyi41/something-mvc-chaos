<?php

namespace Blog;

use Blog\Controller\Controller;

if (version_compare(PHP_VERSION, '5.5.0', '<'))
    exit('Your PHP version is ' . PHP_VERSION . '. The script requires PHP 5.5 or higher.');

define('ROOT_PATH', __DIR__ . '\\');
define('DB_FILE',  ROOT_PATH . 'Database\database.sqlite');
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');

require ROOT_PATH . "autoload.php";
$loader = new AutoLoader();

$cont = new Controller();