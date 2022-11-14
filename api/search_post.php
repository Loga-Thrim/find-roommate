<?php
    include 'dbcon.php';

    $gender = $_POST['gender'];
    $age_start = $_POST['age_start'];
    $age_end = $_POST['age_end'];
    $price_start = $_POST['price_start'];
    $price_end = $_POST['price_end'];
    $f_is_pet = $_POST['f_is_pet'];
    $f_bed_one = $_POST['f_bed_one'];
    $f_bed_two = $_POST['f_bed_two'];
    $f_wardrobe = $_POST['f_wardrobe'];
    $f_shelf = $_POST['f_shelf'];
    $f_table_one = $_POST['f_table_one'];
    $f_table_two = $_POST['f_table_two'];
    $f_fridge = $_POST['f_fridge'];
    $f_air = $_POST['f_air'];
    $f_heater = $_POST['f_heater'];
    $f_television = $_POST['f_television'];
    $f_wifi = $_POST['f_wifi'];
    $f_lan = $_POST['f_lan'];

    $sql = "";
    if(!empty($gender)) $sql = $sql . 'gender = "' . $gender . '" AND ';
    if(!empty($age_start)) $sql = $sql . 'age >= ' . $age_start . ' AND ';
    if(!empty($age_end)) $sql = $sql . 'age <= ' . $age_end . ' AND ';
    if(!empty($price_start)) $sql = $sql . 'r_price >= ' . $price_start . ' AND ';
    if(!empty($price_end)) $sql = $sql . 'r_price <= ' . $price_end . ' AND ';
    if(!empty($f_is_pet)) $sql = $sql . 'f_is_pet = ' . $f_is_pet . ' AND ';
    if(!empty($f_bed_one)) $sql = $sql . 'f_bed_one = ' . $f_bed_one . ' AND ';
    if(!empty($f_bed_two)) $sql = $sql . 'f_bed_two = ' . $f_bed_two . ' AND ';
    if(!empty($f_wardrobe)) $sql = $sql . 'f_wardrobe = ' . $f_wardrobe . ' AND ';
    if(!empty($f_shelf)) $sql = $sql . 'f_shelf = ' . $f_shelf . ' AND ';
    if(!empty($f_table_one)) $sql = $sql . 'f_table_one = ' . $f_table_one . ' AND ';
    if(!empty($f_table_two)) $sql = $sql . 'f_table_two = ' . $f_table_two . ' AND ';
    if(!empty($f_fridge)) $sql = $sql . 'f_fridge = ' . $f_fridge . ' AND ';
    if(!empty($f_air)) $sql = $sql . 'f_air = ' . $f_air . ' AND ';
    if(!empty($f_heater)) $sql = $sql . 'f_heater = ' . $f_heater . ' AND ';
    if(!empty($f_television)) $sql = $sql . 'f_television = ' . $f_television . ' AND ';
    if(!empty($f_wifi)) $sql = $sql . 'f_wifi = ' . $f_wifi . ' AND ';
    if(!empty($f_lan)) $sql = $sql . 'f_lan = ' . $f_lan . ' AND ';

    $sql_query = "SELECT * FROM post " . (!empty($sql) ? "WHERE " . $sql : "");
    if(!empty($sql)) $sql_query = substr($sql_query, 0, -4);
    $sql_count_row = "SELECT COUNT(*) AS countRow FROM post";
    $query_count_row = mysqli_query($dbcon, $sql_count_row);

    $query = mysqli_query($dbcon, $sql_query);
    $result = array();
    while($row = mysqli_fetch_array($query)){
        array_push($result, $row);
    }

    echo json_encode(['data' => $result, 'count' => mysqli_fetch_assoc($query_count_row)['countRow']]);
?>