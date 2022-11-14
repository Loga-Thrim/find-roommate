<?php
    include 'dbcon.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $option = ['cost'=>12];
    $password = password_hash($password, PASSWORD_BCRYPT, $option);

    $sql = "INSERT INTO user (name, email, password, avatar) VALUES ('$name', '$email', '$password','')";
    
    try{
        $res = mysqli_query($dbcon, $sql);

        echo json_encode(['success'=>true]);
    } catch(Exception $e) {
        $json = new StdClass;
        $json->success = false;
        if(str_contains($e->getMessage(), 'Duplicate entry')) $json->msg = 'dupicate email';
        echo json_encode($json);
    }
?>