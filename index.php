<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', direname(dirname(__FILE__)));

$url = $_GET['url'];

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
