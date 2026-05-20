<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - PHP Dashboard</title>
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
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 order-md-1 order-last mb-4">
                                <h1>PHP (Hypertext Preprocessor)</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Penjelasan -->
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">
                                    Apa itu PHP?
                                </h2>
                            </div>
                            <div class="card-body">
                                <!-- Pengertian -->
                                <div class="mb-4">
                                    <h4 class="text-primary">
                                        PHP (Hypertext Preprocessor)
                                    </h4>
                                    <p>
                                        PHP adalah bahasa pemrograman server-side yang digunakan
                                        untuk membuat website dinamis dan mengelola data pada server.
                                    </p>
                                    <p>
                                        PHP sering digunakan untuk membuat sistem login,
                                        register, dashboard admin, CRUD database, dan berbagai
                                        aplikasi web lainnya.
                                    </p>
                                </div>
                                <!-- Fungsi -->
                                <div class="mb-4">
                                    <h4 class="text-primary">
                                        Fungsi PHP
                                    </h4>
                                    <ul>
                                        <li>
                                            Membuat website dinamis
                                        </li>
                                        <li>
                                            Menghubungkan website dengan database
                                        </li>
                                        <li>
                                            Membuat sistem login dan register
                                        </li>
                                        <li>
                                            Mengolah data dari form
                                        </li>
                                        <li>
                                            Membuat dashboard admin dan aplikasi web
                                        </li>
                                    </ul>
                                </div>
                                <!-- Kenapa penting -->
                                <div>
                                    <h4 class="text-primary">
                                        Kenapa PHP Penting Dipelajari?
                                    </h4>
                                    <p>
                                        PHP merupakan salah satu bahasa pemrograman web paling
                                        populer di dunia dan digunakan oleh banyak website besar.
                                    </p>
                                    <p>
                                        Dengan PHP, developer dapat membuat website yang lebih
                                        interaktif, terhubung dengan database, dan memiliki
                                        sistem backend yang powerful.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Materi -->
                <section class="section">
                    <div class="mb-4">
                        <h3 class="text-primary">
                            Materi Pembelajaran
                        </h3>
                        <p class="text-muted">
                            Pelajari PHP mulai dari dasar hingga memahami backend website.
                        </p>
                    </div>
                    <div class="row">
                        <!-- Materi 1 -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            1. Pengenalan PHP
                                        </h5>
                                        <span class="badge bg-success">
                                            Dasar
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Memahami pengertian dan fungsi PHP dalam pengembangan website.
                                    </p>
                                    <a href="{{ route('user.learning.php.pengenalan') }}"
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
                                            2. Variabel PHP
                                        </h5>
                                        <span class="badge bg-primary">
                                            Beginner
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar membuat variabel dan menyimpan data pada PHP.
                                    </p>
                                    <a href="{{ route('user.learning.php.variable') }}"
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
                                            3. Percabangan PHP
                                        </h5>
                                        <span class="badge bg-warning">
                                            Mudah
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Memahami penggunaan if else dan switch pada PHP.
                                    </p>
                                    <a href="{{ route('user.learning.php.percabangan') }}"
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
                                            4. Looping PHP
                                        </h5>
                                        <span class="badge bg-info">
                                            Intermediate
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar perulangan menggunakan for, while, dan foreach.
                                    </p>
                                    <a href="{{ route('user.learning.php.looping') }}"
                                        class="btn btn-primary w-100">
                                        Pelajari Materi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Video Pembelajaran -->
                <section class="section">
                    <div class="mb-4">
                        <h3 class="text-primary">
                            Video Pembelajaran PHP
                        </h3>
                        <p class="text-muted">
                            Pelajari dasar PHP melalui video pembelajaran berikut.
                        </p>
                    </div>
                    <div class="row">
                        <!-- Video 1 -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/OK_JCtrrv-c"
                                            title="Pengenalan PHP"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>Pengenalan PHP</h5>
                                    <p class="text-muted">
                                        Belajar dasar PHP dan memahami fungsi PHP pada website.
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
                                            src="https://www.youtube.com/embed/7tfJL6SLK7M"
                                            title="Variabel PHP"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>Variabel PHP</h5>
                                    <p class="text-muted">
                                        Memahami cara membuat dan menggunakan variabel pada PHP.
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
                                            src="https://www.youtube.com/embed/xYBclb-sYQ4"
                                            title="Percabangan PHP"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>Percabangan PHP</h5>
                                    <p class="text-muted">
                                        Belajar penggunaan if else dan logika percabangan pada PHP.
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