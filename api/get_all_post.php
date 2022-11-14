<?php
    include './dbcon.php';

    $sql = "SELECT id, nick_name, gender, age, r_name, avatar FROM post";
    $query = mysqli_query($dbcon, $sql);

    $arr = [];
    while($fetch = mysqli_fetch_assoc($query)) {
        array_push($arr, $fetch);
    }
    print_r(json_encode($arr));
?>