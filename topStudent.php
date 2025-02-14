<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous" />

  <!-- css link -->


  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- pruecounter library for counting the number -->
  <script src="https://cdn.jsdelivr.net/npm/pruecounter/dist/pruecounter.min.js"></script>
  <!-- alpine js  for navbar hide and show -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
  <!-- for showing better message -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- for sending email -->
  <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <title>Royia Sabaz School</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    @font-face {
      font-family: "Vazir";
      src: url("../assets/fonts/Vazir.eot");
      /** IE9 compat Moded */
      src: url("../assets/fonts/Vazir.eot?#iefix") format("embedded-opentype");
      src: url("../assets/fonts/Vazir.woff2") format("woff2");
      src: url("../assets/fonts/Vazir.woff") format("woff");
      src: url("../assets/fonts/Vazir.ttf") format("truetype");

      /* safari, Android, ios */
    }

    /* Difination of color */
    :root {
      --primary-color: #4e9dc5;
      --light-color: #fff;
      --secondary-color: #f99a00;
      --dark-color: #585858;
    }

    body {
      font-family: "Vazir" !important;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;

      display: block;
    }

    .header-scrolled {
      background-color: var(--secondary-color);
      box-shadow: 0px 2px 20px rgb(141, 122 /10%);
    }

    .header {
      transition: all 0.5s;
    }

    #toggleDark {
      cursor: pointer;
      font-size: 50px;
      transform: translate(-50%, -50%);
    }

    .navbar-toggler {
      padding: 0.25rem 0.5rem;
      font-size: 1rem;
    }

    .swiper {
      width: 100%;
      margin-top: 50px;
      padding: 50px;
    }

    .swiper-wraper {
      width: 100%;
      height: 35em;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: aqua;
    }


    .card {
      width: 25%;
      height: auto;
      /* تنظیم ارتفاع به صورت خودکار */
      border-radius: 2em;
      box-shadow: 0 0 2em rgba(0, 0, 0, 0.2);
      padding: 1em .5em;
      display: flex;
      align-items: center;
      flex-direction: column;

      margin: 0 1.5em;
    }

    .card_image {
      width: 10vw;
      /* استفاده از واحد vw برای اندازه نسبی */
      height: 10vw;
      /* استفاده از واحد vw برای اندازه نسبی */
      /* max-width: 150px; */
      /* حداکثر عرض */
      /* max-height: 150px; */
      /* حداکثر ارتفاع */
      border-radius: 50%;
      border: 5px solid #f99a00;

      margin-bottom: 2em;
    }

    .card_image img {
      width: 100%;
      /* تنظیم تصویر به صورت خودکار */
      height: auto;
      /* حفظ نسبت ابعاد */
      border-radius: 50%;
      /* border: 3px solid #fff; */
    }



    .card_content {
      display: flex;
      align-items: center;
      flex-direction: column;
    }

    .card_name {
      color: #f99a00;
    }

    .card_title {
      font-size: 1.5em;
      font-weight: 500;
      position: relative;
      top: 0.2em;
      color: #000;
    }

    .card_text {
      font-size: 1em;
      text-align: center;
      margin: 1em;
    }

    .card_btn {
      background-color: #585858;
      color: #fff;
      font-size: 1rem;
      text-transform: uppercase;
      font-weight: 600;
      border: none;
      padding: 0.5em;
      border-radius: 0.5em;
      margin-top: 0.5em;
      cursor: pointer;
    }

    .user-text {
      color: #585858;
    }

    .title {
      color: #4e9dc5;
    }

    .link1 {
      color: #4e9dc5;
    }

    /* style for link of footer */

    .link1 {
      text-decoration: none;


    }

    .card-btn11 {
      background-color: #f99a00;
      /* رنگ دکمه */
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
    }

    .card-btn11:hover {
      color: black;
      /* رنگ دکمه */

    }
  </style>
</head>

<body>
  <!-- this is Navbar -->
  <?php
  require "navbar.php"
  ?>
  <!-- this is the main content -->
  <section class="swiper mySwiper">
    <div class="text-center m-3 fw-bold">
      <h5 class="title">شاگردان برتر </h5>
    </div>
    <!-- Slider main container -->
    <div class="swiper-wrapper">

      <?php
      require "database_connect.php";
      $query = "SELECT * FROM topstudent";
      $query_run = mysqli_query($GLOBALS['DB'], $query);

      $check_Topstudent = mysqli_num_rows($query_run) > 0;

      if ($check_Topstudent) {
        while ($row = mysqli_fetch_assoc($query_run)) {

      ?>
          <div class="card swiper-slide">
            <!-- Additional required wrapper -->
            <div class="card_image">
              <img src="uploads/<?php echo   $row["image"] ?>" alt="png" class="user-image" />
            </div>

            <div class="card_content">
              <span class="card_title mb-3"> نام : <?php echo $row['name'];  ?></span>
              <span class="card_name mb-3">صنف : <?php echo $row['class'];  ?> </span>
              <span class="card_name mb-3">مقام : <?php echo $row['position'];  ?> </span>

              <div class="card-body text-center">
                <a class="card-btn11" href="uploads/<?php echo $row['description'];  ?>
"> متن مقاله</a>
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
    </div>
  </section>




  <!-- Initialize Swiper  and CDN -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 5,
        depth: 300,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>



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


  <!-- <!-- Option 1: Bootstrap Bundle with Popper  bootstarp 5.1.3  js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src="<?php echo "assets/js/javsScript.js"; ?>" defer></script>
  <!-- for swioper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- // javaScript for top student -->
  <script>
    const swiper = new Swiper(".slide-wrapper", {
      // Optional parameters
      loop: true,
      grabCursor: true,
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      // Responsive breakpoints
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        620: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>

</html>