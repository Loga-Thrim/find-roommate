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
                            <form onsubmit="return findRoom(event)">

                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-7 col-lg-7">
                                            <span>เพศ</span>
                                            <select class="form-select" name="gender" aria-label="Default select example">
                                                <option value='' selected>กรุณาเลือกเพศ</option>
                                                <option value="ชาย">ชาย</option>
                                                <option value="หญิง">หญิง</option>
                                                <option value="LGBT">LGBT</option>
                                            </select>
                                        </div>
                                        <div class="col-5 col-md-2 col-lg-2">
                                            <span>อายุ</span>
                                            <input class="form-control" type="text" name="age_start" placeholder="" aria-label="default input example">
                                        </div>
                                        <br>
                                        -
                                        <div class="col-5 col-md-2 col-lg-2">
                                            <br>
                                            <input class="form-control" type="text" name="age_end" placeholder="" aria-label="default input example">
                                        </div>

                                        <div class="col-14 col-md-2 col-lg-2">
                                            <span>ราคาห้องพัก</span>
                                            <input class="form-control" type="text" name="price_start" placeholder="" aria-label="default input example">
                                        </div>
                                        <br>
                                        -
                                        <div class="col-14 col-md-2 col-lg-2">
                                            <br>
                                            <input class="form-control" type="text" name="price_end" placeholder="" aria-label="default input example">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-7">
                                            <span>การเลี้ยงสัตว์</span>
                                            <select class="form-select" name="f_is_pet" aria-label="Default select example">
                                                <option value='' selected>กรุณาเลือก</option>
                                                <option value="1">เลี้ยง</option>
                                                <option value="0">ไม่เลี้ยง</option>
                                            </select>
                                        </div>
                                    </div>



                                    <h5 style="margin-top: 20px;">เฟอร์นิเจอร์</h5>
                                    <div class="row">
                                        <div class="col-13 col-md-3 col-lg-2 ">
                                            <span> เตียงนอน(เดี่ยว)</span>
                                            <div class="form-check">
                                                <input class="form-check-input" name="f_bed_one" type="checkbox" value="1" id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2">
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
                                                <input class="form-check-input" name="f_fridge" type="checkbox" value="1" id="flexCheckDefault">
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-3 ">
                                            <span> เครื่องปรับอากาศ</span>
                                            <div class="form-check">
                                                <input class="form-check-input" name="f_air" type="checkbox" value="1" id="flexCheckDefault">
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
                                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 10px;"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
                                </div>
                        </div>
                        </form>
                    </div>

                    <div class="text-roommate" style="padding-top: 90px;" id="section-result">
                        <center>
                            <h1 class="p-5 " style="color:black; width:auto; margin-top: -30px;">ผลลัพธ์การค้นหา</h1>
                        </center>
                    </div>

                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; ">
                        <span style="margin-left: 20px; margin-top: 10px;" id="search-count">ค้นพบ 0 จาก 0 รายการ</span>
                        <div class="row row-cols-2 row-cols-md-5 g-2 g-lg-3" style="margin: 10px 10px;" id="result-parent">
                            <div class="col-6 col-xs-6 col-md-4 col-lg-4" id="result" style="display: none;">
                                <div class="card mem" style="width: 100%; margin: 10px 12px; border-radius: 20px;">
                                    <a href="#" style="text-align: center; overflow: hidden;">
                                        <img src="../img/People_1.png" class="card-img-top" style="margin-top: 10px; height: 250px; width: auto;">
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span id="result-nickname">ชื่อเล่น: ----</span><br>
                                            <span id="result-gender">เพศ: ชาย</span><br>
                                            <span id="result-age">อายุ: 22ปี</span><br>
                                            <span id="result-r-name">สถานที่พัก: ---- </span>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const node = document.getElementById("result");
        function findRoom(e) {
            e.preventDefault();
            let formInput = document.getElementsByTagName('input')
            let formSelect = document.getElementsByTagName('select')

            const formData = new FormData();
            for (el of formInput) {
                if (el.name) {
                    if (el.type === 'checkbox')(el.value = el.checked ? 1 : 0)
                    formData.append(el.name, el.value)
                }
            }
            for (el of formSelect) {
                if (el.name) {
                    formData.append(el.name, el.value)
                }
            }

            fetch('../api/search_post.php', {
                    method: 'POST',
                    body: formData
                }).then(res => res.json())
                .then(res => {
                    let data = res.data
                    let total = res.count
                    const nodeParent = document.getElementById('result-parent');
                    nodeParent.replaceChildren();

                    document.getElementById('search-count').innerHTML = `ค้นพบ ${data.length} จาก ${total} รายการ`
                    data.forEach((el) => {
                        const clone = node.cloneNode(true);
                        clone.style.display = 'initial';

                        clone.querySelector('a').href = './info_mem.php?id=' + el.id;
                        clone.querySelector('img').src = el.avatar == '' ? '../img/People_1.png' : '../img/avatar/' + el.avatar;
                        clone.querySelector('#result-nickname').innerText = `ชื่อเล่น: ${el.nick_name}`;
                        clone.querySelector("#result-gender").innerText = `เพศ: ${el.gender}`;
                        clone.querySelector("#result-age").innerText = `อายุ: ${el.age} ปี`;
                        clone.querySelector("#result-r-name").innerText = `สถานที่พัก: ${el.r_name}`;

                        nodeParent.appendChild(clone);
                    })

                    document.getElementById('section-result').scrollIntoView();
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