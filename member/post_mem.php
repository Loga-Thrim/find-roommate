<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap5 Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Style.css-->
    <link rel="stylesheet" href="../style/style2.css">
    <!--Sweetalert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Telugu&family=Mulish&family=Prompt&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <!--Font awesome6.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Project</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(255, 255, 255, 0.9);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 25px; color: rgb(221, 147, 36);">RmFinder</a>
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><span class="fa-solid fa-user"
                    style="font-size: 30px; color: rgb(22, 236, 165);"></span></button>

            <div class="navbar-collapse navbar-default custom-menu1" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="index_mem.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="search_mem.php">ค้นหา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post_mem.php">โพสต์หารูมเมท</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_mem.php">เกี่ยวกับเรา</a>
                    </li>
                </ul>

                <form class="d-flex-1">
                    <span class="accout"><img src="../img/People_1.png" class="imgrm1" alt="">
                        : admin01</span>
                    <a class="btn7" type="submit" href="profile_mem.php" style="margin:3px;"><i
                            class="fa-solid fa-address-card"></i> Profile</a>
                    <a class="btn7" type="submit" href="../api/logout.php" style="margin:3px;"><i
                            class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                </form>


                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header" style="background-color: rgba(255, 255, 255, 0);">
                        <h5 id="offcanvasRightLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <center>
                            <form class="d-flexs">
                                <img src="../img/People_1.png" class="imgrm2" alt="">

                                <div class="navbars2">
                                    <center><span class="accout2">admin01</span></center>
                                    <a class="btn7" type="submit" href="profile_mem.php" style="margin:3px;">
                                        <i class="fa-solid fa-address-card"></i> Profile</a>
                                    <a class="btn7" type="submit" href="#" style="margin:3px;"><i
                                            class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                                </div>
                            </form>
                        </center>

                        <ul class="nabs" style="margin-top: 130px;">
                            <hr class="bg-white">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index_mem.php"><i class="fa-solid fa-house"></i>
                                    หน้าหลัก</a>
                            </li>
                            <hr class="bg-white">
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="search_mem.php"><i
                                        class="fa-solid fa-magnifying-glass"></i> ค้นหา</a>
                            </li>
                            <hr class="bg-white">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="post_mem.php"><i
                                        class="fa-solid fa-file-circle-plus"></i> โพสต์หารูมเมท</a>
                            </li>
                            <hr class="bg-white">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="contact_mem.php"><i
                                        class="fa-solid fa-id-card-clip"></i> เกี่ยวกับเรา</a>
                            </li>
                            <hr class="bg-white">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="containers">
        <div class="text-roommate" style="padding-top: 90px;">
            <center>
                <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">สร้างโพสต์เพื่อหารูมเมท</h1>
            </center>
        </div>

        <div class="container h-100 p-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; ">
                        <div class="card-body">
                            <form action="#">
                                <h5>ข้อมูลส่วนตัว</h5>
                                <div class="row">
                                    <div class="col">
                                        <span> ชื่อ-นามสกุล</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                    <div class="col">
                                        <span> ชื่อเล่น</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> เพศ</span>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>กรุณาเลือกเพศ</option>
                                            <option value="1">ชาย</option>
                                            <option value="2">หญิง</option>
                                            <option value="3">อื่นๆ</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <span> อายุ</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> Line:ID</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                    <div class="col">
                                        <span> เบอร์โทร</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> นิสัย</span>
                                        <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">ข้อมูลสถานที่พัก</h5>
                                <div class="row">
                                    <div class="col">
                                        <span> ชื่อสถานที่พัก</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                    <div class="col">
                                        <span> ที่อยู่(สถานที่พัก)</span>
                                        <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> หมายเลขห้อง</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                    <div class="col">
                                        <span> อาศัยอยู่ชั้นที่</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span> ราคาห้องพัก(ยังไม่หาร)</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                    <div class="col">
                                        <span> เบอร์โทรศัพท์ติดต่อ(สถานที่พัก)</span>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            aria-describedby="text">
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">เฟอร์นิเจอร์</h5>
                                <div class="row">
                                    <div class="col-13 col-md-3 col-lg-2 ">
                                        <span> เตียงนอน(เดี่ยว)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2 ">
                                        <span> เตียงนอน(คู่)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2">
                                        <span> ตู้เสื้อผ้า</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                        <span> ชั้นวางของ</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span> โต๊ะ เก้าอี้ (1ชุด)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <span> โต๊ะ เก้าอี้ (2ชุด)</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                </div>

                                    <h5 style="margin-top: 20px;">เครื่องใช้ไฟฟ้า</h5>
                                    <div class="row">
                                        <div class="col-4 col-md-2 ">
                                            <span> ตู้เย็น</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-3 ">
                                            <span> เครื่องปรับอากาศ</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-5 col-md-3 ">
                                            <span> เครื่องทำน้ำอุ่น</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-4 col-md-3 ">
                                            <span> โทรทัศน์</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>

                                    </div>

                                    <h5 style="margin-top: 20px;">อินเทอร์เน็ต</h5>
                                    <div class="row">
                                        <div class="col-4 col-md-2 ">
                                            <span> WiFi</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-4 col-md-2 ">
                                            <span> สายLAN</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>

                                    </div>

                                    <h5 style="margin-top: 20px;">สิ่งอำนวยความสะดวก</h5>
                                    <p>ลิฟต์</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions0"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">มี</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions0"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    </div>

                                    <p style="margin-top: 20px;">สถานที่จอดรถ</p>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">มี</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    </div>

                                    <p style="margin-top: 20px;">ระบบคีย์การ์ด</p>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">มี</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    </div>

                                    <p style="margin-top: 20px;">ห้องครัว</p>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">มี</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    </div>

                                    <h5 style="margin-top: 20px;">การเลี้ยงสัตว์</h5>
                                    <span>สัตว์เลี้ยง</span><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">เลี้ยง</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่เลี้ยง</label>
                                    </div>

                                    <h5 style="margin-top: 20px;">เพิ่มเติม</h5>

                                    <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>

                                    <h5 style="margin-top: 20px;">รูปภาพ(สถานที่พัก)</h5>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <input class="form-control form-control-sm" id="formFileSm"
                                                        type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <input class="form-control form-control-sm" id="formFileSm"
                                                        type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 10px;"><i
                                            class="fa-solid fa-plus"></i> โพสต์</button>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        function myFunction() {
            Swal.fire({
                title: 'กรุณาล็อกอิน',
                text: 'เพื่อเข้าสู่ระบบ',
                icon: 'error',
                confirmButtonColor: "#DD6B55",
            }, function () {
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