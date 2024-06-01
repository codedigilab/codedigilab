<!DOCTYPE html>
<html lang="en">

<head>
    @include('include/head')
    @livewireStyles
</head>

<body>
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
                                Error Page
                            </h1>
                            <ul class="breadcrumnd d-inline-flex align-items-center gap-2 pra-border radius100 py-xxl-3 py-2 px-xxl-4 px-4"
                                data-aos="zoom-in-right" data-aos-duration="2000">
                                <li>
                                    <a href="/" class="text-uppercase htheme">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <span class="rot60 d-inline-block">
                                        <i class="fas fa-arrow-up"></i>
                                    </span>
                                </li>
                                <li class="theme-clr">
                                    Error Page
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

        <!-- Error Oops Start -->
        <section class="blog-grid pt-space pb-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="error-content text-center">
                            <div class="thumb mb-xxl-15 mb-xl-10 mb-lg-8 mb-md-6 mb-5 w-100" data-aos="zoom-in"
                                data-aos-duration="1400">
                                <img src="assets/img/error/opps.png" alt="img" class="w-100">
                            </div>
                            <h2 class="white-clr mb-xxl-7 mb-xl-6 mb-5">
                                <span class="theme-clr">Oops!</span> Page not found
                            </h2>
                            <p class="white-clr mb-xxl-12 mb-xl-9 mb-lg-8 mb-5">
                                The page you are looking for does not exist
                            </p>
                            <a href="/" class="cmn-btn themebg py-xxl-4 py-3 px-xxl-6 px-5 text-whitess">
                                Back To Home Page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Error Oops End -->

    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts
</body>

</html>