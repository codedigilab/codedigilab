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
                            OUR EXPERTISE</div>
                        <h2 class="stitle mt-xxl-8 mt-xl-6 mt-5">Get One For Your Business </h2>
                    </div>
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
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Custom App</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Turn your ideas into reality. Share your requirements with us and we will do an app customized to your business</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
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
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Food Delivery</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">We hold extensive experience in IT solutions for the hospitality domain. Seek our tech expertise to get one for yourself</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
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
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">eCommerce</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Magento, WooCommerce, Mobile Apps, we do it all. Let us take your business online with the best of our consultancy</p><a
                                    class="white-clr d-flex gap-4" href="ecommerce" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="500">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer1.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">04</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Dating</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Build an app for your startup with us. Start it with a prototype similar to Tinder or Bumble App. You are just a click away.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="700">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer2.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">05</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">BFSI</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Build with us a team of efficient software developers having experience in the BFSI domain to construct your platform faster .</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="900">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer3.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">06</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Enterprise Apps</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">ERPs, CRMs, AI-enabled tech, or any other large enterprise-level application requires a loyal, focused, and visionary team.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="500">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer1.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">07</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">SaaS</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Building a SaaS application is considerably different from a traditional web platform. Hire experienced SaaS engineers who understand the logic better.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="700">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer2.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">08</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">MetaVerse</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">One Life is not enough to do all that one wants to do. Metaverse is trending and is the future of the human lifestyle. Hire like-minded engineers with us</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="900">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer3.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">09</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Real Estate</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Fuel your business with a scalable and elegant website responsive design or a mobile application for your real estate business.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="500">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer1.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">10</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Pets</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Let us start with a free consultancy around digitising Pet's business. Get a feature-rich eShop launched quickly.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="700">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer2.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">11</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Education</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Online Learning through videos or live classes. Let us help you offer it to your audiences on the web and mobile app</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="900">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer3.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">12</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Healthcare</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">The world is seeing a high rise in digitization in health tech. Millions of people need an efficient Telemedicine platform</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="500">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer1.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">13</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Travel</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Spend on technology to handle the upcoming demand in the travel domain as soon as the world opens up again.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="700">
                        <div class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer2.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">14</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Sports</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Websites for Soccer Clubs, Apps for Stadiums, IT solutions for sports coaching. We do it all. Start with contacting us.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="900">
                        <div
                            class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                            <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                <div class="icon"><img src="assets/img/element/offer3.png" alt="img"></div>
                                <h5 class="seri white-clr d-flex align-items-end">15</h5>
                            </div>
                            <div class="content">
                                <h5 data-aos="zoom-in-left" data-aos-duration="1800"  class="white-clr mb-xxl-6 mb-xl-5 mb-4">Taxi Booking</h5>
                                <p data-aos="zoom-in-left" data-aos-duration="1800"  class="pra-clr mb-xxl-6 mb-xl-5 mb-4">Get a prototype for launching a new app like Uber Taxi Service. We are just a click away to get one done for you.</p><a
                                    class="white-clr d-flex gap-4" href="contact" wire:navigate>Explore More<span class="rot60"><i
                                            class="fas fa-arrow-up white-clr"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Text SLider Start -->
        <div class="digital-solution mb-xxl-4 pb-lg-0 pb-15 mb-6">
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