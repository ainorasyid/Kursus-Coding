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

                        <h3>Quiz Link & Image HTML</h3>

                        <p class="text-subtitle text-muted">
                            Jawab berdasarkan materi Link dan Image HTML.
                        </p>

                    </div>

                </div>

                <!-- QUIZ -->
                <section class="section">

                    <div class="card">

                        <div class="card-body">

                            <form action="/quiz/html/4/submit" method="POST">
                                @csrf

                                <!-- SOAL 1 -->
                                <div class="mb-5">

                                    <h5>1. Tag untuk membuat link adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal1" value="A" class="form-check-input">
                                        <label class="form-check-label">&lt;a&gt;</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal1" value="B" class="form-check-input">
                                        <label class="form-check-label">&lt;link&gt;</label>
                                    </div>

                                </div>

                                <!-- SOAL 2 -->
                                <div class="mb-5">

                                    <h5>2. Atribut untuk tujuan link adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal2" value="A" class="form-check-input">
                                        <label class="form-check-label">href</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal2" value="B" class="form-check-input">
                                        <label class="form-check-label">src</label>
                                    </div>

                                </div>

                                <!-- SOAL 3 -->
                                <div class="mb-5">

                                    <h5>3. Tag untuk menampilkan gambar adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal3" value="A" class="form-check-input">
                                        <label class="form-check-label">&lt;img&gt;</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal3" value="B" class="form-check-input">
                                        <label class="form-check-label">&lt;image&gt;</label>
                                    </div>

                                </div>

                                <!-- SOAL 4 -->
                                <div class="mb-5">

                                    <h5>4. Atribut untuk lokasi gambar adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal4" value="A" class="form-check-input">
                                        <label class="form-check-label">src</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal4" value="B" class="form-check-input">
                                        <label class="form-check-label">href</label>
                                    </div>

                                </div>

                                <!-- SOAL 5 -->
                                <div class="mb-5">

                                    <h5>5. Fungsi link pada HTML adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal5" value="A" class="form-check-input">
                                        <label class="form-check-label">Navigasi halaman</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal5" value="B" class="form-check-input">
                                        <label class="form-check-label">Menampilkan video</label>
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