<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - JavaScript Dashboard</title>

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

                                <h1>JavaScript</h1>

                            </div>

                        </div>

                    </div>

                    <!-- Penjelasan -->
                    <section class="section">

                        <div class="card">

                            <div class="card-header">

                                <h2 class="card-title">
                                    Apa itu JavaScript?
                                </h2>

                            </div>

                            <div class="card-body">

                                <!-- Pengertian -->
                                <div class="mb-4">

                                    <h4 class="text-primary">
                                        JavaScript
                                    </h4>

                                    <p>
                                        JavaScript adalah bahasa pemrograman yang digunakan
                                        untuk membuat website menjadi interaktif dan dinamis.
                                    </p>

                                    <p>
                                        Dengan JavaScript, website dapat memiliki fitur seperti
                                        tombol interaktif, popup, validasi form, animasi,
                                        slider gambar, dan banyak fungsi lainnya.
                                    </p>

                                </div>

                                <!-- Fungsi -->
                                <div class="mb-4">

                                    <h4 class="text-primary">
                                        Fungsi JavaScript
                                    </h4>

                                    <ul>

                                        <li>
                                            Membuat website menjadi interaktif
                                        </li>

                                        <li>
                                            Membuat validasi form
                                        </li>

                                        <li>
                                            Membuat popup dan alert
                                        </li>

                                        <li>
                                            Membuat animasi pada website
                                        </li>

                                        <li>
                                            Mengubah isi halaman tanpa reload
                                        </li>

                                    </ul>

                                </div>

                                <!-- Kenapa penting -->
                                <div>

                                    <h4 class="text-primary">
                                        Kenapa JavaScript Penting Dipelajari?
                                    </h4>

                                    <p>
                                        JavaScript merupakan salah satu bahasa pemrograman
                                        paling populer dalam dunia web development modern.
                                    </p>

                                    <p>
                                        Hampir semua website modern menggunakan JavaScript
                                        untuk meningkatkan pengalaman pengguna dan membuat
                                        tampilan website menjadi lebih hidup.
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
                            Pelajari JavaScript mulai dari dasar hingga memahami interaksi website.
                        </p>

                    </div>

                    <div class="row">

                        <!-- Materi 1 -->
                        <div class="col-md-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-center mb-3">

                                        <h5 class="mb-0">
                                            1. Pengenalan JavaScript
                                        </h5>

                                        <span class="badge bg-success">
                                            Dasar
                                        </span>

                                    </div>

                                    <p class="text-muted">
                                        Memahami pengertian dan fungsi JavaScript pada website.
                                    </p>

                                    <a href="/user/materi/javascript/pengenalan"
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
                                            2. Variabel JavaScript
                                        </h5>

                                        <span class="badge bg-primary">
                                            Beginner
                                        </span>

                                    </div>

                                    <p class="text-muted">
                                        Belajar membuat dan menggunakan variabel pada JavaScript.
                                    </p>

                                    <a href="/user/materi/javascript/variabel"
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
                                            3. Function JavaScript
                                        </h5>

                                        <span class="badge bg-warning">
                                            Mudah
                                        </span>

                                    </div>

                                    <p class="text-muted">
                                        Memahami cara membuat function dan menjalankan function.
                                    </p>

                                    <a href="/user/materi/javascript/function"
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
                                            4. DOM JavaScript
                                        </h5>

                                        <span class="badge bg-info">
                                            Intermediate
                                        </span>

                                    </div>

                                    <p class="text-muted">
                                        Belajar mengubah isi HTML menggunakan JavaScript DOM.
                                    </p>

                                    <a href="/user/materi/javascript/dom"
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
                            Video Pembelajaran JavaScript
                        </h3>

                        <p class="text-muted">
                            Pelajari JavaScript melalui video pembelajaran berikut.
                        </p>

                    </div>

                    <div class="row">

                        <!-- Video 1 -->
                        <div class="col-md-4">

                            <div class="card">

                                <div class="card-body">

                                    <div class="ratio ratio-16x9 mb-3">

                                        <iframe
                                            src="https://www.youtube.com/embed/W6NZfCO5SIk"
                                            title="Pengenalan JavaScript"
                                            allowfullscreen>
                                        </iframe>

                                    </div>

                                    <h5>Pengenalan JavaScript</h5>

                                    <p class="text-muted">
                                        Belajar dasar JavaScript dan memahami fungsi JavaScript.
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
                                            src="https://www.youtube.com/embed/upDLs1sn7g4"
                                            title="Variabel JavaScript"
                                            allowfullscreen>
                                        </iframe>

                                    </div>

                                    <h5>Variabel JavaScript</h5>

                                    <p class="text-muted">
                                        Memahami penggunaan variabel dan tipe data JavaScript.
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
                                            src="https://www.youtube.com/embed/0ik6X4DJKCc"
                                            title="DOM JavaScript"
                                            allowfullscreen>
                                        </iframe>

                                    </div>

                                    <h5>DOM JavaScript</h5>

                                    <p class="text-muted">
                                        Belajar manipulasi HTML menggunakan JavaScript DOM.
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