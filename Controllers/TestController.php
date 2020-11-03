<?php

class TestController{
    public function test(){
        global $parameter;

        die("TEST".$parameter);

    }
}
