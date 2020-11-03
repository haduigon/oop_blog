<?php


class MainController {

    public function index(){
        $posts2 = new PostModel();
        $posts=array_reverse($posts2->display());


        $smarty = View::getInstance();
        if(isset($_COOKIE['user'])) {
            $smarty->assign('posts',$posts);
            $smarty->display('test.tpl');

        }else {

            $smarty->assign('posts',$posts);
           $smarty->display('index.tpl');

        }
    }

}
