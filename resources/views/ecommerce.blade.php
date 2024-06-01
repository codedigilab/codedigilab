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
                                Build your eCommerce Store
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
                                    E-commerce
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
        <section class="case-study pt- space mt-6 pb-6">
            <div class="container">
                <div class="row g-xxl-7 g-xl-6 g-5 mb-xxl-13 mb-10">
                    <div class="col-lg-8">
                        <div class="swiper study-slidewrap case-thumb1 w-100" data-aos="zoom-in"
                            data-aos-duration="1500">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="study-thumb-slide w-100">
                                        <img src="assets/img/my/1.1.webp" alt="img" class="w-100">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="study-thumb-slide w-100">
                                        <img src="assets/img/my/2.1.webp" alt="img" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in-left" data-aos-duration="1600">
                        <div class="case-content-box bg1-clr">
                            <div class="contact-content bg1-clr">
                                <form action="https://formspree.io/f/mkndeeyp" method="post">
                                    <div class="col-lg-12">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="number" name="number" placeholder="Number" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <textarea name="messages" rows="4" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="submit-btn">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="mpricing-item other-pricing-item d-flex align-items-center">
                        <div class="pricinge-head d-flex align-items-center ps-xxl-10 ps-xl-7 ps-lg-5 ps-5">
                            <div class="box">
                                <h4 class="white-clr mb-xxl-8 mb-xl-6 mb-4">
                                    E-Commerce
                                </h4>
                                <p class="pra-clr">
                                    Launch your ecommerce store within 48 hours.
                                    We offer readymade ecommerce web development solutions.
                                </p>
                            </div>
                        </div>
                        <div
                            class="pricing-list-right d-lg-flex d-grid align-items-center justify-content-between gap-lg-4 gap-7 w-100 ps-xxl-20 ps-lg-10 ps-5 pe-xxl-10 pe-8 pb-lg-0 pb-6">
                            <ul class="pricing-list d-grid gap-xxl-2 gap-1">
                                <li class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-lg-3 gap-2">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_6574_63509" fill="white">
                                            <path
                                                d="M0 8.83301C0 4.42676 3.5625 0.833008 8 0.833008C12.4062 0.833008 16 4.42676 16 8.83301C16 13.2705 12.4062 16.833 8 16.833C3.5625 16.833 0 13.2705 0 8.83301ZM11.5938 7.45801C11.9375 7.11426 11.9375 6.58301 11.5938 6.23926C11.25 5.89551 10.7188 5.89551 10.375 6.23926L7 9.61426L5.59375 8.23926C5.25 7.89551 4.71875 7.89551 4.375 8.23926C4.03125 8.58301 4.03125 9.11426 4.375 9.45801L6.375 11.458C6.71875 11.8018 7.25 11.8018 7.59375 11.458L11.5938 7.45801Z" />
                                        </mask>
                                        <path
                                            d="M7 9.61426L6.30088 10.3293L7.0079 11.0206L7.70711 10.3214L7 9.61426ZM5.59375 8.23926L4.8866 8.94641L4.89463 8.95426L5.59375 8.23926ZM1 8.83301C1 4.9765 4.11733 1.83301 8 1.83301V-0.166992C3.00767 -0.166992 -1 3.87702 -1 8.83301H1ZM8 1.83301C11.854 1.83301 15 4.97904 15 8.83301H17C17 3.87447 12.9585 -0.166992 8 -0.166992V1.83301ZM15 8.83301C15 12.7157 11.8565 15.833 8 15.833V17.833C12.956 17.833 17 13.8253 17 8.83301H15ZM8 15.833C4.11478 15.833 1 12.7182 1 8.83301H-1C-1 13.8228 3.01022 17.833 8 17.833V15.833ZM12.3009 8.16511C13.0351 7.43084 13.0351 6.26643 12.3009 5.53215L10.8866 6.94636C10.8717 6.93147 10.8516 6.89618 10.8516 6.84863C10.8516 6.80108 10.8717 6.76579 10.8866 6.7509L12.3009 8.16511ZM12.3009 5.53215C11.5666 4.79788 10.4022 4.79788 9.66789 5.53215L11.0821 6.94636C11.0672 6.96126 11.0319 6.98145 10.9844 6.98145C10.9368 6.98145 10.9015 6.96126 10.8866 6.94636L12.3009 5.53215ZM9.66789 5.53215L6.29289 8.90715L7.70711 10.3214L11.0821 6.94636L9.66789 5.53215ZM7.69912 8.89925L6.29287 7.52425L4.89463 8.95426L6.30088 10.3293L7.69912 8.89925ZM6.30086 7.53215C5.56658 6.79788 4.40217 6.79788 3.66789 7.53215L5.08211 8.94636C5.06721 8.96126 5.03193 8.98145 4.98438 8.98145C4.93682 8.98145 4.90154 8.96126 4.88664 8.94636L6.30086 7.53215ZM3.66789 7.53215C2.93362 8.26643 2.93362 9.43084 3.66789 10.1651L5.08211 8.7509C5.097 8.76579 5.11719 8.80108 5.11719 8.84863C5.11719 8.89618 5.097 8.93147 5.08211 8.94636L3.66789 7.53215ZM3.66789 10.1651L5.66789 12.1651L7.08211 10.7509L5.08211 8.7509L3.66789 10.1651ZM5.66789 12.1651C6.40217 12.8994 7.56658 12.8994 8.30086 12.1651L6.88664 10.7509C6.90154 10.736 6.93682 10.7158 6.98438 10.7158C7.03193 10.7158 7.06721 10.736 7.08211 10.7509L5.66789 12.1651ZM8.30086 12.1651L12.3009 8.16511L10.8866 6.7509L6.88664 10.7509L8.30086 12.1651Z"
                                            fill="#E3FF04" mask="url(#path-1-inside-1_6574_63509)" />
                                    </svg>
                                    <span class="pra-clr">
                                        Free Domain
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-lg-3 gap-2">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_6574_635010" fill="white">
                                            <path
                                                d="M0 8.83301C0 4.42676 3.5625 0.833008 8 0.833008C12.4062 0.833008 16 4.42676 16 8.83301C16 13.2705 12.4062 16.833 8 16.833C3.5625 16.833 0 13.2705 0 8.83301ZM11.5938 7.45801C11.9375 7.11426 11.9375 6.58301 11.5938 6.23926C11.25 5.89551 10.7188 5.89551 10.375 6.23926L7 9.61426L5.59375 8.23926C5.25 7.89551 4.71875 7.89551 4.375 8.23926C4.03125 8.58301 4.03125 9.11426 4.375 9.45801L6.375 11.458C6.71875 11.8018 7.25 11.8018 7.59375 11.458L11.5938 7.45801Z" />
                                        </mask>
                                        <path
                                            d="M7 9.61426L6.30088 10.3293L7.0079 11.0206L7.70711 10.3214L7 9.61426ZM5.59375 8.23926L4.8866 8.94641L4.89463 8.95426L5.59375 8.23926ZM1 8.83301C1 4.9765 4.11733 1.83301 8 1.83301V-0.166992C3.00767 -0.166992 -1 3.87702 -1 8.83301H1ZM8 1.83301C11.854 1.83301 15 4.97904 15 8.83301H17C17 3.87447 12.9585 -0.166992 8 -0.166992V1.83301ZM15 8.83301C15 12.7157 11.8565 15.833 8 15.833V17.833C12.956 17.833 17 13.8253 17 8.83301H15ZM8 15.833C4.11478 15.833 1 12.7182 1 8.83301H-1C-1 13.8228 3.01022 17.833 8 17.833V15.833ZM12.3009 8.16511C13.0351 7.43084 13.0351 6.26643 12.3009 5.53215L10.8866 6.94636C10.8717 6.93147 10.8516 6.89618 10.8516 6.84863C10.8516 6.80108 10.8717 6.76579 10.8866 6.7509L12.3009 8.16511ZM12.3009 5.53215C11.5666 4.79788 10.4022 4.79788 9.66789 5.53215L11.0821 6.94636C11.0672 6.96126 11.0319 6.98145 10.9844 6.98145C10.9368 6.98145 10.9015 6.96126 10.8866 6.94636L12.3009 5.53215ZM9.66789 5.53215L6.29289 8.90715L7.70711 10.3214L11.0821 6.94636L9.66789 5.53215ZM7.69912 8.89925L6.29287 7.52425L4.89463 8.95426L6.30088 10.3293L7.69912 8.89925ZM6.30086 7.53215C5.56658 6.79788 4.40217 6.79788 3.66789 7.53215L5.08211 8.94636C5.06721 8.96126 5.03193 8.98145 4.98438 8.98145C4.93682 8.98145 4.90154 8.96126 4.88664 8.94636L6.30086 7.53215ZM3.66789 7.53215C2.93362 8.26643 2.93362 9.43084 3.66789 10.1651L5.08211 8.7509C5.097 8.76579 5.11719 8.80108 5.11719 8.84863C5.11719 8.89618 5.097 8.93147 5.08211 8.94636L3.66789 7.53215ZM3.66789 10.1651L5.66789 12.1651L7.08211 10.7509L5.08211 8.7509L3.66789 10.1651ZM5.66789 12.1651C6.40217 12.8994 7.56658 12.8994 8.30086 12.1651L6.88664 10.7509C6.90154 10.736 6.93682 10.7158 6.98438 10.7158C7.03193 10.7158 7.06721 10.736 7.08211 10.7509L5.66789 12.1651ZM8.30086 12.1651L12.3009 8.16511L10.8866 6.7509L6.88664 10.7509L8.30086 12.1651Z"
                                            fill="#E3FF04" mask="url(#path-1-inside-1_6574_635010)" />
                                    </svg>
                                    <span class="pra-clr">
                                        Free Hosting
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-lg-3 gap-2">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_6574_63511" fill="white">
                                            <path
                                                d="M0 8.83301C0 4.42676 3.5625 0.833008 8 0.833008C12.4062 0.833008 16 4.42676 16 8.83301C16 13.2705 12.4062 16.833 8 16.833C3.5625 16.833 0 13.2705 0 8.83301ZM11.5938 7.45801C11.9375 7.11426 11.9375 6.58301 11.5938 6.23926C11.25 5.89551 10.7188 5.89551 10.375 6.23926L7 9.61426L5.59375 8.23926C5.25 7.89551 4.71875 7.89551 4.375 8.23926C4.03125 8.58301 4.03125 9.11426 4.375 9.45801L6.375 11.458C6.71875 11.8018 7.25 11.8018 7.59375 11.458L11.5938 7.45801Z" />
                                        </mask>
                                        <path
                                            d="M7 9.61426L6.30088 10.3293L7.0079 11.0206L7.70711 10.3214L7 9.61426ZM5.59375 8.23926L4.8866 8.94641L4.89463 8.95426L5.59375 8.23926ZM1 8.83301C1 4.9765 4.11733 1.83301 8 1.83301V-0.166992C3.00767 -0.166992 -1 3.87702 -1 8.83301H1ZM8 1.83301C11.854 1.83301 15 4.97904 15 8.83301H17C17 3.87447 12.9585 -0.166992 8 -0.166992V1.83301ZM15 8.83301C15 12.7157 11.8565 15.833 8 15.833V17.833C12.956 17.833 17 13.8253 17 8.83301H15ZM8 15.833C4.11478 15.833 1 12.7182 1 8.83301H-1C-1 13.8228 3.01022 17.833 8 17.833V15.833ZM12.3009 8.16511C13.0351 7.43084 13.0351 6.26643 12.3009 5.53215L10.8866 6.94636C10.8717 6.93147 10.8516 6.89618 10.8516 6.84863C10.8516 6.80108 10.8717 6.76579 10.8866 6.7509L12.3009 8.16511ZM12.3009 5.53215C11.5666 4.79788 10.4022 4.79788 9.66789 5.53215L11.0821 6.94636C11.0672 6.96126 11.0319 6.98145 10.9844 6.98145C10.9368 6.98145 10.9015 6.96126 10.8866 6.94636L12.3009 5.53215ZM9.66789 5.53215L6.29289 8.90715L7.70711 10.3214L11.0821 6.94636L9.66789 5.53215ZM7.69912 8.89925L6.29287 7.52425L4.89463 8.95426L6.30088 10.3293L7.69912 8.89925ZM6.30086 7.53215C5.56658 6.79788 4.40217 6.79788 3.66789 7.53215L5.08211 8.94636C5.06721 8.96126 5.03193 8.98145 4.98438 8.98145C4.93682 8.98145 4.90154 8.96126 4.88664 8.94636L6.30086 7.53215ZM3.66789 7.53215C2.93362 8.26643 2.93362 9.43084 3.66789 10.1651L5.08211 8.7509C5.097 8.76579 5.11719 8.80108 5.11719 8.84863C5.11719 8.89618 5.097 8.93147 5.08211 8.94636L3.66789 7.53215ZM3.66789 10.1651L5.66789 12.1651L7.08211 10.7509L5.08211 8.7509L3.66789 10.1651ZM5.66789 12.1651C6.40217 12.8994 7.56658 12.8994 8.30086 12.1651L6.88664 10.7509C6.90154 10.736 6.93682 10.7158 6.98438 10.7158C7.03193 10.7158 7.06721 10.736 7.08211 10.7509L5.66789 12.1651ZM8.30086 12.1651L12.3009 8.16511L10.8866 6.7509L6.88664 10.7509L8.30086 12.1651Z"
                                            fill="#E3FF04" mask="url(#path-1-inside-1_6574_63511)" />
                                    </svg>
                                    <span class="pra-clr">
                                        Branding And Design
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-lg-3 gap-2">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_6574_63512" fill="white">
                                            <path
                                                d="M0 8.83301C0 4.42676 3.5625 0.833008 8 0.833008C12.4062 0.833008 16 4.42676 16 8.83301C16 13.2705 12.4062 16.833 8 16.833C3.5625 16.833 0 13.2705 0 8.83301ZM11.5938 7.45801C11.9375 7.11426 11.9375 6.58301 11.5938 6.23926C11.25 5.89551 10.7188 5.89551 10.375 6.23926L7 9.61426L5.59375 8.23926C5.25 7.89551 4.71875 7.89551 4.375 8.23926C4.03125 8.58301 4.03125 9.11426 4.375 9.45801L6.375 11.458C6.71875 11.8018 7.25 11.8018 7.59375 11.458L11.5938 7.45801Z" />
                                        </mask>
                                        <path
                                            d="M7 9.61426L6.30088 10.3293L7.0079 11.0206L7.70711 10.3214L7 9.61426ZM5.59375 8.23926L4.8866 8.94641L4.89463 8.95426L5.59375 8.23926ZM1 8.83301C1 4.9765 4.11733 1.83301 8 1.83301V-0.166992C3.00767 -0.166992 -1 3.87702 -1 8.83301H1ZM8 1.83301C11.854 1.83301 15 4.97904 15 8.83301H17C17 3.87447 12.9585 -0.166992 8 -0.166992V1.83301ZM15 8.83301C15 12.7157 11.8565 15.833 8 15.833V17.833C12.956 17.833 17 13.8253 17 8.83301H15ZM8 15.833C4.11478 15.833 1 12.7182 1 8.83301H-1C-1 13.8228 3.01022 17.833 8 17.833V15.833ZM12.3009 8.16511C13.0351 7.43084 13.0351 6.26643 12.3009 5.53215L10.8866 6.94636C10.8717 6.93147 10.8516 6.89618 10.8516 6.84863C10.8516 6.80108 10.8717 6.76579 10.8866 6.7509L12.3009 8.16511ZM12.3009 5.53215C11.5666 4.79788 10.4022 4.79788 9.66789 5.53215L11.0821 6.94636C11.0672 6.96126 11.0319 6.98145 10.9844 6.98145C10.9368 6.98145 10.9015 6.96126 10.8866 6.94636L12.3009 5.53215ZM9.66789 5.53215L6.29289 8.90715L7.70711 10.3214L11.0821 6.94636L9.66789 5.53215ZM7.69912 8.89925L6.29287 7.52425L4.89463 8.95426L6.30088 10.3293L7.69912 8.89925ZM6.30086 7.53215C5.56658 6.79788 4.40217 6.79788 3.66789 7.53215L5.08211 8.94636C5.06721 8.96126 5.03193 8.98145 4.98438 8.98145C4.93682 8.98145 4.90154 8.96126 4.88664 8.94636L6.30086 7.53215ZM3.66789 7.53215C2.93362 8.26643 2.93362 9.43084 3.66789 10.1651L5.08211 8.7509C5.097 8.76579 5.11719 8.80108 5.11719 8.84863C5.11719 8.89618 5.097 8.93147 5.08211 8.94636L3.66789 7.53215ZM3.66789 10.1651L5.66789 12.1651L7.08211 10.7509L5.08211 8.7509L3.66789 10.1651ZM5.66789 12.1651C6.40217 12.8994 7.56658 12.8994 8.30086 12.1651L6.88664 10.7509C6.90154 10.736 6.93682 10.7158 6.98438 10.7158C7.03193 10.7158 7.06721 10.736 7.08211 10.7509L5.66789 12.1651ZM8.30086 12.1651L12.3009 8.16511L10.8866 6.7509L6.88664 10.7509L8.30086 12.1651Z"
                                            fill="#E3FF04" mask="url(#path-1-inside-1_6574_63512)" />
                                    </svg>
                                    <span class="pra-clr">
                                        24/7 System Support
                                    </span>
                                </li>
                            </ul>
                            <div
                                class="price-choose d-flex align-items-center gap-xxl-15 gap-xl-10 gap-lg-7 gap-md-6 gap-sm-4 gap-3">
                                <h4 class="d-flex align-items-center gap-xxl-5 gap-xl-4 gap-lg-3 gap-2 white">
                                    ₹5999
                                    <span class="month">
                                        /Starting
                                    </span>
                                </h4>
                                <a href="https://wa.me/+917361040504"
                                    class="price-under d-flex align-items-center gap-2">
                                    LET’S TALK!
                                    <span class="rot60 d-block">
                                        <i class="fas fa-arrow-up"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-6 align-items-center justify-content-between flex-wrap gap-5 mb-xxl-15 mb-xl-12 mb-lg-10 mb-md-10 mb-sm-10 mb-9">
                    <div class="pricing-title ">

                        <h2 class="stit le text-center">
                            <span class="h1">30+ </span> ECOMMERCE DESIGNS
                        </h2>
                    </div>
                </div>
                <div class=" swiper study-slidewrappp row g-xxl-7 g-xl-5 g-4 justify-content-center">
                    <div class="swiper-wrapper">
                        <div class="col-xl-3 swiper-slide col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left"
                            data-aos-duration="1400">
                            <div class="team-common-item tilt">
                                <div class="thumb position-relative overflow-hidden w-100">
                                    <img src="assets/img/my/ecom1.png" alt="img" class="overflow-hidden w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 swiper-slide col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left"
                            data-aos-duration="1400">
                            <div class="team-common-item tilt">
                                <div class="thumb position-relative overflow-hidden w-100">
                                    <img src="assets/img/my/ecom4.png" alt="img" class="overflow-hidden w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 swiper-slide col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left"
                            data-aos-duration="1400">
                            <div class="team-common-item tilt">
                                <div class="thumb position-relative overflow-hidden w-100">
                                    <img src="assets/img/my/ecom2.png" alt="img" class="overflow-hidden w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 swiper-slide col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left"
                            data-aos-duration="1400">
                            <div class="team-common-item tilt">
                                <div class="thumb position-relative overflow-hidden w-100">
                                    <img src="assets/img/my/ecom3.png" alt="img" class="overflow-hidden w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 swiper-slide col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-left"
                            data-aos-duration="1400">
                            <div class="team-common-item tilt">
                                <div class="thumb position-relative overflow-hidden w-100">
                                    <img src="assets/img/my/ecom5.png" alt="img" class="overflow-hidden w-100">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- 50k slider -->
                <div class="swiper study-slidewrapp row g-xxl-7 g-xl-6 g-4 mt-6">
                    <div class="interesting-fact mb-6">
                        <h3 class="white-clr text-center">
                            50+ KEY <span class="theme-clr h1"> FEATURES</span>
                        </h3>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="study-thumb-slide w-100">

                                <div
                                    class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                                    <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                        <div class="icon">
                                            <img src="assets/img/element/offer1.png" alt="img">
                                        </div>
                                        <h5 class="seri white-clr d-flex align-items-end">
                                            01
                                        </h5>
                                    </div>
                                    <div class="content">
                                        <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">
                                            GATEWAYS
                                        </h5>
                                        <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">
                                            Razorpay, PayU, Paytm, CcAvenue, COD and more.
                                        </p>
                                        <a href="contact" class="white-clr d-flex gap-4">
                                            Explore More
                                            <span class="rot60">
                                                <i class="fas fa-arrow-up white-clr"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="study-thumb-slide w-100">
                                <div
                                    class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                                    <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                        <div class="icon">
                                            <img src="assets/img/element/offer1.png" alt="img">
                                        </div>
                                        <h5 class="seri white-clr d-flex align-items-end">
                                            02
                                        </h5>
                                    </div>
                                    <div class="content">
                                        <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">
                                            TRACKING
                                        </h5>
                                        <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">
                                            Auto shipping via Shiprocket, Delhivery & Manual courier
                                        </p>
                                        <a href="contact" class="white-clr d-flex gap-4">
                                            Explore More
                                            <span class="rot60">
                                                <i class="fas fa-arrow-up white-clr"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="study-thumb-slide w-100">
                                <div
                                    class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                                    <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                        <div class="icon">
                                            <img src="assets/img/element/offer1.png" alt="img">
                                        </div>
                                        <h5 class="seri white-clr d-flex align-items-end">
                                            03
                                        </h5>
                                    </div>
                                    <div class="content">
                                        <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">
                                            PINCODE CHECK
                                        </h5>
                                        <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">
                                            Show Service availibity is limited. Disable it if serving pan India.
                                        </p>
                                        <a href="contact" class="white-clr d-flex gap-4">
                                            Explore More
                                            <span class="rot60">
                                                <i class="fas fa-arrow-up white-clr"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="study-thumb-slide w-100">
                                <div
                                    class="offer-item d-md-flex d-grid gap-xxl-6 gap-xl-5 gap-lg-4 gap-3 p-xxl-6 p-xl-5 p-4">
                                    <div class="icon-area d-md-grid d-flex justify-content-between mb-md-0 mb-4">
                                        <div class="icon">
                                            <img src="assets/img/element/offer1.png" alt="img">
                                        </div>
                                        <h5 class="seri white-clr d-flex align-items-end">
                                            04
                                        </h5>
                                    </div>
                                    <div class="content">
                                        <h5 class="white-clr mb-xxl-6 mb-xl-5 mb-4">
                                            AUTO ALERTS
                                        </h5>
                                        <p class="pra-clr mb-xxl-6 mb-xl-5 mb-4">
                                            Order alerts via any sms service provider, Email alerts
                                        </p>
                                        <a href="contact" class="white-clr d-flex gap-4">
                                            Explore More
                                            <span class="rot60">
                                                <i class="fas fa-arrow-up white-clr"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-study-detials-inner mt-5">

                    <div class="finul-result">
                        <h4 class="mb-xxl-7 mb-4 white-clr">
                            Have custom eCommerce website needs? We have personalized solutions.
                        </h4>
                        <div
                            class="d-md-flex flex-grid align-items-center gap-xxl-20 gap-xl-10 gap-lg-7 gap-md-6 gap-10">
                            <div class="fiial-result-list mb-md-0 mb-4">
                                <ul>
                                    <li>
                                        Custom website design capabilities
                                    </li>
                                    <li>
                                        Fastest script on marketplace
                                    </li>
                                    <li>
                                        Super caching system
                                    </li>
                                    <li>
                                        Customer review option
                                    </li>
                                    <li>
                                        Bundle deal products
                                    </li>
                                    <li>
                                        Permission based admin/vendor user
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Server side rendering
                                    </li>
                                    <li>
                                        Dynamic product suggestion
                                    </li>
                                    <li>
                                        Suggestional products on search
                                    </li>
                                    <li>
                                        Location based shipping price
                                    </li>
                                    <li>
                                        Dynamic product collection
                                    </li>
                                    <li>
                                        Super caching system
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
                                <div class="progres-item mt-4">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-5 mb-3">
                                        <span class="conssub">
                                            Custom UI/UX
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





                <div class="swiper study-slidewrappp row g-xxl-7 g-5 justify-content-center mt-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-6">
                            <div class="project-count-item d-center">
                                <div class="box">
                                    <h2>
                                        <span class="count">250</span>
                                        <span>+</span>
                                    </h2>
                                    <span class="pra-clr">
                                        Team member
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-6">
                            <div class="project-count-item d-center">
                                <div class="box">
                                    <h2>
                                        <span class="count">850</span>
                                        <span>+</span>
                                    </h2>
                                    <span class="pra-clr">
                                        Project Done
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-6">
                            <div class="project-count-item d-center">
                                <div class="box">
                                    <h2>
                                        <span class="count">360</span>
                                        <span>+</span>
                                    </h2>
                                    <span class="pra-clr">
                                        Happy Clients
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-6">
                            <div class="project-count-item d-center">
                                <div class="box">
                                    <h2>
                                        <span class="count">160</span>
                                        <span>+</span>
                                    </h2>
                                    <span class="pra-clr">
                                        Winning Award
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Text SLider Start -->
        <div class="digital-solution testi-italic mt-6 pb-lg-15 pb-15">
            <div class="mycustom-marque">
                <div class="scrolling-wrap">
                    <div class="comm">
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                        <div class="cmn-textslide textitalick">30+ </div>
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                        <div class="cmn-textslide text-custom-storke">ECOMMERCE</div>
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                        <div class="cmn-textslide text-custom-storke">DESIGNS</div>
                    </div>
                    <div class="comm">
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                        <div class="cmn-textslide textitalick">30+ </div>
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                        <div class="cmn-textslide text-custom-storke">ECOMMERCE</div>
                        <div><img src="assets/img/client/text-slide.png" alt="img"></div>
                        <div class="cmn-textslide text-custom-storke">DESIGNS</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Text Slider End -->

        <!-- Protfolio Solution Start -->
        <section class="protfolio-solution pb-space">
            <div class="container">
                <div class="swiper protfolio-solutionwrap">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="protfolio-solution-item">
                                <div class="thumb position-relative mb-xxl-7 mb-5">
                                    <img src="assets/img/my/3.webp" alt="img">

                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="protfolio-solution-item">
                                <div class="thumb position-relative mb-xxl-7 mb-5">
                                    <img src="assets/img/my/4.webp" alt="img">

                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="protfolio-solution-item">
                                <div class="thumb position-relative mb-xxl-7 mb-5">
                                    <img src="assets/img/my/5.webp" alt="img">

                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="protfolio-solution-item">
                                <div class="thumb position-relative mb-xxl-7 mb-5">
                                    <img src="assets/img/my/4.webp" alt="img">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- Protfolio Solution End -->
        <section>
            <div class="swiper testimonial-version03 position-relative mt-6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="testimonial-zero-oneitem testimonial-zero-oneitemv3 d-flex align-items-center gap-xxl-6 gap-xl-4 gap-3">
                            <img src="assets/img/testimonial/vector01.png" alt="arrow" class="testi-arrow">
                            <div class="content">
                                <div class="d-flex align-items-center gap-xxl-5 gap-3">
                                    <div class="savannah">
                                        <img src="assets/img/testimonial/testiv3-1.png" alt="img">
                                    </div>
                                    <div class="desig">
                                        <h6 class="white-clr mb-1">
                                            Kathryn Murphy
                                        </h6>
                                        <span class="pra-clr mb-2 d-block">
                                            Marketing Coordinator
                                        </span>
                                        <div class="ratting-area d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="pra-clr mt-xxl-8 mt-xl-6 mt-lg-5 mt-4">
                                    Consectetur adipiscing elit. Integer is nunc viverra laoreet est the is
                                    porta pretium metus aliquam eget maecenas porta
                                    is nunc viverra Aenean.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="testimonial-zero-oneitem testimonial-zero-oneitemv3 d-flex align-items-center gap-xxl-6 gap-xl-4 gap-3">
                            <img src="assets/img/testimonial/vector01.png" alt="arrow" class="testi-arrow">
                            <div class="content">
                                <div class="d-flex align-items-center gap-xxl-5 gap-3">
                                    <div class="savannah">
                                        <img src="assets/img/testimonial/testiv3-3.png" alt="img">
                                    </div>
                                    <div class="desig">
                                        <h6 class="white-clr mb-1">
                                            Leslie Alexander
                                        </h6>
                                        <span class="pra-clr mb-2 d-block">
                                            Web Designer
                                        </span>
                                        <div class="ratting-area d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="pra-clr mt-xxl-8 mt-xl-6 mt-lg-5 mt-4">
                                    Consectetur adipiscing elit. Integer is nunc viverra laoreet est the is
                                    porta pretium metus aliquam eget maecenas porta
                                    is nunc viverra Aenean.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="testimonial-zero-oneitem testimonial-zero-oneitemv3 d-flex align-items-center gap-xxl-6 gap-xl-4 gap-3">
                            <img src="assets/img/testimonial/vector01.png" alt="arrow" class="testi-arrow">
                            <div class="content">
                                <div class="d-flex align-items-center gap-xxl-5 gap-3">
                                    <div class="savannah">
                                        <img src="assets/img/testimonial/testiv3-2.png" alt="img">
                                    </div>
                                    <div class="desig">
                                        <h6 class="white-clr mb-1">
                                            Savannah Nguyen
                                        </h6>
                                        <span class="pra-clr mb-2 d-block">
                                            Nursing Assistant
                                        </span>
                                        <div class="ratting-area d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                            <i class="fa-solid fa-star theme-clr"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="pra-clr mt-xxl-8 mt-xl-6 mt-lg-5 mt-4">
                                    Consectetur adipiscing elit. Integer is nunc viverra laoreet est the is
                                    porta pretium metus aliquam eget maecenas porta
                                    is nunc viverra Aenean.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('include/footer')
    @livewireScripts
</body>

</html>