<?php

class PostModel{

    public $id;
    public $text;
    public $email;

    public function post(string $email,string $text){


            $db=DB::getInstance();
            $db
                ->query("insert into posts(email,post)
                                value ('$email','$text')");



    }

    public function read($email){

        $db = DB::getInstance();
        return $db
                ->query("SELECT * FROM posts WHERE email ='$email'")
                ->fetch_all(MYSQLI_ASSOC) ?? [];

    }

    public function update($id,$text){


        $db=DB::getInstance();
        $db
            ->query("update posts
                                set post='$text' where id ='$id'");


    }

    public function delete($id){

        $db=DB::getInstance();
        $db
            ->query("delete from posts
                                where id ='$id'");

    }

    public function display(){

        $db=DB::getInstance();
        $posts=$db->query("Select * from posts")
            ->fetch_all(MYSQLI_ASSOC);
        return $posts;

    }




}