<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
    crossorigin="anonymous" />
  <!-- css file -->
  <link rel="stylesheet" href="../assets/css/contactUs.css" />
  <!-- Bootstrap icon -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- alpine js  for navbar hide and show -->
  <script
    defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
  <!-- for showing better message -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- for sending email -->

  <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <title>Royia Sabaz School</title>

  <!-- for swiper js css -->

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


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
      padding: 0;
      margin: 0;
      box-sizing: border-box;
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

    /* style for contact us */

    .container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
    }

    .form-label {
      font-weight: bold;
    }

    .info-box {
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .icon {
      font-size: 24px;
      color: #f99a00;
      margin-right: 10px;
    }

    .text-center {
      text-align: center;
    }

    .mt-2 {
      margin-top: 0.2rem;
    }

    .mt-5 {
      margin-top: 1rem;
    }

    .in-box {
      padding: 20px;
    }

    .icon {
      font-size: 25px;
      line-height: 2;
    }

    .pa {
      line-height: 1;
    }

    .row1 {
      border-top: 1.5px solid #4e9dc5;
    }

    .sect {
      border-bottom: 2px solid #4e9dc5;
    }

    /* style for footer */

    .link1 {
      text-decoration: none;
      color: #4e9dc5;
    }

    .di {
      margin: 5px;
    }
  </style>

</head>

<body>
  <!-- this is Navbar -->

  <?php
  require "navbar.php"
  ?>
  <!-- Contact us -->

  <section class="sect mt-5">
    <div class="container">
      <h3 class="text-center m-2" style="color: #4e9dc5">ارتباط با ما</h3>
      <div class="row mt-5 row1">
        <div class="col-lg-6 mt-5 mb-5 ms-10">
          <form id="contact-form">
            <div class="row gy-4">
              <div class="col-md-9">
                <label class="form-label purecolor">نام</label>
                <input
                  class="form-control mt-1"
                  type="text"
                  name="{{to_name}}"
                  required />
              </div>
              <div class="col-md-9">
                <label class="form-label purecolor">ایمیل</label>
                <input
                  class="form-control mt-1"
                  type="email"
                  name="{{from_name}}"
                  required />
              </div>
              <div class="col-md-9">
                <label class="form-label purecolor">متن</label>
                <textarea
                  class="form-control mt-1"
                  name="{{message}}"
                  required></textarea>
              </div>
              <div class="col-md-9">
                <button
                  type="submit"
                  id="show-alert"
                  value="ارسال"
                  class="btn btn w-100"
                  style="background-color: #4e9dc5">
                  ارسال
                </button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-6">
          <div class="row gy-3">
            <div class="col-md-6 mt-5">
              <div class="info-box">
                <i class="bi bi-geo-alt-fill icon"></i>
                <h5 class="purecolor">آدرس:</h5>
                <p>افغانستان، هرات، پل رنگینه</p>
              </div>
              <div class="info-box mt-5">
                <i class="bi bi-telephone icon"></i>
                <h5 class="purecolor">شماره تماس:</h5>
                <p class="pa">+93 794 3445 434</p>
                <p class="pa">+93 794 5345 434</p>
              </div>
            </div>
            <div class="col-md-6 mt-5">
              <div class="info-box">
                <i class="bi bi-envelope-check icon"></i>
                <h5 class="purecolor">ایمیل:</h5>
                <p class="align-items-reight">RoyaiSabaz@ gmail.com</p>
              </div>
              <div class="info-box mt-5">
                <i class="bi bi-telegram icon"></i>
                <h5 class="purecolor">ID تلگرام:</h5>
                <p>RoyaiSabaz@22</p>
              </div>
            </div>
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

  <!-- <!-- Option 1: Bootstrap Bundle with Popper  bootstarp 5.1.3  js link -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- js file -->

  <script src="<?php echo "assets/js/javsScript.js"; ?>" defer></script>
  </script>

</body>

</html>