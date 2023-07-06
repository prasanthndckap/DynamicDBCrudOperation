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
                    case 'create':
                        $this->controller->createProject($_POST,$_FILES);
                        break;
                    case 'projectid':
                        $this->controller->getProjectinfo($_POST);
                        break;
                    case 'gettingprojectid':
                        $this->controller->gettingprojectid($_POST);
                    break;
                    case 'Addtask':
                        $this->controller->createingtasks($_POST,$_FILES);

//                        $this->controller->tasklist();
                    case'taskinfo':
                     $this->controller->taskinfo($_POST);
                     break;
                    case 'delete':
                        $this->controller->deletingTask($_POST);
                        break;
                    case 'deletedprojects':
                        $this->controller->listofdeletedtasks($_POST);
                        break;
                    case 'Tasklist':
                        $this->controller->listedTask($_POST);
                        break;
                    default:
                        $this->controller->projectsList($_POST);

                }

            }

        }
    }
}
}





