<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz1 html</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/app.css') }}">
</head>

<body>

    <div id="app">

        <x-sidebar></x-sidebar>

        <div id="main" class="layout-navbar">

            <x-user.navbar></x-user.navbar>

            <div id="main-content">

                <!-- Heading -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <h3>Quiz HTML Dasar</h3>

                        <p class="text-subtitle text-muted">
                            Jawab pertanyaan berikut dengan benar.
                        </p>

                    </div>

                </div>

                <!-- Quiz -->
                <section class="section">

                    <div class="card">

                        <div class="card-body">

                            <form>

                                <!-- Soal 1 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        1. Apa kepanjangan dari HTML?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            HyperText Markup Language
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            HyperText Machine Language
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 2 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        2. Tag untuk membuat heading adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            h1
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            img
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 3 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        3. Tag untuk membuat paragraph adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            p
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            br
                                        </label>

                                    </div>

                                </div>

                                <!-- Button -->
                                <button class="btn btn-primary btn-lg">

                                    <i class="bi bi-send-fill"></i>

                                    Submit Quiz

                                </button>

                            </form>

                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>

    <script src="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

</body>

</html>