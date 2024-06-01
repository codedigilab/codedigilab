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
                    <div class="col-lg-7">
                        <div class="breadcrumnd-content text-center">
                            <h1 class="white mb-xxl-10 mb-xl-8 mb-6" data-aos="zoom-in-left" data-aos-duration="1800">
                                Case Study Details
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
                                    Case Study Details
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

        <!-- Case Study Start -->
        <section class="case-study pt-space pb-space">
            <div class="container">
                <div class="row g-xxl-7 g-xl-6 g-5 mb-xxl-13 mb-10">
                    <div class="col-lg-8">
                        <div class="case-thumb1 w-100" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="assets/img/case/case-b1.png" alt="img" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in-left" data-aos-duration="1600">
                        <div
                            class="case-content-box bg1-clr py-xxl-10 py-xl-9 py-lg-8 py-6 px-xxl-10 px-xl-8 px-lg-6 px-5">
                            <ul class="case-infobox mb-xxl-12 mb-xl-10 mb-lg-8 mb-7">
                                <li class="d-flex align-items-center justify-content-between gap-2">
                                    <span class="white-clr">
                                        Client Name:
                                    </span>
                                    <span class="white-clr">
                                        Development
                                    </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between gap-2">
                                    <span class="white-clr">
                                        Company Name:
                                    </span>
                                    <span class="white-clr">
                                        WordPress
                                    </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between gap-2">
                                    <span class="white-clr">
                                        Project Start Date:
                                    </span>
                                    <span class="white-clr">
                                        23/03/2024
                                    </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between gap-2">
                                    <span class="white-clr">
                                        Project End Date:
                                    </span>
                                    <span class="white-clr">
                                        23/03/2024
                                    </span>
                                </li>
                               
                            </ul>
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Phone No">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" placeholder="Email ID">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" placeholder="Message">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>

                            </form>
                            <!-- <a href="#" download="#"
                                class="d-flex align-items-center justify-content-center w-100 fw-semibold py-xxl-4 py-xl-3 py-2 px-3 gap-2 themebg text-whitess">
                                <i class="fas fa-file-alt"></i>
                                <span class="text-whitess">
                                    Download Docs
                                </span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="case-study-detials-inner">
                    <div class="interesting-fact" style="vissable:hidden;">
                        <h3 class="white-clr pb-xx-10 pb-xl-7 pb-6 mb-xx-10 mb-xl-7 mb-6">
                            Interesting facts in development
                        </h3>
                    </div>
                   
                    <div class="row g-xxl-7 g-4 py-xxl-15 py-9">
                        <div class="col-sm-6">
                            <div class="challenge-thumb w-100">
                                <img src="assets/img/case/case-m1.png" alt="img" class="w-100">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="challenge-thumb w-100">
                                <img src="assets/img/case/case-m2.png" alt="img" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="finul-result">
                        <h4 class="mb-xxl-7 mb-4 white-clr">
                            Finial Results Of the Project
                        </h4>
                        <div
                            class="d-md-flex flex-grid align-items-center gap-xxl-20 gap-xl-10 gap-lg-7 gap-md-6 gap-10">
                            <div class="fiial-result-list mb-md-0 mb-4">
                                <ul>
                                    <li>
                                        consectetur placerat augue vestibulum
                                    </li>
                                    <li>
                                        consectetur placerat augue vestibulum
                                    </li>
                                    <li>
                                        consectetur placerat augue vestibulum
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        consectetur placerat augue vestibulum
                                    </li>
                                    <li>
                                        consectetur placerat augue vestibulum
                                    </li>
                                    <li>
                                        consectetur placerat augue vestibulum
                                    </li>
                                </ul>
                            </div>
                            <div class="result-progress-wrap">
                                <div class="progres-item mb-xxl-8 mb-xl-7 mb-6">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-5 mb-3">
                                        <span class="conssub">
                                            Problem Solving
                                        </span>
                                        <span class="cons">98%</span>
                                    </div>
                                    <div class="progress-solving">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="progres-item">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-5 mb-3">
                                        <span class="conssub">
                                            Development
                                        </span>
                                        <span class="cons">100%</span>
                                    </div>
                                    <div class="progress-solving">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                </div>
                <p class="mt-6">The project was developed with the aim of promoting Indian folk dance and providing a stage for unknown faces who need it. Our team created a visually appealing and user-friendly website that showcased the beauty of these cultural dances, and highlighted the opportunities available for aspiring dancers.</p>

            </div>
        </section>
        <!-- Case Study End -->

    </main>
    <!-- Main End -->
    @include('include/footer')
    @livewireScripts


</body>

</html>