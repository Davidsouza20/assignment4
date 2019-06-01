<?php 
    if(!isset($_SESSION['login_user']))
    {
        // not logged in
        header('Location: login.php');
        exit();
    }







?>