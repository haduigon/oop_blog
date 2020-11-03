<?php

class Session{

   /** public static $self;

    public static function getSession(): self
    {
        return self::$self ?? self::$self = new Session();
    }**/

    public function __construct()
    {

            if($_COOKIE['session_id'] ?? []){
                session_id($_COOKIE['session_id']);
                session_start();
            }else{

                $sessionId=md5(rand(1,100000) . md5(time()));
                session_id($sessionId);
                session_start();
                setcookie('session_id' , $sessionId, time() + 2400,'/');

            }
    }

    public function set(string $key,$data)
    {
        setcookie($key , $data, time() + 2400,'/');
      //  return $_SESSION[$key] = $data;
    }

    public function get(string $key, $default=null){

        return $_SESSION[$key] ?? $default;
    }

    public function delete(string $key){
        unset($_SESSION[$key]);
    }

}
