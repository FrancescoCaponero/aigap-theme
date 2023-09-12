$( document ).ready(function() {
    const hamburger = $("#hamburger");
    const mobileMenu = $(".primary-menu");
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
});