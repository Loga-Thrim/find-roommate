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

    <div class="containers" id="app">
        <div class="text-roommate" style="padding-top: 90px;">
            <center>
                <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">โพสต์หารูมเมท</h1>
            </center>
        </div>
        <div class="container mt-2">
            <div class="card text-dark" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px;">
                <div class="card1 card-body justify-content-start" style="margin: 0px;">
                    <div class="row row-cols-4 row-cols-md-5">
                        <template v-for="item in data">
                            <div class="col-6 col-xs-6 col-md-4 col-lg-3">
                                <div class="card mem" style="width: 15rem; margin: 10px 12px; border-radius: 20px;">
                                    <a :href="'./info_mem.php?id=' + item.id" style="text-align: center;">
                                        <img :src="item.avatar == '' ? '../img/People_1.png' : '../img/avatar/' + item.avatar"
                                            class="card-img-top" style="margin-top: 10px; height: 250px; width: auto;" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <label for="#">ชื่อเล่น: {{item.nickname}}</label><br>
                                            <label for="#">เพศ: {{item.gender}}</label><br>
                                            <label for="#">อายุ: {{item.age}} ปี</label><br>
                                            <label for="#">สถานที่พัก: {{item.r_name}} </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- <div class="d-flex justify-content-center btn-toolbar mt-2" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary">1</button>
                    <button type="button" class="btn btn-primary">2</button>
                    <button type="button" class="btn btn-primary">3</button>
                    <button type="button" class="btn btn-primary">4</button>
                    <button type="button" class="btn btn-primary">5</button>
                    <button type="button" class="btn btn-primary">6</button>
                    <button type="button" class="btn btn-primary">7</button>
                    <button type="button" class="btn btn-primary">8</button>
                </div>

            </div> -->

            <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <script>
                const {
                    createApp
                } = Vue

                createApp({
                    data() {
                        return {
                            data: []
                        }
                    },
                    methods: {
                        getData() {
                            let url = new URL(window.location.href);
                            let id = url.searchParams?.get('id');

                            fetch(`../api/get_all_post.php`).then(res => res.json())
                                .then(res => {
                                    res = res.reverse();
                                    this.data = res;
                                })
                        }
                    },
                    mounted() {
                        this.getData();
                    },
                }).mount('#app')
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