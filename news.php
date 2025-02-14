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
  <link rel="stylesheet" href="./assets/css/news.css" />

  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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



  <section class="section">
    
  <div id="carouselExample" class="carousel slide custom-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
        require "database_connect.php";
        $query = "SELECT * FROM advertise";
        $query_run = mysqli_query($GLOBALS['DB'],$query);
      
        $check_advertise = mysqli_num_rows($query_run) > 0;

    if($check_advertise){
      $index = 0;
      while($row = mysqli_fetch_assoc($query_run)){
        $active_class = ($index == 0) ? 'active' : '';
    ?>
    <div class="carousel-item <?php echo $active_class; ?>">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="uploads/<?php echo $row["image"]; ?>" class="img-fluid rounded-start" style="width: 100%; height: auto;" alt="تبیکم">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title title"><?php echo $row['title']; ?></h5>
              <p class="card-text"><?php echo $row['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        $index++;
      }
    ?>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>
</div>
<?php
    } else {
      echo "No faculty found";
    }
    ?>

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

  <!-- <!-- Option 1: Bootstrap Bundle with Popper  bootstarp 5.1.3  js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- js file -->
  <script src="<?php echo "assets/js/javsScript.js"; ?>" defer></script>

</body>

</html>