<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap5 Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Style.css-->
    <link rel="stylesheet" href="./style/style.css">
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
    include './api/loged_in.php';
    include './components/navbar.php';
    ?>

    <div class="container text-start">
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>

        <div class="row">
            <div class="col" style="font-size: 60px; font-weight: 600; margin-left: 30px;">
                <span>Find your <br>Roommate</span>
            </div>
            <p style="margin-left: 30px;">By.RmFinder</p>
            <div class="col" style="margin: 100px 0px;">
                <a class="btn4" type="submit" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> ล็อกอิน</a>
                <a class="btn4" type="submit" href="register.php"><i class="fa-solid fa-user-plus"></i> สมัครสมาชิก</a>
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