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

    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <section class="martop1">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100 martop1">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card mt-5" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.5);">
                            <div class="card-body p-5">
                                <h2 class="text-center mb-5">Change name</h2>

                                <form onsubmit="changeName(event);">
                                    <div class="form-outline">
                                        <input type="text" id="name" class="form-control1 form-control-lg" placeholder="Name" required />
                                    </div>

                                    <!-- <div class="form-outline">
                                        <input type="password" id="form3Example4cg" class="form-control1 form-control-lg" placeholder="Password" />
                                    </div>

                                    <div class="form-outline">
                                        <input type="password" id="form3Example4cdg" class="form-control1 form-control-lg" placeholder="Repeat your password" />
                                    </div> -->

                                    <div class="d-flex justify-content-center mt-2">
                                        <button type="submit" class="btn6 form-control submit px-3">Confirm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="/js/hidenpass.js"></script>
    <script>
        function changeName(e) {
            e.preventDefault();

            const data = {
                name: document.getElementById('name').value
            }

            fetch('../api/change_name.php', {
                    method: "POST",
                    headers: {
                        "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
                    },
                    body: Object.entries(data).map(([k, v]) => {
                        return k + '=' + v
                    }).join('&')
                })
                .then(function(response) {
                    return response.json();
                })
                .then((data) => {
                    if (data.success) {
                        Swal.fire({
                            title: "เปลี่ยนชื่อผู้ใช้สำเร็จ",
                            icon: "success",
                        }).then(() => {
                            window.location.href = './profile_mem.php';
                        });
                    } else {
                        Swal.fire({
                            title: "เปลี่ยนชื่อผู้ใช้ล้มเหลว",
                            text: "โปรดลองใหม่ภายหลัง",
                            icon: "error",
                        });
                    }
                })
                .catch(() => {
                    Swal.fire({
                        title: "เปลี่ยนชื่อผู้ใช้ล้มเหลว",
                        text: "โปรดลองใหม่ภายหลัง",
                        icon: "error",
                    });
                });

            return false;
        }

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
</body>

</html>