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

                        <h3>Quiz Heading & Paragraph HTML</h3>

                        <p class="text-subtitle text-muted">
                            Jawab berdasarkan materi Heading & Paragraph.
                        </p>

                    </div>

                </div>

                <!-- QUIZ -->
                <section class="section">

                    <div class="card">

                        <div class="card-body">

                            <form action="/quiz/html/3/submit" method="POST">
                                @csrf

                                <!-- SOAL 1 -->
                                <div class="mb-5">

                                    <h5>1. Heading HTML terdiri dari berapa level?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal1" value="A" class="form-check-input">
                                        <label class="form-check-label">6 level (h1 - h6)</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal1" value="B" class="form-check-input">
                                        <label class="form-check-label">7 level (h1 - h7)</label>
                                    </div>

                                </div>

                                <!-- SOAL 2 -->
                                <div class="mb-5">

                                    <h5>2. Tag untuk membuat paragraph adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal2" value="A" class="form-check-input">
                                        <label class="form-check-label">&lt;p&gt;</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal2" value="B" class="form-check-input">
                                        <label class="form-check-label">&lt;par&gt;</label>
                                    </div>

                                </div>

                                <!-- SOAL 3 -->
                                <div class="mb-5">

                                    <h5>3. Heading utama dalam HTML adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal3" value="A" class="form-check-input">
                                        <label class="form-check-label">h1</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal3" value="B" class="form-check-input">
                                        <label class="form-check-label">h6</label>
                                    </div>

                                </div>

                                <!-- SOAL 4 -->
                                <div class="mb-5">

                                    <h5>4. Fungsi heading adalah?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal4" value="A" class="form-check-input">
                                        <label class="form-check-label">Membuat judul dan struktur</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal4" value="B" class="form-check-input">
                                        <label class="form-check-label">Membuat gambar</label>
                                    </div>

                                </div>

                                <!-- SOAL 5 -->
                                <div class="mb-5">

                                    <h5>5. Heading apa yang terbesar?</h5>

                                    <div class="form-check">
                                        <input type="radio" name="soal5" value="A" class="form-check-input">
                                        <label class="form-check-label">h1</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="soal5" value="B" class="form-check-input">
                                        <label class="form-check-label">h6</label>
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