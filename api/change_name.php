<?php
    include './dbcon.php';

    $name = $_POST['name'];

    session_start();
    $id = $_SESSION['id'];
    $sql = "UPDATE user SET name = '$name' WHERE id=$id";
    $query = mysqli_query($dbcon, $sql);

    if($query) {
        $_SESSION['name'] = $name;
        $data = array('success' => true);
    } else {
        $data = array('success' => false);
    }

    echo json_encode($data);
?>