<?php
class Session {
    function createSession(){
        session_start();
        $_SESSION["status"]='active';
    }
    function endSession(){
        session_destroy();
    }
}