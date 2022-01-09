<?php
session_start();
$action = $_GET['action'];
if ($action == 'logout') {
    endSession();
}
class Session {
    function endSession(){
        session_destroy();
    }
}