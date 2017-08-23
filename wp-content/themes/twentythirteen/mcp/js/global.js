function loadMap() {
    "use strict";

    function e() {
        var e = {
            center: new google.maps.LatLng(38.525299, -9.15003),
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var t = new google.maps.Map(document.getElementById("map-canvas"), e)
    }
    google.maps.event.addDomListener(window, "load", e)
}

function singlePage() {
    "use strict";
    jQuery('a[href^="#"]').on("click", function(e) {
        e.preventDefault();
        var t = this.hash,
            n = jQuery(t);
        var r = n.offset().top;
        r = r + -90;
        jQuery("html, body").stop().animate({
            scrollTop: r
        }, 900, "swing", function() {
            window.location.hash = t
        });
        jQuery(".option").removeClass("active");
        jQuery(this).parent(".option").addClass("active")
    })
}

function ComingAnimations() {
    "use strict";
    jQuery(".coming > .span12").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(0 * (e + 1)).queue(function() {
                t.addClass("animated fadeInDownBig")
            })
        })
    });
    jQuery("div.coming form.special").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(1100 * (e + 1)).queue(function() {
                t.addClass("animated flipInX")
            })
        })
    })
}

function LandingAnimations() {
    "use strict";
    jQuery(".hero-unit.landing .iphone-hand").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(0 * (e + 1)).queue(function() {
                t.addClass("animated bounceInLeft")
            })
        })
    });
    jQuery(".phone, #about").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(350 * (e + 1)).queue(function() {
                t.addClass("animated fadeInLeft")
            })
        })
    });
    jQuery(".list, #reviews").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(350 * (e + 1)).queue(function() {
                t.addClass("animated fadeInRight")
            })
        })
    });
    jQuery("#newsletter").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(450 * (e + 1)).queue(function() {
                t.addClass("animated flipInX")
            })
        })
    })
}

function HomeAnimations() {
    "use strict";
    jQuery(".hero-unit.landing .iphone-hand, .img-landing").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(0 * (e + 1)).queue(function() {
                t.addClass("animated bounceInRight"), t.css("opacity", "1")
            })
        })
    });
    jQuery(".p-btn.action").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(800 * (e + 1)).queue(function() {
                t.addClass("animated flipInX")
            })
        })
    });
    jQuery(".btn-cont .btn").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(1500 * (e + 1)).queue(function() {
                t.addClass("animated shake")
            })
        })
    });
    jQuery(".wide-newsletter").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(200 * (e + 1)).queue(function() {
                t.addClass("animated flipInX")
            })
        })
    });
    jQuery(".testimonials .quote").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(200 * (e + 1)).queue(function() {
                t.addClass("animated flipInY")
            })
        })
    })
}

function ErrorAnimations() {
    "use strict";
    jQuery(".error-page").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(0 * (e + 1)).queue(function() {
                t.addClass("animated flipInX")
            })
        })
    })
}

function fixDiv() {
    "use strict";
    var e = jQuery("#getFixed");
    if (jQuery(window).scrollTop() > 100) {
        e.css({
            position: "fixed",
            top: "0px"
        })
    } else {
        e.css({
            position: "relative",
            top: "auto"
        })
    }
}

function showTopButton() {
    "use strict";
    var e = jQuery("#back-to-top");
    if (jQuery(window).scrollTop() > 100) {
        e.css({
            display: "block"
        })
    } else {
        e.css({
            display: "none"
        })
    }
}
jQuery(document).ready(function() {
    "use strict";
    jQuery(".navbar-inverse, .navbar-inverse ul.nav").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(0 * (e + 1)).queue(function() {
                t.addClass("animated bounceInDown"), t.css("opacity", "1")
            })
        })
    });
    jQuery(".hero-unit.landing .promotext").waypoint(function(e) {
        jQuery(this).each(function(e) {
            var t = jQuery(this);
            t.delay(0 * (e + 1)).queue(function() {
                t.addClass("animated bounceInRight"), t.css("opacity", "1")
            })
        })
    });
    jQuery("#back-to-top").click(function() {
        jQuery("html, body").animate({
            scrollTop: 0
        }, "slow")
    });
    showTopButton();
    fixDiv()
});
jQuery(window).load(function() {
    "use strict";
    jQuery(".navbar-inverse .brand, .navbar-inverse ul.nav").removeClass("animated bounceInDown");
    jQuery(".img-landing").removeClass("bounceInRight")
});
jQuery(window).scroll(function() {
    "use strict";
    fixDiv();
    showTopButton()
})