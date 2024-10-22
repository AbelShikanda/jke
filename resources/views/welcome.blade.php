<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- site metas -->
    <title>JKE</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userset/css/bootstrap.min.css') }}">

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userset/css/style.css') }}">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('userset/images/fevicon.png') }}" type="image/gif" />
</head>

<body>
    <!--header section start -->
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="{{ 'userset/images/logo.png' }}"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="software.html">Our Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="banner_main">
            <h1 class="banner_taital">Build Best</h1>
            <h1 class="banner_taital_1">Software</h1>
            <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
            <div class="btn_main">
                <div class="more_bt"><a href="#">Contact Us</a></div>
                <div class="contact_bt"><a href="#">Get a quote</a></div>
            </div>
        </div>
    </div>
    <!--header section end -->
    <!--costume header section start -->
    <div class="costume_header">
        <div class="container">
            <div class="menu_main">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="software.html">Our Software</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="menu_main_1">
                <ul>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <li><a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a></li>
                
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a></li>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--costume header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_taital">About Softwares</h1>
                    <p class="about_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in
                        a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                        McClintock, a
                        Latin professor at Hampden</p>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                    <div><img src="{{ 'userset/images/img-1.png' }}" class="image_1"></div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->

    <!-- Javascript files-->
    <script src="{{ asset('userset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('userset/js/popper.min.js') }}"></script>
    <script src="{{ asset('userset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('userset/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('userset/js/plugin.js') }}"></script>
    <!-- javascript -->
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
</body>

<body>
</body>

</html>
