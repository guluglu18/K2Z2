<?php
    function logout(){
        //session_unset();
        session_destroy();
    }

    function login(){
        if(isset($_SESSION['ime']) and isset($_SESSION['prezime']) and isset($_SESSION['datum'])){
            return true;
        }       
        else{
            return false;
        }
    }
    
?>