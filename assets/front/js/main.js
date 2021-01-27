(function($) {
    var html = '<div class="services__item">';
    html += '<div class="container-services row  p-t-20">';
    html += '<div class="container-services-image col-4 text-center">';
    html += '<img src="img/categories/cat-1.jpg"/>';
    html += '</div>';
    html += '<div class="container-services-text col-8 text-center">';
    html += '<h1>Titre</h1>';
    html += '<p>Description</p>';
    html += '<a href="#" class="btn btn-primary">Lien</a>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '<div class="services__item">';
    html += '<div class="container-services row  p-t-20">';
    html += '<div class="container-services-image col-4 text-center">';
    html += '<img src="img/categories/cat-2.jpg"/>';
    html += '</div>';
    html += '<div class="container-services-text col-8 text-center">';
    html += '<h1>Titre</h1>';
    html += '<p>Description</p>';
    html += '<a href="#" class="btn btn-primary">Lien</a>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '<div class="services__item">';
    html += '<div class="container-services row  p-t-20">';
    html += '<div class="container-services-image col-4 text-center">';
    html += '<img src="img/categories/cat-3.jpg"/>';
    html += '</div>';
    html += '<div class="container-services-text col-8 text-center">';
    html += '<h1>Titre</h1>';
    html += '<p>Description</p>';
    html += '<a href="#" class="btn btn-primary">Lien</a>';
    html += '</div>';
    html += '</div>';
    html += '</div>';

    $("#services-list").empty().append(html);
    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function() {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });
    /*-----------------------
        services Slider
    ------------------------*/
    $(".services__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            0: {
                items: 1,
            },
            1200: {
                items: 2,
            }
        }
    });

})(jQuery);
//////////////////////////////SLIDER///////////////////////////
(
    function() {
        var html = '<div class="carousel-item active" style="background-image: url(img/1-haha.jpg)">';
        html += '<div class="carousel-container">';
        html += '<div class="container">';
        html += '<h2 class="animate__animated animate__fadeInDown">Izay ataony eto</h2>';
        html += '<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>';
        html += '<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus ...</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="carousel-item" style="background-image: url(img/1-haha.jpg)">';
        html += '<div class="carousel-container">';
        html += '<div class="container">';
        html += '<h2 class="animate__animated animate__fadeInDown">Izay ataony eto</h2>';
        html += '<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>';
        html += '<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus ...</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $("#container-slide").empty().append(html);
    }
)();
!(function($) {
    "use strict";
    // Intro carousel
    var heroCarousel = $("#heroCarousel");
    var heroCarouselIndicators = $("#hero-carousel-indicators");
    heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
        (index === 0) ?
        heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):
            heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");
    });

    $('#btn-toggle').on('click', function() {
        $('header .container-menu nav ul').slideToggle();
    });
})(jQuery);