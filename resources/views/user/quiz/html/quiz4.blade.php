<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-link-image</title>

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
                                        1. Tag HTML untuk membuat link adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            &lt;a&gt;
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            &lt;img&gt;
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 2 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        2. Atribut untuk menentukan tujuan link adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            href
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            src
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 3 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        3. Tag HTML untuk menampilkan gambar adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            &lt;img&gt;
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            &lt;a&gt;
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 4 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        4. Atribut untuk menentukan lokasi gambar adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            src
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            href
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 5 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        5. Fungsi link pada website adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Menghubungkan halaman website
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Membuat tabel
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 6 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        6. Atribut alt pada image digunakan untuk?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            Memberikan deskripsi gambar
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            Menghapus gambar
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 7 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        7. target="_blank" digunakan untuk?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Membuka link di tab baru
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Menutup browser
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 8 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        8. Atribut untuk mengatur ukuran lebar gambar adalah?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            width
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            height-text
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 9 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        9. Link dan image termasuk elemen penting karena?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal9">

                                        <label class="form-check-label">
                                            Membantu navigasi dan mempercantik website
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal9">

                                        <label class="form-check-label">
                                            Menghapus isi website
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 10 -->
                                <div class="mb-5">

                                    <h5 class="mb-3">
                                        10. Gambar dapat dijadikan link menggunakan kombinasi tag?
                                    </h5>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal10">

                                        <label class="form-check-label">
                                            &lt;a&gt; dan &lt;img&gt;
                                        </label>

                                    </div>

                                    <div class="form-check mb-2">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal10">

                                        <label class="form-check-label">
                                            &lt;p&gt; dan &lt;h1&gt;
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