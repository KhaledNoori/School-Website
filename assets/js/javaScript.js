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
(function () {
  emailjs.init("CvmB0NV53HwoAYBdk");
})();

document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // جلوگیری از ارسال پیش‌فرض فرم

    emailjs.sendForm("service_jtz4spm", "template_ja14zpg", this).then(
      function () {
        // نمایش پیام موفقیت با SweetAlert
        Swal.fire({
          title: "پیام با موفقیت ارسال شد!",
          text: "ایمیل شما با موفقیت ارسال گردید.",
          icon: "success",
          confirmButtonText: "باشه",
        });
      },
      function (error) {
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


  // js for news slider

  let currentSlide = 0;
  const items = document.querySelectorAll('.carousel-item');
  
  function showSlide(index) {
      items.forEach((item, i) => {
          item.classList.remove('active');
          if (i === index) {
              item.classList.add('active');
          }
      });
  }
  
  function nextSlide() {
      currentSlide = (currentSlide + 1) % items.length;
      showSlide(currentSlide);
  }
  
  function prevSlide() {
      currentSlide = (currentSlide - 1 + items.length) % items.length;
      showSlide(currentSlide);
  }
  
  // نمایش اولین اسلاید
  showSlide(currentSlide);
  