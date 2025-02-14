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
    <link rel="stylesheet" href="<?php echo "assets/css/Essay.css"; ?>" />

    <!-- Bootstrap icon -->
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- pruecounter library for counting the number -->
    <script src="https://cdn.jsdelivr.net/npm/pruecounter/dist/pruecounter.min.js"></script>
    <!-- alpine js  for navbar hide and show -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <!-- for showing better message -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css link -->
    <link rel="stylesheet" href=<?php echo "assets/css/index.css" ?> />
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


    <!-- top student -->



    <section class="container">
        <div class="row text-center mb-4">
            <h3 class="title">مقالات</h3>
        </div>
        <div class="row">

            <?php
            require "database_connect.php";
            $query = "SELECT * FROM essay";
            $query_run = mysqli_query($GLOBALS['DB'], $query);

            $check_essay = mysqli_num_rows($query_run) > 0;

            if ($check_essay) {
                while ($row = mysqli_fetch_assoc($query_run)) {

            ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="uploads/<?php echo   $row["image"] ?>" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-title title"><span>عنوان:</span><?php echo   $row["title"] ?> </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span>ناشر:</span> <?php echo   $row["publisher"] ?></li>
                                    <li class="list-group-item">سال نشر: <span><?php echo   $row["publication_year"] ?></span></li>
                                </ul>
                            </div>
                            <div class="card-body text-center">
                                <a
                                    class="card-btn" href="uploads/<?php echo $row['description'];  ?>
                        ">جزئیات بیشتر</a>
                            </div>
                        </div>
                    </div>

            <?php
                }
            } else {
                echo " no faculty found";
            }


            ?>


            <!-- تکرار کارت‌ها -->


            <!-- سایر کارت‌ها -->
            <!-- ... -->
        </div>
    </section>

    <!-- Footr -->

    <section class="section Footer pt-4  ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-5">
                    <h6 class="title">در باره مکتب</h6>
                    <hr />
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت لورم ایپسوم
                        متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                        طراحان گرافیک است، چاپگرها و{" "}
                    </p>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <h6 class="title">لینک صفحات</h6>
                    <hr />
                    <div class="di ">
                        <a class="link1 text-center" href="index.php">
                            خانه
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
                    <h6 class="title"> لینک های ارتباطی </h6>
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

       
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter();
    </script>

    
    <!-- js file -->
    <script src="<?php echo "assets/js/javsScript.js"; ?>" defer></script>

    <!-- <!-- Option 1: Bootstrap Bundle with Popper  bootstarp 5.1.3  js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>