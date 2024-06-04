<!DOCTYPE html>
<html lang="en">

<head>
    @include('include/head')
    @livewireStyles
    <script>
       window.location.replace("/");
    </script>
</head>

<body>
    @include('include/header')

    <!-- Main start -->
    <main class="main">
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
                          
                            <a href="/" wire:navigate class="cmn-btn themebg py-xxl-4 py-3 px-xxl-6 px-5 text-whitess">
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