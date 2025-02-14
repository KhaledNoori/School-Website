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

<<<<<<< HEAD:index.php
  <link rel="stylesheet" href=<?php echo "assets/css/index.css" ?> />
=======


>>>>>>> 7331c1a59faf712d20383e706f2c77000f251e02:index.html
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- pruecounter library for counting the number -->
  <script src="https://cdn.jsdelivr.net/npm/pruecounter/dist/pruecounter.min.js"></script>
  <!-- alpine js  for navbar hide and show -->

 <script
 defer
 src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"
></script>
  <!-- for showing better message -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- for sending email -->

 
  <title>Royia Sabaz School</title>

  <!-- for swiper js css -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  

</head>

<body>
<<<<<<< HEAD:index.php
  <!-- this is Navbar -->
  <?php
  require "navbar.php"
  ?>
=======
   <!-- this is Navbar -->
   <header
   x-data="{ navShow: false }"
   @scroll.window="navShow = window.scrollY > 50"
 >
   <nav
     class="header navbar navbar-expand-lg navbar-light fixed-top"
     :class="{'header-scrolled': navShow}"
   >
     <div class="container-fluid">
       <a class="navbar-brand" href="#"
         ><img
           height="50px"
           src="../assets/images/Navbar/photo_2024-09-11_09-11-16.png"
           alt="png"
       /></a>
       <button
         class="navbar-toggler"
         type="button"
         data-bs-toggle="collapse"
         data-bs-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent"
         aria-expanded="false"
         aria-label="Toggle navigation"
       >
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="index.html"
               >صفحه اصلی</a
             >
           </li>
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="About.html"
               >در باره ما</a
             >
           </li>
           <li class="nav-item">
             <a class="nav-link  aria-current="page" href="Essay.html"
               >مقالات</a
             >
           </li>
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="topStudent.html"
               >شاگردان برتر</a
             >
           </li>
           <li class="nav-item">
             <a class="nav-link " aria-current="page" href="news.html"
               >اعلانات</a
             >
           </li>
           <li class="nav-item">
             <a class="nav-link active " aria-current="page" href="contactUS.html"
               >ارتباط با ما</a
             >
           </li>
         </ul>

         <!-- active the light and dark Mode -->

         <div class="mx-2">
           <i class="bi bi-brightness-high-fill fs-3" id="toggleDark"></i>
         </div>

         <!-- Google Translate api -->
         <div>
           <div id="google_element"></div>
           <script
             async
             src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"
           ></script>
           <script>
             function loadGoogleTranslate() {
               new google.translate.TranslateElement(
                 {
                   pageLanguage: "en",
                   includedLanguages: "en,fa,ar,fr,tr,ph",
                   layout:
                     google.translate.TranslateElement.InlineLayout.SIMPLE,
                 },
                 "google_element"
               );
             }
           </script>
         </div>
       </div>
     </div>
   </nav>
 </header>
>>>>>>> 7331c1a59faf712d20383e706f2c77000f251e02:index.html

  <!-- slider -->

  <section class="hero">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner m-0">
        <div class="carousel-item active">
          <img src="<?php echo "assets/images/slider/funny-children-classroom_839035-411570.jpg "; ?>" class="img-slide d-block w-100 mb-0"
            alt="..." />
          <div class="carousel-caption d-block text-center m-0">
<<<<<<< HEAD:index.php
            <img src="<?php echo "assets/images/Navbar/logo.png"; ?> " alt="image" class="img-fluid custom-img ">
            <h5 class=" h5-responsive">Second slide label</h5>
=======
            <img src="../assets/images/slider/funny-children-classroom_839035-411570.jpg " alt="image" class="img-fluid custom-img "">
              <h5 class=" h5-responsive">Second slide label</h5>
>>>>>>> 7331c1a59faf712d20383e706f2c77000f251e02:index.html
            <p class="p-responsive">
              Some representative placeholder content for the second slide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo "assets/images/slider/R.jpg"; ?>" class="img-slide d-block w-100" alt="..." />
          <div class="carousel-caption d-md-block">
            <h5 class="h5-responsive">Second slide label</h5>
            <p class="p-responsive">
              Some representative placeholder content for the second slide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo "assets/images/slider/second.jpg"; ?>" class="img-slide d-block w-100" alt="..." />
          <div class="carousel-caption d-md-block">
            <h5 class="h5-responsive">Third slide label</h5>
            <p class="p-responsive">
              Some representative placeholder content for the third slide.
            </p>
          </div>
        </div>

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Footr -->

  <section class="section Footer pt-4">
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
          <div class="di">
            <a class="link1 text-center" href="#"> خانه </a>
          </div>
          <div class="di">
            <a class="link1" href="About.html"> در باره ما </a>
          </div>
          <div class="di">
            <a class="link1" href="Essay.html"> مقالات </a>
          </div>
          <div class="di">
            <a class="link1" href="topStudent.html"> شاگردان برتر </a>
          </div>
          <div class="di">
            <a class="link1" href="contacttUs.html"> ارتباط با ما </a>
          </div>
        </div>
        <div class="col-md-4 text-center mb-5">
          <h6 class="purecolor">لینک های ارتباطی</h6>
          <hr />
          <div>
            <p class="mb-1">آدرس : افغانستان هرات پل رنگینه</p>
          </div>
          <div>
            <p class="mb-1">+93 794 5345 434</p>
          </div>
          <div>
            <p class="mb-1">+93 794 3445 434</p>
          </div>
          <div>
            <p class="mb-1">RoyaiSabaz@gmail.com</p>
          </div>
          <div>
            <p class="mb-1">ID-Telegram: RoyaiSabaz@1212</p>
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

  <!-- for carousel 
        -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <!-- CDN purecounter library -->

  <!-- Option 1: Bootstrap Bundle with Popper  bootstarp 5.1.3  js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- for swiper js script   -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- js file -->
  <script src="<?php echo "assets/js/javsScript.js"; ?>" defer></script>
</body>

</html>