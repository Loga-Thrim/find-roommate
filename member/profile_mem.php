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
    // session_start();
    ?>

    <div class="container">
        <div class="card" style="width: auto; margin-top: 150px; background-color: rgba(255, 255, 255, 0.5); border-radius: 20px;">
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="profile-pic" style="margin: 20px;">
                        <label class="-label" for="file">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)" />
                        <img src="<?php echo $_SESSION['avatar'] == '' ? '../img/People_1.png' : '../img/avatar/' . $_SESSION['avatar']; ?>" id="output" width="200" />
                    </div>
                </div>
                <div class="col-6 mt-5 col-md-8 col-lg-6">
                    <span class="text-name01"><?php echo $_SESSION['name']; ?></span> <br>
                    <span class=""><?php echo $_SESSION['email']; ?></span>
                </div>
                <div class="col-6 col-md-3 col-lg-2" style="margin: 2rem 1.5rem ;"><a class="btn15" href="change_name.php" style="text-decoration: none;">Change name</a></div>
            </div>
            <div class="row" style="margin: 5px;">
                <div class="col-12 col-md-12 col-lg-12">
                    <hr>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <p>โพสต์ของคุณ</p>
                </div>
                <?php
                include '../api/dbcon.php';
                $id = $_SESSION['id'];
                $sql = "SELECT id, r_name FROM post WHERE user_id=$id";
                $query = mysqli_query($dbcon, $sql);

                while ($fetch = mysqli_fetch_assoc($query)) {
                ?>
                <div class="col-12 col-md-12 col-lg-12 mt-1"><a href="info_mem.php?id=<?php echo $fetch['id']; ?>"><?php echo $fetch['r_name']; ?></a>
                    <button class="btn9"><a href="./edit_post_mem.php?id=<?php echo $fetch['id']; ?>" style="text-decoration: none; color: white;">แก้ไข</a></button>
                    <button class="btn10"><a onclick="deletePost(<?php echo $fetch['id']; ?>)" style="text-decoration: none; color: white;">ลบ</a></button>
                </div>
                <?php
                }
                ?>
            </div>
            <br>
        </div> <br><br>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/profile.js"></script>

    <script>
        // fetch('../api/get_post_id.php')

        function deletePost(id) {
            fetch(`../api/delete_post.php?id=${id}`).then(res => {
                Swal.fire({
                    title: 'ลบโพสต์สำเร็จ',
                    icon: 'success'
                }).then(() => {
                    location.reload();
                });
            })
        }
    </script>

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
</body>

</html>