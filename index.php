<?php 
require_once 'models/db.php';

$controller = isset($_GET['c']) ?  $_GET['c'] : 'Landing';
$controller= $controller.'Controller';

$method = isset($_GET['m']) ? $_GET['m'] : 'landing';
require_once('./controllers/'.$controller.'.php');
$obj = new $controller();
$obj->$method();
