<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
$url = '';
if($_GET) {
    $url = $_GET['url'];
}

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
