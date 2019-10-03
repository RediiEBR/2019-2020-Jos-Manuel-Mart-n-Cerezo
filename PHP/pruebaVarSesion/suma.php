<?php
    session_start();
    if(!isset($_SESSION["numero"]))
    {
        
    }
    $_SESSION["numero"]+=+1;
    header("location:index.php");   
?>