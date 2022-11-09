<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap5 Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Style.css-->
    <link rel="stylesheet" href="./style/style.css">
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
    <?php
        include './api/loged_in.php';

        include './components/navbar.php';
    ?>

    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center matop">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Account Login</h3>
                        <form class="signin-form" onsubmit="return login(event)">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-mail" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password"
                                    required>
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"
                                    style="padding-right: 30px;"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn6 form-control submit px-3">Sign In</button>
                            </div>
                            <p class="text-center text-muted mt-5 mb-0">Not have a account? <a href="register.php"
                                class="fw-bold text-body"><u>Register here</u></a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="./js/hidenpass.js"></script>
    <script>
        function login(e) {
            e.preventDefault();

            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            const dataLogin = {
                email, password
            }
            fetch('./api/login.php', {
                method: "POST",
                headers: {"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"},
                body: Object.entries(dataLogin).map(([k,v])=>{return k+'='+v}).join('&')
            }).then(res => res.json())
            .then(res => {
                if(res.success) {
                    window.location = './member/index_mem.php';
                } else {
                    Swal.fire({
                        title: "อีเมลหรือรหัสผ่านไม่ถูกต้อง",
                        text: "โปรดลองใหม่อีกครั้งภายหลัง",
                        icon: "warning"
                    })
                }
            })
            .catch(e=>{
                Swal.fire({
                    title: "เกิดข้อผิดพลาดในการเข้าสู่ระบบ",
                    text: "โปรดลองใหม่อีกครั้งภายหลัง",
                    icon: "error"
                })
            })
            
            return false;
        }

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