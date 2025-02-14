<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous" />
    <!-- css file -->
    <link rel="stylesheet" href="./assets/css/About.css" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- pruecounter library for counting the number -->
    <script src="https://cdn.jsdelivr.net/npm/pruecounter/dist/pruecounter.min.js"></script>
    <!-- alpine js  for navbar hide and show -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <!-- for showing better message -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- for sending email -->

    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <title>Royia Sabaz School</title>

    <!-- for swiper js css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    <!-- this is Navbar -->

    <?php
    require "navbar.php"
    ?>


    <!-- About us  -->

    <section class="container ">
        <div>
            <h3 class=" text-center m-5 " style=" color: #4e9dc5;">در باره ما</h3>
        </div>
        <div class="row  align-items-center">
            <div class="col-lg-6 mb-5">
                <div class="div-pa">
                    <p class="para shadow sm-fs-2 mt-5 p-3
                    text-center text-justify">
                        ما در این وبسایت به معرفی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                        کتابهای زیادی در شصت و سه درصد گذشته حال.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="div-img text-center">
                    <img src="<?php echo "assets/images/Navbar/logo.png"; ?>" alt="ewew" class="img-fluid shadow" />
                </div>
            </div>
        </div>


        <!-- parts of about us counting  -->

        <div class="container counts my-5">



            <?php
            require "database_connect.php";
            $query = "SELECT * FROM statistics";
            $query_run = mysqli_query($GLOBALS['DB'], $query);

            $check_essay = mysqli_num_rows($query_run) > 0;

            if ($check_essay) {
                while ($row = mysqli_fetch_assoc($query_run)) {

            ?>

                    <div class="row">

                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center shadow p-3">
                                <i class="bi bi-person-standing blue"></i>
                                <div>

                                    <span data-purecounter-start="0" data-purecounter-end="
                            <?php echo  $row["student"] ?>"  class=" purecounter purecolor m-2 fw-bold" style="color: #f76c2f">0</span>

                                    <p class="fw-bold">آموزگار</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center shadow p-3">
                                <i class="bi bi-people-fill blue"></i>
                                <div>

                                    <span data-purecounter-start="0" data-purecounter-end="
                            <?php echo  $row["classes"] ?>""  class=" purecounter purecolor m-2 fw-bold" style="color: #f76c2f">0</span>
                                    <p class="fw-bold">دانش آموز</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center shadow p-3">
                                <i class="bi bi-building blue"></i>
                                <div>

                                    <span data-purecounter-start="0" data-purecounter-end="<?php echo  $row["classes"] ?>"
                                        class="purecounter m-2 purecolor fw-bold" style="color: #f76c2f">0</span>
                                    <p class="fw-bold">صنف آموزشی</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center shadow p-3">
                                <i class="bi bi-building blue"></i>
                                <div>

                            <span data-purecounter-start="0" data-purecounter-end="9001"
                                class="purecounter m-2 purecolor fw-bold" style="color: #f76c2f">0</span>
                            <p class="fw-bold">صنف آموزشی</p>
                        </div>
                    </div>
                </div>


                    </div>
            <?php
                }
            } else {
                echo " no faculty found";
            }


            ?>
        </div>
        <!-- Vision and mission -->
        <div class="container section border-top my-5">
            <div class="row">
                <div class="col-md-12 m-3  text-center">
                    <h3 style=" color: #f76c2f" ">دیدگاه و ماموریت</h3>
               
              </div>
              <div class=" col-md-6 text-center">
                        <h5 class="purecolor">دیدگاه ما </h5>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت لورم ایپسوم
                            متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                            طراحان گرافیک است، چاپگرها
                        </p>
                </div>
                <div class="col-md-6 text-center justify-conent-center align-items-center">
                    <h5 class="purecolor">ماموریت ما </h5>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت لورم ایپسوم
                        متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                        طراحان گرافیک است، چاپگرها
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footr -->

    <section class="section Footer pt-4  ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-5">
                    <h6 class="purecolor">در باره مکتب</h6>
                    <hr />
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت لورم ایپسوم
                        متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                        طراحان گرافیک است، چاپگرها و{" "}
                    </p>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <h6 class="purecolor">لینک صفحات</h6>
                    <hr />
                    <div class="di ">
                        <a class="link1 text-center" href="index.php">
                            صفحه اصلی
                        </a>
                    </div>
                    <div class="di">
                        <a class="link1" href="About.php">
                            در باره ما
                        </a>
                    </div>
                    <div class="di">
                        <a class="link1" href="Essay.php">
                            مقالات
                        </a>
                    </div>
                    <div class="di">
                        <a class="link1" href="topStudent.php">
                            شاگردان برتر
                        </a>
                    </div>
                    <div class="di">
                        <a class="link1" href="contactUs.php">
                            ارتباط با ما
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <h6 class="purecolor"> لینک های ارتباطی </h6>
                    <hr />
                    <div>
                        <p class=" mb-1"> آدرس : افغانستان هرات پل رنگینه </p>
                    </div>
                    <div>
                        <p class=" mb-1">+93 794 5345 434</p>
                    </div>
                    <div>
                        <p class=" mb-1">+93 794 3445 434</p>
                    </div>
                    <div>
                        <p class=" mb-1">RoyaiSabaz@gmail.com</p>
                    </div>
                    <div>
                        <p class=" mb-1"> ID-Telegram: RoyaiSabaz@1212</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // /* about dark and light mode */
        const toggle = document.getElementById("toggleDark");
        const body = document.querySelector("body");

        toggle.addEventListener("click", () => {
            toggle.classList.toggle("bi-moon");
            if (toggle.classList.toggle("bi-brightness-high-fill")) {
                body.style.background = "white";
                body.style.color = "black";
                body.style.transition = "2s";
                body.style.textEmphasisColor = "white";
            } else {
                body.style.background = "black";
                body.style.color = "white";
                body.style.transition = "2s";
            }
        });

        // email js and sweetalert2@11 for sending email and showing better message

        // جایگزین کردن با User ID خود
        (function() {
            emailjs.init("CvmB0NV53HwoAYBdk");
        })();

        document
            .getElementById("contact-form")
            .addEventListener("submit", function(event) {
                event.preventDefault(); // جلوگیری از ارسال پیش‌فرض فرم

                emailjs.sendForm("service_jtz4spm", "template_ja14zpg", this).then(
                    function() {
                        // نمایش پیام موفقیت با SweetAlert
                        Swal.fire({
                            title: "پیام با موفقیت ارسال شد!",
                            text: "ایمیل شما با موفقیت ارسال گردید.",
                            icon: "success",
                            confirmButtonText: "باشه",
                        });
                    },
                    function(error) {
                        // نمایش پیام خطا با SweetAlert
                        Swal.fire({
                            title: "خطا در ارسال ایمیل",
                            text: "متاسفانه ایمیل شما ارسال نشد: " + JSON.stringify(error),
                            icon: "error",
                            confirmButtonText: "باشه",
                        });
                    }
                );
            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter();
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper  bootstarp 5.1.3  js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- js file -->
    <script src="<?php echo "assets/js/javsScript.js"; ?>" defer></script>

</body>

</html>