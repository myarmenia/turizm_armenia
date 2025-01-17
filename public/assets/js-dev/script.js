$(document).ready(function () {



    // Facebook Pixel Code Don't Delete
    ! function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }

});

$(document).ready(function () {

    $sidebar = $('.sidebar');
    $sidebar_img_container = $sidebar.find('.sidebar-background');

    $full_page = $('.full-page');

    $sidebar_responsive = $('body > .navbar-collapse');
    sidebar_mini_active = false;

    window_width = $(window).width();

    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

    // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
    //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
    //         $('.fixed-plugin .dropdown').addClass('show');
    //     }
    //
    // }

    $('.fixed-plugin a').click(function (event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
                event.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
        }
    });

    $('.fixed-plugin .active-color span').click(function () {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
            $sidebar.attr('data-active-color', new_color);
        }

        if ($full_page.length != 0) {
            $full_page.attr('data-active-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-active-color', new_color);
        }
    });

    $('.fixed-plugin .background-color span').click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
        }
    });

    $('.fixed-plugin .img-holder').click(function () {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
            });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function () {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
            });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
    });

    $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function () {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
            }

            background_image = true;
        } else {
            if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
            }

            background_image = false;
        }
    });


    $('.switch-mini input').on("switchChange.bootstrapSwitch", function () {
        $body = $('body');

        $input = $(this);

        if (paperDashboard.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            paperDashboard.misc.sidebar_mini_active = false;
        } else {
            $('body').addClass('sidebar-mini');
            paperDashboard.misc.sidebar_mini_active = true;
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function () {
            clearInterval(simulateWindowResize);
        }, 1000);

    });

});


(function () {
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    new IsoGrid(document.querySelector('.isolayer--deco1'), {
        transform: 'translateX(33vw) translateY(-340px) rotateX(45deg) rotateZ(45deg)',
        stackItemsAnimation: {
            properties: function (pos) {
                return {
                    translateZ: (pos + 1) * 30,
                    rotateZ: getRandomInt(-4, 4)
                };
            },
            options: function (pos, itemstotal) {
                return {
                    type: dynamics.bezier,
                    duration: 500,
                    points: [{
                        "x": 0,
                        "y": 0,
                        "cp": [{
                            "x": 0.2,
                            "y": 1
                        }]
                    }, {
                        "x": 1,
                        "y": 1,
                        "cp": [{
                            "x": 0.3,
                            "y": 1
                        }]
                    }],
                    delay: (itemstotal - pos - 1) * 40
                };
            }
        }
    });
})();

// ==========================**===========================
// ========================******=========================
// =======================********========================
// ======================**********=======================
// =====================************======================
// ====================**************=====================
// =========================***===========================
// =========================***===========================



$('.collapseRouteToggle').on('click', function(){
    let deg = $('.arrow-route-div').attr("data-rotate") * 1 +180
    let icon = $('.arrow-route-div').css({ 'transform': 'rotate(' + deg + 'deg)' })
    $('.arrow-route-div').attr("data-rotate", deg)
})

$('.arrow-a').on('click', function () {
    console.log(11)
    let arrowSpan = $(this).find('.arrow-span')
    let arrowImg = $(this).find('.arrow-img')
    let thisArrawType = $(this).attr('data-type')
    let otherArrowType = thisArrawType == 'left' ? 'right' : 'left'

    if (!arrowSpan.hasClass('arraw-span-active')){
        $('.arrow-span').removeClass('arraw-span-active')
        arrowSpan.addClass('arraw-span-active')

        $('.arrow-img').attr('src', 'assets/img/arrow-' + otherArrowType + '.png')
        $('.arrow-img').removeClass('mt-2')
        $('#map').attr('src', 'assets/img/presentation-page/map-' + thisArrawType + '.png')

        $(this).find('.arrow-img').attr('src', 'assets/img/arrow-' +  thisArrawType + '_active.png')
        $(this).find('.arrow-img').addClass('mt-2')


    }

})
