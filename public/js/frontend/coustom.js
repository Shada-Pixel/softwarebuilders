$(document).ready(function () {
  $("#flip").click(function () {
    $("#panel").slideToggle("slow");
  });
});

// ==============Nav-menu============
var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
// ===============Hero-slider=============

// =============Course-item==============
var swiper = new Swiper(".courseItemSwiper", {
  slidesPerView: 1,
  spaceBetween: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    "@0.00": {
      slidesPerView: 2,
      spaceBetween: 20,
    },

    "@0.50": {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 5,
      spaceBetween: 20,
    },
  },
});
// ================Course-card===============
var swiper = new Swiper(".courseSwiper", {
  slidesPerView: 1,
  spaceBetween: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    "@0.50": {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
// ===============Modal===========
(function ($) {
  "use strict";
  $(document).ready(function () {
    $(".modal-link").on("click", function () {
      $("body").addClass("modal-open");
    });
    $(".close-modal").on("click", function () {
      $("body").removeClass("modal-open");
    });
  });
})(jQuery);
// ===============Test-swiper==========
var swiper = new Swiper(".testSwiper", {
  slidesPerView: 1,
  spaceBetween: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    "@0.25": {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    "@0.50": {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

// ==================Tamslider=============
var swiper = new Swiper(".teamSwiper", {
  slidesPerView: 1,
  spaceBetween: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    "@0.50": {
      slidesPerView: 2,
      spaceBetween: 12,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 12,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});

// =================loadmore===========
$(function () {
  $(".service_box").slice(0, 8).show();
  $("body").on("click touchstart", ".load-more", function (e) {
    e.preventDefault();
    $(".service_box:hidden").slice(0, 4).slideDown();
    if ($(".service_box:hidden").length == 0) {
      $(".load-more").css("visibility", "hidden");
    }
  });
});

// ====================Gallery tab==============
$(".tabs-nav li:first-child").addClass("active");
$(".tab-content").hide();
$(".tab-content:first").show();

// Click function
$(".tabs-nav li").click(function () {
  $(".tabs-nav li").removeClass("active");
  $(this).addClass("active");
  $(".tab-content").hide();

  var activeTab = $(this).find("a").attr("href");
  $(activeTab).fadeIn();
  return false;
});

// ================Accordion============

/* jQuery
================================================== */
$(function () {
  $(".acc__title").click(function (j) {
    var dropDown = $(this).closest(".acc__card").find(".acc__panel");
    $(this).closest(".acc").find(".acc__panel").not(dropDown).slideUp();

    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    } else {
      $(this).closest(".acc").find(".acc__title.active").removeClass("active");
      $(this).addClass("active");
    }

    dropDown.stop(false, true).slideToggle();
    j.preventDefault();
  });
});

// =====================
