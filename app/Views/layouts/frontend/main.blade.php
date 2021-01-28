<html lang="vi" class="">
<head lang="vi">
    <meta charset="utf-8">

    <!-- Setting the viewport to make your website look good on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>

    <!-- Define a title of web page -->
    <title>NguyenSonArsenal</title>

    <!-- Define a description of web page -->
    <meta name="description" content="">

    <!-- Define keywords for search engines -->
    <meta name="keywords" content="">

    <!-- Define the author of a page -->
    <meta name="author" content="NguyenSonArsenal">

    <meta name="google-site-verification" content="uUa28Cv5SpsXSfBxxQX-agw2rrsqnEss_fNSousYOwg" />

    <!-- Define the position of a page -->
    <meta name=”geo.placename” content="Ha Noi" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="21.02945;105.854444" />
    <meta name="ICBM" content="21.02945, 105.854444" />

    <!-- Define the favicon of a page -->
    <link href="<?php assetsFrontend('assets/images/layout/favicon.png')?>" type="image/x-icon" rel="icon">


    <link rel="canonical" href="">

    <link href="<?php assetsFrontend('bower_components/bootstrap4/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('bower_components/animate/animate.min.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=vietnamese&&w=2.2.7.22008864"/>

    <script src="<?php assetsFrontend('/bower_components/jquery/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php assetsFrontend('/bower_components/bootstrap4/js/bootstrap.min.js')?>"></script>
    <link href="<?php assetsFrontend('assets/css/common.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('assets/css/style.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('/assets/css/index.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('assets/css/profile.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('/assets/css/contact.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('/assets/css/404.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php assetsFrontend('/assets/css/post.css')?>" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145067257-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145067257-1');
    </script>

</head>
<body>
<div id="loading" style="display: none">
    <img id="loading-image" src="<?php assetsFrontend('assets/images/loading.gif')?>" alt="Loading...">
</div>
<div class="hidden" id="http-host-alias"><?php assetsFrontend() ?></div>
<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?php assetsFrontend('assets/images/layout/favicon.png')?>" alt="Logo">
                <span class="company-name color-red">NguyenSonArsenal</span><br>
                <img src="<?php assetsFrontend('assets/images/layout/favicon.png')?>" alt="Logo" class="opacity-0">
                <small class="f12 color-red">Sương gió phủ đời trai</small>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-expanded="false">
                <img src="<?php assetsFrontend('assets/images/layout/menu.png')?>" alt="image name">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav navbar-right ml-auto">
                    <li class="nav-item" data-scroll="home">
                        <a class="nav-item__link nav-item__link_home <?php getMenuActive('home') ?>" href="/">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="home">
                        <a class="nav-item__link nav-item__link_home <?php getMenuActive('post') ?>" href="{{ frontendRouter('post.list') }}">
                            <span>Chém gió</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="about">
                        <a class="nav-item__link nav-item__link_about <?php getMenuActive('profile') ?>" href="{{ frontendRouter('profile') }}">
                            <span>PR bản thân</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="partner">
                        <a class="nav-item__link nav-item__link_partner <?php getMenuActive('contact') ?>" href="{{ frontendRouter('contact') }}">
                            <span>Liên hệ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="text-center">
        <div class="color--grey">© 2019 <a href="/" class="color-red">NguyenSonArsenal</a>
            <img src="<?php assetsFrontend('assets/images/heart.svg') ?>" alt="image name"> Tại Hà Nội
        </div>
        <div class="footer__back-to-top">
            <img id="icon-back-to-top" src="<?php assetsFrontend('assets/images/arrow-up-icon.png') ?>" alt="Back to top">
        </div>
    </footer>
</div>
</body>
<script src="<?php assetsFrontend('assets/js/common.js') ?>"></script>
<script src="<?php assetsFrontend('assets/js/index.js') ?>"></script>
</html>
