window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".sticky-navbar");
  if (window.scrollY > 300) {
    navbar.classList.add("navbar-visible");
    navbar.classList.remove("navbar-hidden");
    navbar.classList.add("fixed-top");
  } else {
    navbar.classList.remove("navbar-visible");
    navbar.classList.add("navbar-hidden");
    navbar.classList.remove("fixed-top");
  }
});

// Blog Swiper
const swiper = new Swiper("#blogSwiper.mySwiper", {
  autoplay: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

// copyright year
document.getElementById("currentYear").textContent = new Date().getFullYear();
