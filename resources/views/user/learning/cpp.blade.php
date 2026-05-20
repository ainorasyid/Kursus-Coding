<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - C++ Dashboard</title>
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
                                <h1>C++ Programming</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Penjelasan -->
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">
                                    Apa itu C++?
                                </h2>
                            </div>
                            <div class="card-body">
                                <!-- Pengertian -->
                                <div class="mb-4">
                                    <h4 class="text-primary">
                                        C++ Programming Language
                                    </h4>
                                    <p>
                                        C++ adalah bahasa pemrograman yang dikembangkan dari bahasa C
                                        dan digunakan untuk membuat aplikasi desktop, game, sistem operasi,
                                        serta berbagai software lainnya.
                                    </p>
                                    <p>
                                        C++ terkenal karena memiliki performa yang cepat dan sering digunakan
                                        dalam pengembangan aplikasi yang membutuhkan kecepatan tinggi.
                                    </p>
                                </div>
                                <!-- Fungsi -->
                                <div class="mb-4">
                                    <h4 class="text-primary">
                                        Fungsi C++
                                    </h4>
                                    <ul>
                                        <li>
                                            Membuat aplikasi desktop
                                        </li>
                                        <li>
                                            Membuat game dan game engine
                                        </li>
                                        <li>
                                            Membuat program berbasis object-oriented programming
                                        </li>
                                        <li>
                                            Digunakan dalam pengembangan software dan sistem operasi
                                        </li>
                                        <li>
                                            Melatih logika pemrograman dasar
                                        </li>
                                    </ul>
                                </div>
                                <!-- Kenapa penting -->
                                <div>
                                    <h4 class="text-primary">
                                        Kenapa C++ Penting Dipelajari?
                                    </h4>
                                    <p>
                                        C++ merupakan salah satu bahasa pemrograman yang sangat populer
                                        dan banyak digunakan dalam dunia teknologi dan pengembangan software.
                                    </p>
                                    <p>
                                        Dengan mempelajari C++, seseorang dapat memahami konsep dasar
                                        pemrograman seperti variabel, percabangan, perulangan,
                                        function, hingga object-oriented programming.
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
                            Pelajari C++ mulai dari dasar hingga memahami logika pemrograman.
                        </p>
                    </div>
                    <div class="row">
                        <!-- Materi 1 -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">
                                            1. Pengenalan C++
                                        </h5>
                                        <span class="badge bg-success">
                                            Dasar
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Memahami pengertian dan fungsi bahasa pemrograman C++.
                                    </p>
                                    <a href="{{ route('user.learning.cpp.pengenalan') }}"
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
                                            2. Variabel & Tipe Data
                                        </h5>
                                        <span class="badge bg-primary">
                                            Beginner
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar membuat variabel dan memahami tipe data pada C++.
                                    </p>
                                    <a href="{{ route('user.learning.cpp.variable') }}"
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
                                            3. Percabangan C++
                                        </h5>
                                        <span class="badge bg-warning">
                                            Mudah
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Memahami penggunaan if else dan switch case pada C++.
                                    </p>
                                    <a href="{{ route('user.learning.cpp.percabangan') }}"
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
                                            4. Looping C++
                                        </h5>
                                        <span class="badge bg-info">
                                            Intermediate
                                        </span>
                                    </div>
                                    <p class="text-muted">
                                        Belajar perulangan menggunakan for, while, dan do while.
                                    </p>
                                    <a href="{{ route('user.learning.cpp.looping') }}"
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
                            Video Pembelajaran C++
                        </h3>
                        <p class="text-muted">
                            Pelajari dasar C++ melalui video pembelajaran berikut.
                        </p>
                    </div>
                    <div class="row">
                        <!-- Video 1 -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ratio ratio-16x9 mb-3">
                                        <iframe
                                            src="https://www.youtube.com/embed/vLnPwxZdW4Y"
                                            title="Pengenalan C++"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>Pengenalan C++</h5>
                                    <p class="text-muted">
                                        Belajar dasar bahasa pemrograman C++ untuk pemula.
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
                                            src="https://www.youtube.com/embed/ZzaPdXTrSb8"
                                            title="Variabel dan Tipe Data C++"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>Variabel & Tipe Data</h5>
                                    <p class="text-muted">
                                        Memahami variabel dan tipe data dasar pada C++.
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
                                            src="https://www.youtube.com/embed/j-_s8f5K30I"
                                            title="Percabangan dan Looping C++"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <h5>Percabangan & Looping</h5>
                                    <p class="text-muted">
                                        Belajar logika percabangan dan perulangan pada C++.
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