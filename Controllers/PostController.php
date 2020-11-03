<?php

class postController{

    public $text;
    public $email;

    public function post(){
        $posts2 = new PostModel();
        $posts=$posts2->display();

        $text=$_POST['text'];
        $email=$_COOKIE['user'];
        if(empty($text)){
            $smarty = View::getInstance();
            $smarty->assign('posts',$posts);
            $smarty->display('test.tpl');
            echo "Input the text";
        }else{

            $post=new PostModel();
            $post->post($email,$text);
            $smarty = View::getInstance();
            $posts=array_reverse($posts2->display());
            $smarty->assign('posts',$posts);
            $smarty->display('test.tpl');
            print_r(gettype($email));
            print_r(gettype($text));

        }

    }

    public function managePost(){
        $smarty = View::getInstance();
        $email=$_COOKIE['user'];
        $posts2= new PostModel();
        $posts=array_reverse($posts2->read($email));
        $smarty->assign('posts',$posts);
        $smarty->display('manage.tpl');




    }

    public function updatePost(){

        $id2=ltrim($_POST['id'],'UPDATE POST # ');
        $id=(int)$id2;
        $smarty = View::getInstance();
        $email=$_COOKIE['user'];
        $text=$_POST['text'];
        $update=new PostModel();
        $update->update($id,$text);
        $posts2= new PostModel();
        $posts=array_reverse($posts2->read($email));
        $smarty->assign('posts',$posts);
        $smarty->display('manage.tpl');



    }

    public function deletePost(){

        $id2=ltrim($_POST['id'],'DELETE POST # ');
        $id=(int)$id2;
        $smarty = View::getInstance();
        $email=$_COOKIE['user'];
        $update=new PostModel();
        $update->delete($id);
        $posts2= new PostModel();
        $posts=array_reverse($posts2->read($email));
        $smarty->assign('posts',$posts);
        $smarty->display('manage.tpl');


    }


}
