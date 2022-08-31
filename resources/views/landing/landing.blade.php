<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/css/responsive.css','resources/css/houses.css','resources/css/contact.css','resources/css/about.css','resources/css/description.css','resources/css/more.css'])
@stack('styles')
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">


<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Company logo" />
                </a>
                <div class="navbar-collapse" id="">
                    <ul class="navbar-nav justify-content-between ">
                        <div class="User_option">
                            <li class="">
                                <a class="mr-4" href="/">
                                    Home
                                </a>

                                <a class="mr-4" href={{ route('about') }}>
                                    About Us
                                </a>
                                <a class="" href={{ route('contact') }}>
                                    Contact
                                </a>
                            </li>
                        </div>
                    </ul>


                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                                <span class="s-1">

                                </span>
                            <span class="s-2">

                                </span>
                            <span class="s-3">

                                </span>
                        </button>
                    </div>
                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="/">HOME</a>
                            <a href={{ route('about') }}>ABOUT</a>
                            <a href={{ route('contact') }}>CONTACT US</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="detail-box">
                        <h1>
                            maslah executive suites <br> limited <br>

                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider_section -->
</div>

@yield('content')

<!-- info section -->
<section class="info_section ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h5>
                        About Maslah
                    </h5>
                    <div>
                        <div class="img-box">
                            <img src="images/location.png" width="18px" alt="">
                        </div>
                        <p>
                            Madina Mall, Eastleigh
                        </p>
                    </div>
                    <div>
                        <div class="img-box">
                            <img src="images/phone.png" width="12px" alt="">
                        </div>
                        <p>
                            +25470000000
                        </p>
                    </div>
                    <div>
                        <div class="img-box">
                            <img src="images/mail.png" width="18px" alt="">
                        </div>
                        <p>
                            maslahsuites@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_info">
                    <h5>
                        Information
                    </h5>
                    <p>
                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info_links">
                    <h5>
                        Useful Links
                    </h5>
                    <ul>
                        <li>
                            <a href="">
                                There are many
                            </a>
                        </li>
                        <li>
                            <a href="">
                                variations of
                            </a>
                        </li>
                        <li>
                            <a href="">
                                passages of
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Lorem Ipsum
                            </a>
                        </li>
                        <li>
                            <a href="">
                                available, but
                            </a>
                        </li>
                        <li>
                            <a href="">
                                the i
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_form ">
                    <h5>
                        Newsletter
                    </h5>
                    <form action="">
                        <input type="email" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                    <div class="social_box">
                        <a href="">
                            <img src="images/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/youtube.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer_section justify-content-center">
        <div class="col-6">
            <p>
                <span id="displayYear"></span> All Rights Reserved &copy;
                <a href="">Maslah Executive Suites Ltd</a>
            </p>
        </div>
    </div>
</section>

<!-- end info_section -->


<a href="https://wa.me/254725498684?text=Would%20love%20to%20enquire%20more%20about%20the%20Maslah%20property%20that's%20on%20sale" class="float" target="_blank">
    <i class="fa-brands fa-whatsapp my-float"></i>
</a>


<script>
    function getYear() {
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();
        document.querySelector("#displayYear").innerHTML = currentYear;
    }
    getYear();

    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width")
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }

    /* JS FOR DESCRIPTION PAGE */
    ;(function($){
        $.fn.picZoomer = function(options){
            var opts = $.extend({}, $.fn.picZoomer.defaults, options),
                $this = this,
                $picBD = $('<div class="picZoomer-pic-wp"></div>').css({'width':opts.picWidth+'px', 'height':opts.picHeight+'px'}).appendTo($this),
                $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
                $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
                cursorSizeHalf = {w:$cursor.width()/2 ,h:$cursor.height()/2},
                $zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
                $zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
                picBDOffset = {x:$picBD.offset().left,y:$picBD.offset().top};


            opts.zoomWidth = opts.zoomWidth||opts.picWidth;
            opts.zoomHeight = opts.zoomHeight||opts.picHeight;
            var zoomWPSizeHalf = {w:opts.zoomWidth/2 ,h:opts.zoomHeight/2};

            $zoomWP.css({'width':opts.zoomWidth+'px', 'height':opts.zoomHeight+'px'});
            $zoomWP.css(opts.zoomerPosition || {top: 0, left: opts.picWidth+30+'px'});
            $zoomPic.css({'width':opts.picWidth*opts.scale+'px', 'height':opts.picHeight*opts.scale+'px'});

            $picBD.on('mouseenter',function(event){
                $cursor.show();
                $zoomWP.show();
                $zoomPic.attr('src',$pic.attr('src'))
            }).on('mouseleave',function(event){
                $cursor.hide();
                $zoomWP.hide();
            }).on('mousemove', function(event){
                var x = event.pageX-picBDOffset.x,
                    y = event.pageY-picBDOffset.y;

                $cursor.css({'left':x-cursorSizeHalf.w+'px', 'top':y-cursorSizeHalf.h+'px'});
                $zoomPic.css({'left':-(x*opts.scale-zoomWPSizeHalf.w)+'px', 'top':-(y*opts.scale-zoomWPSizeHalf.h)+'px'});

            });
            return $this;

        };
        $.fn.picZoomer.defaults = {
            picHeight: 460,
            scale: 2.5,
            zoomerPosition: {top: '0', left: '380px'},

            zoomWidth: 400,
            zoomHeight: 460
        };
    })(jQuery);



    $(document).ready(function () {
        $('.picZoomer').picZoomer();
        $('.piclist li').on('click', function (event) {
            var $pic = $(this).find('img');
            $('.picZoomer-pic').attr('src', $pic.attr('src'));
        });

        var owl = $('#recent_post');
        owl.owlCarousel({
            margin:20,
            dots:false,
            nav: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items:3
                },
                1000: {
                    items:5
                },
                1200: {
                    items:4
                }
            }
        });

        $('.decrease_').click(function () {
            decreaseValue(this);
        });
        $('.increase_').click(function () {
            increaseValue(this);
        });
        function increaseValue(_this) {
            var value = parseInt($(_this).siblings('input#number').val(), 10);
            value = isNaN(value) ? 0 : value;
            value++;
            $(_this).siblings('input#number').val(value);
        }

        function decreaseValue(_this) {
            var value = parseInt($(_this).siblings('input#number').val(), 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            $(_this).siblings('input#number').val(value);
        }
    });
    /* END FOR DESCRIPTION PAGE JS */

</script>
</body>

</html>
