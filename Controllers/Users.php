<?php
class Users extends Controller {
   protected function signup(){
       $viewModel = new usermodel();
       $this->returnView($viewModel->signup(), true);
   }

   protected function login(){
        $viewModel = new usermodel();
        $this->returnView($viewModel->login(), true);
    }

    protected function logout(){
       unset($_SESSION['is_logged_in']);
       unset($_SESSION['user_data']);
       session_destroy();
       header("Location:" . ROOT_URL);
    }
}