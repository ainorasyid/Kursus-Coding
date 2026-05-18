<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codenova</title>
    <link rel="stylesheet" href="{{ asset("assets/landingPage/libs/owl.carousel/dist/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/landingPage/libs/aos-master/dist/aos.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/landingPage/css/styles.css")}}" />
</head>

<body>

    <!-- Header -->
    <x-landing.navbar></x-landing.navbar>

    <!--  Page Wrapper -->
    <div class="page-wrapper overflow-hidden"> 

        <!--  Banner Section -->
        <x-landing.banner></x-landing.banner>

        <!--  Stats & Facts Section -->
        <x-landing.stats></x-landing.stats>

        <!--  Services Section -->
        <x-landing.services></x-landing.services>

        <!--  Why choose us Section -->
        <x-landing.about></x-landing.about>

        <!--  Testimonial Section -->
        <x-landing.testimoni></x-landing.testimoni>

        <!--  FAQ Section -->
        <x-landing.faq></x-landing.faq>

        <!--  Get in touch Section -->
        <x-landing.daftar></x-landing.daftar>

    </div>

    <x-landing.footer></x-landing.footer>

    <div class="get-template hstack gap-2">
        <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
            id="scrollToTopBtn">
            <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
        </button>
    </div>


    <script src="{{ asset('assets/landingPage/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/aos-master/dist/aos.js')}}"></script>
    <script src="{{ asset('assets/landingPage/js/custom.js')}}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>