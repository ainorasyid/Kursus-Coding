<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codenova</title>
    <link rel="stylesheet" href="{{ asset('assets/landingPage/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingPage/libs/aos-master/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingPage/css/styles.css') }}" />
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    
  <div class="page-wrapper overflow-hidden">

    <!--  Get in touch Section -->
    <section
      class="bg-light-gray border-top border-primary border-4 d-flex align-items-center justify-content-center min-vh-100">
      <div class="container py-3">
        <div class="sign-in card mx-auto shadow-lg">
          <div class="card-body py-8 px-lg-5">
            <a href="#" class="mb-8 hstack justify-content-center">
              <img src="{{ asset('assets/landingPage/images/logos/Codenova_full_hitam.svg')}}" alt="logo-dark" class="img-fluid">
            </a>
            <div class="position-relative hstack justify-content-center">
              <hr class="my-8 w-100 d-block">
              <p class="mb-0 fs-3 bg-body px-3 position-absolute top-50 start-50 translate-middle">Daftar dengan email</p>
            </div>
            <form class="d-flex flex-column gap-3">
              <div>
                <input type="text" id="disabledTextInput" class="form-control border-bottom" placeholder="First Name">
              </div>
              <div>
                <input type="text" id="disabledTextInput" class="form-control border-bottom" placeholder="Last Name">
              </div>
              <div>
                <input type="email" class="form-control border-bottom" id="exampleInputEmail1" placeholder="Email"
                  aria-describedby="emailHelp">
              </div>
              <div>
                <input type="password" class="form-control border-bottom" id="inputPassword" placeholder="Password">
              </div>

              <a href="sign-in.html" class="btn btn-dark w-100 justify-content-center py-2 fw-medium my-7 fs-4 lh-lg">
                Sign Up
              </a>
            </form>
            <p class="text-center mb-1 d-block fw-medium">By creating an account, you agree with our <span
                class="text-dark" >Privacy</span> and <span class="text-dark">Policy</span>.</p>
            <p class="mb-0 fw-medium text-center">Sudah mempunyai akun? <a class="text-dark" href="{{ route('login') }}">Sign
                In</a>
            </p>
          </div>
        </div>
      </div>
    </section>

  </div>
    
    <!-- Required Js -->
    <script src="{{ asset('assets/landingPage/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/aos-master/dist/aos.js')}}"></script>
    <script src="{{ asset('assets/landingPage/js/custom.js')}}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

</body>
<!-- [Body] end -->

</html>