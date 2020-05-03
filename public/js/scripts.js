/*==================================
 * Author        : HtmlLover
 * Template Name : BizAgent - Digital Agency Template | Creative Agency Landing Page
 * Version       : 1.0
 ==================================== */

/*=========== TABLE OF CONTENTS ===========
 1. preloader
 2. client testimonial slider
 3. customers slider
 4. home page slider
 5. Lightbox popup
 6. filter items
 7. Portfolio Isotope
 8. video popup
 ===========*/

(function($) {
    'use strict';

    //preloader
    $(window).ready(function() {
        $('#status').fadeOut();
        $('#preloader').delay(200).fadeOut('slow');
    });

    //client testimonial slider
    $('.client-testimonial').owlCarousel({
        items:1,
        loop:true,
        dots: true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5500,
        autoplayStopOnLast: false
    });

    //customers slider
    $('.customers-slider').owlCarousel({
        responsiveClass:true,
        margin:30,
        dots: false,
        autoplay: 2000,
        loop: false,
        autoplayStopOnLast: false,
        autoWidth:false,
        nav:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            800:{
                items:4
            },
            1200:{
                items:5
            }

        }

    });

    //home page slider

    $('.content-text-slider').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]

    });

    $('.biz-hero-slider').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        dots: false,
        nav: true,
        autoplayTimeout:3400,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]

    });


    //Lightbox popup

    $('.lightbox-gallery').magnificPopup({
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
        image: {
            titleSrc: 'title',
            verticalFit: true
        }
    });


    $('.lightbox-video').magnificPopup();

    $('.lightbox-product').magnificPopup({
        tLoading: 'Loading image #%curr%...',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
        image: {
            titleSrc: 'title',
            verticalFit: true
        }
    });

    // filter items
    $('.button-group').on( 'click', 'a', function(e) {
        e.preventDefault();
        var filterValue = $(this).attr('data-filter');
        $portfolio.isotope({ filter: filterValue });

        $('.button-group a').removeClass('active');
        $(this).closest('a').addClass('active');

    });
    // Portfolio Isotope
    var $portfolio = $('#project-container');
    $portfolio.imagesLoaded( function() {
        $portfolio.isotope({
            isOriginLeft: true
        });
        $portfolio.isotope();

    });



// Magnific popup Project Details
    $('.details-popup').magnificPopup({
        type: 'inline',

        fixedContentPos: false, /* keep it false to avoid html tag shift with margin-right: 17px */
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
    });

    //Portfolio Isotope initialization
    $('.grid').imagesLoaded( function() {
        var $grid = $('.grid').isotope({
            // options
            itemSelector: '.project-item',
            layoutMode: 'fitRows'
        });

        // filter items on button click
        $('.filters-button-group').on( 'click', 'a', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'a', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });
    });


    //video popup
    $('.video').magnificPopup({
        type: 'iframe'
    });

    // Ajax contact form validator
    $(function() {

        // Get the form.
        var form = $('#contactForm1');

        // Get the messages div.
        var formMessages = $('.form-message');

        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();

            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');

                    // Set the message text.
                    $(formMessages).text(response);

                    // Clear the form.
                    $('#contact-form input,#contact-form textarea').val('');
                })
                .fail(function(data) {
                    // Make sure that the formMessages div has the 'error' class.
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });

    });



})(jQuery);