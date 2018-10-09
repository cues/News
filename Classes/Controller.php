<?php
abstract class Controller {
    protected $request;
    protected $action;

    public function __construct($action, $request){ 
        $this->action = $action;
        $this->reuqest = $reuqest;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    protected function returnView($viewModel, $fullView){
        $view = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if($fullView){
            require('views/index.php');
        }else{
            require($view);
        }
    }

}