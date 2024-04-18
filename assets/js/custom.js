



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

(function ($) {
  "use strict";
  /*==================================================================
  [ Validate ]*/
  var name = $('.validate-input input[name="name"]');
  var email = $('.validate-input input[name="email"]');
  var phone = $('.validate-input input[name="phone"]');
  var subject = $('.validate-input input[name="subject"]');
  var message = $('.validate-input textarea[name="message"]');


  $('.validate-form').on('submit',function(){
      var check = true;

      if($(name).val().trim() == ''){
          showValidate(name);
          check=false;
      }

      if($(subject).val().trim() == ''){
          showValidate(subject);
          check=false;
      }


      if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
          showValidate(email);
          check=false;
      }

      if($(phone).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
          showValidate(phone);
          check=false;
      }

      if($(message).val().trim() == ''){
          showValidate(message);
          check=false;
      }

      return check;
  });


  $('.validate-form .input1').each(function(){
      $(this).focus(function(){
         hideValidate(this);
     });
  });

  function showValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).addClass('alert-validate');
  }

  function hideValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).removeClass('alert-validate');
  }



})(jQuery);


//faq toggle stuff 
$('.togglefaq').click(function(e) {
  e.preventDefault();
  var notthis = $('.active').not(this);
  notthis.find('.icon-minus').addClass('icon-plus').removeClass('icon-minus');
  notthis.toggleClass('active').next('.faqanswer').slideToggle(300);
   $(this).toggleClass('active').next().slideToggle("fast");
  $(this).children('i').toggleClass('icon-plus icon-minus');
  });