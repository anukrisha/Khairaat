<?php
    session_start();
    if(isset($_SESSION["id"]) && isset($_SESSION["pwd"]))
        {
            session_unset();
            session_destroy();
            header("Location: index2.php");
        }
    else
    {
        header("Location: login.php");
    }
    session_destroy();
?>

