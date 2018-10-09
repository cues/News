<?php
class Posts extends Controller {
    protected function Index(){
        $viewModel = new PostModel();
        $this->returnView($viewModel->Index(), true);
    }

    protected function Add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location:' .ROOT_URL);
        }
        $viewModel = new PostModel();
        $this->returnView($viewModel->add(), true);
    }
}