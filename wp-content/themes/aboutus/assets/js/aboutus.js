/**
 * Handle frontend.
 *
 * @package 4clone
 */
"use strict";
(function ($) {
  const aboutUs = {
    start: function () {
      this.initSlider();
      this.onScrollWindow();
    },
    onScrollWindow: function () {
      const self = this;
      let isTop = 0 == $(window).scrollTop();
      if (!isTop) {
        self.stickyMenu();
      }
      let lastScroll = window.scrollY + window.innerHeight;
      $(window).on("scroll", function () {
        let currentScroll = window.scrollY + window.innerHeight;
        const isScrollDown = currentScroll > lastScroll;
        if (isScrollDown) {
          self.stickyMenu();
          console.log("You are scrolling down...");
        }

        isTop = 0 == $(window).scrollTop();
        if (isTop) {
          self.unStickyMenu();
          console.log("You are at the top.");
        }

        lastScroll = currentScroll;
      });
    },
    initSlider: function () {
      $(".leadership-list").slick({
        prevArrow: $(".customPrev"),
        nextArrow: $(".customNext"),
      });
    },
    stickyMenu: function () {
      const isNotSticky = !$(".aboutus-site-header").hasClass("menu-sticky");
      if (isNotSticky) {
        $(".aboutus-site-header").addClass("menu-sticky");
      }
    },
    unStickyMenu: function () {
      const isSticky = $(".aboutus-site-header").hasClass("menu-sticky");
      if (isSticky) {
        $(".aboutus-site-header").removeClass("menu-sticky");
      }
    },
  };
  aboutUs.start();
})(jQuery);
