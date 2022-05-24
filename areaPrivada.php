<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location: login.php");
        exit;
    }
?>

SEJA BEM VINDO!

<a href="sair.php"> Sair </a>