<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Mazer Admin Dashboard</title>

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

        <div id="main" class='layout-navbar'>

            <x-user.navbar></x-user.navbar>

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 order-md-1 order-last mb-4">
                                <h1>HTML (HyperText Markup Language)</h1>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Apa itu HTML?</h2>
                            </div>

                            <div class="card-body">

                                <!-- Pengertian HTML -->
                                <div class="mb-4">
                                    <h4 class="text-primary">HTML (HyperText Markup Language)</h4>

                                    <p>
                                        HTML adalah bahasa markup yang digunakan untuk membuat struktur
                                        sebuah halaman website. HTML menjadi dasar utama dalam pembuatan
                                        website karena digunakan untuk menampilkan teks, gambar, video,
                                        tombol, tabel, dan berbagai elemen lainnya pada browser.
                                    </p>

                                    <p>
                                        Dengan HTML, sebuah website dapat memiliki susunan halaman yang
                                        rapi dan terstruktur sehingga mudah dipahami oleh pengguna maupun browser.
                                    </p>
                                </div>

                                <!-- Fungsi HTML -->
                                <div class="mb-4">
                                    <h4 class="text-primary">Fungsi HTML</h4>

                                    <ul>
                                        <li>Membuat struktur dasar halaman website</li>
                                        <li>Menampilkan teks, gambar, video, dan audio</li>
                                        <li>Membuat form input seperti login dan register</li>
                                        <li>Menghubungkan halaman website menggunakan link</li>
                                        <li>Menjadi pondasi utama dalam pengembangan web</li>
                                    </ul>
                                </div>

                                <!-- Kenapa Penting -->
                                <div>
                                    <h4 class="text-primary">Kenapa HTML Penting Dipelajari?</h4>

                                    <p>
                                        HTML merupakan dasar dari seluruh website yang ada di internet.
                                        Sebelum mempelajari CSS, JavaScript, maupun framework modern seperti
                                        Laravel dan React, seseorang wajib memahami HTML terlebih dahulu.
                                    </p>

                                    <p>
                                        Dengan memahami HTML, proses belajar pemrograman web akan menjadi
                                        lebih mudah karena kita mengetahui bagaimana sebuah halaman website
                                        dibangun dan ditampilkan kepada pengguna.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Video Pembelajaran -->
                <section class="section">

                    <div class="mb-4">
                        <h3 class="text-primary">Video Pembelajaran HTML</h3>
                        <p class="text-muted">
                            Pelajari dasar HTML melalui video pembelajaran berikut.
                        </p>
                    </div>

                    <div class="row">

                        <!-- Video 1 -->
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/qz0aGYrrlhU"
                                            title="Pengenalan HTML"
                                            allowfullscreen>
                                        </iframe>
                                    </div>

                                    <h5>Pengenalan HTML</h5>

                                    <p class="text-muted">
                                        Belajar dasar HTML dan memahami fungsi HTML dalam website.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/HD13eq_Pmp8"
                                            title="Struktur HTML"
                                            allowfullscreen>
                                        </iframe>
                                    </div>

                                    <h5>Struktur Dasar HTML</h5>

                                    <p class="text-muted">
                                        Memahami struktur dasar dokumen HTML dan elemen penting di dalamnya.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/bWPMSSsVdPk"
                                            title="Heading dan Paragraph"
                                            allowfullscreen>
                                        </iframe>
                                    </div>

                                    <h5>Heading & Paragraph</h5>

                                    <p class="text-muted">
                                        Belajar penggunaan heading, paragraph, dan teks pada HTML.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                </section>
                <!-- Materi Pembelajaran -->
                <section class="section">

                    <div class="mb-4">
                        <h3 class="text-primary">Materi Pembelajaran</h3>
                        <p class="text-muted">
                            Pelajari materi HTML secara bertahap mulai dari dasar hingga memahami
                            struktur website.
                        </p>
                    </div>

                    <div class="row">

                        <!-- Materi 1 -->
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            1. Pengenalan HTML
                                        </h5>

                                        <span class="badge bg-success">
                                            Dasar
                                        </span>
                                    </div>

                                    <p class="text-muted">
                                        Memahami pengertian HTML dan fungsi HTML dalam pembuatan website.
                                    </p>

                                    <a href="/user/materi/html/pengenalan"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>

                                </div>

                            </div>
                        </div>

                        <!-- Materi 2 -->
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            2. Struktur Dasar HTML
                                        </h5>

                                        <span class="badge bg-primary">
                                            Beginner
                                        </span>
                                    </div>

                                    <p class="text-muted">
                                        Belajar struktur dasar dokumen HTML seperti html, head, dan body.
                                    </p>

                                    <a href="/user/materi/html/struktur-html"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>

                                </div>

                            </div>
                        </div>

                        <!-- Materi 3 -->
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            3. Heading & Paragraph
                                        </h5>

                                        <span class="badge bg-warning">
                                            Mudah
                                        </span>
                                    </div>

                                    <p class="text-muted">
                                        Memahami penggunaan heading dan paragraph pada HTML.
                                    </p>

                                    <a href="/user/materi/html/heading-paragraph"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>

                                </div>

                            </div>
                        </div>

                        <!-- Materi 4 -->
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            4. Link & Image
                                        </h5>

                                        <span class="badge bg-info">
                                            Intermediate
                                        </span>
                                    </div>

                                    <p class="text-muted">
                                        Belajar menampilkan gambar dan membuat link pada halaman website.
                                    </p>

                                    <a href="/user/materi/html/link-image"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>

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