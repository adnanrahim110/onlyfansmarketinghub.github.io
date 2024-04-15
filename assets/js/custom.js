// STICKY NAVBAR
const header = document.getElementById('bottomNav');

window.addEventListener('scroll', () => {
  if (window.scrollY > 460) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});

const social = document.getElementById('social');

window.addEventListener('scroll', () => {
  if (window.scrollY > 460) {
    social.classList.add('social-s');
  } else {
    social.classList.remove('social-s');
  }
});


$(document).ready(function () {
  $("#testimonial-slider").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    pagination: false,
    navigation: true,
    navigationText: ["", ""],
    autoPlay: true
  });
});

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 10;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);