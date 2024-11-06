<?php

    $server = "localhost";
    $username = "p996310l_bron";
    $password = "bD1234";
    $bdname = "users"; 

    $connection = mysqli_connect($server, $username, $password, $bdname);
    
    if (!$connection) {die("connection failed". mysqli_connect_error());}
    else{echo "good";}