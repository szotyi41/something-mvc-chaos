<?php

namespace Blog;

use Blog\Controller\Controller;

require 'vendor/autoload.php';

ini_set('display_errors', 1);

define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('DB_FILE',  ROOT_PATH . 'Database' . DIRECTORY_SEPARATOR . 'database.sqlite');
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');

$cont = new Controller();
