<?php
    session_start();

    function isLoggedIn()
    {
        if( isset($_SESSION['arUser'])){
            return true;
        } else {
            return false;
        }
    }

    function isAdmin()
    {
        if( isset($_SESSION['arUser']) && $_SESSION['arUser']['role'] == 1){
            return true;
        } else {
            return false;
        }
    }
