(function ($) {
  /**
   * Mobile nav toggle
   */
  $(document).on("click", ".mobile-nav-toggle", function (e) {
    alert();
    $("#navbar").toggleClass("navbar-mobile");
    this.toggleClass("bi-list");
    this.toggleClass("bi-x");
  });

  /**
   * Mobile nav dropdowns activate
   */
  $(document).on("click", ".navbar .dropdown > a", function (e) {
    if ($("#navbar").hasClass("navbar-mobile")) {
      // alert();
      e.preventDefault();
      $(this).next().toggleClass("dropdown-active");
    }
  });

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  $(document).on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = $("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.toggleClass("bi-list");
          navbarToggle.toggleClass("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );
});
