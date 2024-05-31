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
                    <div class="col-lg-7">
                        <div class="breadcrumnd-content text-center">
                            <h1 class="white mb-xxl-10 mb-xl-8 mb-6" data-aos="zoom-in-left" data-aos-duration="1800">
                                CASE STUDY
                            </h1>
                            <ul class="breadcrumnd d-inline-flex align-items-center gap-2 pra-border radius100 py-xxl-3 py-2 px-xxl-4 px-4"
                                data-aos="zoom-in-right" data-aos-duration="2000">
                                <li>
                                    <a href="index.html" class="text-uppercase htheme">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <span class="rot60 d-inline-block">
                                        <i class="fas fa-arrow-up"></i>
                                    </span>
                                </li>
                                <li class="theme-clr">
                                    CASE STUDY
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

        <!-- Team Start -->
        <section class="team-section pt-space pb-space">
            <div class="container">
                <div class="row g-xxl-7 g-xl-5 g-lg-4 g-3">
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1400">
                        <div class="team-common-item tilt">
                            <div class="thumb position-relative overflow-hidden w-100">
                                <img src="https://www.shadowinfosystem.com/static/media/desktop_banner.64e576016c49ab9a08a5.webp"
                                    alt="img" class="overflow-hidden w-100">
                                <!-- <ul class="common-social d-gr id align-items-center ga p-2">
                            <p style="background-color: red;">khalid</p>
                           
                        </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1600">
                        <div class="team-common-item tilt">
                            <div class="thumb position-relative overflow-hidden w-100">
                                <img src="https://www.shadowinfosystem.com/static/media/desktop_banner.64e576016c49ab9a08a5.webp"
                                    alt="img" class="overflow-hidden w-100">


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1700">
                        <div class="team-common-item tilt">
                            <div class="thumb position-relative overflow-hidden w-100">
                                <img src="https://www.shadowinfosystem.com/static/media/desktop_banner.64e576016c49ab9a08a5.webp"
                                    alt="img" class="overflow-hidden w-100">


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1700">
                        <div class="team-common-item tilt">
                            <div class="thumb position-relative overflow-hidden w-100">
                                <img src="https://www.shadowinfosystem.com/static/media/desktop_banner.64e576016c49ab9a08a5.webp"
                                    alt="img" class="overflow-hidden w-100">


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1700">
                        <div class="team-common-item tilt">
                            <div class="thumb position-relative overflow-hidden w-100">
                                <img src="https://www.shadowinfosystem.com/static/media/desktop_banner.64e576016c49ab9a08a5.webp"
                                    alt="img" class="overflow-hidden w-100">


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1700">
                        <div class="team-common-item tilt">
                            <div class="thumb position-relative overflow-hidden w-100">
                                <img src="https://www.shadowinfosystem.com/static/media/desktop_banner.64e576016c49ab9a08a5.webp"
                                    alt="img" class="overflow-hidden w-100">


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Team Details End -->

    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts
</body>

</html>