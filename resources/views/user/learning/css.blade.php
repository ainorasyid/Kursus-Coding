<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
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
                <!-- PAGE HEADER -->
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 order-md-1 order-last mb-4">
                                <h1>CSS (Cascading Style Sheets)</h1>
                            </div>
                        </div>
                    </div>
                    <!-- PENGERTIAN CSS -->
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">
                                    Apa itu CSS?
                                </h2>
                            </div>
                            <div class="card-body">
                                <!-- Pengertian CSS -->
                                <div class="mb-4">
                                    <h4 class="text-primary">
                                        CSS (Cascading Style Sheets)
                                    </h4>
                                    <p>
                                        CSS adalah bahasa yang digunakan untuk mengatur tampilan dan desain
                                        sebuah website. CSS bekerja bersama HTML untuk membuat halaman website
                                        menjadi lebih menarik, modern, dan responsif.
                                    </p>
                                    <p>
                                        Jika HTML berfungsi sebagai struktur website, maka CSS berfungsi
                                        sebagai pengatur tampilan seperti warna, font, ukuran teks,
                                        layout, jarak antar elemen, dan animasi.
                                    </p>
                                </div>
                                <!-- Fungsi CSS -->
                                <div class="mb-4">
                                    <h4 class="text-primary">
                                        Fungsi CSS
                                    </h4>
                                    <ul>
                                        <li>Mengatur warna teks dan background website</li>
                                        <li>Mengatur ukuran dan jenis font</li>
                                        <li>Membuat layout website lebih rapi</li>
                                        <li>Mengatur margin dan padding</li>
                                        <li>Membuat animasi dan transisi</li>
                                        <li>Membuat website responsive</li>
                                    </ul>
                                </div>
                                <!-- Kenapa Penting -->
                                <div>
                                    <h4 class="text-primary">
                                        Kenapa CSS Penting Dipelajari?
                                    </h4>
                                    <p>
                                        CSS membuat website terlihat profesional dan nyaman digunakan.
                                        Tanpa CSS, tampilan website hanya berupa teks polos tanpa desain.
                                    </p>
                                    <p>
                                        CSS juga menjadi skill dasar yang wajib dipahami sebelum
                                        mempelajari framework frontend seperti Bootstrap, Tailwind CSS,
                                        maupun React.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MATERI PEMBELAJARAN -->
                <section class="section">
                    <div class="mb-4">
                        <h3 class="text-primary">
                            Materi Pembelajaran
                        </h3>
                        <p class="text-muted">
                            Pelajari CSS mulai dari dasar hingga memahami layout website modern.
                        </p>
                    </div>
                    <div class="row">
                        <!-- MATERI 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            1. Pengenalan CSS
                                        </h5>
                                        <span class="badge bg-success">
                                            Dasar
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar pengertian CSS, fungsi CSS,
                                        dan alasan CSS penting dipelajari.
                                    </p>
                                    <a href=""
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- MATERI 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            2. Selector CSS
                                        </h5>
                                        <span class="badge bg-primary">
                                            Beginner
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Memahami selector CSS seperti class,
                                        id, dan element selector.
                                    </p>
                                    <a href="{{ route('user.learning.css.selector') }}"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- MATERI 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            3. Property CSS
                                        </h5>
                                        <span class="badge bg-warning">
                                            Mudah
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar property CSS seperti color,
                                        background, font-size, dan border.
                                    </p>
                                    <a href="{{ route('user.learning.css.property') }}"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- MATERI 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            4. Layout CSS
                                        </h5>
                                        <span class="badge bg-info">
                                            Intermediate
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar margin, padding, flexbox,
                                        grid, dan layout website modern.
                                    </p>
                                    <a href="{{ route('user.learning.css.layout') }}"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- VIDEO PEMBELAJARAN -->
                <section class="section">
                    <div class="mb-4">
                        <h3 class="text-primary">
                            Video Pembelajaran CSS
                        </h3>
                        <p class="text-muted">
                            Pelajari dasar CSS melalui video pembelajaran berikut.
                        </p>
                    </div>
                    <div class="row">
                        <!-- VIDEO 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/1PnVor36_40"
                                            title="Pengenalan CSS"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>
                                        Pengenalan CSS
                                    </h5>
                                    <p class="text-muted">
                                        Memahami dasar CSS dan fungsi CSS pada website.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- VIDEO 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/n7vZxg9pxkg"
                                            title="Dasar CSS"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>
                                        Dasar-Dasar CSS
                                    </h5>
                                    <p class="text-muted">
                                        Belajar selector, property,
                                        dan value pada CSS.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- VIDEO 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/ESnrn1kAD4E"
                                            title="CSS Layout"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>
                                        Layout & Styling CSS
                                    </h5>
                                    <p class="text-muted">
                                        Belajar membuat tampilan website lebih modern menggunakan CSS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <x-footer></x-footer>

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