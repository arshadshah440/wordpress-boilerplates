function slickslideroptcl(selector) {
  jQuery(selector).slick({
    arrows: false,
    dots: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    vertical: true,
    verticalSwiping: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".slick-prev-btn").click(function () {
    $(selector).slick("slickPrev");
  });

  $(".slick-next-btn").click(function () {
    $(selector).slick("slickNext");
  });
  $(".slick-prev-btn").addClass("slick-disabled");
  $(selector).on("afterChange", function () {
    if ($(".slick-prev").hasClass("slick-disabled")) {
      $(".slick-prev-btn").addClass("slick-disabled");
    } else {
      $(".slick-prev-btn").removeClass("slick-disabled");
    }
    if ($(".slick-next").hasClass("slick-disabled")) {
      $(".slick-next-btn").addClass("slick-disabled");
    } else {
      $(".slick-next-btn").removeClass("slick-disabled");
    }
  });
}

//   for example
slickslideroptcl("#teardropThumbsmobile");
