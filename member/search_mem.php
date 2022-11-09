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
    <?php include '../components/navbar-user.php'; ?>

    <div class="containers">
        <div class="text-roommate" style="padding-top: 90px;">
            <center>
                <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">ค้นหาโพสต์หารูมเมท</h1>
            </center>
        </div>

        <div class="container h-100 p-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; ">
                        <div class="card-body">
                            <form action="#">

                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-7 col-lg-7">
                                            <span>เพศ</span>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>กรุณาเลือกเพศ</option>
                                                <option value="1">ชาย</option>
                                                <option value="2">หญิง</option>
                                                <option value="3">อื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="col-5 col-md-2 col-lg-2">
                                            <span>อายุ</span>
                                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                        </div>
                                        <br>
                                        -
                                        <div class="col-5 col-md-2 col-lg-2">
                                            <br>
                                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                        </div>

                                        <div class="col-14 col-md-2 col-lg-2">
                                            <span>ราคาห้องพัก</span>
                                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                        </div>
                                        <br>
                                        -
                                        <div class="col-14 col-md-2 col-lg-2">
                                            <br>
                                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-7">
                                            <span>การเลี้ยงสัตว์</span>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>กรุณาเลือก</option>
                                                <option value="1">เลี้ยง</option>
                                                <option value="2">ไม่เลี้ยง</option>
                                            </select>
                                        </div>
                                    </div>



                                    <h5 style="margin-top: 20px;">เฟอร์นิเจอร์</h5>
                                    <div class="row">
                                        <div class="col-13 col-md-3 col-lg-2 ">
                                            <span> เตียงนอน(เดี่ยว)</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2">
                                            <span> เตียงนอน(คู่)</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <span> ตู้เสื้อผ้า</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-2">
                                            <span> ชั้นวางของ</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-3">
                                            <span> โต๊ะ เก้าอี้ (1ชุด)</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-4">
                                            <span> โต๊ะ เก้าอี้ (2ชุด)</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>

                                    <h5 style="margin-top: 20px;">เครื่องใช้ไฟฟ้า</h5>
                                    <div class="row">
                                        <div class="col-4 col-md-2 ">
                                            <span> ตู้เย็น</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-3 ">
                                            <span> เครื่องปรับอากาศ</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-5 col-md-3 ">
                                            <span> เครื่องทำน้ำอุ่น</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-4 col-md-3 ">
                                            <span> โทรทัศน์</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                    </div>

                                    <h5 style="margin-top: 20px;">อินเทอร์เน็ต</h5>
                                    <div class="row">
                                        <div class="col-4 col-md-2 ">
                                            <span> WiFi</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-4 col-md-2 ">
                                            <span> สายLAN</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 10px;"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
                                </div>
                        </div>
                        </form>
                    </div>

                    <div class="text-roommate" style="padding-top: 90px;">
                        <center>
                            <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">ผลลัพธ์การค้นหา</h1>
                        </center>
                    </div>

                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; ">

                        <div class="row row-cols-2 row-cols-md-5 g-2 g-lg-3" style="margin: 10px 10px;">
                            <div class="col-6 col-xs-6 col-md-4 col-lg-3">
                                <div class="card mem" style="width: 12rem; margin: 10px 12px; border-radius: 20px;">
                                    <a href="#"><img src="../img/People_1.png" class="card-img-top" style="margin-top: 10px;" alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <label for="#">ชื่อเล่น: ----</label><br>
                                            <label for="#">เพศ: ชาย</label><br>
                                            <label for="#">อายุ: 22ปี</label><br>
                                            <label for="#">สถานที่พัก: ---- </label>

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-xs-6 col-md-4 col-lg-3">
                                <div class="card mem" style="width: 12rem; margin: 10px 12px; border-radius: 20px;">
                                    <a href="#"><img src="../img/People_1.png" class="card-img-top" style="margin-top: 10px;" alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <label for="#">ชื่อเล่น: ----</label><br>
                                            <label for="#">เพศ: ชาย</label><br>
                                            <label for="#">อายุ: 22ปี</label><br>
                                            <label for="#">สถานที่พัก: ---- </label>

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-xs-6 col-md-4 col-lg-3">
                                <div class="card mem" style="width: 12rem; margin: 10px 12px; border-radius: 20px;">
                                    <a href="#"><img src="../img/People_1.png" class="card-img-top" style="margin-top: 10px;" alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <label for="#">ชื่อเล่น: ----</label><br>
                                            <label for="#">เพศ: ชาย</label><br>
                                            <label for="#">อายุ: 22ปี</label><br>
                                            <label for="#">สถานที่พัก: ---- </label>

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-xs-6 col-md-4 col-lg-3">
                                <div class="card mem" style="width: 12rem; margin: 10px 12px; border-radius: 20px;">
                                    <a href="#"><img src="../img/People_1.png" class="card-img-top" style="margin-top: 10px;" alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <label for="#">ชื่อเล่น: ----</label><br>
                                            <label for="#">เพศ: ชาย</label><br>
                                            <label for="#">อายุ: 22ปี</label><br>
                                            <label for="#">สถานที่พัก: ---- </label>

                                        </p>
                                    </div>
                                </div>
                            </div>
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