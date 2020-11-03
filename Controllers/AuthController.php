<?php

class AuthController{

public function createUser(){
    $session = new Session();
    $smarty = View::getInstance();
    $email = $_POST['email'];
    $password = $_POST['password'];


        if(strlen($password )<4){
            echo "Password should be longer %)";
            $smarty->display('index.tpl');
        }else {
            $user = new UserModel($email, $password);
            $result[] = $user->find($email);

            $session->set('user', $email);



            if (!($result[0])) {

                $user->create($email, $password);
                $smarty->display('test.tpl');
                $_SESSION['user']=$_POST['email'];



            } else {
                echo "Some data is incorrect, please check";
                $smarty->display('index.tpl');

            }

        }
        }

public function loginUser()
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $smarty = View::getInstance();
    $user=new UserModel($email,$password);
    $result=$user->find($email);

    if(empty ($_POST['email'] || $_POST['password'])){

        $smarty->display('index.tpl');
        echo"Some data was lost";

    }else if($result[0]['email']===$email and $result[0]['password']===$password) {
        $posts2 = new PostModel();
        $posts=array_reverse($posts2->display());
        $session = new Session();
        $session->set('user', $email);
        $smarty->assign('posts',$posts);
        $smarty->display('test.tpl');
    }else{

        $smarty->display('index.tpl');
        echo"Some data is incorrect";
    }

    }




public function userLogout()
{

    $smarty = View::getInstance();
    if (isset($_COOKIE['user'])) {
        unset($_COOKIE['user']);
        setcookie('user', null, -1, '/');


        $posts2 = new PostModel();
        $posts=array_reverse($posts2->display());
        $smarty->assign('posts',$posts);
        $smarty->display('index.tpl');


    }else{
        $smarty->display('index.tpl');
    }

}
}
