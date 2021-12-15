<?php
class Session {
    function createSession(){
        session_start();
        $_SESSION["status"]=true;
    }
    function endSession(){
        session_destroy();
    }
}