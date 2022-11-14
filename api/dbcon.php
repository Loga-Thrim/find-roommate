<?php
    $dbcon = mysqli_connect("sql204.unaux.com", "unaux_32994473", "0lnc9sc8fp", "unaux_32994473_rm_finder");
    // $dbcon = mysqli_connect("localhost", "root", "", "find_friend_room");

    if(!$dbcon) die("Can't connect to database.");

    mysqli_set_charset($dbcon,"utf8");
?>