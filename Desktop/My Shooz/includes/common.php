<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE_NAME", "internship_website");
    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE_NAME) or die(mysqli_errno($con));
    session_start();
?>