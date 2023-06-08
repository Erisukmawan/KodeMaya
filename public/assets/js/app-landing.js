"use strict";
// import * as te from 'tw-elements';
(function ($) {
  var currentPageUrl = window.location.href;
  var currentLink = currentPageUrl.split("/");
  var Href = currentLink[currentLink.length - 1];
  $('a[href="' + Href + '"]').addClass("active");
  var ParentUl = $("a.active").parent().parent();
  $(ParentUl).addClass("menu-open");
  var ParentClass = $("a.active").parent().parent().parent();
  $(ParentClass).addClass("active");
  function screenWidth() {
    if ($(window).width() < 1281) {
      $(".sidebar-wrapper").addClass("menu-hide");
      $("#menuCollapse").hide();
      $(".app-header").addClass("margin-0");
      $(".site-footer ").addClass("margin-0");
      $("#content_wrapper").addClass("margin-0");
      $(".sidebarCloseIcon").show();
      $("#sidebar_type").hide();
    } else {
      $(".sidebarCloseIcon").hide();
      $("#sidebar_type").show();
      // $("#bodyOverlay").removeClass("block");
      $(".app-wrapper").addClass("horizontalMenu");

      // $(".sidebar-wrapper").addClass("menu-hide");
      $("#menuCollapse").hide();
      $(".app-header").addClass("margin-0");
      $(".site-footer").addClass("margin-0");
      $("#content_wrapper").addClass("margin-0");
    }
  }
  screenWidth();
  $(window).resize(function () {
    screenWidth();
  });

// Button back to top
// Get the button
// Get the button
var mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 1 ||
        document.documentElement.scrollTop > 1
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

  /*===================================
   Dark and light theme change
  =====================================*/
  var themes = [{
    name: "dark",
    "class": "dark",
    checked: false
  },  {
    name: "light",
    "class": "light",
    checked: false
  }];

  // Loop through themes and add event listener for changes
  themes.forEach(function (theme) {
    var radioBtn = $("#".concat(theme["class"]));
    radioBtn.prop("checked", theme.name === currentTheme);
    radioBtn.on("change", function () {
      if (this.checked) {
        currentTheme = theme.name;
        localStorage.theme = theme.name;
        location.reload();
      }
    });
  });

  // Theme Change by Header Button
  $("#themeMood").on("click", function () {
    if (currentTheme === "light") {
      currentTheme = "dark";
    } else {
      currentTheme = "light";
    }
    localStorage.theme = currentTheme;
    location.reload();
  });

  /*===================================
   Layout Changer
  =====================================*/
  // Sidebar Type Local Storage save
  if (localStorage.sideBarType == "extend") {
    $(".app-wrapper").addClass(localStorage.sideBarType);
  } else if (localStorage.sideBarType == "collapsed") {
    $(".app-wrapper").removeClass("extend").addClass("collapsed");
    $("#menuCollapse input[type=checkbox]").prop("checked", true);
  }
  // Header Area Toggle switch
  $("#sidebar_type").on("click", function () {
    if ($(".app-wrapper").hasClass("collapsed")) {
      $(".app-wrapper").removeClass("collapsed").addClass("extend");
      $("#menuCollapse input[type=checkbox]").prop("checked", false);
      localStorage.sideBarType = "extend";
    } else {
      $(".app-wrapper").removeClass("extend").addClass("collapsed");
      $("#menuCollapse input[type=checkbox]").prop("checked", true);
      localStorage.sideBarType = "collapsed";
    }
  });

  // Settings Area Toggle Switch
  $("#menuCollapse input[type=checkbox]").on("click", function () {
    if ($("#menuCollapse input[type=checkbox]").is(":checked")) {
      $(".app-wrapper").removeClass("extend").addClass("collapsed");
      localStorage.sideBarType = "collapsed";
    } else {
      $(".app-wrapper").removeClass("collapsed").addClass("extend");
      localStorage.sideBarType = "extend";
    }
  });

  // Menu Hide and show toggle
  $("#menuHide input[type=checkbox]").on("click", function () {
    if ($("#menuHide input[type=checkbox]").is(":checked")) {
      $(".sidebar-wrapper").addClass("menu-hide");
      $("#menuCollapse").hide();
      $(".app-header").addClass("margin-0");
      $(".site-footer").addClass("margin-0");
      $("#content_wrapper").addClass("margin-0");
      $("#footer").addClass(localStorage.footer);
    } else {
      $(".sidebar-wrapper").removeClass("menu-hide");
      $("#menuCollapse").show();
      $(".app-header").removeClass("margin-0");
      $(".site-footer").removeClass("margin-0");
      $("#content_wrapper").removeClass("margin-0");
    }
  });

  // Content layout toggle
  if (localStorage.contentLayout == "container") {
    $("#page_layout").addClass(localStorage.contentLayout);
    $("#boxed").prop("checked", true);
  } else {
    $("#page_layout").addClass("container-fluid");
    $("#fullWidth").prop("checked", true);
  }

  // Content layout Changing options
  $("#fullWidth").on("change", function () {
    $("#page_layout").removeClass("container").addClass("container-fluid");
    localStorage.contentLayout = "container-fluid";
  });
  $("#boxed").on("change", function () {
    $("#page_layout").removeClass("container-fluid").addClass("container");
    localStorage.contentLayout = "container";
  });

  // Header Area styles

  // Check local storage and set Header Style
  if (localStorage.navbar == "floating") {
    $("#app_header").addClass(localStorage.navbar);
    $("#nav_" + localStorage.navbar).prop("checked", true);
  } else if (localStorage.navbar == "sticky top-0") {
    $("#app_header").addClass(localStorage.navbar);
    $("#nav_sticky").prop("checked", true);
  } else if (localStorage.navbar == "hidden") {
    $("#app_header").addClass(localStorage.navbar);
    $("#nav_" + localStorage.navbar).prop("checked", true);
  } else {
    $("#app_header").addClass("static");
    $("#nav_static").prop("checked", true);
  }
  // Header Changing options
  $("#nav_floating").on("change", function () {
    $("#app_header").removeClass("sticky top-0").removeClass("hidden").removeClass("static").addClass("floating");
    localStorage.navbar = "floating";
  });
  $("#nav_sticky").on("change", function () {
    $("#app_header").removeClass("floating").removeClass("hidden").removeClass("static").addClass("sticky top-0");
    localStorage.navbar = "sticky top-0";
  });
  $("#nav_static").on("change", function () {
    $("#app_header").removeClass("floating").removeClass("hidden").removeClass("sticky top-0").addClass("static");
    localStorage.navbar = "static";
  });
  $("#nav_hidden").on("change", function () {
    $("#app_header").removeClass("floating").removeClass("static").removeClass("sticky top-0").addClass("hidden");
    localStorage.navbar = "hidden";
  });




  /* =============================
  Small Device Buttons function
  ===============================*/
  $(".smallDeviceMenuController").on("click", function () {
    $(".sidebar-wrapper").toggleClass("menu-hide");
    // $("#bodyOverlay").removeClass("hidden");
    $("body").addClass("overflow-hidden");
  });
  $(".sidebarCloseIcon, #bodyOverlay").on("click", function () {
    $(".sidebar-wrapper").toggleClass("menu-hide");
    $("#bodyOverlay").addClass("hidden");
    $("body").removeClass("overflow-hidden");
  });


  // Getting the Current Year
  $("#thisYear").text(new Date().getFullYear());

  // Progress bar
  $(".progress-bar").animate({
    width: "40%"
  }, 2500);
  $(".progress-bar2").animate({
    width: "50%"
  }, 2500);
  $(".progress-bar3").animate({
    width: "60%"
  }, 2500);
  $(".progress-bar4").animate({
    width: "75%"
  }, 2500);
  $(".progress-bar5").animate({
    width: "95%"
  }, 2500);
  $(".progress-bar6").animate({
    width: "25%"
  }, 2500);

  /*===================================
   Plugin initialization
  =====================================*/
  // Sidebar Menu
  $.sidebarMenu($(".sidebar-menu"));

  // Simple Bar
  new SimpleBar($("#sidebar_menus, #scrollModal")[0]);

  // Basic Carousel
  $(".basic-carousel").owlCarousel({
    loop: true,
    nav: true,
    items: 1,
    lazyLoad: true,
    navText: ['<iconify-icon icon="ic:round-arrow-back-ios"></iconify-icon>', '<iconify-icon icon="ic:round-arrow-forward-ios"></iconify-icon>']
  });

  // Carousel Interval
  $(".carousel-interval").owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    lazyLoad: true,
    loop: true,
    nav: true,
    items: 1,
    navText: ['<iconify-icon icon="ic:round-arrow-back-ios"></iconify-icon>', '<iconify-icon icon="ic:round-arrow-forward-ios"></iconify-icon>']
  });

  //Carousel Crossfade
  // $(".carousel-crossfade").owlCarousel({
  //   autoplay: true,
  //   autoplayTimeout: 3000,
  //   autoplayHoverPause: true,
  //   lazyLoad: true,
  //   loop: true,
  //   nav: true,
  //   items: 1,
  //   animateIn: "fadeIn",
  //   animateOut: "fadeOut",
  //   navText: ['<iconify-icon icon="ic:round-arrow-back-ios"></iconify-icon>', '<iconify-icon icon="ic:round-arrow-forward-ios"></iconify-icon>']
  // });

  // Video Player
  var player = new Plyr("#player", {
    controls: ["play-large", "current-time", "progress", "mute", "volume", "pip", "fullscreen", "settings"]
  });

  // Tooltip and Popover
  tippy(".onTop", {
    content: "Tooltip On Top!",
    placement: "top"
  });
  tippy(".onRight", {
    content: "Tooltip On Right!",
    placement: "right"
  });
  tippy(".onBottom", {
    content: "Tooltip On Bottom!",
    placement: "bottom"
  });
  tippy(".onLeft", {
    content: "Tooltip On Left!",
    placement: "left"
  });

  // ToolTip Animations
  tippy(".scale", {
    placement: "top",
    animation: "scale"
  });
  tippy(".shift-Away", {
    placement: "top",
    animation: "shift-away"
  });
  tippy(".shift-Toward", {
    placement: "top",
    animation: "shift-toward"
  });
  tippy(".perspective", {
    placement: "top",
    animation: "perspective"
  });
  tippy(".onClickTooltip", {
    placement: "top",
    animation: "shift-away",
    trigger: "click"
  });
})(jQuery);