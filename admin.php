<?php
session_start();

if (!isset($_SESSION['login'])) {

  header("location:login.php?red_un_se_id=1");
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin panel</title>
  <link rel="stylesheet" href=<?php echo "assets/css/admin.css" ?> />

  <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous" />

  <!-- bootsrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- CDN FOR chart -->

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    .profile-image {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }

    .camera-icon {
      position: absolute;
      top: 70%;
      left: 60%;
      transform: translate(-50%, -50%);
      cursor: pointer;
    }
  </style>
</head>

<body>
  <section x-data="toggleSidebar">

    <?php
    require "sideAdmin.php"
    ?>
    <section class="main" :class="open || 'active'">
      <header class="header d-flex justify-content-between p-3 align-items-center">
        <div>
          <a href="#">
            <i @click="toggle" class="toggle-sidebar-icon bi bi-justify fs-3"></i>
          </a>
        </div>

        <div class="d-flex align-items-center">
          <!-- <div class="dropdown">
            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="position-absolute top-0 end-50 translate-middle badge rounded-pill bg-red">
                9
              </span>
              <i class="bi bi-envelope fs-4 text-gray-600"></i>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item fs-7" href="#">لورم ایپسوم</a></li>
              <li>
                <a class="dropdown-item fs-7" href="#">لورم ایپسوم متن</a>
              </li>
              <li>
                <a class="dropdown-item fs-7" href="#">لورم ایپسوم متن ساختگی</a>
              </li>
            </ul>
          </div>

          <div class="dropdown mx-3">
            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bell fs-4 text-gray-600"></i>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item fs-7" href="#">لورم ایپسوم</a></li>
              <li>
                <a class="dropdown-item fs-7" href="#">لورم ایپسوم متن</a>
              </li>
              <li>
                <a class="dropdown-item fs-7" href="#">لورم ایپسوم متن ساختگی</a>
              </li>
            </ul>
          </div> -->

          <div class="dropdown ms-3">
            <div class="dropdown-toggle profile d-flex align-items-center" data-bs-toggle="dropdown"
              aria-expanded="false">
              <?php
              ob_start(); // شروع بافر خروجی
              require "database_connect.php";
              $query = "SELECT image , Name FROM users";
              $query_run = mysqli_query($GLOBALS['DB'], $query);

              $check_Topstudent = mysqli_num_rows($query_run) > 0;

              if ($check_Topstudent) {
                while ($row = mysqli_fetch_assoc($query_run)) {

              ?>

                  <img id="profileImage" src="uploads/<?php echo   $row["image"] ?>" alt=""
                    class="profile-image 
                            " height="50px" width="50px" />


                  <div class="ms-3">
                    <h6 class="fs-6 fw-bold text-gray-600 mb-0"><?php echo   $row["Name"] ?> </h6>
                    <h3 class=" text-gray-600 mb-0"> ادمین</h3>
                  </div>

              <?php

                }
              } else {
                echo " no faculty found";
              }

              ob_end_flush(); // ارسال بافر خروجی
              ?>


            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


              <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"> <i
                    class="bi bi-person fs-5 me-2"></i>پروفایل</a>
              </li>

              <li>
                <a class="dropdown-item fs-7" href="#">
                  <i class="bi bi-gear fs-5 me-1"></i>
                  تمظیمات
                </a>
              </li>


              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item fs-7" href="logout.php">
                  <i class="bi bi-box-arrow-left fs-5 me-2"></i>
                  خروج </a>
              </li>
            </ul>
          </div>


          <?php
          ob_start();
          require("database_connect.php");

          $sql = "SELECT * FROM users WHERE id = 1"; // Use prepared statement later

          $modal_query = mysqli_query($GLOBALS['DB'], $sql);
          $modal = mysqli_fetch_assoc($modal_query);

          if (isset($_POST["modal"])) {

            $modal_name = $_POST["username"];
            $modal_password = $_POST["password"];
            $image = $_FILES['image']['name'];

            $targetDir = "uploads/";
            $imagePath = $targetDir . $image;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {


              // Use prepared statement to prevent SQL Injection
              $sql = "UPDATE users SET Username = '$modal_name', Password = '$modal_password', image ='$image'  WHERE id = 1";

              // Add WHERE clause
              $insert_query = mysqli_query($GLOBALS['DB'], $sql);
            }
          }
          ob_end_flush(); // ارسال بافر خروجی
          ?>


          <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="profileModalLabel">ویرایش پروفایل</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">

                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="position-relative mb-3">

                      <?php
                      require "database_connect.php";
                      $query = "SELECT image FROM users";
                      $query_run = mysqli_query($GLOBALS['DB'], $query);

                      $check_Topstudent = mysqli_num_rows($query_run) > 0;

                      if ($check_Topstudent) {
                        while ($row = mysqli_fetch_assoc($query_run)) {

                      ?>

                          <img id="profileImage" src="uploads/<?php echo   $row["image"] ?>" alt=""
                            class="profile-image img-fluid" />

                      <?php

                        }
                      } else {
                        echo " no faculty found";
                      }


                      ?>
                      <input type="file" id="fileInput" name="image" style="display: none;" accept="image/*"
                        onchange="previewImage(event)" />
                      <i class="bi bi-camera camera-icon"
                        onclick="document.getElementById('fileInput').click()"></i>
                    </div>

                    <div class="mb-3 text-start">
                      <label for="nameInput" class="form-label">یوزرنیم</label>
                      <input type="text" class="form-control text-right" id="nameInput" name="username" required
                        value="<?php echo $modal['Username']; ?>">
                    </div>

                    <div class="mb-3 text-start">
                      <label for="passwordInput" class="form-label">رمز عبور</label>
                      <input type="password" name="password" class="form-control" id="passwordInput" required
                        value="<?php echo $modal['Password']; ?>">
                    </div>



                    <button type="submit" name="modal" class="btn btn-primary">ذخیره تغییرات</button>

                    <?php if (isset($errorMessage)) {
                      echo "<p style='color:red;'>$errorMessage</p>";
                    } ?>

                  </form>



                </div>
              </div>
            </div>
          </div>

          <script>
            function previewImage(event) {
              var image = document.getElementById('profileImage');
              image.src = URL.createObjectURL(event.target.files[0]);
            }
          </script>

        </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-xl-12">
                <?php
                require "database_connect.php";
                $query = "SELECT * FROM statistics";
                $query_run = mysqli_query($GLOBALS['DB'], $query);

                $check_essay = mysqli_num_rows($query_run) > 0;

                if ($check_essay) {
                  while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
                    <div class="row g-3">
                      <div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="row align-items-center g-3">
                              <div class="col-md-4">
                                <div class="stats-icon bg-purple">
                                  <i class="bi bi-person-standing lh-0"></i>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <h6 class="fs-7 text-muted fw-bold">آموزگار</h6>
                                <h6 data-purecounter-start="0" data-purecounter-end="<?php echo  $row["teacher"] ?>"
                                  class="purecounter fw-bold mb-0">
                                  1860
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="row align-items-center g-3">
                              <div class="col-md-4">
                                <div class="stats-icon bg-blue">
                                  <i class="bi bi-people-fill lh-0"></i>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <h6 class="fs-7 text-muted fw-bold">دانش آموز</h6>
                                <h6 data-purecounter-start="0" data-purecounter-end="<?php echo  $row["student"] ?>"
                                  class="purecounter fw-bold mb-0">
                                  1860
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="row align-items-center g-3">
                              <div class="col-md-4">
                                <div class="stats-icon bg-green">
                                  <i class="bi bi-building lh-0"></i>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <h6 class="fs-7 text-muted fw-bold">
                                  صنف آموزشی
                                </h6>
                                <h6 data-purecounter-start="0" data-purecounter-end="<?php echo  $row["classes"] ?>"
                                  class="purecounter fw-bold mb-0">
                                  1860
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="row align-items-center g-3">
                              <div class="col-md-4">
                                <div class="stats-icon bg-red">
                                  <i class="bi bi-building lh-0"></i>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <h6 class="fs-7 text-muted fw-bold">
                                  نمایندگی ها
                                </h6>
                                <h6 data-purecounter-start="0" data-purecounter-end="<?php echo  $row["branch"] ?>"
                                  class="purecounter fw-bold mb-0">
                                  1860
                                </h6>
                              </div>
                            </div>
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
                <!-- charts -->





                <div class="row">
                  <div class="coll-12">
                    <div class="card">
                      <div class="card-header Header">
                        <h5 class="fw-bold mb-0"> آمار</h5>
                      </div>



                      <?php
                      // اتصال به دیتابیس


                      if ($GLOBALS['DB']->connect_error) {
                        die("Connection failed: " . $GLOBALS['DB']->connect_error);
                      }

                      // دریافت تعداد ردیف‌های هر جدول
                      $tables = array( 'statistics','advertise', 'essay', 'topstudent');
                      $table_rows = array();

                      foreach ($tables as $table) {
                        $sql = "SELECT COUNT(*) as count FROM " . $table;
                        $result = $GLOBALS['DB']->query($sql);
                        $row = $result->fetch_assoc();
                        $table_rows[$table] = $row['count'];
                      }

                      // تبدیل اطلاعات به فرمت JSON
                      $data = json_encode($table_rows);

                      $GLOBALS['DB']->close();
                      ?>


                      <div class="card-body">
                     
                        <div style="position: relative; width: 100%; height: 0; padding-top: 100%;">
                          <canvas id="myChart" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh;"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- prucounter -->

  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script>
    new PureCounter();
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- js file -->
  <script src="../assets/js/javaScript.js" defer></script>

  <!-- alpine js library -->

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <script src=<?php echo "assets/js/charts.js" ?>></script>



  <!-- for maodal -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function previewImage(event) {
      const file = event.target.files[0];
      const reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('profileImage').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  </script>



  <!-- Charts Resources -->


  <script>
    var data = <?php echo $data; ?>;
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['آمار', 'اطلاعیه ها',  'مقالات','دانش آموزان برتر'],
        datasets: [{
          label: 'تعداد',
          data: Object.values(data),
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>


  // other script
  <script>
    document.addEventListener(
      // for sidebar
      "alpine:init",
      () => {
        Alpine.data("toggleSidebar", () => ({
            open: window.innerWidth <= 992 ? false : true,

            toggle() {
              this.open = !this.open;
            },
          })),
          //for dorpdown menu
          Alpine.data("dropdown", () => ({
            open: false,

            toggle() {
              this.open = !this.open;
            },
          }));
      }
    );
  </script>
</body>

</html>