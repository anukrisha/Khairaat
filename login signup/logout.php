<?php
    session_start();

    if(isset($_SESSION["id"]) && isset($_SESSION["pwd"]))
    {
        if(isset($_POST["submit"]))
        {
            session_unset();
            session_destroy();
            header("Location: index.php");
        }
        else
        {
            echo "Use logout button to log out!";
        }
    }
    else
        echo "No pre-existing session!";
?>