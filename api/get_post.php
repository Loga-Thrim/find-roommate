<?php
    include './dbcon.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM post WHERE id = $id";
    $query = mysqli_query($dbcon, $sql);
    $fetch = mysqli_fetch_assoc($query);

    print_r(json_encode(($fetch)));
?>