<?php
    include './dbcon.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM post WHERE id=$id";
    $query = mysqli_query($dbcon, $sql); // -> true, false

    if($query == true) {
        echo 'ลบเสร็จแล้ว';
        header("Location: ../member/profile_mem.php");
    } else {
        echo 'ลบไม่สำเร็จ';
    }
?>