$(document).ready(function() {
    $(".moreBox")
        .slice(0, 3)
        .show();
    if ($(".blogBox:hidden").length != 0) {
        $("#loadMore ").show();
    }
    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".moreBox:hidden")
            .slice(0, 6)
            .slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore ").fadeOut("slow");
        }
    });

    $(".collapse")
        .on("shown.bs.collapse", function() {
            $(this)
                .parent()
                .find(".fa-angle-down")
                .removeClass("fa-angle-down")
                .addClass("fa-angle-up");
        })
        .on("hidden.bs.collapse", function() {
            $(this)
                .parent()
                .find(".fa-angle-up")
                .removeClass("fa-angle-up")
                .addClass("fa-angle-down");
        });

    $("#showpassword").on("click", function(e) {
        var x = document.getElementById("myInput");
        e.preventDefault();
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });

    $(".carousel-indicators li").click(function() {
        $(".carousel-indicators li").removeClass("active");
        $(".carousel-indicators li").removeClass(
            "spinner-border spinner-border-sm"
        );
        var $this = $(this);
        if (!$this.hasClass("active")) {
            $(this).addClass("spinner-border spinner-border-sm");
        }
    });
    $(".thumbs_auction-img ").click(function() {
        $(".thumbs_auction-img").removeClass("thumb-active");
        var $this = $(this);
        if (!$this.hasClass("thumb-active")) {
            $(this).addClass("thumb-active");
        }
    });
    $(".carousel-ctrl-next").click(function() {
        var $this = $(this);
    });
    $(".caret-play_auction-gallery").on("click", function() {
        $("#homeCarousel").carousel("cycle");
    });

    $(".pills-tab").scrollspy({ target: "#pills-tab" });

    $("#hammer").click(function() {
        $(".fa-gavel").removeClass("fa-rotate-270");
        $(".fa-gavel").addClass("fa-rotate-180");
    });
    /* when a user clicks, toggle the 'is-animating' class */
    $(".heart").on("click touchstart", function() {
        $(this).toggleClass("is_animating");
    });

    /*when the animation is over, remove the class*/
    $(".heart").on("animationend", function() {
        $(this).toggleClass("is_animating");
    });
    var bootCarousel = $(".carousel");
    bootCarousel.append("<ol class='carousel-indicators'></ol>");
    var indicators = $(".carousel-indicators");
    bootCarousel
        .find(".carousel-inner")
        .children(".item")
        .each(function(index) {
            index === 0
                ? indicators.append(
                      "<li data-target='#MyCarousel' data-slide-to='" +
                          index +
                          "' class='active'></li>"
                  )
                : indicators.append(
                      "<li data-target='#MyCarousel' data-slide-to='" +
                          index +
                          "'></li>"
                  );
        });

      
       
});

(function() {})();
