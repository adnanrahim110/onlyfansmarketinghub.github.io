var slideCount = document.querySelectorAll(".slider .slide-item").length;
var slideWidth = document.querySelectorAll(".slider-outer")[0].offsetWidth;
var slideHeight = document.querySelectorAll(".slider-outer")[0].offsetHeight;

var sliderUlWidth = slideCount * slideWidth;
document.querySelectorAll(".slider")[0].style.cssText =
  "width:" + sliderUlWidth + "px";

for (var i = 0; i < slideCount; i++) {
  document.querySelectorAll(".slide-item")[i].style.cssText =
    "width:" + slideWidth + "px;height:" + slideHeight + "px";
}

setInterval(function () {
  moveRight();
}, 3500);
var counter = 1;

function moveRight() {
  var slideNum = counter++;
  if (slideNum < slideCount) {
    var transformSize = slideWidth * slideNum;
    document.querySelectorAll(".slider")[0].style.cssText =
      "width:" +
      sliderUlWidth +
      "px; -webkit-transition:all 800ms ease; -webkit-transform:translate3d(-" +
      transformSize +
      "px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(-" +
      transformSize +
      "px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(-" +
      transformSize +
      "px, 0px, 0px);transition:all 800ms ease; transform:translate3d(-" +
      transformSize +
      "px, 0px, 0px)";
  } else {
    counter = 1;
    document.querySelectorAll(".slider")[0].style.cssText =
      "width:" +
      sliderUlWidth +
      "px;-webkit-transition:all 800ms ease; -webkit-transform:translate3d(0px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(0px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(0px, 0px, 0px);transition:all 800ms ease; transform:translate3d(0px, 0px, 0px)";
  }
}

$(document).ready(function () {
  $("#testimonial-slider").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    pagination: false,
    navigation: true,
    navigationText: ["", ""],
    autoPlay: true,
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

(function ($) {
  "use strict";
  /*==================================================================
  [ Validate ]*/
  var name = $('.validate-input input[name="name"]');
  var email = $('.validate-input input[name="email"]');
  var phone = $('.validate-input input[name="phone"]');
  var subject = $('.validate-input input[name="subject"]');
  var message = $('.validate-input textarea[name="message"]');

  $(".validate-form").on("submit", function () {
    var check = true;

    if ($(name).val().trim() == "") {
      showValidate(name);
      check = false;
    }

    if (
      $(email)
        .val()
        .trim()
        .match(
          /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
        ) == null
    ) {
      showValidate(email);
      check = false;
    }

    if ($(phone).val().trim() == "") {
      showValidate(phone);
      check = false;
    }

    if ($(subject).val().trim() == "") {
      showValidate(subject);
      check = false;
    }

    if ($(message).val().trim() == "") {
      showValidate(message);
      check = false;
    }

    return check;
  });

  $(".validate-form .input1").each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass("alert-validate");
  }
})(jQuery);

$(function () {
  "use strict";

  $(".js-menu-toggle").click(function (e) {
    var $this = $(this);

    if ($("body").hasClass("show-sidebar")) {
      $("body").removeClass("show-sidebar");
      $this.removeClass("active");
    } else {
      $("body").addClass("show-sidebar");
      $this.addClass("active");
    }

    e.preventDefault();
  });

  // click outisde offcanvas
  $(document).mouseup(function (e) {
    var container = $(".sidebar");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($("body").hasClass("show-sidebar")) {
        $("body").removeClass("show-sidebar");
        $("body").find(".js-menu-toggle").removeClass("active");
      }
    }
  });
});
