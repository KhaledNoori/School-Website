<header x-data="{ navShow: false }" @scroll.window="navShow = window.scrollY > 10">
  <nav class="header navbar navbar-expand-lg navbar-light fixed-top" :class="{'header-scrolled': navShow}">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img height="50px" src="<?php echo "assets/images/Navbar/logo.png"; ?>"


          alt="png" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">


        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="index.php">صفحه اصلی</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="About.php">در باره ما</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Essay.php">مقالات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="topStudent.php">شاگردان برتر</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="news.php">اعلانات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="contactUS.php">ارتباط با ما</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="admin.php">  ادمین</a>
          </li>

        </ul>

        <!-- active the light and dark Mode -->

        <div class="mx-2">
          <i class="bi bi-brightness-high-fill fs-3" id="toggleDark"></i>
        </div>

        <!-- Google Translate api -->
        <div>
          <div id="google_element"></div>
          <script async src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
          <script>
            function loadGoogleTranslate() {
              new google.translate.TranslateElement({
                  pageLanguage: "en",
                  includedLanguages: "fa,ar,tr,ph,en",
                  layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
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