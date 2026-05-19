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

                        <h3>Quiz Struktur HTML</h3>

                        <p class="text-subtitle text-muted">
                            Jawab berdasarkan materi Struktur Dasar HTML.
                        </p>

                    </div>

                </div>

                <!-- Quiz -->
                <section class="section">

                    <div class="card">

                        <div class="card-body">

                            <form action="/quiz/html/2/submit" method="POST">
                                @csrf

                                <!-- SOAL 1 -->
                                <div class="mb-5">

                                    <h5>1. Tag yang digunakan untuk memberi tahu browser HTML5 adalah?</h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal1" value="A">
                                        <label class="form-check-label">&lt;!DOCTYPE html&gt;</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal1" value="B">
                                        <label class="form-check-label">&lt;html5&gt;</label>
                                    </div>

                                </div>

                                <!-- SOAL 2 -->
                                <div class="mb-5">

                                    <h5>2. Tag utama pembungkus seluruh HTML adalah?</h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal2" value="A">
                                        <label class="form-check-label">&lt;html&gt;</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal2" value="B">
                                        <label class="form-check-label">&lt;head&gt;</label>
                                    </div>

                                </div>

                                <!-- SOAL 3 -->
                                <div class="mb-5">

                                    <h5>3. Tempat semua konten website ditampilkan adalah?</h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal3" value="A">
                                        <label class="form-check-label">&lt;body&gt;</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal3" value="B">
                                        <label class="form-check-label">&lt;title&gt;</label>
                                    </div>

                                </div>

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