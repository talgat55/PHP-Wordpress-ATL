// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";
    //
    // sliderHomePage();
    // homePagePortfolioCarousel();
    // partnersCarousel();
    // modal();
    // mobileMenu();
    phoneMask();
    // backToTop();
    map();
    // teamCarousel();
    // awardsCarousel();
    // adversisticsCarousel();
    // closeModal();
    // scrollFirstSlider();
    // OpenModal();
    // eventCatAjax();
    partnersCarousel();
    reviewSlider();
    awardsCarousel();


    //
    // Lazy load
    //
    jQuery('.lazy').lazy();
    //
    // $('.menu-icon-toggle').on('click', function(e) {
    //     $('body').toggleClass('open');
    //
    //     e.preventDefault();
    // });
    //
    // Match height in events
    //
    // jQuery('.page-news_list-row .post-item').matchHeight();

        //  init   animation blocks library

    // end redy function
});


// jQuery(window).load(function () {
//
// });


// // ---------------------------------------------------------
// // Back To Top
// // ---------------------------------------------------------
// function backToTop() {
//     "use strict";
//     jQuery(window).scroll(function () {
//
//         var backToTop = jQuery('#back_to_top');
//         var activeClass = 'backactive';
//
//         if (jQuery(this).scrollTop() > 100) {
//             backToTop.addClass(activeClass);
//         } else {
//             backToTop.removeClass(activeClass);
//         }
//
//     });
//
//     jQuery(document).on('click', '#back_to_top', function (e) {
//         e.preventDefault();
//
//         jQuery('body,html').animate({scrollTop: 0}, jQuery(window).scrollTop() / 3, 'linear');
//     });
//
// }
//
// //
// //  Modal
// //
// function modal() {
//     "use strict";
//     var classShow = 'show';
//     jQuery('.overlay-layer, .custom-modal .close, .success-modal .link-ok').click(function () {
//
//         jQuery('.custom-modal ,  .success-modal, .overlay-layer').removeClass(classShow);
//
//         return false;
//     });
//
//
//     jQuery('.link-call, .link-feedback-service, #price-section .price-block .bottom a.first-link').click(function () {
//
//         jQuery('.custom-modal, .overlay-layer').addClass(classShow);
//
//         return false;
//
//     });
//
// }
//
//



function map() {
    "use strict";
    if (jQuery('#map').length) {
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [54.966241, 73.382522],
                    zoom: 15,
                    controls: [ ]
                }, {
                    // searchControlProvider: 'yandex#search'
                }),

                // Создаём макет содержимого.
                /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                  ),*/

                myPlacemark = new ymaps.Placemark([54.966241, 73.382522], {
                    id: '1'
                }, {

                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.

                    iconImageHref: '/wp-content/themes/asmart/assets/images/marker-map.png',
                    // Размеры метки.
                    iconImageSize: [37, 52],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-17, -52]
                });


            myMap.geoObjects

                .add(myPlacemark);

            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('drag');
            myMap.behaviors.disable('multiTouch');

            myMap.controls.add('zoomControl', {
                float: 'none',
                position: {
                    right: 40,
                    top: 90
                }
            });


        });
    }
}

//
// //----------------------------------
// //  Mobile Menu
// //------------------------------------
// function mobileMenu() {
//     "use strict";
//     var linkClass = '#mobile-toggle';
//     var mobileClass = '.mobile-bar';
//
//     jQuery('body').on('click', linkClass, function () {
//         jQuery(this).toggleClass('is-active');
//         jQuery(mobileClass).toggleClass('is-active');
//         return false;
//     });
// }

//----------------------------------
//  Input phone field Mask
//------------------------------------
function phoneMask() {
    "use strict";
    let phone_class = jQuery('.phone-input');
    if (phone_class.length) {
        phone_class.inputmask({"mask": "+7 (999) 999-9999"});

    }
}


// //----------------------------------
// //   Home Slider
// //---------------------------------------
//
// function sliderHomePage() {
//     "use strict";
//     var sliderWrap = jQuery('.home-slider_slider');
//
//     if (sliderWrap.length) {
//         sliderWrap.slick({
//             infinite: true,
//             slidesToShow: 1,
//             slidesToScroll: 1,
//             arrows: false,
//             dots: true,
//             autoplay: true,
//         });
//
//         jQuery('.home-slider_slider .slick-dots').wrap("<div class='container  wrap-dots'></div>");
//
//
//     }
// }
//
// //----------------------------------
// //   Home Portfolio carousel
// //---------------------------------------
//
// function homePagePortfolioCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.home-portfolio_carousel');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             slidesToShow: 3,
//             slidesToScroll: 3,
//             arrows: true,
//             dots: true,
//             autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }
//
// //----------------------------------
// //   Partners carousel
// //---------------------------------------
//
// function partnersCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.partners-section_carousel');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             slidesToShow: 4,
//             slidesToScroll: 4,
//             arrows: true,
//             dots: true,
//             autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }
//
// //----------------------------------
// //   Team carousel
// //---------------------------------------
//
// function teamCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.page-about_list-team');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             slidesToShow: 3,
//             slidesToScroll: 3,
//             arrows: true,
//             dots: true,
//             autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 900,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }
//
// //----------------------------------
// //   Awards carousel
// //---------------------------------------
//
// function awardsCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.page-about_awards_list-items');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             slidesToShow: 4,
//             slidesToScroll: 4,
//             arrows: true,
//             dots: true,
//             autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }
//
//

//
// //----------------------------------
// //   close Modal
// //---------------------------------------
//
// function closeModal() {
//     "use strict";
//     jQuery('.modal-main .close-modal-custom').click(function () {
//         jQuery('.modal-main, .overlay-layer').removeClass('active');
//         return false;
//     });
//     jQuery('.success-modal-main .close-modal-custom').click(function () {
//         jQuery('.success-modal-main, .overlay-layer').removeClass('active');
//         return false;
//     });
// }
//
// //----------------------------------
// //   Success Modal
// //---------------------------------------
//
// function successModal() {
//     "use strict";
//     jQuery('.modal-main').removeClass('active');
//     jQuery('.success-modal-main, .overlay-layer').addClass('active');
//     setTimeout(function () {
//         jQuery('.success-modal-main, .overlay-layer').removeClass('active');
//     }, 2000);
// }
//
// //----------------------------------
// //     Modal   Main
// //---------------------------------------
//
// function OpenModal() {
//     "use strict";
//     jQuery(".page-portfolio_list-portfolio_item .link.link-main:not('.alt') , .page-partners .link.link-main.alt").click(function () {
//         jQuery('.modal-main, .overlay-layer').addClass('active');
//         return false;
//     });
// }
//
//
// //----------------------------------
// //    First slider scroll
// //---------------------------------------
//
// function scrollFirstSlider() {
//     "use strict";
//     jQuery(".home-slider_arrow-down").click(function () {
//         jQuery('html, body').animate({
//             scrollTop: jQuery(".home-about").offset().top - 80
//         }, 1000);
//         return false;
//     });
// }
//
// //----------------------------------
// //    Ajax news
// //---------------------------------------
// function eventCatAjax() {
//     "use strict";
//     jQuery('body').on('click', '.page-news_category-block_item_link', function () {
//         var activeClass = 'page-news_category-block_item_link__active';
//         jQuery('.page-news_category-block_item_link').removeClass(activeClass);
//         jQuery(this).addClass(activeClass);
//         var $term = jQuery(this).attr('data-slug');
//         var data = {
//             action: 'be_ajax_cat_events',
//             term: $term
//         };
//         jQuery.post(myajax.url, data, function (res) {
//             if (res.success) {
//                 if (res.data != '') {
//                     jQuery('.page-news_list-row')
//                         .html(' ')
//                         .append(res.data);
//                 } else {
//                     console.log(res);
//                 }
//             }
//         }).fail(function (xhr, textStatus, e) {
//             console.log(xhr.responseText);
//         });
//         return false;
//     });
//     //
//     // Load more
//     //
//     jQuery('body').on('click', '.page-news .load-more', function () {
//         var $page = jQuery(this).attr('data-page');
//         var $term = jQuery('.page-news_category-block_item_link__active').attr('data-slug');
//         var data = {
//             action: 'be_ajax_events_load',
//             page: $page,
//             term: $term
//         };
//         jQuery(this).attr('data-page' , ++$page );
//
//         jQuery.post(myajax.url, data, function (res) {
//             if (res.success) {
//                 if (res.data.data != '') {
//                     var countItems = jQuery('.page-news_list-row .post-item').length;
//                     if( res.data.count.publish == countItems){
//                         jQuery('.page-news .load-more').fadeOut();
//                     }
//                     if(res.data.data.length > 4){
//                         jQuery('.page-news_list-row')
//                             .append(res.data.data);
//                     }else{
//                         jQuery('.page-news_list-row').after('<p class="no-items-text">Записей больше нет</p>');
//                     }
//                 } else {
//                     console.log(res);
//                 }
//             }
//         }).fail(function (xhr, textStatus, e) {
//             console.log(xhr.responseText);
//         });
//         return false;
//     });
// }

//----------------------------------
//   Review slider
//---------------------------------------

function reviewSlider() {
    "use strict";
    var carouselClass = jQuery('.review__slider');

    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,

            //   autoplay: true,
        });
    }
}
//----------------------------------
//   awards  carousel
//---------------------------------------

function awardsCarousel() {
    "use strict";
    var carouselWrap = jQuery('.awards__carousel');

    if (carouselWrap.length) {
        carouselWrap.slick({
            infinite: true,
            lazyLoad: 'ondemand',
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            dots: true,
             // autoplay: true,
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }
}


//----------------------------------
//   Partners  carousel
//---------------------------------------

function partnersCarousel() {
    "use strict";
    var carouselWrap = jQuery('.partners__slider');

    if (carouselWrap.length) {
        carouselWrap.slick({
            infinite: true,
            lazyLoad: 'ondemand',
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            dots: true,
             // autoplay: true,
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }
}




document.addEventListener('wpcf7mailsent', function (event) {
    if (event.detail.contactFormId == "51") {
        successModal();
    }
     if (event.detail.contactFormId == "168") {
        successModal();
    }
}, false);