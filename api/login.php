<?php
    include 'dbcon.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $res = mysqli_query($dbcon, $sql);

    if(mysqli_num_rows($res)) {
        $fetch = mysqli_fetch_assoc($res);

        if(password_verify($password, $fetch['password'])) {
            session_start();
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['avatar'] = $fetch['avatar'];
            $_SESSION['name'] = $fetch['name'];
            $_SESSION['email'] = $fetch['email'];
    
            echo json_encode(['success'=>true]);
        } else echo json_encode(['success'=>false]);
    } else {
        echo json_encode(['success'=>false]);
    }
?>