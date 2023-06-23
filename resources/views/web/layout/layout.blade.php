<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="{{ URL::asset('web/img/d.png') }}" type="image/x-icon">

    @include('web.layout.style')


</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src='{{ URL::asset('web/img/ie8-panel/warning_bar_0000_us.jpg') }}' height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-logo"><img src='{{ URL::asset('web/img/logo.png') }}' alt=""
                width="250" height="85" srcset='{{ URL::asset('web/img/logo.png') }} 2x' />
        </div>
        <div class="preloader-body">
            <div id="loadingProgressG">
                <div class="loadingProgressG" id="loadingProgressG_1"></div>
            </div>
        </div>
    </div>

    <div class="page">
        <!-- Page Header-->
        {{-- <a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html"
            target="_blank">
            <img src="{{ URL::asset('web/img/intense_02.jpg') }}" alt="" />
        </a> --}}

        <header class="section novi-background page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                    data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true"
                    data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static"
                    data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="/"><img
                                        src="{{ URL::asset('web/img/logo.png') }}" alt=""
                                        width="195" height="85"
                                        srcset="{{ URL::asset('web/img/logo.png') }} 2x" /></a>
                            </div>
                            <div class="rd-navbar-collapse">
                                <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                                    data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                                <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                                    <article class="unit align-items-center">
                                        <div class="unit-left"><span
                                                class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                                        <div class="unit-body">
                                            <ul class="list-0">
                                                <li><a class="link-default" href="tel:#">1-800-1234-567</a></li>
                                                <li><a class="link-default" href="tel:#">1-800-8763-765</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="unit align-items-center">
                                        <div class="unit-left"><span
                                                class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span>
                                        </div>
                                        <div class="unit-body"><a class="link-default" href="tel:#">2130 Fulton Street
                                                <br>
                                                San Diego, CA 94117-1080</a></div>
                                    </article><a class="button button-gray-bordered button-winona"
                                        href="#">Request a
                                        call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About us</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('.projects') }}">Our Projrcts</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="typography.html">Typography</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="section novi-background footer-advanced bg-gray-700">
            <div class="footer-advanced-main">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-lg-4">
                            <h5 class="font-weight-bold text-uppercase text-white">About Us</h5>
                            <p class="footer-advanced-text">inHouse is the largest full-service real estate and
                                property
                                management company. We offer expertise in the marketing and sale of a wide range of
                                properties,
                                including residential real estate, farms and lifestyle blocks, as well as commercial and
                                industrial properties that we hope may interest you.</p>
                        </div>
                        {{-- <div class="col-sm-7 col-md-5 col-lg-4">
                            <h5 class="font-weight-bold text-uppercase text-white">Recent Blog Posts</h5>
                            <!-- Post Inline-->
                            <article class="post-inline">
                                <p class="post-inline-title"><a href="#">Real Estate Guide: 7 Important Tips for
                                        Buying
                                        a Home</a></p>
                                <ul class="post-inline-meta">
                                    <li>by Mike Barnes</li>
                                    <li><a href="#">2 days ago</a></li>
                                </ul>
                            </article>
                            <!-- Post Inline-->
                            <article class="post-inline">
                                <p class="post-inline-title"><a href="#">Single-Family Homes as a Housing Option
                                        for
                                        Young Families</a></p>
                                <ul class="post-inline-meta">
                                    <li>by Mike Barnes</li>
                                    <li><a href="#">2 days ago</a></li>
                                </ul>
                            </article>
                        </div> --}}
                        {{-- <div class="col-sm-5 col-md-7 col-lg-4">
                            <h5 class="font-weight-bold text-uppercase text-white">Gallery</h5>
                            <div class="row row-x-10" data-lightgallery="group">
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-1.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-1-85x85.jpg') }}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-2.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-2-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-3.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-3-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-4.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-4-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-5.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-5-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-6.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-6-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"> </div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-7.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-7-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                                <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal"
                                        href="{{ URL::asset('web/img/gallery-original-8.jpg')}}" data-lightgallery="item"><img
                                            class="thumbnail-minimal-image" src="{{ URL::asset('web/img/footer-gallery-8-85x85.jpg')}}"
                                            alt="" />
                                        <div class="thumbnail-minimal-caption"></div>
                                    </a></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="footer-advanced-aside">
                <div class="container">
                    <div class="footer-advanced-layout">
                        <div>
                            <ul class="list-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="foter-social-links list-inline list-inline-md">
                                <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook"
                                        href="#"></a>
                                </li>
                                <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a>
                                </li>
                                <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram"
                                        href="#"></a>
                                </li>
                                <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a>
                                </li>
                                <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin"
                                        href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr />
            </div>
            <div class="footer-advanced-aside">
                <div class="container">
                    <div class="footer-advanced-layout"><a class="brand" href="/"><img
                                src="{{ URL::asset('web/img/logo.png')}}" alt="" width="195" height="85"
                                srcset="{{ URL::asset('web/img/logo.png')}} 2x" /></a>
                        <!-- Rights-->
                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights
                            Reserved.
                            Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    @include('web.layout.script')
</body>


</html>
