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
                                Our Services
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
                                    Our Services
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
        <section class="offer-sectionv02 pt-space pb-space">
            <div class="container position-relative">
                <div
                    class="d-flex align-items-center justify-content-between flex-wrap gap-5 mb-xxl-17 mb-xl-12 mb-lg-10 mb-md-10 mb-sm-10 mb-9">
                    <div class="pricing-title">
                        <div
                            class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-3 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3">
                            WHAT WE OFFER</div>
                        <h2 class="stitle mt-xxl-8 mt-xl-6 mt-5">What <span class="fw-400">We Can Do for</span><span
                                class="d-block fw-bold">Our Clients</span></h2>
                    </div><a
                        class="radius-btn d-inline-flex text-capitalize radius100 py-xxl-2 py-2 px-xxl-5 px-5 theme-border theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5 style-2"
                        href="/service">view all service<span class="rot60 d-inline-block"><i
                                class="fas fa-arrow-up theme-clr"></i></span></a>
                </div>
                <div class="row g-xxl-7 g-xl-6 g-4">
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="500">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer1.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">01</h5>
                            </div>
                            <div class="content">
                                <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">product Design</h5>
                                <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Domination. At the end of the day, going
                                    forward, a new normal that has evolved from generation on the runway</p><a
                                    class="white-clr d-flex gap-4" href="/contact">Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="700">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer2.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">02</h5>
                            </div>
                            <div class="content">
                                <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">UI/UX design</h5>
                                <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Domination. At the end of the day, going
                                    forward, a new normal that has evolved from generation on the runway</p><a
                                    class="white-clr d-flex gap-4" href="/contact">Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="900">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer3.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">03</h5>
                            </div>
                            <div class="content">
                                <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">Branding Design</h5>
                                <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Domination. At the end of the day, going
                                    forward, a new normal that has evolved from generation on the runway</p><a
                                    class="white-clr d-flex gap-4" href="/contact">Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service m Tabs Start -->
        <section class="service-section pt-space pb-space">
            <div class="container">
                <div
                    class="d-flex align-items-center justify-content-between flex-wrap gap-5 mb-xxl-17 mb-xl-12 mb-lg-10 mb-md-10 mb-sm-10 mb-9">
                    <div class="pricing-title">
                        <div
                            class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5">
                            WHAT WE OFFER
                            <span class="rot60 d-inline-block">
                                <i class="fas fa-arrow-up theme-clr"></i>
                            </span>
                        </div>
                        <h2 class="stitle">
                            Most <span class="fw-400">experienced</span> services
                        </h2>
                    </div>
                    <a href="service"
                        class="radius-btn d-inline-flex radius100 py-xxl-2 py-2 px-xxl-5 px-5 theme-border theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5">
                        View All Service
                    </a>
                </div>

                <!--Service Tabing section-->
                <div class="row g-xxl-6 g-4">
                    <div class="service-tabing-wrap Faqs-section position-relative">
                        <div class="accordion-single active py-xxl-9 py-xl-7 py-lg-6 py-5 bt-border">
                            <div class="header-area">
                                <div
                                    class="accordion-btn justify-content-between d-flex align-items-center text-start d-flex position-relative w-100">
                                    <div class="mtitle-ara">
                                        <span
                                            class="d-inine-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                            01
                                            <span class="rot60 d-inline-block theme-clr">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="mtitle d-block mt-6">
                                            <a href="#" class="white-clr whitehover">
                                                Digitalization
                                            </a>
                                        </span>
                                        <span class="pras mt-xxl-7 mt-xl-5 mt-4 d-block">
                                            We build intelligent next-generation solutions at the intersection of new
                                            business opportunities and technological
                                            innovations.
                                        </span>
                                    </div>
                                    <div class="images-remove-area d-lg-flex d-none align-items-center gap-xxl-8 gap-4">
                                        <ul class="modern-list d-grid gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Legacy Modernization
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Solution Design
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Technology Enabling
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Mobile-First Systems
                                            </li>
                                        </ul>
                                        <div class="tab-remove-thumb">
                                            <img src="assets/img/service/tab1.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-single py-xxl-9 py-xl-7 py-lg-6 py-5 bt-border">
                            <div class="header-area">
                                <div
                                    class="accordion-btn justify-content-between d-flex align-items-center text-start d-flex position-relative w-100">
                                    <div class="mtitle-ara">
                                        <span
                                            class="d-inine-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                            02
                                            <span class="rot60 d-inline-block theme-clr">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="mtitle d-block mt-6">
                                            <a href="#" class="white-clr whitehover">
                                                Modernization
                                            </a>
                                        </span>
                                        <span class="pras mt-xxl-7 mt-xl-5 mt-4 d-block">
                                            We build intelligent next-generation solutions at the intersection of new
                                            business opportunities and technological
                                            innovations.
                                        </span>
                                    </div>
                                    <div class="images-remove-area d-lg-flex d-none align-items-center gap-xxl-8 gap-4">
                                        <ul class="modern-list d-grid gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Legacy Modernization
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Solution Design
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Technology Enabling
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Mobile-First Systems
                                            </li>
                                        </ul>
                                        <div class="tab-remove-thumb">
                                            <img src="assets/img/service/tab2.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-single py-xxl-9 py-xl-7 py-lg-6 py-5 bt-border">
                            <div class="header-area">
                                <div
                                    class="accordion-btn justify-content-between d-flex align-items-center text-start d-flex position-relative w-100">
                                    <div class="mtitle-ara">
                                        <span
                                            class="d-inine-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                            03
                                            <span class="rot60 d-inline-block theme-clr">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="mtitle d-block mt-6">
                                            <a href="#" class="white-clr whitehover">
                                                Accelerating Innovation
                                            </a>
                                        </span>
                                        <span class="pras mt-xxl-7 mt-xl-5 mt-4 d-block">
                                            We build intelligent next-generation solutions at the intersection of new
                                            business opportunities and technological
                                            innovations.
                                        </span>
                                    </div>
                                    <div class="images-remove-area d-lg-flex d-none align-items-center gap-xxl-8 gap-4">
                                        <ul class="modern-list d-grid gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Legacy Modernization
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Solution Design
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Technology Enabling
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Mobile-First Systems
                                            </li>
                                        </ul>
                                        <div class="tab-remove-thumb">
                                            <img src="assets/img/service/tab3.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-single py-xxl-9 py-xl-7 py-lg-6 py-5 bb-border bt-border">
                            <div class="header-area">
                                <div
                                    class="accordion-btn justify-content-between d-flex align-items-center text-start d-flex position-relative w-100">
                                    <div class="mtitle-ara">
                                        <span
                                            class="d-inine-flex serial-badge align-items-center gap-4 cmn-border radius100 white-clr">
                                            04
                                            <span class="rot60 d-inline-block theme-clr">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="mtitle d-block mt-6">
                                            <a href="#" class="white-clr whitehover">
                                                Business consulting
                                            </a>
                                        </span>
                                        <span class="pras mt-xxl-7 mt-xl-5 mt-4 d-block">
                                            We build intelligent next-generation solutions at the intersection of new
                                            business opportunities and technological
                                            innovations.
                                        </span>
                                    </div>
                                    <div class="images-remove-area d-lg-flex d-none align-items-center gap-xxl-8 gap-4">
                                        <ul class="modern-list d-grid gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Legacy Modernization
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Solution Design
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Technology Enabling
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="fas fa-chevron-right"></i> Mobile-First Systems
                                            </li>
                                        </ul>
                                        <div class="tab-remove-thumb">
                                            <img src="assets/img/service/tab4.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Service Tabing section-->
            </div>
        </section>
        <!-- Service m Tabs End -->

        <!-- Text SLider Start -->
        <div class="digital-solution mb-xxl-4 pb-lg-0 pb-15">
            <div class="mycustom-marque">
                <div class="scrolling-wrap">
                    <div class="comm">
                        <div class="cmn-textslide">DIGITAL solutions</div>
                        <div class="cmn-textslide text-custom-storke">DIGITAL solutions</div>
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide">DIGITAL solutions</div>
                        <div class="cmn-textslide text-custom-storke">DIGITAL solutions</div>
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Text Slider End -->



    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts
</body>

</html>