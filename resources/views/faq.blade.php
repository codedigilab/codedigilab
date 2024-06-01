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
                                FAQ’S
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
                                    FAQ’S
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

        <!-- Faqs Start -->
        <section class="Faqs-section pt-space pb-space">
            <div class="container">
                <div class="faqs-title text-center mb-xxl-15 mb-xl-12 mb-lg-10 mb-md-9 mb-sm-8 mb-7">
                    <a href="#" wire:navigate class="radius-btn cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5">
                        FAQ’S
                        <span class="rot60 d-inline-block">
                            <i class="fas fa-arrow-up theme-clr"></i>
                        </span>
                    </a>
                    <h2 class="stitle">
                        Frequently asked <span class="fw-400">questions</span>
                    </h2>
                </div>
                <div class="row g-xxl-7 g-lg-6 g-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="faq">
                            <div class="accordion-section">
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            How long should a business plan be?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            What is included in your services?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            What type of company is measured?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            What type of company is measured?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq">
                            <div class="accordion-section">
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            How long should a business plan be?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            What is included in your services?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            What type of company is measured?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accordion-single mb-xxl-4 mb-4 py-xxl-7 py-xl-6 py-lg-4 py-3 px-xxl-8 px-xl-7 px-lg-6 px-4">
                                    <h5 class="header-area ">
                                        <button
                                            class="accordion-btn d-flex align-items-center    text-start d-flex position-relative w-100"
                                            type="button">
                                            What type of company is measured?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body pt-4">
                                            <p class="pra-clr">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam
                                                fringilla erat id ante commodo sodales. In maximus ultrices euismod.
                                                Vivamus porta justo ex.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faqs End -->

    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts
</body>

</html>