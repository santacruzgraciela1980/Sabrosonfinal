<?php
    session_start();
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        header("Location:../Index.php");
    }
    elseif(isset($_SESSION['admin'])){
        unset($_SESSION['admin']);
        header("Location:../Index.php");
    }
   
?>