<?php

session_start();

if (session_destroy()) {
    echo"logout successfull";
    header("Location: homepage2.php");
}
?>