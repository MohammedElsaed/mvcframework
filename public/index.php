<?php

namespace PHPMVC;

use PHPMVC\LIB\FrontController;

require_once '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';


$frontController = new FrontController();
$frontController->dispatch();
/*$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
list($controller , $action , $params) = explode('/',trim($url ,'/'));
$params = explode('/' , $params);
var_dump($controller , $action , $params);*/
