<!DOCTYPE html>
<html lang="en">

<head>
    @include('include/head')
    @livewireStyles
</head>

<body>
    @include('include/header')
    @include('sweetalert::alert')

    <!-- Main start -->
    <main class="main">



        <!-- Cmn About Start -->
        <section class="pt-space pb-space section-bg mt-6">
            <div class="container">
                <div class="row g-6 justify-content-between">
                    <div class="col-lg-6 pe-lg-14">
                        <div class="d-flex gap-xxl-7 gap-xl-5 gap-4 position-relative z-index-1">
                            <div class="about-small-thumb w-100" data-aos="zoom-in" data-aos-duration="1500">
                                <img style="border-radius: 0px 20px 20px 0px;"
                                    src="assets/img/my/work-with-us-banner.webp" alt="img"
                                    class="w-100">
                            </div>

                            <!--- About Arrow -->
                            <img src="assets/img/element/arrow-right-storke.png" alt="img" class="about-tumb-arrow">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-samll-content">
                            <div class="pricing-title">
                                <a href="workwithus" wire:navigate>
                                    <div class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5"
                                        data-aos="zoom-in-left" data-aos-duration="1400">

                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Customers


                                    </div>
                                </a>
                                <a href="workwithuss" wire:navigate>
                                    <div class="radius-btn text-uppercase cmn-border d-inline-flex radius100 py-xxl-2 py-2 px-xxl-4 px-4 theme-clr gap-xxl-4 gap-3 mb-xxl-8 mb-xl-6 mb-5"
                                        data-aos="zoom-in-left" data-aos-duration="1400">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            Job Seekers

                                    </div>
                                </a>
                                <h4 class="sti tle d-flex align-items-center mb-xxl-8 mb-xl-7 mb-lg-6 mb-5 gap-xxl-7 gap-xl-5 gap-3"
                                    data-aos="zoom-in-left" data-aos-duration="1700">
                                    Finding a trusted tech partner is the greatest asset for any business.

                                </h4>
                                <p class="white-clr mb-xxl-8 mb-xl-8 mb-5" data-aos="zoom-in-up"
                                    data-aos-duration="1400">
                                    Hire software developers from India through us for your next groundbreaking project.

                                </p>
                                <div class="result-progress-wrap" data-aos="zoom-in-up" data-aos-duration="1800">

                                    <div class="progres-item">
                                    <form action="contact" method="post" enctype="">
                                    @csrf
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" name="number" class="form-control" placeholder="Phone No" required>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <input type="email" name="email" class="form-control" placeholder="Email ID" required>
                                                    <input type="hidden" value="workwithus" name="message" class="form-control" placeholder="Email ID" required>
                                                
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cmn About End -->

        <!-- Cmn About Start -->
        <section class="pb-space section-bg">
            <div class="container">
                <div class="row g-6 justify-content-between">

                    <div class="col-lg-6">
                        <div class="about-samll-content">
                            <div class="pricing-title">

                                <h3 class="sti tle d-flex align-items-center mb-xxl-8 mb-xl-7 mb-lg-6 mb-5 gap-xxl-7 gap-xl-5 gap-3"
                                    data-aos="zoom-in-left" data-aos-duration="1700">
                                    We do great apps for global clients
                                </h3>
                                <p class="white-clr mb-xxl-8 mb-xl-8 mb-5" data-aos="zoom-in-up"
                                    data-aos-duration="1400">
                                    At Code Digi Lab, We Function as Software Consultants Rather Than Mere Coders. by Continuously Learning the Latest Technology Trends and Applying That Knowledge to Client Projects, We Ensure Scalable and High-Quality Deliveries While Allowing Our Employees to Enjoy Unique and Engaging Work. This Approach Has Fostered an Ecosystem Where Our Clients and Employees Collaborate as One Team. Check Out the List of Global Brands That Trust Code Digi Lab and Work Closely with Us.

                                </p>
                                <button type="submit" class="btn btn-primary mt-2">OUR WORK</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-14">
                        <div class="d-flex gap-xxl-7 gap-xl-5 gap-4 position-relative z-index-1">
                            <div class="about-small-thumb w-100" data-aos="zoom-in" data-aos-duration="1500">
                                <img style="border-radius: 20px;"
                                    src="assets/img/my/work-with-us-banner2.webp" alt="img"
                                    class="w-100">
                            </div>

                            <!--- About Arrow -->
                            <img src="assets/img/element/arrow-right-storke.png" alt="img" class="about-tumb-arrow">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cmn About End -->

        <!-- Cmn About Start -->
        <section class="pb-space section-bg">
            <div class="container">
                <div class="row g-6 justify-content-between">
                    <div class="col-lg-4 pe-lg-14">
                        <div class="d-flex gap-xxl-7 gap-xl-5 gap-4 position-relative z-index-1">
                            <div class="about-small-thumb w-100" data-aos="zoom-in" data-aos-duration="1500">
                                <img style="border-radius: 20px;"
                                    src="assets/img/my/image-5-5.webp" alt="img" class="w-100">
                            </div>

                            <!--- About Arrow -->
                            <img src="assets/img/element/arrow-right-storke.png" alt="img" class="about-tumb-arrow">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-samll-content">
                            <div class="pricing-title">

                                <h3 class="sti tle d-flex align-items-center mb-xxl-8 mb-xl-7 mb-lg-6 mb-5 gap-xxl-7 gap-xl-5 gap-3"
                                    data-aos="zoom-in-left" data-aos-duration="1700">
                                    Happy Staff, Happy Customer
                                </h3>
                                <p class="white-clr mb-xxl-8 mb-xl-8 mb-5" data-aos="zoom-in-up"
                                    data-aos-duration="1400">
                                    A happier workforce has a direct relation with the quality of the deliveries.
                                    Employees’ continuous learning, their work life balance and timely incentives are
                                    practiced at Yugasa religiously. Every employee is an asset for us and all our
                                    clients are golden feathers in our success hat.
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-samll-content">
                            <div class="pricing-title">

                                <h3 class="sti tle d-flex align-items-center mb-xxl-8 mb-xl-7 mb-lg-6 mb-5 gap-xxl-7 gap-xl-5 gap-3"
                                    data-aos="zoom-in-left" data-aos-duration="1700">
                                    Confusion Free Communication
                                </h3>
                                <p class="white-clr mb-xxl-8 mb-xl-8 mb-5" data-aos="zoom-in-up"
                                    data-aos-duration="1400">
                                    We keep complete transparency in our communication at every stage. May that be
                                    within the team members or between team and the clients, we ensure needed
                                    communication in a timely manner. We do product demos, emails and online meetings
                                    for proactive communication.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Cmn About End -->

        <!-- Cmn About Start -->
        <section class="pb-space section-bg">
            <div class="container">
                <div class="row g-6 justify-content-between">

                    <div class="col-lg-6">
                        <div class="about-samll-content">
                            <div class="pricing-title">

                                <h3 class="sti tle d-flex align-items-center mb-xxl-8 mb-xl-7 mb-lg-6 mb-5 gap-xxl-7 gap-xl-5 gap-3"
                                    data-aos="zoom-in-left" data-aos-duration="1700">
                                    Great processes make great products

                                </h3>
                                <p class="white-clr mb-xxl-8 mb-xl-8 mb-5" data-aos="zoom-in-up"
                                    data-aos-duration="1400">
                                    Great products are the outcome of executing things in the best way. Working with Yugasa means lot of learning, great relationship, and following standard software development practices by a right fit of people working as one team.


                                </p>
                                <button type="submit" class="btn btn-primary mt-2">OUR WORK</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-14">
                        <div class="d-flex gap-xxl-7 gap-xl-5 gap-4 position-relative z-index-1">
                            <div class="about-small-thumb w-100" data-aos="zoom-in" data-aos-duration="1500">
                                <img style="border-radius: 20px;"
                                    src="assets/img/my/work-with-us-banner3.webp" alt="img"
                                    class="w-100">
                            </div>

                            <!--- About Arrow -->
                            <img src="assets/img/element/arrow-right-storke.png" alt="img" class="about-tumb-arrow">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cmn About End -->


    </main>
    <!-- Main End -->

    @include('include/footer')
    @livewireScripts
</body>

</html>