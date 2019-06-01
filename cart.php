<?php 

    session_start();
    if(!isset($_SESSION['login_user']))
    {
        // not logged in
        header('Location: login.php');
        exit();
    }
    
    else {
        echo "Welcome Dear <h1>" . $_SESSION['login_user']. "</h1>";
    }




?>