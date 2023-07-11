<?php
require_once "Router/router.php";
require_once "controller/controller.php";

$controller = new Usercontroller();
$router = new router();

$router->get('/','default');
$router->post('/createdb','createdb');
$router->post('/createtable', 'createtable');
$router->post('/tablecreated', 'tablecreated');
$router->post('/listingdb', 'viewdb');
$router->post('/deletedb', 'deletedb');
$router->post('/deletingdb', 'deletingdb');
$router->post('/TableList', 'TableList');
$router->post('/TableList', 'TableList');
$router->post('/getcolum', 'getcolum');

$router->routing();
