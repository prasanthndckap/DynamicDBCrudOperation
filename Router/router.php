<?php
class router{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new Usercontroller();
    }
    public function get($uri,$action){
        $this->router[] =[
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
    }
    public function post($uri,$action){
        $this->router[] =[
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
    }
public function routing()
{
    foreach ($this->router as $roots) {
        if ($roots['uri'] == $_SERVER['REQUEST_URI']) {

            if ($roots['action']) {
                switch ($roots['action']) {
                    case 'createtable':
                        $this->controller->listdb($_POST);
                        break;
                    case 'tablecreated':
                        $this->controller->createtable($_POST);
                        break;
                    case 'viewdb':
                        $this->controller->viewdb();
                        break;



                    default:
                        $this->controller->homepage();

                }

            }

        }
    }
}
}





