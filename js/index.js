jQuery(function() {
    jQuery("a[href^=#bunnypresslite_top]").click(function() {
        var c = 400;
        var b = jQuery(this).attr("href");
        var d = jQuery(b == "#" || b == "" ? "html" : b);
        var a = d.offset().top;
        jQuery("body,html").animate({
            scrollTop: a
        }, c, "swing");
        return false
    })
});
jQuery(function() {
    var a = jQuery(".pagetop");
    a.hide();
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            a.fadeIn()
        } else {
            a.fadeOut()
        }
    })
});
jQuery(function() {
    var a = jQuery(".open");
    a.hide();
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            a.fadeIn()
        } else {
            a.fadeOut()
        }
    })
});