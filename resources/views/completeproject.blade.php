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
                                About Agency
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
                                    About
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

        <!-- Cmn About Start -->
        <section class="pt-space pb-space section-bg">
            <div class="container">
                <div class="row g-6 justify-content-between">
                    <div class="col-lg-6 pe-lg-14">
                        <div class="d-flex gap-xxl-7 gap-xl-5 gap-4 position-relative z-index-1">
                            <div class="about-small-thumb w-100" data-aos="zoom-in" data-aos-duration="1500">
                                <img src="assets/img/about/about-s1.png" alt="img" class="w-100">
                            </div>
                            <div class="about-small-thumb w-100 mt-xxl-10 mt-xl-7 mt-lg-5 mt-3" data-aos="zoom-in"
                                data-aos-duration="1800">
                                <img src="assets/img/about/about-s2.png" alt="img" class="w-100">
                            </div>
                            <!--- About Arrow -->
                            <img src="assets/img/element/arrow-right-storke.png" alt="img" class="about-tumb-arrow">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-samll-content">
                            <div class="pricing-title">
                                <div class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5"
                                    data-aos="zoom-in-left" data-aos-duration="1400">
                                    ABOUT Code Digi Lab
                                    <span class="rot60 d-inline-block">
                                        <i class="fas fa-arrow-up theme-clr"></i>
                                    </span>
                                </div>
                                <h2 class="stitle d-flex align-items-center mb-xxl-8 mb-xl-7 mb-lg-6 mb-5 gap-xxl-7 gap-xl-5 gap-3"
                                    data-aos="zoom-in-left" data-aos-duration="1700">
                                    <img src="assets/img/element/arrow-right-storke.png" alt="img" data-aos="zoom-in-up"
                                        data-aos-duration="2000">
                                    To Create Artistic & Creative Design
                                </h2>
                                <p class="white-clr mb-xxl-8 mb-xl-8 mb-5" data-aos="zoom-in-up"
                                    data-aos-duration="1400">
                                    Bring to the table win-win survival strategies to ensure proactive domination. At
                                    the end of the day, going forward, a
                                    new normal that has evolved from generation on the runway heading towards a
                                    streamlined cloud.
                                </p>
                                <div class="result-progress-wrap" data-aos="zoom-in-up" data-aos-duration="1800">
                                    <div class="progres-item mb-xxl-6 mb-xl-5 mb-4">
                                        <div class="d-flex align-items-center justify-content-between mb-xxl-4 mb-3">
                                            <span class="conssub">
                                                Branding Design
                                            </span>
                                            <span class="cons">88%</span>
                                        </div>
                                        <div class="progress-solving">
                                            <div class="progress-bar"></div>
                                        </div>
                                    </div>
                                    <div class="progres-item">
                                        <div class="d-flex align-items-center justify-content-between mb-xxl-4 mb-3">
                                            <span class="conssub">
                                                Business
                                            </span>
                                            <span class="cons">96%</span>
                                        </div>
                                        <div class="progress-solving">
                                            <div class="progress-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cmn About End -->

        <!-- Cmn Team stafs Start -->
        <section class="team-staft  pb-space">
            <div class="team-staft-slidewrap  mt-6">
                <div class="digital-marketing mb-lg-0 mb-10">
                    <div class="comm">
                        <div class="cmn-textslide d-grid position-relative">
                            <span
                                class="d-flex justify-content-center serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                01
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Product Design
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab1.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                02
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            UI/UX Experience
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab2.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                03
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Digital Marketing
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab3.png" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide d-grid position-relative">
                            <span
                                class="d-flex justify-content-center serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                04
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Product Design
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab4.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                05
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            UI/UX Experience
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab1.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                06
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Digital Marketing
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab3.png" alt="img">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="digital-marketing text-slie-reverse">
                    <div class="comm">
                        <div class="cmn-textslide d-grid position-relative">
                            <span
                                class="d-flex justify-content-center serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                01
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Ecommerce Solutions
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab1.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                02
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Custom Solutions
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab2.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                03
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Ecommerce
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab3.png" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide d-grid position-relative">
                            <span
                                class="d-flex justify-content-center serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                04
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Custom Solutions
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab4.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                05
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Mobile app
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab1.png" alt="img">
                            </span>
                        </div>
                        <div class="cmn-textslide d-grid position-relative">
                            <span class="d-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                06
                                <span class="rot60 d-inline-block theme-clr">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </span>
                            Creative Design
                            <span class="digital-thumb">
                                <img src="assets/img/service/tab3.png" alt="img">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div
                    class="d-flex align-items-center justify-content-between flex-wrap gap-5 mb-xxl-15 mb-xl-12 mb-lg-10 mb-md-10 mb-sm-10 mb-9">
                    <div class="pricing-title">
                        <div
                            class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5">
                            oUR experts
                            <span class="rot60 d-inline-block">
                                <i class="fas fa-arrow-up theme-clr"></i>
                            </span>
                        </div>

                    </div>

                </div>
                <div class="row swiper study-slidewrappp g-xxl-7 g-xl-5 g-4 justify-content-center">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fadein"
                            data-aos-duration="1400">
                            <div class="team-card01 tilt overflow-hidden">
                                <div class="thumb overflow-hidden w-100 position-relative mb-xxl-7 mb-xl-6 mb-5">
                                    <img style="border-radius: 20px;" src="assets/img/team/team2.png" alt="img"
                                        class="w-100">
                                    <ul
                                        class="common-social d-flex align-items-center justify-content-center gap-xxl-3 gap-xl-2 gap-1">
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0391 11.25L10.5859 7.65625H7.10938V5.3125C7.10938 4.29688 7.57812 3.35938 9.14062 3.35938H10.7422V0.273438C10.7422 0.273438 9.29688 0 7.92969 0C5.07812 0 3.20312 1.75781 3.20312 4.88281V7.65625H0V11.25H3.20312V20H7.10938V11.25H10.0391Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.7645 4.84375C7.90737 4.84375 5.63058 7.16518 5.63058 9.97768C5.63058 12.8348 7.90737 15.1116 10.7645 15.1116C13.577 15.1116 15.8984 12.8348 15.8984 9.97768C15.8984 7.16518 13.577 4.84375 10.7645 4.84375ZM10.7645 13.3259C8.93415 13.3259 7.41629 11.8527 7.41629 9.97768C7.41629 8.14732 8.88951 6.67411 10.7645 6.67411C12.5949 6.67411 14.0681 8.14732 14.0681 9.97768C14.0681 11.8527 12.5949 13.3259 10.7645 13.3259ZM17.2824 4.66518C17.2824 3.99554 16.7467 3.45982 16.077 3.45982C15.4074 3.45982 14.8717 3.99554 14.8717 4.66518C14.8717 5.33482 15.4074 5.87054 16.077 5.87054C16.7467 5.87054 17.2824 5.33482 17.2824 4.66518ZM20.6752 5.87054C20.5859 4.26339 20.2288 2.83482 19.0681 1.67411C17.9074 0.513393 16.4788 0.15625 14.8717 0.0669643C13.2199 -0.0223214 8.26451 -0.0223214 6.61272 0.0669643C5.00558 0.15625 3.62165 0.513393 2.41629 1.67411C1.25558 2.83482 0.898438 4.26339 0.809152 5.87054C0.719866 7.52232 0.719866 12.4777 0.809152 14.1295C0.898438 15.7366 1.25558 17.1205 2.41629 18.3259C3.62165 19.4866 5.00558 19.8438 6.61272 19.933C8.26451 20.0223 13.2199 20.0223 14.8717 19.933C16.4788 19.8438 17.9074 19.4866 19.0681 18.3259C20.2288 17.1205 20.5859 15.7366 20.6752 14.1295C20.7645 12.4777 20.7645 7.52232 20.6752 5.87054ZM18.5324 15.8705C18.2199 16.7634 17.5056 17.433 16.6574 17.7902C15.3181 18.3259 12.1931 18.192 10.7645 18.192C9.2913 18.192 6.16629 18.3259 4.87165 17.7902C3.97879 17.433 3.30915 16.7634 2.95201 15.8705C2.41629 14.5759 2.55022 11.4509 2.55022 9.97768C2.55022 8.54911 2.41629 5.42411 2.95201 4.08482C3.30915 3.23661 3.97879 2.56696 4.87165 2.20982C6.16629 1.67411 9.2913 1.80804 10.7645 1.80804C12.1931 1.80804 15.3181 1.67411 16.6574 2.20982C17.5056 2.52232 18.1752 3.23661 18.5324 4.08482C19.0681 5.42411 18.9342 8.54911 18.9342 9.97768C18.9342 11.4509 19.0681 14.5759 18.5324 15.8705Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22.8627 4.96386C23.8265 4.24096 24.694 3.37349 25.3687 2.36145C24.5012 2.74699 23.4892 3.03614 22.4771 3.13253C23.5374 2.50602 24.3085 1.54217 24.694 0.337349C23.7301 0.915663 22.6217 1.3494 21.5133 1.59036C20.5494 0.578313 19.2482 0 17.8024 0C15.0072 0 12.7422 2.26506 12.7422 5.06024C12.7422 5.44578 12.7904 5.83133 12.8868 6.21687C8.69399 5.9759 4.93496 3.95181 2.42893 0.915663C1.9952 1.63855 1.75424 2.50602 1.75424 3.46988C1.75424 5.20482 2.62171 6.74699 4.0193 7.66265C3.20002 7.61446 2.38074 7.42169 1.70604 7.03614V7.08434C1.70604 9.54217 3.44098 11.5663 5.75424 12.0482C5.36869 12.1446 4.88677 12.241 4.45303 12.241C4.11568 12.241 3.82652 12.1928 3.48918 12.1446C4.11568 14.1687 5.9952 15.6145 8.21207 15.6627C6.47713 17.012 4.30845 17.8313 1.94701 17.8313C1.51327 17.8313 1.12773 17.7831 0.742188 17.7349C2.95906 19.1807 5.60966 20 8.50122 20C17.8024 20 22.8627 12.3373 22.8627 5.63855C22.8627 5.39759 22.8627 5.20482 22.8627 4.96386Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.54036 0C4.41469 0 0.369141 2.72374 0.369141 7.16984C0.369141 9.97369 1.93128 11.5759 2.8926 11.5759C3.29315 11.5759 3.53348 10.4944 3.53348 10.174C3.53348 9.81347 2.57216 9.01237 2.57216 7.45023C2.57216 4.24583 5.01552 1.96269 8.17986 1.96269C10.9437 1.96269 12.9464 3.52484 12.9464 6.36874C12.9464 8.49166 12.1052 12.4571 9.34146 12.4571C8.34008 12.4571 7.45887 11.7361 7.45887 10.7347C7.45887 9.21264 8.54036 7.73061 8.54036 6.16847C8.54036 3.52484 4.77519 4.0055 4.77519 7.2099C4.77519 7.89083 4.8553 8.61182 5.17574 9.2527C4.61497 11.6159 3.49343 15.1808 3.49343 17.6242C3.49343 18.3852 3.57354 19.1062 3.65365 19.8673C3.77381 20.0275 3.73376 20.0275 3.93403 19.9474C5.93678 17.1836 5.89673 16.6228 6.77794 13.0179C7.29865 13.9391 8.54036 14.4598 9.58179 14.4598C13.8276 14.4598 15.7503 10.2941 15.7503 6.56902C15.7503 2.60357 12.3055 0 8.54036 0Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <span class="bspan-clr position-relative mb-xxl-4 mb-xxl-3 mb-3">
                                        Programmer
                                    </span>
                                    <h5 class="white-clr whitehover">
                                        <a href="#" class="white-clr whitehover">Leslie Alexander</a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-lg-18" data-aos="fadein"
                            data-aos-duration="1400">
                            <div class="team-card01 tilt overflow-hidden">
                                <div class="thumb overflow-hidden w-100 position-relative mb-xxl-7 mb-xl-6 mb-5">
                                    <img style="border-radius: 20px;" src="assets/img/team/team3.png" alt="img"
                                        class="w-100">
                                    <ul
                                        class="common-social d-flex align-items-center justify-content-center gap-xxl-3 gap-xl-2 gap-1">
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0391 11.25L10.5859 7.65625H7.10938V5.3125C7.10938 4.29688 7.57812 3.35938 9.14062 3.35938H10.7422V0.273438C10.7422 0.273438 9.29688 0 7.92969 0C5.07812 0 3.20312 1.75781 3.20312 4.88281V7.65625H0V11.25H3.20312V20H7.10938V11.25H10.0391Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.7645 4.84375C7.90737 4.84375 5.63058 7.16518 5.63058 9.97768C5.63058 12.8348 7.90737 15.1116 10.7645 15.1116C13.577 15.1116 15.8984 12.8348 15.8984 9.97768C15.8984 7.16518 13.577 4.84375 10.7645 4.84375ZM10.7645 13.3259C8.93415 13.3259 7.41629 11.8527 7.41629 9.97768C7.41629 8.14732 8.88951 6.67411 10.7645 6.67411C12.5949 6.67411 14.0681 8.14732 14.0681 9.97768C14.0681 11.8527 12.5949 13.3259 10.7645 13.3259ZM17.2824 4.66518C17.2824 3.99554 16.7467 3.45982 16.077 3.45982C15.4074 3.45982 14.8717 3.99554 14.8717 4.66518C14.8717 5.33482 15.4074 5.87054 16.077 5.87054C16.7467 5.87054 17.2824 5.33482 17.2824 4.66518ZM20.6752 5.87054C20.5859 4.26339 20.2288 2.83482 19.0681 1.67411C17.9074 0.513393 16.4788 0.15625 14.8717 0.0669643C13.2199 -0.0223214 8.26451 -0.0223214 6.61272 0.0669643C5.00558 0.15625 3.62165 0.513393 2.41629 1.67411C1.25558 2.83482 0.898438 4.26339 0.809152 5.87054C0.719866 7.52232 0.719866 12.4777 0.809152 14.1295C0.898438 15.7366 1.25558 17.1205 2.41629 18.3259C3.62165 19.4866 5.00558 19.8438 6.61272 19.933C8.26451 20.0223 13.2199 20.0223 14.8717 19.933C16.4788 19.8438 17.9074 19.4866 19.0681 18.3259C20.2288 17.1205 20.5859 15.7366 20.6752 14.1295C20.7645 12.4777 20.7645 7.52232 20.6752 5.87054ZM18.5324 15.8705C18.2199 16.7634 17.5056 17.433 16.6574 17.7902C15.3181 18.3259 12.1931 18.192 10.7645 18.192C9.2913 18.192 6.16629 18.3259 4.87165 17.7902C3.97879 17.433 3.30915 16.7634 2.95201 15.8705C2.41629 14.5759 2.55022 11.4509 2.55022 9.97768C2.55022 8.54911 2.41629 5.42411 2.95201 4.08482C3.30915 3.23661 3.97879 2.56696 4.87165 2.20982C6.16629 1.67411 9.2913 1.80804 10.7645 1.80804C12.1931 1.80804 15.3181 1.67411 16.6574 2.20982C17.5056 2.52232 18.1752 3.23661 18.5324 4.08482C19.0681 5.42411 18.9342 8.54911 18.9342 9.97768C18.9342 11.4509 19.0681 14.5759 18.5324 15.8705Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22.8627 4.96386C23.8265 4.24096 24.694 3.37349 25.3687 2.36145C24.5012 2.74699 23.4892 3.03614 22.4771 3.13253C23.5374 2.50602 24.3085 1.54217 24.694 0.337349C23.7301 0.915663 22.6217 1.3494 21.5133 1.59036C20.5494 0.578313 19.2482 0 17.8024 0C15.0072 0 12.7422 2.26506 12.7422 5.06024C12.7422 5.44578 12.7904 5.83133 12.8868 6.21687C8.69399 5.9759 4.93496 3.95181 2.42893 0.915663C1.9952 1.63855 1.75424 2.50602 1.75424 3.46988C1.75424 5.20482 2.62171 6.74699 4.0193 7.66265C3.20002 7.61446 2.38074 7.42169 1.70604 7.03614V7.08434C1.70604 9.54217 3.44098 11.5663 5.75424 12.0482C5.36869 12.1446 4.88677 12.241 4.45303 12.241C4.11568 12.241 3.82652 12.1928 3.48918 12.1446C4.11568 14.1687 5.9952 15.6145 8.21207 15.6627C6.47713 17.012 4.30845 17.8313 1.94701 17.8313C1.51327 17.8313 1.12773 17.7831 0.742188 17.7349C2.95906 19.1807 5.60966 20 8.50122 20C17.8024 20 22.8627 12.3373 22.8627 5.63855C22.8627 5.39759 22.8627 5.20482 22.8627 4.96386Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.54036 0C4.41469 0 0.369141 2.72374 0.369141 7.16984C0.369141 9.97369 1.93128 11.5759 2.8926 11.5759C3.29315 11.5759 3.53348 10.4944 3.53348 10.174C3.53348 9.81347 2.57216 9.01237 2.57216 7.45023C2.57216 4.24583 5.01552 1.96269 8.17986 1.96269C10.9437 1.96269 12.9464 3.52484 12.9464 6.36874C12.9464 8.49166 12.1052 12.4571 9.34146 12.4571C8.34008 12.4571 7.45887 11.7361 7.45887 10.7347C7.45887 9.21264 8.54036 7.73061 8.54036 6.16847C8.54036 3.52484 4.77519 4.0055 4.77519 7.2099C4.77519 7.89083 4.8553 8.61182 5.17574 9.2527C4.61497 11.6159 3.49343 15.1808 3.49343 17.6242C3.49343 18.3852 3.57354 19.1062 3.65365 19.8673C3.77381 20.0275 3.73376 20.0275 3.93403 19.9474C5.93678 17.1836 5.89673 16.6228 6.77794 13.0179C7.29865 13.9391 8.54036 14.4598 9.58179 14.4598C13.8276 14.4598 15.7503 10.2941 15.7503 6.56902C15.7503 2.60357 12.3055 0 8.54036 0Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <span class="bspan-clr position-relative mb-xxl-4 mb-xxl-3 mb-3">
                                        UI/UX designer
                                    </span>
                                    <h5 class="white-clr">
                                        <a href="#" class="white-clr whitehover">Darlene Robertson</a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fadein"
                            data-aos-duration="1400">
                            <div class="team-card01 tilt overflow-hidden">
                                <div class="thumb overflow-hidden w-100 position-relative mb-xxl-7 mb-xl-6 mb-5">
                                    <img style="border-radius: 20px;" src="assets/img/team/team4.png" alt="img"
                                        class="w-100">
                                    <ul
                                        class="common-social d-flex align-items-center justify-content-center gap-xxl-3 gap-xl-2 gap-1">
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0391 11.25L10.5859 7.65625H7.10938V5.3125C7.10938 4.29688 7.57812 3.35938 9.14062 3.35938H10.7422V0.273438C10.7422 0.273438 9.29688 0 7.92969 0C5.07812 0 3.20312 1.75781 3.20312 4.88281V7.65625H0V11.25H3.20312V20H7.10938V11.25H10.0391Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.7645 4.84375C7.90737 4.84375 5.63058 7.16518 5.63058 9.97768C5.63058 12.8348 7.90737 15.1116 10.7645 15.1116C13.577 15.1116 15.8984 12.8348 15.8984 9.97768C15.8984 7.16518 13.577 4.84375 10.7645 4.84375ZM10.7645 13.3259C8.93415 13.3259 7.41629 11.8527 7.41629 9.97768C7.41629 8.14732 8.88951 6.67411 10.7645 6.67411C12.5949 6.67411 14.0681 8.14732 14.0681 9.97768C14.0681 11.8527 12.5949 13.3259 10.7645 13.3259ZM17.2824 4.66518C17.2824 3.99554 16.7467 3.45982 16.077 3.45982C15.4074 3.45982 14.8717 3.99554 14.8717 4.66518C14.8717 5.33482 15.4074 5.87054 16.077 5.87054C16.7467 5.87054 17.2824 5.33482 17.2824 4.66518ZM20.6752 5.87054C20.5859 4.26339 20.2288 2.83482 19.0681 1.67411C17.9074 0.513393 16.4788 0.15625 14.8717 0.0669643C13.2199 -0.0223214 8.26451 -0.0223214 6.61272 0.0669643C5.00558 0.15625 3.62165 0.513393 2.41629 1.67411C1.25558 2.83482 0.898438 4.26339 0.809152 5.87054C0.719866 7.52232 0.719866 12.4777 0.809152 14.1295C0.898438 15.7366 1.25558 17.1205 2.41629 18.3259C3.62165 19.4866 5.00558 19.8438 6.61272 19.933C8.26451 20.0223 13.2199 20.0223 14.8717 19.933C16.4788 19.8438 17.9074 19.4866 19.0681 18.3259C20.2288 17.1205 20.5859 15.7366 20.6752 14.1295C20.7645 12.4777 20.7645 7.52232 20.6752 5.87054ZM18.5324 15.8705C18.2199 16.7634 17.5056 17.433 16.6574 17.7902C15.3181 18.3259 12.1931 18.192 10.7645 18.192C9.2913 18.192 6.16629 18.3259 4.87165 17.7902C3.97879 17.433 3.30915 16.7634 2.95201 15.8705C2.41629 14.5759 2.55022 11.4509 2.55022 9.97768C2.55022 8.54911 2.41629 5.42411 2.95201 4.08482C3.30915 3.23661 3.97879 2.56696 4.87165 2.20982C6.16629 1.67411 9.2913 1.80804 10.7645 1.80804C12.1931 1.80804 15.3181 1.67411 16.6574 2.20982C17.5056 2.52232 18.1752 3.23661 18.5324 4.08482C19.0681 5.42411 18.9342 8.54911 18.9342 9.97768C18.9342 11.4509 19.0681 14.5759 18.5324 15.8705Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22.8627 4.96386C23.8265 4.24096 24.694 3.37349 25.3687 2.36145C24.5012 2.74699 23.4892 3.03614 22.4771 3.13253C23.5374 2.50602 24.3085 1.54217 24.694 0.337349C23.7301 0.915663 22.6217 1.3494 21.5133 1.59036C20.5494 0.578313 19.2482 0 17.8024 0C15.0072 0 12.7422 2.26506 12.7422 5.06024C12.7422 5.44578 12.7904 5.83133 12.8868 6.21687C8.69399 5.9759 4.93496 3.95181 2.42893 0.915663C1.9952 1.63855 1.75424 2.50602 1.75424 3.46988C1.75424 5.20482 2.62171 6.74699 4.0193 7.66265C3.20002 7.61446 2.38074 7.42169 1.70604 7.03614V7.08434C1.70604 9.54217 3.44098 11.5663 5.75424 12.0482C5.36869 12.1446 4.88677 12.241 4.45303 12.241C4.11568 12.241 3.82652 12.1928 3.48918 12.1446C4.11568 14.1687 5.9952 15.6145 8.21207 15.6627C6.47713 17.012 4.30845 17.8313 1.94701 17.8313C1.51327 17.8313 1.12773 17.7831 0.742188 17.7349C2.95906 19.1807 5.60966 20 8.50122 20C17.8024 20 22.8627 12.3373 22.8627 5.63855C22.8627 5.39759 22.8627 5.20482 22.8627 4.96386Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.54036 0C4.41469 0 0.369141 2.72374 0.369141 7.16984C0.369141 9.97369 1.93128 11.5759 2.8926 11.5759C3.29315 11.5759 3.53348 10.4944 3.53348 10.174C3.53348 9.81347 2.57216 9.01237 2.57216 7.45023C2.57216 4.24583 5.01552 1.96269 8.17986 1.96269C10.9437 1.96269 12.9464 3.52484 12.9464 6.36874C12.9464 8.49166 12.1052 12.4571 9.34146 12.4571C8.34008 12.4571 7.45887 11.7361 7.45887 10.7347C7.45887 9.21264 8.54036 7.73061 8.54036 6.16847C8.54036 3.52484 4.77519 4.0055 4.77519 7.2099C4.77519 7.89083 4.8553 8.61182 5.17574 9.2527C4.61497 11.6159 3.49343 15.1808 3.49343 17.6242C3.49343 18.3852 3.57354 19.1062 3.65365 19.8673C3.77381 20.0275 3.73376 20.0275 3.93403 19.9474C5.93678 17.1836 5.89673 16.6228 6.77794 13.0179C7.29865 13.9391 8.54036 14.4598 9.58179 14.4598C13.8276 14.4598 15.7503 10.2941 15.7503 6.56902C15.7503 2.60357 12.3055 0 8.54036 0Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <span class="bspan-clr position-relative mb-xxl-4 mb-xxl-3 mb-3">
                                        Web developer
                                    </span>
                                    <h5 class="white-clr">
                                        <a href="#" class="white-clr whitehover">Marvin McKinney</a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-lg-18" data-aos="fadein"
                            data-aos-duration="1400">
                            <div class="team-card01 tilt overflow-hidden">
                                <div class="thumb overflow-hidden w-100 position-relative mb-xxl-7 mb-xl-6 mb-5">
                                    <img style="border-radius: 20px;" src="assets/img/team/team1.png" alt="img"
                                        class="w-100">
                                    <ul
                                        class="common-social d-flex align-items-center justify-content-center gap-xxl-3 gap-xl-2 gap-1">
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0391 11.25L10.5859 7.65625H7.10938V5.3125C7.10938 4.29688 7.57812 3.35938 9.14062 3.35938H10.7422V0.273438C10.7422 0.273438 9.29688 0 7.92969 0C5.07812 0 3.20312 1.75781 3.20312 4.88281V7.65625H0V11.25H3.20312V20H7.10938V11.25H10.0391Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.7645 4.84375C7.90737 4.84375 5.63058 7.16518 5.63058 9.97768C5.63058 12.8348 7.90737 15.1116 10.7645 15.1116C13.577 15.1116 15.8984 12.8348 15.8984 9.97768C15.8984 7.16518 13.577 4.84375 10.7645 4.84375ZM10.7645 13.3259C8.93415 13.3259 7.41629 11.8527 7.41629 9.97768C7.41629 8.14732 8.88951 6.67411 10.7645 6.67411C12.5949 6.67411 14.0681 8.14732 14.0681 9.97768C14.0681 11.8527 12.5949 13.3259 10.7645 13.3259ZM17.2824 4.66518C17.2824 3.99554 16.7467 3.45982 16.077 3.45982C15.4074 3.45982 14.8717 3.99554 14.8717 4.66518C14.8717 5.33482 15.4074 5.87054 16.077 5.87054C16.7467 5.87054 17.2824 5.33482 17.2824 4.66518ZM20.6752 5.87054C20.5859 4.26339 20.2288 2.83482 19.0681 1.67411C17.9074 0.513393 16.4788 0.15625 14.8717 0.0669643C13.2199 -0.0223214 8.26451 -0.0223214 6.61272 0.0669643C5.00558 0.15625 3.62165 0.513393 2.41629 1.67411C1.25558 2.83482 0.898438 4.26339 0.809152 5.87054C0.719866 7.52232 0.719866 12.4777 0.809152 14.1295C0.898438 15.7366 1.25558 17.1205 2.41629 18.3259C3.62165 19.4866 5.00558 19.8438 6.61272 19.933C8.26451 20.0223 13.2199 20.0223 14.8717 19.933C16.4788 19.8438 17.9074 19.4866 19.0681 18.3259C20.2288 17.1205 20.5859 15.7366 20.6752 14.1295C20.7645 12.4777 20.7645 7.52232 20.6752 5.87054ZM18.5324 15.8705C18.2199 16.7634 17.5056 17.433 16.6574 17.7902C15.3181 18.3259 12.1931 18.192 10.7645 18.192C9.2913 18.192 6.16629 18.3259 4.87165 17.7902C3.97879 17.433 3.30915 16.7634 2.95201 15.8705C2.41629 14.5759 2.55022 11.4509 2.55022 9.97768C2.55022 8.54911 2.41629 5.42411 2.95201 4.08482C3.30915 3.23661 3.97879 2.56696 4.87165 2.20982C6.16629 1.67411 9.2913 1.80804 10.7645 1.80804C12.1931 1.80804 15.3181 1.67411 16.6574 2.20982C17.5056 2.52232 18.1752 3.23661 18.5324 4.08482C19.0681 5.42411 18.9342 8.54911 18.9342 9.97768C18.9342 11.4509 19.0681 14.5759 18.5324 15.8705Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22.8627 4.96386C23.8265 4.24096 24.694 3.37349 25.3687 2.36145C24.5012 2.74699 23.4892 3.03614 22.4771 3.13253C23.5374 2.50602 24.3085 1.54217 24.694 0.337349C23.7301 0.915663 22.6217 1.3494 21.5133 1.59036C20.5494 0.578313 19.2482 0 17.8024 0C15.0072 0 12.7422 2.26506 12.7422 5.06024C12.7422 5.44578 12.7904 5.83133 12.8868 6.21687C8.69399 5.9759 4.93496 3.95181 2.42893 0.915663C1.9952 1.63855 1.75424 2.50602 1.75424 3.46988C1.75424 5.20482 2.62171 6.74699 4.0193 7.66265C3.20002 7.61446 2.38074 7.42169 1.70604 7.03614V7.08434C1.70604 9.54217 3.44098 11.5663 5.75424 12.0482C5.36869 12.1446 4.88677 12.241 4.45303 12.241C4.11568 12.241 3.82652 12.1928 3.48918 12.1446C4.11568 14.1687 5.9952 15.6145 8.21207 15.6627C6.47713 17.012 4.30845 17.8313 1.94701 17.8313C1.51327 17.8313 1.12773 17.7831 0.742188 17.7349C2.95906 19.1807 5.60966 20 8.50122 20C17.8024 20 22.8627 12.3373 22.8627 5.63855C22.8627 5.39759 22.8627 5.20482 22.8627 4.96386Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-center d-center">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.54036 0C4.41469 0 0.369141 2.72374 0.369141 7.16984C0.369141 9.97369 1.93128 11.5759 2.8926 11.5759C3.29315 11.5759 3.53348 10.4944 3.53348 10.174C3.53348 9.81347 2.57216 9.01237 2.57216 7.45023C2.57216 4.24583 5.01552 1.96269 8.17986 1.96269C10.9437 1.96269 12.9464 3.52484 12.9464 6.36874C12.9464 8.49166 12.1052 12.4571 9.34146 12.4571C8.34008 12.4571 7.45887 11.7361 7.45887 10.7347C7.45887 9.21264 8.54036 7.73061 8.54036 6.16847C8.54036 3.52484 4.77519 4.0055 4.77519 7.2099C4.77519 7.89083 4.8553 8.61182 5.17574 9.2527C4.61497 11.6159 3.49343 15.1808 3.49343 17.6242C3.49343 18.3852 3.57354 19.1062 3.65365 19.8673C3.77381 20.0275 3.73376 20.0275 3.93403 19.9474C5.93678 17.1836 5.89673 16.6228 6.77794 13.0179C7.29865 13.9391 8.54036 14.4598 9.58179 14.4598C13.8276 14.4598 15.7503 10.2941 15.7503 6.56902C15.7503 2.60357 12.3055 0 8.54036 0Z"
                                                        fill="#454750" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <span class="bspan-clr position-relative mb-xxl-4 mb-xxl-3 mb-3">
                                        CEO
                                    </span>
                                    <h5 class="white-clr">
                                        <a href="#" class="white-clr whitehover">Esther Howard</a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cmn Team stafs End -->

        <!-- Testimonial version2 Start -->
        <section class="pt-space pb-space bg2-clr">
            <div class="container">
                <div
                    class="row g-md-5 g-6 align-items-end justify-content-between bb-border pb-xxl-15 pb-lg-10 pb-9 mb-xxl-15 mb-lg-10 mb-9">
                    <div class="col-lg-7">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-5">
                            <div class="pricing-title">
                                <div class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5"
                                    data-aos="zoom-in-left" data-aos-duration="1500">
                                    Testimonials
                                    <span class="rot60 d-inline-block">
                                        <i class="fas fa-arrow-up theme-clr"></i>
                                    </span>
                                </div>
                                <h2 class="stitle" data-aos="zoom-in" data-aos-duration="1800">
                                    Some Of Our <span class="fw-400">Respected</span> Happy Clients Say
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in-right" data-aos-duration="1600">
                        <div class="d-flex justify-content-md-end">
                            <div class="d-flex align-items-center gap-3">
                                <ul class="customer-man d-flex align-items-center">
                                    <li>
                                        <img src="assets/img/team/avatar1.png" alt="img">
                                    </li>
                                    <li>
                                        <img src="assets/img/team/avatar2.png" alt="img">
                                    </li>
                                    <li>
                                        <img src="assets/img/team/avatar3.png" alt="img">
                                    </li>
                                    <li>
                                        <img src="assets/img/team/avatar4.png" alt="img">
                                    </li>
                                </ul>
                                <div class="review-cont">
                                    <div class="d-flex align-items-center gap-2 mb-xl-2 mb-1">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <span class="texts">
                                        450+ reviews
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center g-xxl-15 g-xl-8 g-lg-6 g-4">
                    <div class="col-lg-4">
                        <div class="testimonial-thumb-v2 w-100" data-aos="zoom-in" data-aos-duration="1800">
                            <img src="assets/img/testimonial/regulation-arrow.png" alt="img" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="swiper testimonial-wrapv2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item2 bg1-clr p-xxl-15 p-xl-10 p-lg-6 p-sm-5 p-5">
                                        <svg width="60" height="43" viewBox="0 0 60 43" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 25.8H12.8571L4.28564 43H17.1428L25.7143 25.8V0H0V25.8Z"
                                                fill="#E3FF04" />
                                            <path d="M34.2852 0V25.8H47.1423L38.5708 43H51.4279L59.9994 25.8V0H34.2852Z"
                                                fill="#E3FF04" />
                                        </svg>
                                        <p
                                            class="pra-clr mt-xxl-10 mt-xl-8 mt-lg-7 mt-6 mb-xxl-10 mb-xl-8 mb-lg-7 mb-6">
                                            “Welcome to our digital agency We specialize in helping business most like
                                            yours
                                            succeed
                                            online. From website design and
                                            development to digital marketing agency”
                                        </p>
                                        <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-xxl-4 gap-xl-3 gap-3">
                                                <img src="assets/img/team/delors.png" alt="img" class="radius100">
                                                <div class="cont">
                                                    <div>
                                                        <h6 class="mb-2 white-clr">
                                                            Delores Olivo
                                                        </h6>
                                                        <span class="pra-clr">
                                                            Software Tester
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="slider-button d-flex gap-xxl-3 gap-2 align-items-center justify-content-between slider-button-60">
                                                <button class="cmn-prev cmn-border d-center" tabindex="0"
                                                    aria-label="Next slide">
                                                    <i class="fas fa-chevron-left"></i>
                                                </button>
                                                <button class="cmn-next cmn-border d-center" tabindex="0"
                                                    aria-label="Previous slide">
                                                    <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial version2 End -->

    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts
</body>

</html>