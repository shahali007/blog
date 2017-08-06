<?php
class Session{
    public static function init(){
        session_abort();
    }

    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){
        if ($_SESSION[$key]){
            return $_SESSION[$key];
        }
        else{
            return false;
        }
    }

    public function checkSession(){
        self::init();
        if (self::get("login") == false){
            self::destroy();
            header("Location:login.php");
        }
    }

    public static function destroy(){
        session_destroy();
        header("Location:login.php");
    }
}
?>