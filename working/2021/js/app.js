import "@fancyapps/fancybox";
import "./foundation.js";
import "./fontAwesome.js";
import "./chooseCity.js";
import "./carousels.js";
import "./handleInputNumber.js";
import "./stickyFooter.js";
import "./replaceImgSvg.js";
import "./lazyLoadVideo.js";

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


  });
})(jQuery);
