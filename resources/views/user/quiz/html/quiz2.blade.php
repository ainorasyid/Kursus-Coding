<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz2 html</title>

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

                        <h3>Quiz Struktur Dasar HTML</h3>

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
                                        1. Apa fungsi dari &lt;!DOCTYPE html&gt; ?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal1">
                                        <label class="form-check-label">
                                            Menentukan versi HTML
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal1">
                                        <label class="form-check-label">
                                            Membuat paragraf
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 2 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        2. Tag utama pembungkus seluruh HTML adalah?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal2">
                                        <label class="form-check-label">
                                            html
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal2">
                                        <label class="form-check-label">
                                            body
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 3 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        3. Bagian untuk menyimpan konfigurasi website adalah?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal3">
                                        <label class="form-check-label">
                                            head
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal3">
                                        <label class="form-check-label">
                                            footer
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 4 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        4. Tag untuk memberi judul tab browser adalah?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal4">
                                        <label class="form-check-label">
                                            title
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal4">
                                        <label class="form-check-label">
                                            meta
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 5 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        5. Semua isi website ditampilkan pada bagian?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal5">
                                        <label class="form-check-label">
                                            body
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal5">
                                        <label class="form-check-label">
                                            head
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 6 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        6. Apa fungsi tag &lt;head&gt; ?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal6">
                                        <label class="form-check-label">
                                            Menyimpan metadata website
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal6">
                                        <label class="form-check-label">
                                            Menampilkan gambar
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 7 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        7. Tag untuk membuat heading besar adalah?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal7">
                                        <label class="form-check-label">
                                            h1
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal7">
                                        <label class="form-check-label">
                                            p
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 8 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        8. Apa fungsi tag &lt;body&gt; ?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal8">
                                        <label class="form-check-label">
                                            Menampilkan isi website
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal8">
                                        <label class="form-check-label">
                                            Menyimpan CSS
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 9 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        9. HTML digunakan untuk?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal9">
                                        <label class="form-check-label">
                                            Membuat struktur website
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal9">
                                        <label class="form-check-label">
                                            Mengedit video
                                        </label>
                                    </div>

                                </div>

                                <!-- Soal 10 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        10. Struktur HTML yang benar diawali dengan?
                                    </h5>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal10">
                                        <label class="form-check-label">
                                            !DOCTYPE html
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="soal10">
                                        <label class="form-check-label">
                                            body
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