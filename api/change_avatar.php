<?php
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_FILES['avatar'])) {
    include './dbcon.php';

    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $new_name = generateRandomString() . '.' . $extension;
    move_uploaded_file($_FILES['avatar']['tmp_name'], '../img/avatar/' . $new_name);

    session_start();
    $id = $_SESSION['id'];
    $sql = "UPDATE user SET avatar = '$new_name' WHERE id=$id";
    $query = mysqli_query($dbcon, $sql);

    if($query) {
        $_SESSION['avatar'] = $new_name;
        $data = array('success' => true);
    } else {
        $data = array('success' => false);
    }

    echo json_encode($data);
}
