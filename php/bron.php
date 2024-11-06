<?php

    require "connection.php";

    $last = trim( $_POST['last']);
    $name = trim( $_POST['name']);
    $ans = trim( $_POST['ans']);
    echo $ans;

    $connection -> query ("INSERT INTO `request` (`last`, `name`, `ans`) VALUE ('$last', '$name', '$ans')");
    echo "ready";
    header("Location: /../index.htm");
