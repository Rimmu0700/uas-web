const navbar = document.querySelector(".header .navbar");
window.addEventListener("scroll", function () {
  // cek scrol posisi
  if (this.window.scrollY > 100) {
    navbar.classList.add("scrol");
  } else {
    navbar.classList.remove("scrol");
  }
});