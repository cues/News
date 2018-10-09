<?php

class PostModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM post ORDEr BY ID DESC');
        $rows = $this->result();
        return $rows;
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
            $this->query('INSERT INTO POST (USER_ID,TITLE,BODY,LINK) VALUES (?,?,?,?)');
            $this->bind(1,1);
            $this->bind(2,$post['title']);
            $this->bind(3,$post['body']);
            $this->bind(4,$post['link']);
            $this->execute();

            if($this->lastInsertId()){
                header('Location:'.ROOT_URL.'posts');
            }
        }
        return;
    }
}