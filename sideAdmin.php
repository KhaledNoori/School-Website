<section x-cloak class="sidebar" :class="open || 'inactive' ">
  <div class="d-flex align-items-center justify-content-between justify-content-lg-center">
    <img src="<?php echo "assets/images/Navbar/logo.png"; ?>"

      alt="" srcset="" height="70px" width="70px" />
    <i @click="toggle" class="d-lg-none fs-1 bi bi-x"></i>
  </div>

  <div class="mt-2">
    <ul class="list-unstyled">
      <li class="sidebar-item active">
        <a class="sidebar-link" href="#">
          <i class="me-2 bi bi-grid-fill"></i>
          <span>داشبورد</span>
        </a>
      </li>
      
      <li x-data="dropdown" class="sidebar-item">
        <div @click="toggle" class="sidebar-link">
          <i class="me-2 bi bi-journal-text"></i>

          <span>مقالات</span>
          <i class="ms-auto bi bi-chevron-down"></i>
        </div>
        <ul x-show="open" x-transition class="submenu">
          <li class="submenu-item"><a href="add_essay.php"> ثبت مقاله</a></li>
          <li class="submenu-item"><a href="list_of_essay.php">لیست مقالات </a></li>
        </ul>
      </li>

      <li x-data="dropdown" class="sidebar-item">
        <div @click="toggle" class="sidebar-link">
          <i class="me-2 bi bi-person-fill"></i>
          <span>شگردان برتر </span>
          <i class="ms-auto bi bi-chevron-down"></i>
        </div>
        <ul x-show="open" x-transition class="submenu">
          <li class="submenu-item"><a href="add_student.php">ثبت شاگرد </a></li>
          <li class="submenu-item"><a href="list_of_student.php">لیست شاگردان </a></li>
        </ul>
      </li>

      <li x-data="dropdown" class="sidebar-item">
        <div @click="toggle" class="sidebar-link">
          <i class="me-2 bi bi-file-slides"></i>
          <span>اطلاعیه ها</span>
          <i class="ms-auto bi bi-chevron-down"></i>
        </div>
        <ul x-show="open" x-transition class="submenu">
          <li class="submenu-item"><a href="add_advertise.php"> ثبت اطلاعیه جدید</a></li>
          <li class="submenu-item"><a href="list_of_advertises.php">لیست اطلاعیه ها </a></li>
        </ul>
      </li>

      <li x-data="dropdown" class="sidebar-item">
        <div @click="toggle" class="sidebar-link">
          <i class="me-2 bi bi-file-earmark-person-fill"></i>
          <span> آمار</span>
          <i class="ms-auto bi bi-chevron-down"></i>
        </div>
        <ul x-show="open" x-transition class="submenu">
          <li class="submenu-item"><a href="add_statisic.php"> ثبت آمار</a></li>
          <li class="submenu-item"><a href="list_of_statistics.php">لیست آمار </a></li>
        </ul>
      </li>

    </ul>
  </div>
</section>