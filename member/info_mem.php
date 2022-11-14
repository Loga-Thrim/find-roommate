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
                <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">ข้อมูลโพสต์</h1>
            </center>
        </div>

        <div class="container h-100 p-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; ">
                        <div class="card-body">
                            <form action="#">
                                <center>
                                    <img :src="data.avatar == '' ? '../img/People_1.png' : '../img/avatar/' + data.avatar" alt="#" style="width: 200px;">
                                </center>
                                <br>
                                <h5>ข้อมูลส่วนตัว</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>ชื่อ-นามสกุล: {{data.full_name}} </p>
                                    </div>
                                    <div class="col">
                                        <p>ชื่อเล่น: {{data.nick_name}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>เพศ: {{data.gender}} </p>
                                    </div>
                                    <div class="col">
                                        <p>อายุ: {{data.age}} ปี</p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>Line:ID: {{data.line}} </p>
                                    </div>
                                    <div class="col">
                                        <p>เบอร์โทร: {{data.phone}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>นิสัย: {{data.trait}}</p>
                                    </div>

                                </div>

                                <h5 style="margin-top: 20px;">ข้อมูลสถานที่พัก</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>ชื่อสถานที่พัก: {{data.r_name}} </p>
                                    </div>
                                    <div class="col">
                                        <p>ที่อยู่(สถานที่พัก): {{data.r_address}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>หมายเลขห้อง: {{data.r_no}} </p>
                                    </div>
                                    <div class="col">
                                        <p>อาศัยอยู่ชั้นที่: {{data.r_floor}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>ราคาห้องพัก(ยังไม่หาร): {{data.r_price}} </p>
                                    </div>
                                    <div class="col">
                                        <p>เบอร์โทรศัพท์ติดต่อ(สถานที่พัก): {{data.r_phone}} </p>
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">เฟอร์นิเจอร์</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>เตียงนอน(เดี่ยว): {{parseInt(data.f_bed_one) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>เตียงนอน(คู่): {{parseInt(data.f_bed_two) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>ตู้เสื้อผ้า: {{parseInt(data.f_wardrobe) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>ชั้นวางของ: {{parseInt(data.f_shelf) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>โต๊ะ เก้าอี้ (1ชุด): {{parseInt(data.f_table_one) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>โต๊ะ เก้าอี้ (2ชุด): {{parseInt(data.f_table_two) ? '✔' : '-'}} </p>
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">เครื่องใช้ไฟฟ้า</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>ตู้เย็น: {{parseInt(data.f_fridge) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>เครื่องปรับอากาศ: {{parseInt(data.f_air) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col-0 col-md-6">
                                        <p>เครื่องทำน้ำอุ่น: {{parseInt(data.f_heater) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>โทรทัศน์: {{parseInt(data.f_television) ? '✔' : '-'}} </p>
                                    </div>
                                </div>

                                <h5 style="margin-top: 20px;">อินเทอร์เน็ต</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>WiFi: {{parseInt(data.f_wifi) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>สายLAN: {{parseInt(data.f_lan) ? '✔' : '-'}} </p>
                                    </div>
                                </div>
                                <h5 style="margin-top: 20px;">สิ่งอำนวยความสะดวก</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>ลิฟต์: {{parseInt(data.f_is_elevator) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>สถานที่จอดรถ: {{parseInt(data.f_is_parking) ? '✔' : '-'}} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>ระบบคีย์การ์ด: {{parseInt(data.f_is_keycard) ? '✔' : '-'}} </p>
                                    </div>
                                    <div class="col">
                                        <p>ห้องครัว: {{parseInt(data.f_is_kitchen) ? '✔' : '-'}} </p>
                                    </div>
                                </div>
                                <h5 style="margin-top: 20px;">การเลี้ยงสัตว์</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        <p>สัตว์เลี้ยง: {{parseInt(data.f_is_pet) ? '✔' : '-'}} </p>
                                    </div>
                                </div>
                                <h5 style="margin-top: 20px;">เพิ่มเติม</h5>
                                <div class="row">
                                    <div class="col-0 col-md-6">
                                        {{data.detail}}
                                    </div>
                                </div>
                                <h5 style="margin-top: 20px;">รูปภาพ(สถานที่พัก)</h5>
                                <div class="row">
                                    <div class="col-4 col-md-5 col-lg-3">
                                        <img :src="'../img/room/' + data.img1" alt="" style="width: 250px;">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-4 col-md-5 col-lg-3">
                                        <img :src="'../img/room/' + data.img2" alt="" style="width: 250px;">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-4 col-md-5 col-lg-3">
                                        <img :src="'../img/room/' + data.img3" alt="" style="width: 250px;">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-4 col-md-5 col-lg-3">
                                        <img :src="'../img/room/' + data.img4" alt="" style="width: 250px;">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    data: {}
                }
            },
            methods: {
                getData() {
                    let url = new URL(window.location.href);
                    let id = url.searchParams?.get('id');

                    fetch(`../api/get_post.php?id=${id}`).then(res => res.json())
                        .then(res => {
                            this.data = res;
                            console.log(res);
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