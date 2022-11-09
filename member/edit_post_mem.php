<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap5 Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Style.css-->
    <link rel="stylesheet" href="../style/style2.css">
    <!--Sweetalert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Telugu&family=Mulish&family=Prompt&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!--Font awesome6.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Project</title>
</head>

<body>
    <?php
    include '../components/navbar-user.php';
    include '../api/dbcon.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM post WHERE id=$id";
    $query = mysqli_query($dbcon, $sql);
    $fetch = mysqli_fetch_assoc($query);
    ?>

    <div class="containers">
        <div class="text-roommate" style="padding-top: 90px;">
            <center>
                <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">แก้ไขโพสต์</h1>
            </center>
        </div>

        <div class="container h-100 p-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; ">
                        <div class="card-body">
                            <form action="../api/post_mem.php" method="POST" enctype="multipart/form-data">
                                <h5>ข้อมูลส่วนตัว</h5>
                                <div class="row">
                                    <div class="col">
                                        <span> ชื่อ-นามสกุล</span>
                                        <input type="text" class="form-control" name="full_name" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['full_name']; ?>">
                                    </div>
                                    <div class="col">
                                        <span> ชื่อเล่น</span>
                                        <input type="text" class="form-control" name="nick_name" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['nick_name']; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> เพศ</span>
                                        <select class="form-select" name="gender" aria-label="Default select example">
                                            <option <?php echo $fetch['gender'] == '' ? 'selected' : ''; ?>>กรุณาเลือกเพศ</option>
                                            <option value="ชาย" <?php echo $fetch['gender'] == 'ชาย' ? 'selected' : ''; ?>>ชาย</option>
                                            <option value="หญิง" <?php echo $fetch['gender'] == 'หญิง' ? 'selected' : ''; ?>>หญิง</option>
                                            <option value="LGBT" <?php echo $fetch['gender'] == 'LGBT' ? 'selected' : ''; ?>>LGBT</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <span> อายุ</span>
                                        <input type="text" class="form-control" name="age" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['age']; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> Line:ID</span>
                                        <input type="text" class="form-control" name="line" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['line']; ?>">
                                    </div>
                                    <div class="col">
                                        <span> เบอร์โทร</span>
                                        <input type="text" class="form-control" name="phone" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['phone']; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> นิสัย</span>
                                        <textarea class="form-control" placeholder="" name="trait" id="floatingTextarea"><?php echo $fetch['trait']; ?></textarea>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">ข้อมูลสถานที่พัก</h5>
                                <div class="row">
                                    <div class="col">
                                        <span> ชื่อสถานที่พัก</span>
                                        <input type="text" class="form-control" name="r_name" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['r_name']; ?>">
                                    </div>
                                    <div class="col">
                                        <span> ที่อยู่(สถานที่พัก)</span>
                                        <textarea class="form-control" placeholder="" name="r_address" id="floatingTextarea"><?php echo $fetch['r_address']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> หมายเลขห้อง</span>
                                        <input type="text" class="form-control" name="r_no" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['r_no']; ?>">
                                    </div>
                                    <div class="col">
                                        <span> อาศัยอยู่ชั้นที่</span>
                                        <input type="text" class="form-control" name="r_floor" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['r_floor']; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> ราคาห้องพัก(ยังไม่หาร)</span>
                                        <input type="text" class="form-control" name="r_price" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['r_price']; ?>">
                                    </div>
                                    <div class="col">
                                        <span> เบอร์โทรศัพท์ติดต่อ(สถานที่พัก)</span>
                                        <input type="text" class="form-control" name="r_phone" id="exampleInputtext" aria-describedby="text"
                                        value="<?php echo $fetch['r_phone']; ?>">
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">เฟอร์นิเจอร์</h5>
                                <div class="row">
                                    <div class="col-13 col-md-3 col-lg-2 ">
                                        <span> เตียงนอน(เดี่ยว)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_bed_one" type="checkbox" value="1" id="flexCheckDefault"
                                            <?php echo $fetch['f_bed_one'] == '1' ? 'checked' : ''; ?>>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2 ">
                                        <span> เตียงนอน(คู่)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_bed_two" type="checkbox" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2">
                                        <span> ตู้เสื้อผ้า</span>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_wardrobe" type="checkbox" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                        <span> ชั้นวางของ</span>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_shelf" type="checkbox" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span> โต๊ะ เก้าอี้ (1ชุด)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_table_one" type="checkbox" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <span> โต๊ะ เก้าอี้ (2ชุด)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_table_two" type="checkbox" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">เครื่องใช้ไฟฟ้า</h5>
                                <div class="row">
                                    <div class="col-4 col-md-2 ">
                                        <span> ตู้เย็น</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="f_fridge" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3 ">
                                        <span> เครื่องปรับอากาศ</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="f_air" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                    <div class="col-5 col-md-3 ">
                                        <span> เครื่องทำน้ำอุ่น</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="f_heater" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                    <div class="col-4 col-md-3 ">
                                        <span> โทรทัศน์</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="f_television" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                </div>

                                <h5 style="margin-top: 20px;">อินเทอร์เน็ต</h5>
                                <div class="row">
                                    <div class="col-4 col-md-2 ">
                                        <span> WiFi</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="f_wifi" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                    <div class="col-4 col-md-2 ">
                                        <span> สายLAN</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="f_lan" value="1" id="flexCheckDefault">
                                        </div>
                                    </div>

                                </div>

                                <h5 style="margin-top: 20px;">สิ่งอำนวยความสะดวก</h5>
                                <p>ลิฟต์</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_elevator" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_elevator" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                </div>

                                <p style="margin-top: 20px;">สถานที่จอดรถ</p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_parking" id="inlineRadio2_1" value="1">
                                    <label class="form-check-label" for="inlineRadio2_1">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_parking" id="inlineRadio2_2" value="0">
                                    <label class="form-check-label" for="inlineRadio2_2">ไม่มี</label>
                                </div>

                                <p style="margin-top: 20px;">ระบบคีย์การ์ด</p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_keycard" id="inlineRadio3_1" value="1">
                                    <label class="form-check-label" for="inlineRadio3_1">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_keycard" id="inlineRadio3_2" value="0">
                                    <label class="form-check-label" for="inlineRadio3_2">ไม่มี</label>
                                </div>

                                <p style="margin-top: 20px;">ห้องครัว</p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_kitchen" id="inlineRadio4_1" value="1">
                                    <label class="form-check-label" for="inlineRadio4_1">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_kitchen" id="inlineRadio4_2" value="0">
                                    <label class="form-check-label" for="inlineRadio4_2">ไม่มี</label>
                                </div>

                                <h5 style="margin-top: 20px;">การเลี้ยงสัตว์</h5>
                                <span>สัตว์เลี้ยง</span><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_pet" id="inlineRadio5_1" value="1">
                                    <label class="form-check-label" for="inlineRadio5_1">เลี้ยง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="f_is_pet" id="inlineRadio5_2" value="0">
                                    <label class="form-check-label" for="inlineRadio5_2">ไม่เลี้ยง</label>
                                </div>

                                <h5 style="margin-top: 20px;">เพิ่มเติม</h5>

                                <textarea class="form-control" placeholder="" name="detail" id="floatingTextarea"></textarea>

                                <h5 style="margin-top: 20px;">รูปภาพ(สถานที่พัก)</h5>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="img1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="img2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img3">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img4">
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary mb-3" style="margin-top: 10px;"><i class="fa-solid fa-plus"></i> โพสต์</button>

                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function myFunction() {
            Swal.fire({
                title: 'กรุณาล็อกอิน',
                text: 'เพื่อเข้าสู่ระบบ',
                icon: 'error',
                confirmButtonColor: "#DD6B55",
            }, function() {
                window.location = 'login.php'
            });
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>