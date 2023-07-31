$(document).ready(function () {
    
    /*
    ** Scroll Top Main Menu
    */
    
    var lastScrollTop = 0;
    $(window).on('scroll', function(e) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('#header').css('background', '#3c4749');
            $('#header .logo img').css('max-height', '60px');
            $('.dropdown-menu[data-bs-popper]').css('background', '#3c4749');
        } else {
            $('#header').css('background', '#3c474975');
            $('#header .logo img').css('max-height', '75px');
            $('.dropdown-menu[data-bs-popper]').css('background', '#3c474975');
        }

    });


    /*
    ** Dropdown
    */
   
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 1024px)").matches) {

            $dropdown.hover(
                function() {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function() {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
});