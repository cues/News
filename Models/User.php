<?php

class UserModel extends Model{
    public function signup(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if(!$post['password'] == "" || 
            !$post['name'] == "" || 
            !$post['email'] == "" ){

                $password = MD5($post['password']);
        
                if($post['submit']){
                    $this->query('INSERT INTO users (NAME,EMAIL,PASSWORD) VALUES (?,?,?)');
                    $this->bind(1,$post['name']);
                    $this->bind(2,$post['email']);
                    $this->bind(3,$password);
                    $this->execute();
        
                    if($this->lastInsertId()){
                        header('Location:'.ROOT_URL);
                    }
                }
                return;
        }else{
            Message::setMsg('error','please fill in all the fields');
        }
    }



    public function login(){
         $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $password = MD5($post['password']);
    
            if($post['submit']){
                $this->query('SELECT * FROM users where EMAIL = ? AND PASSWORD = ?');
                $this->bind(1,$post['email']);
                $this->bind(2,$password);
                
                $row = $this->single();

                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = array (
                        'id' => $row['ID'],
                        'name' => $row['NAME'],
                        'email' => $row['EMAIL'],
                    ) ;
                    header('Location:'.ROOT_URL);
                }else{
                    Messages::setMsg('error','incorrect login details');
                }
    
            }
            return;
    }
}