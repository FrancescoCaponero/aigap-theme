jQuery( document ).ready(function($) {
    const hamburger = $("#hamburger");
    const mobileMenu = $(".menu-menu-1-container");
    const hamToggleOpen = $(".ham #open");
    const hamToggleClose = $(".ham #close");

    // Initially, set the close icon to be hidden
    hamToggleClose.hide();

    // Toggle the mobile menu when the hamburger icon is clicked
    hamburger.on("click", function() {
        mobileMenu.toggleClass("active");
        hamToggleOpen.toggle();
        hamToggleClose.toggle();
    });

    $(".primary-menu a").on("click", function() {
        mobileMenu.removeClass("active");
        hamToggleOpen.show();
        hamToggleClose.hide();
    });

     // Find the <frame> element by its ID or any other suitable selector
     const frameElement = $(".wp-embedded-content");

     // Remove the inline style attribute
     frameElement.removeAttr("style");

      // Set the scrolling attribute to "yes"
    frameElement.attr("scrolling", "yes");

});