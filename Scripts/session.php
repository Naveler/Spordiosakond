<?php
session_start();
$action = $_GET['action'];
if ($action == 'logout') {
    endSession();
}
class Session {
    function createSession(){

        $_SESSION["status"]=true;
    }
    function endSession(){
        session_destroy();
    }
}