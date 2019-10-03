<?php
    session_start();
    if(!isset($_SESSION["numero"]))
    {

    }
    $_SESSION["numero"]=1;
    echo "el valor de n=".$_SESSION["numero"];
?>
<a href="suma.php">sumar 1</a>