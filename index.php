<?php
require_once "Router/router.php";
require_once "controller/controller.php";

$controller = new Usercontroller();
$router = new router();
$router->get('/','list');
$router->post('/Project','projectid');
$router->post('/createProject', 'create');
$router->post('/createTask', 'gettingprojectid');
$router->post('/Addtask', 'Addtask');
$router->post('/taskinfo', 'taskinfo');
$router->post('/delete', 'delete');
$router->post('/deletedprojects', 'deletedprojects');
$router->post('/Tasklist', 'Tasklist');





$router->routing();