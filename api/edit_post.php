<?php
    // ini_set('display_errors', 0);
    // error_reporting(E_ERROR | E_WARNING | E_PARSE); 

    $id = (int)$_POST['id'];
    $full_name = $_POST['full_name'];
    $nick_name = $_POST['nick_name'];
    $gender = $_POST['gender'];
    $age = (int)$_POST['age'] ?? 0;
    $line = $_POST['line'];
    $phone = $_POST['phone'];
    $trait = $_POST['trait'];
    $r_name = $_POST['r_name'];
    $r_address = $_POST['r_address'];
    $r_no = $_POST['r_no'];
    $r_floor = (int)$_POST['r_floor'] ?? 0;
    $r_price = (int)$_POST['r_price'] ?? 0;
    $r_phone = $_POST['r_phone'];
    $f_bed_one = (int)$_POST['f_bed_one'] ?? 0;
    $f_bed_two = (int)$_POST['f_bed_two'] ?? 0;
    $f_wardrobe = (int)$_POST['f_wardrobe'] ?? 0;
    $f_shelf = (int)$_POST['f_shelf'] ?? 0;
    $f_table_one = (int)$_POST['f_table_one'] ?? 0;
    $f_table_two = (int)$_POST['f_table_two'] ?? 0;
    $f_fridge = (int)$_POST['f_fridge'] ?? 0;
    $f_air = (int)$_POST['f_air'] ?? 0;
    $f_heater = (int)$_POST['f_heater'] ?? 0;
    $f_television = (int)$_POST['f_television'] ?? 0;
    $f_wifi = (int)$_POST['f_wifi'] ?? 0;
    $f_lan = (int)$_POST['f_lan'] ?? 0;
    $f_is_elevator = (int)$_POST['f_is_elevator'] ?? 0;
    $f_is_parking = (int)$_POST['f_is_parking'] ?? 0;
    $f_is_keycard = (int)$_POST['f_is_keycard'] ?? 0;
    $f_is_kitchen = (int)$_POST['f_is_kitchen'] ?? 0;
    $f_is_pet = (int)$_POST['f_is_pet'] ?? 0;
    $detail = $_POST['detail'];

    $f_img1 = $_FILES['img1'];
    $f_img2 = $_FILES['img2'];
    $f_img3 = $_FILES['img3'];
    $f_img4 = $_FILES['img4'];
    $img1 = '';
    $img2 = '';
    $img3 = '';
    $img4 = '';

    include './dbcon.php';
    session_start();
    $avatar = $_SESSION['avatar'];

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $sql_img = '';
    if(!empty($f_img1['name'])) {
        $img1 = generateRandomString() . '.' . strtolower(pathinfo(basename($f_img1["name"]), PATHINFO_EXTENSION));
        $sql_img = "img1 = '$img1',";
        move_uploaded_file($f_img1["tmp_name"], '../img/room/' . $img1);
    }
    if(!empty($f_img2['name'])) {
        $img2 = generateRandomString() . '.' . strtolower(pathinfo(basename($f_img2["name"]), PATHINFO_EXTENSION));
        $sql_img = $sql_img . "img2 = '$img2',";
        move_uploaded_file($f_img2["tmp_name"], '../img/room/' . $img2);
    }
    if(!empty($f_img3['name'])) {
        $img3 = generateRandomString() . '.' . strtolower(pathinfo(basename($f_img3["name"]), PATHINFO_EXTENSION));
        $sql_img = $sql_img . "img3 = '$img3',";
        move_uploaded_file($f_img3["tmp_name"], '../img/room/' . $img3);
    }
    if(!empty($f_img4['name'])) {
        $img4 = generateRandomString() . '.' . strtolower(pathinfo(basename($f_img4["name"]), PATHINFO_EXTENSION));
        $sql_img = $sql_img . "img4 = '$img4',";
        move_uploaded_file($f_img4["tmp_name"], '../img/room/' . $img4);
    }

    if(!empty($sql_img)) $sql_img = ',' . substr($sql_img, 0, -1);

    $sql = "UPDATE post SET full_name='$full_name', nick_name='$nick_name', gender='$gender', age=$age,
        line='$line', phone='$phone', trait='$trait', r_name='$r_name', r_address='$r_address', r_no='$r_no',
        r_floor=$r_floor, r_price=$r_price, r_phone='$r_phone', f_bed_one=$f_bed_one, f_bed_two=$f_bed_two,
        f_wardrobe=$f_wardrobe, f_shelf=$f_shelf, f_table_one=$f_table_one, f_table_two=$f_table_two, f_fridge=$f_fridge,
        f_air=$f_air, f_heater=$f_heater, f_television=$f_television, f_wifi=$f_wifi, f_lan=$f_lan, f_is_elevator=$f_is_elevator,
        f_is_parking=$f_is_parking, f_is_keycard=$f_is_keycard, f_is_kitchen=$f_is_kitchen, f_is_pet=$f_is_pet, detail='$detail',
        avatar='$avatar'" . $sql_img . " WHERE id = $id";

    if($query = mysqli_query($dbcon, $sql)) {
        echo "<script>window.location.href = '../member/info_mem.php?id=$id'</script>";
    } else {
        echo 'error';
    }
?>