<?php

class UserModel{

    private $email;
    private $password;
    public function __construct($data_email,$data_password){
        $this->email=$data_email;
        $this->password=$data_password;
    }
    public function create($email,$password)
    {

        $db = DB::getInstance();
        $db->query("
        INSERT INTO users 
        SET email = '{$this->email}',
        password ='{$this->password}'
        ");
            return empty($db->error);

        }

    public function find($email)
{


        $db = DB::getInstance();
         return $db
                ->query("SELECT * FROM users WHERE email ='$this->email'")
                ->fetch_all(MYSQLI_ASSOC) ?? [];


    }






}
