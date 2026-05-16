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

        <div class="position-fixed bottom-0 end-0 m-4" style="z-index: 9999;">
            <a href="{{ route('landing') }}" class="btn btn-primary rounded-circle p-3">
                <iconify-icon icon="lucide:arrow-left" width="20" height="20"></iconify-icon>
            </a>
        </div>

        <section
            class="bg-light-gray border-top border-primary border-4 d-flex flex-column align-items-center justify-content-center min-vh-100">

            <div class="col-md-6 text-center">
                @if (session()->has('success'))
                    <div class="alert fade show col-md-8 col-8 mx-auto" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @error('error')
                    <div class="alert fade show col-md-8 col-8 mx-auto" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror
            </div>

            <div class="container py-3">
                <div class="sign-in card mx-auto shadow-lg">
                    <div class="card-body py-8 px-lg-5">
                        <a href="#" class="mb-8 hstack justify-content-center">
                            <img src="{{ asset('assets/landingPage/images/logos/Codenova_full_hitam.svg')}}"
                                alt="logo-dark" class="img-fluid">
                        </a>
                        <div class="position-relative hstack justify-content-center">
                            <hr class="my-8 w-100 d-block">
                            <p class="mb-0 fs-3 bg-body px-3 position-absolute top-50 start-50 translate-middle">Sign in
                                dengan email</p>
                        </div>
                        <form class="d-flex flex-column gap-3" action="{{ route('login.auth') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror border-bottom"
                                    id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp"
                                    name="email" value="{{ old('email') }}">
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror border-bottom"
                                    id="inputPassword" placeholder="Password" name="password">
                                <label for="floatingInput">Password</label>
                                @error('password')
                                    <div class="invalid-feedback mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit"
                                class="btn btn-dark w-100 justify-content-center py-2 fw-medium my-7 fs-4 lh-lg">
                                Sign In
                            </button>
                        </form>
                        <p class="mb-0 fw-medium text-center">Belum punya akun? <a class="text-dark"
                                href="{{ route('register') }}">Sign Up</a>
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