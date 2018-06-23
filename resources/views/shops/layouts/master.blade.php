@php
    use App\HomeLayout;
    $tired = (new HomeLayout)->navBar();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <base href="{{ asset('') }}">
    <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"
    />
    <!-- Mobile specific metas  , -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Style -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="sources/css/bootstrap.min.css">

    <!-- font-awesome & simple line icons CSS -->
    <link rel="stylesheet" type="text/css" href="sources/css/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="sources/css/simple-line-icons.css" media="all">

    <!-- owl.carousel CSS -->
    <link rel="stylesheet" type="text/css" href="sources/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="sources/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="sources/css/owl.transitions.css">

    <!-- animate CSS  -->
    <link rel="stylesheet" type="text/css" href="sources/css/animate.css" media="all">

    <!-- flexslider CSS -->
    <link rel="stylesheet" type="text/css" href="sources/css/flexslider.css">

    <!-- jquery-ui.min CSS  -->
    <link rel="stylesheet" type="text/css" href="sources/css/jquery-ui.css">

    <!-- Revolution Slider CSS -->
    <link href="sources/css/revolution-slider.css" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="sources/css/style.css" media="all">
</head>

<body class="cms-index-index cms-home-page">

<!-- mobile menu -->
<div id="mobile-menu">
    <ul>
        <li>
            <a href="index.html" class="home1">Home</a>
        </li>
        <li>
            <a href="contact_us.html">Contact us</a>
        </li>
        <li>
            <a href="about_us.html">About us</a>
        </li>
        <li>
            <a href="blog_full_width.html">Blog</a>
        </li>
    </ul>
</div>
<!-- end mobile menu -->
<div id="page">

    <!-- Header -->
    @include('shops.includes.header')
    <!-- end header -->

    <!-- Navbar -->
    @include('shops.includes.navbar')
    <!-- end nav -->

    @yield('content')

    <!-- Footer -->

    @include('shops.includes.footer')
    <!-- End Footer -->

</div>


<!-- JS -->

<!-- jquery js -->
<script type="text/javascript" src="sources/js/jquery.min.js"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="sources/js/bootstrap.min.js"></script>


<!-- owl.carousel.min js -->
<script type="text/javascript" src="sources/js/owl.carousel.min.js"></script>

<!-- bxslider js -->
<script type="text/javascript" src="sources/js/jquery.bxslider.js"></script>

<!-- Slider Js -->
<script type="text/javascript" src="sources/js/revolution-slider.js"></script>

<!-- megamenu js -->
<script type="text/javascript" src="sources/js/megamenu.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var mega_menu = '0';

    /* ]]> */
</script>

<!-- jquery.mobile-menu js -->
<script type="text/javascript" src="sources/js/mobile-menu.js"></script>

<!--jquery-ui.min js -->
<script type="text/javascript" src="sources/js/jquery-ui.js"></script>

<!-- main js -->
<script type="text/javascript" src="sources/js/main.js"></script>

<!-- countdown js -->
<script type="text/javascript" src="sources/js/countdown.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.tp-banner').revolution(
            {
                delay: 9000,
                startwidth: 1170,
                startheight: 530,
                hideThumbs: 10,

                navigationType: "bullet",
                navigationStyle: "preview1",

                hideArrowsOnMobile: "on",

                touchenabled: "on",
                onHoverStop: "on",
                spinner: "spinner4"
            });
    });
</script>
@yield('scripts')
@yield('script-ajax')


</body>

</html>