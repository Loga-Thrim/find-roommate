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

    <div class="container">
        <div class="card"
            style="width: auto; margin-top: 150px; background-color: rgba(255, 255, 255, 0.5); border-radius: 20px;">
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="profile-pic" style="margin: 20px;">
                        <label class="-label" for="file">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)" />
                        <img src="../img/People_1.png" id="output" width="200" />
                    </div>
                </div>
                <div class="col-6 mt-5 col-md-8 col-lg-6">
                    <span class="text-name01">admin01</span>
                </div>
                <div class="col-6 col-md-3 col-lg-2" style="margin: 2rem 1.5rem ;"><a class="btn15" href="change_name.php"
                            style="text-decoration: none;">Change name</a></div>
            </div>
            <div class="row" style="margin: 5px;">
                <div class="col-12 col-md-12 col-lg-12">
                    <hr>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <p>โพสต์ของคุณ</p>
                </div>
                <div class="col-12 col-md-12 col-lg-12 mt-1"><a href="info_mem.php">โพสต์หารูมเมท 1</a> 
                    <button class="btn9"><a href="#"style="text-decoration: none;">แก้ไข</a></button>
                    <button class="btn10"><a href="#" style="text-decoration: none;">ลบ</a></button>
                </div>                
            </div>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="/js/profile.js"></script>

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