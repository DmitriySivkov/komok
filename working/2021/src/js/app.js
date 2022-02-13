import "@fancyapps/fancybox";
import "./foundation.js";
import "./fontAwesome.js";
import "./chooseCity.js";
import "./carousels.js";
import "./handleInputNumber.js";
import "./stickyFooter.js";
import "./replaceImgSvg.js";
import "./lazyLoadVideo.js";
import "./custom-select";
import "./mask";
import "./slick";

import "../scss/style.scss";
(function ($) {
  "use strict";
  $(function () {
    /* Fixed Header */
    let nav = $("#nav");
    let navToggle = $("#navToggle");

    /* Nav Toggle */
    navToggle.on("click", function(event) {
      event.preventDefault();

      nav.toggleClass("show");
    });

  // Mask for phone
    $("#phone").mask("+7 (999) 999-99-99");
  });
  // Slider team
  $('#counselors').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    autoplaySpeed: 2000,

    dots: true,
    nextArrow: "<svg class='counselors__next' width=\"138\" height=\"138\" viewBox=\"0 0 138 138\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
      "<g filter=\"url(#filter0_d_95_60)\">\n" +
      "<circle cx=\"69\" cy=\"36\" r=\"35\" fill=\"#8B57A3\"/>\n" +
      "</g>\n" +
      "<path d=\"M82 37.1C82.1 36.9 82.1 36.9 82.2 36.8V36.7C82.2 36.6 82.3 36.5 82.3 36.4C82.3 36.3 82.3 36.1 82.3 36C82.3 35.9 82.3 35.7 82.3 35.6C82.3 35.5 82.3 35.4 82.2 35.3V35.2C82.1 35.2 82 35.1 82 35C82 35 82 35 82 34.9C81.9 34.8 81.8 34.7 81.8 34.6L74.8 27.6C74 26.8 72.8 26.8 72 27.6C71.2 28.4 71.2 29.6 72 30.4L75.6 34.1H58C56.9 34.1 56 35 56 36.1C56 37.2 56.9 38.1 58 38.1H75.6L72 41.6C71.2 42.4 71.2 43.6 72 44.4C72.4 44.8 72.9 45 73.4 45C73.9 45 74.4 44.8 74.8 44.4L81.8 37.4C81.8 37.3 81.9 37.2 82 37.1Z\" fill=\"white\"/>\n" +
      "<defs>\n" +
      "<filter id=\"filter0_d_95_60\" x=\"0\" y=\"0\" width=\"138\" height=\"138\" filterUnits=\"userSpaceOnUse\" color-interpolation-filters=\"sRGB\">\n" +
      "<feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\"/>\n" +
      "<feColorMatrix in=\"SourceAlpha\" type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0\" result=\"hardAlpha\"/>\n" +
      "<feOffset dy=\"33\"/>\n" +
      "<feGaussianBlur stdDeviation=\"17\"/>\n" +
      "<feComposite in2=\"hardAlpha\" operator=\"out\"/>\n" +
      "<feColorMatrix type=\"matrix\" values=\"0 0 0 0 0.545098 0 0 0 0 0.341176 0 0 0 0 0.639216 0 0 0 0.25 0\"/>\n" +
      "<feBlend mode=\"normal\" in2=\"BackgroundImageFix\" result=\"effect1_dropShadow_95_60\"/>\n" +
      "<feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_dropShadow_95_60\" result=\"shape\"/>\n" +
      "</filter>\n" +
      "</defs>\n" +
      "</svg>\n",
    prevArrow: "",
    responsive: [
      {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ],

  });

  $('#workers').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    autoplaySpeed: 2000,

    dots: true,
    nextArrow: "<svg class='counselors__next' width=\"138\" height=\"138\" viewBox=\"0 0 138 138\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
      "<g filter=\"url(#filter0_d_98_116)\">\n" +
      "<circle cx=\"69\" cy=\"36\" r=\"35\" fill=\"white\"/>\n" +
      "</g>\n" +
      "<path d=\"M82 37.1C82.1 36.9 82.1 36.9 82.2 36.8V36.7C82.2 36.6 82.3 36.5 82.3 36.4C82.3 36.3 82.3 36.1 82.3 36C82.3 35.9 82.3 35.7 82.3 35.6C82.3 35.5 82.3 35.4 82.2 35.3V35.2C82.1 35.2 82 35.1 82 35C82 35 82 35 82 34.9C81.9 34.8 81.8 34.7 81.8 34.6L74.8 27.6C74 26.8 72.8 26.8 72 27.6C71.2 28.4 71.2 29.6 72 30.4L75.6 34.1H58C56.9 34.1 56 35 56 36.1C56 37.2 56.9 38.1 58 38.1H75.6L72 41.6C71.2 42.4 71.2 43.6 72 44.4C72.4 44.8 72.9 45 73.4 45C73.9 45 74.4 44.8 74.8 44.4L81.8 37.4C81.8 37.3 81.9 37.2 82 37.1Z\" fill=\"#8B57A3\"/>\n" +
      "<defs>\n" +
      "<filter id=\"filter0_d_98_116\" x=\"0\" y=\"0\" width=\"138\" height=\"138\" filterUnits=\"userSpaceOnUse\" color-interpolation-filters=\"sRGB\">\n" +
      "<feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\"/>\n" +
      "<feColorMatrix in=\"SourceAlpha\" type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0\" result=\"hardAlpha\"/>\n" +
      "<feOffset dy=\"33\"/>\n" +
      "<feGaussianBlur stdDeviation=\"17\"/>\n" +
      "<feComposite in2=\"hardAlpha\" operator=\"out\"/>\n" +
      "<feColorMatrix type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0\"/>\n" +
      "<feBlend mode=\"normal\" in2=\"BackgroundImageFix\" result=\"effect1_dropShadow_98_116\"/>\n" +
      "<feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_dropShadow_98_116\" result=\"shape\"/>\n" +
      "</filter>\n" +
      "</defs>\n" +
      "</svg>\n",
    prevArrow: "",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ],

  });
})(jQuery);
