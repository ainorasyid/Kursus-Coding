<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-cpp-1</title>

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

                        <h3>Quiz Pengenalan C++</h3>

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
                                        1. C++ dikembangkan dari bahasa?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            Bahasa C
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            Bahasa HTML
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 2 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        2. Fungsi utama main() pada C++ adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            Fungsi utama program
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            Untuk membuat gambar
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 3 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        3. Perintah untuk menampilkan output di C++ adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            cout
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            cin
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 4 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        4. Library untuk input dan output pada C++ adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            iostream
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            graphics
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 5 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        5. C++ sering digunakan untuk membuat?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Game dan aplikasi
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Poster
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 6 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        6. Tipe data untuk menyimpan teks adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            string
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            int
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 7 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        7. Tipe data int digunakan untuk?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Menyimpan angka
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Menyimpan gambar
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 8 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        8. Fungsi return 0; pada program digunakan untuk?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            Mengakhiri program
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            Membuat variabel
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 9 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        9. using namespace std; digunakan agar?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal9">

                                        <label class="form-check-label">
                                            Tidak perlu menulis std::
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal9">

                                        <label class="form-check-label">
                                            Program menjadi warna biru
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 10 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        10. Bahasa C++ terkenal karena?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal10">

                                        <label class="form-check-label">
                                            Cepat dan mendukung OOP
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal10">

                                        <label class="form-check-label">
                                            Digunakan untuk edit foto
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