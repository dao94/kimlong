$(document).ready(function () {

    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();
        $(".tab_content").removeClass("animate1 wiggle");
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).addClass("animate1 wiggle");
        $("#" + activeTab).fadeIn();
    });


    var owl = $("#pos-special-products");

    owl.owlCarousel({
        autoPlay: false,
        pagination: false,
        items: 3,
        slideSpeed: 1000,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1]
    });
    // Custom Navigation Events
    $(".nextspecial").click(function () {
        owl.trigger('owl.next');
    })
    $(".prevspecial").click(function () {
        owl.trigger('owl.prev');
    })


    var owl_logoslider = $(".logo-slider");
    owl_logoslider.owlCarousel({
        items: 6,
        slideSpeed: 1000,
        pagination: false,
        itemsDesktop: [1200, 6],
        itemsDesktopSmall: [980, 5],
        itemsTablet: [767, 4],
        itemsMobile: [480, 2]
    });
    $(".nextlogo").click(function () {
        owl_logoslider.trigger('owl.next');
    })
    $(".prevlogo").click(function () {
        owl_logoslider.trigger('owl.prev');
    })


    var owl_sdsblog = $(".sdsblog-box-content");

    owl_sdsblog.owlCarousel({
        autoPlay: false,
        pagination: false,
        items: 4,
        slideSpeed: 1000,
        itemsDesktop: [1191, 4],
        itemsDesktopSmall: [911, 3],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1]
    });
    // Custom Navigation Events
    $(".nextblog").click(function () {
        owl_sdsblog.trigger('owl.next');
    })
    $(".prevblog").click(function () {
        owl_sdsblog.trigger('owl.prev');
    })


    $("#mobile-menu").mobileMenu({
        MenuWidth: 250,
        SlideSpeed: 300,
        WindowsMaxWidth: 767,
        PagePush: false,
        FromLeft: true,
        Overlay: true,
        CollapseMenu: true,
        ClassName: "mobile-menu"
    });






     $(".mypresta_scrollup").hide();

    // fade in .mypresta_scrollup
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.mypresta_scrollup').fadeIn();
            } else {
                $('.mypresta_scrollup').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('.mypresta_scrollup').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });


    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));




    $('.image-resize img').imagesLoaded(function () {
        setTimeout(function () {
            $(window).resize();
        }, 1000);
    });

    jQuery(function () {
        jQuery('#slider-container').slider({
            range: true,
            min: 0,
            max: 10000000,
            values: [1, 10000000],
            create: function () {
                jQuery("#amount").val("0 đ - 10,000,000 đ");
            },
            slide: function (event, ui) {
                $("#amount").val(numberWithCommas(ui.values[0]) + " đ- " + numberWithCommas(ui.values[1]) + " đ");
                var price_min = '';
                var arr_price_min = numberWithCommas(ui.values[0]);
                $.each(arr_price_min.split(','), function (i, v) {
                    price_min = price_min + v;
                });
                $('#amount-min').val('(price:product>=' + parseInt(price_min) + ')');
                var price_max = '';
                var arr_price_max = numberWithCommas(ui.values[1]);
                $.each(arr_price_max.split(','), function (i, v) {
                    price_max = price_max + v;
                });
                $('#amount-max').val('(price:product<=' + parseInt(price_max) + ')');
                var mi = ui.values[0];
                var mx = ui.values[1];
                filterSystem(mi, mx);
            },
            stop: function (event, ui) {
                $.ajax({
                    url: genQuery() + '&view=pagesize',
                    success: function (data) {
                        total_page = parseInt(data);
                    }
                });
                //lay trang dau tien
                $.ajax({
                    url: genQuery() + '&view=data',
                    success: function (data) {
                        $('.pw-default').remove();
                        $('.products-grid').html('');
                        $('.empty').remove();
                        $('.products-grid').append(data);
                        $('.products-grid img').imagesLoaded(function () {
                            $(window).resize();
                        });
                    }
                });
            }
        })
    });


    function filterSystem(minPrice, maxPrice) {
        jQuery("#product-sorting li.system").hide().filter(function () {
            console.log($(this).data("price") + "aâ");
            var price = parseInt($(this).data("price"), 10);
            return price >= minPrice && price <= maxPrice;
        }).show();
    }
    function numberWithCommas(number) {
        if (isNaN(number)) {
            return '';
        }

        var asString = '' + Math.abs(number),
                numberOfUpToThreeCharSubstrings = Math.ceil(asString.length / 3),
                startingLength = asString.length % 3,
                substrings = [],
                isNegative = (number < 0),
                formattedNumber,
                i;

        if (startingLength > 0) {
            substrings.push(asString.substring(0, startingLength));
        }

        for (i = startingLength; i < asString.length; i += 3) {
            substrings.push(asString.substr(i, 3));
        }

        formattedNumber = substrings.join(',');
        if (isNegative) {
            formattedNumber = '-' + formattedNumber;
        }

        return formattedNumber;
    }
});