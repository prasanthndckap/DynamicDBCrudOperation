<?php
require_once "Router/router.php";
require_once "controller/controller.php";

$controller = new Usercontroller();
$router = new router();
$router->get('/','list');
//$router->post('/createdb','createdb');
$router->post('/createtable', 'createtable');
$router->post('/tablecreated', 'tablecreated');
$router->post('/listingdb', 'viewdb');
$router->routing();
