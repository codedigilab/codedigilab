<!doctype html>
<html lang="en">

<!--<< Header Area >>-->

<head>

    @include('include/head')
    @livewireStyles
</head>

<body class="position-relative bg2-clr">


    @include('include/header')

    <!-- Main start -->
    <main class="main">

        <!-- Breadcrumnd Banner -->
        <section class="breadcrumnd-banner position-relative">
            <div class="container">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-5">
                        <div class="breadcrumnd-content text-center">
                            <h1 class="white mb-xxl-10 mb-xl-8 mb-6" data-aos="zoom-in-left" data-aos-duration="1800">
                                Blog Grid
                            </h1>
                            <ul class="breadcrumnd d-inline-flex align-items-center gap-2 pra-border radius100 py-xxl-3 py-2 px-xxl-4 px-4"
                                data-aos="zoom-in-right" data-aos-duration="2000">
                                <li>
                                    <a href="/" wire:navigate class="text-uppercase htheme">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <span class="rot60 d-inline-block">
                                        <i class="fas fa-arrow-up"></i>
                                    </span>
                                </li>
                                <li class="theme-clr">
                                    Blog Grid
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Element-->
            <img src="assets/img/element/cmn-dost.png" alt="img" class="cmn-dots">
            <div class="cmn-svg-shape cmn-svg">
                <svg width="211" height="211" viewBox="0 0 211 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M153.353 98.3617V190.413H210V1H20.5872V57.6468H112.638L2 168.285L42.7149 209L153.353 98.3617Z"
                        stroke="url(#paint0_linear_6584_3026)" stroke-width="2" />
                    <defs>
                        <linearGradient id="paint0_linear_6584_3026" x1="416.867" y1="-216.267" x2="8.49998" y2="192.1"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="2" stop-color="#E3FF04" />
                            <stop offset="1" stop-color="#FF7425" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </section>
        <!-- Breadcrumnd Banner -->

        <!-- Blog Grid Start -->
        <section class="blog-grid pt-space pb-space">
            <div class="container">
                <div class="row g-xxl-7 g-xl-6 g-6">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-widget-item">
                            <div class="thumb w-100 overflow-hidden mb-xxl-7 mb-xl-6 mb-4">
                                <img src="assets/img/blog/mblog1.png" alt="img" class="w-100 overflow-hidden">
                            </div>
                            <div class="blog-cont">
                                <div class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-3 mb-xxl-5 mb-xl-4 mb-3">
                                    <a href="#"
                                        class="radius-btn cmn-border radius100 py-xxl-1 py-1 px-xxl-4 px-3 theme-clr">
                                        Creative
                                    </a>
                                    <span class="bspan-clr">
                                        MARCH 24, 2024
                                    </span>
                                </div>
                                <h5>
                                    <a href="#" class="white-clr">
                                        Transforming Challenges into
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-widget-item">
                            <div class="thumb w-100 overflow-hidden mb-xxl-7 mb-xl-6 mb-4">
                                <img src="assets/img/blog/mblog2.png" alt="img" class="w-100 overflow-hidden">
                            </div>
                            <div class="blog-cont">
                                <div class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-3 mb-xxl-5 mb-xl-4 mb-3">
                                    <a href="#"
                                        class="radius-btn cmn-border radius100 py-xxl-1 py-1 px-xxl-4 px-3 theme-clr">
                                        Creative
                                    </a>
                                    <span class="bspan-clr">
                                        MARCH 24, 2024
                                    </span>
                                </div>
                                <h5>
                                    <a href="#" class="white-clr">
                                        Design Inspiration Where to Find
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-widget-item">
                            <div class="thumb w-100 overflow-hidden mb-xxl-7 mb-xl-6 mb-4">
                                <img src="assets/img/blog/mblog3.png" alt="img" class="w-100 overflow-hidden">
                            </div>
                            <div class="blog-cont">
                                <div class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-3 mb-xxl-5 mb-xl-4 mb-3">
                                    <a href="#"
                                        class="radius-btn cmn-border radius100 py-xxl-1 py-1 px-xxl-4 px-3 theme-clr">
                                        Creative
                                    </a>
                                    <span class="bspan-clr">
                                        MARCH 24, 2024
                                    </span>
                                </div>
                                <h5>
                                    <a href="#" class="white-clr">
                                        Creating new working in the digital
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-widget-item">
                            <div class="thumb w-100 overflow-hidden mb-xxl-7 mb-xl-6 mb-4">
                                <img src="assets/img/blog/mblog4.png" alt="img" class="w-100 overflow-hidden">
                            </div>
                            <div class="blog-cont">
                                <div class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-3 mb-xxl-5 mb-xl-4 mb-3">
                                    <a href="#"
                                        class="radius-btn cmn-border radius100 py-xxl-1 py-1 px-xxl-4 px-3 theme-clr">
                                        Creative
                                    </a>
                                    <span class="bspan-clr">
                                        MARCH 24, 2024
                                    </span>
                                </div>
                                <h5>
                                    <a href="#" class="white-clr">
                                        Business meeting San Francisco
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-widget-item">
                            <div class="thumb w-100 overflow-hidden mb-xxl-7 mb-xl-6 mb-4">
                                <img src="assets/img/blog/mblog5.png" alt="img" class="w-100 overflow-hidden">
                            </div>
                            <div class="blog-cont">
                                <div class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-3 mb-xxl-5 mb-xl-4 mb-3">
                                    <a href="#"
                                        class="radius-btn cmn-border radius100 py-xxl-1 py-1 px-xxl-4 px-3 theme-clr">
                                        Creative
                                    </a>
                                    <span class="bspan-clr">
                                        MARCH 24, 2024
                                    </span>
                                </div>
                                <h5>
                                    <a href="#" class="white-clr">
                                        Free advertising for your online
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-widget-item">
                            <div class="thumb w-100 overflow-hidden mb-xxl-7 mb-xl-6 mb-4">
                                <img src="assets/img/blog/mblog6.png" alt="img" class="w-100 overflow-hidden">
                            </div>
                            <div class="blog-cont">
                                <div class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-3 mb-xxl-5 mb-xl-4 mb-3">
                                    <a href="#"
                                        class="radius-btn cmn-border radius100 py-xxl-1 py-1 px-xxl-4 px-3 theme-clr">
                                        Creative
                                    </a>
                                    <span class="bspan-clr">
                                        MARCH 24, 2024
                                    </span>
                                </div>
                                <h5>
                                    <a href="#" class="white-clr">
                                        Creating new working in the digital
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Grid End -->

    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts

</body>

</html>