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

        <div id="main" class="layout-navbar">

            <x-user.navbar></x-user.navbar>

            <div id="main-content">

                <!-- PAGE HEADING -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <div class="row">

                            <div class="col-12 col-md-6 order-md-1 order-last">

                                <h3>Belajar CSS Dasar</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari dasar CSS mulai dari pengertian,
                                    video pembelajaran, hingga materi lengkap.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                </section><!-- PENGERTIAN CSS -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu CSS?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                CSS adalah singkatan dari <strong>Cascading Style Sheets</strong>, yaitu bahasa yang digunakan untuk mengatur tampilan dan desain pada halaman website yang dibuat menggunakan HTML.
                            </p>

                            <p>
                                Jika HTML berfungsi sebagai struktur utama website (kerangka), maka CSS berfungsi untuk mengatur tampilan visual seperti warna, ukuran teks, jarak antar elemen, hingga layout halaman agar lebih menarik dan rapi.
                            </p>

                            <p>
                                CSS juga membantu memisahkan antara konten (HTML) dan desain (CSS), sehingga kode menjadi lebih bersih, mudah dibaca, dan lebih mudah dikelola ketika dilakukan perubahan tampilan website.
                            </p>

                            <p>
                                Fungsi utama CSS dalam pengembangan website antara lain:
                            </p>

                            <ul>
                                <li>Mengatur warna teks, background, dan elemen website</li>
                                <li>Mengatur ukuran, jenis, dan gaya font</li>
                                <li>Mengatur layout halaman menggunakan flexbox dan grid</li>
                                <li>Mengatur jarak antar elemen (margin dan padding)</li>
                                <li>Membuat animasi dan efek transisi</li>
                                <li>Membuat tampilan website responsif di berbagai perangkat</li>
                            </ul>

                            <p>
                                Dengan CSS, tampilan website yang awalnya sederhana dapat diubah menjadi lebih modern, menarik, dan profesional seperti website-website yang kita gunakan saat ini.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                <strong>Kesimpulan:</strong> HTML adalah struktur website, sedangkan CSS adalah pengatur tampilan dan desainnya.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- MATERI PEMBELAJARAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Materi Pembelajaran CSS
                            </h4>

                        </div>

                        <div class="card-body">

                            <div class="row">



                                <!-- MATERI 1 -->
                                <div class="col-md-6 mb-4">

                                    <div class="card border shadow-sm h-100">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <div>

                                                    <h5>
                                                        1. Pengenalan CSS
                                                    </h5>

                                                    <p class="text-muted">
                                                        Belajar pengertian CSS,
                                                        fungsi CSS,
                                                        dan kenapa CSS penting dipelajari.
                                                    </p>

                                                </div>

                                                <div>

                                                    <i class="bi bi-palette-fill fs-1 text-primary"></i>

                                                </div>

                                            </div>

                                            <a href="/user/materi/css/pengenalan"
                                                class="btn btn-primary mt-3">

                                                Pelajari Materi

                                            </a>

                                        </div>

                                    </div>

                                </div>



                                <!-- MATERI 2 -->
                                <div class="col-md-6 mb-4">

                                    <div class="card border shadow-sm h-100">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <div>

                                                    <h5>
                                                        2. Selector CSS
                                                    </h5>

                                                    <p class="text-muted">
                                                        Memahami selector CSS
                                                        seperti class, id,
                                                        dan element selector.
                                                    </p>

                                                </div>

                                                <div>

                                                    <i class="bi bi-code-slash fs-1 text-success"></i>

                                                </div>

                                            </div>

                                            <a href="/user/materi/css/selector"
                                                class="btn btn-success mt-3">

                                                Pelajari Materi

                                            </a>

                                        </div>

                                    </div>

                                </div>



                                <!-- MATERI 3 -->
                                <div class="col-md-6 mb-4">

                                    <div class="card border shadow-sm h-100">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <div>

                                                    <h5>
                                                        3. Property CSS
                                                    </h5>

                                                    <p class="text-muted">
                                                        Belajar berbagai property CSS
                                                        seperti color, background,
                                                        font-size, border, dan lainnya.
                                                    </p>

                                                </div>

                                                <div>

                                                    <i class="bi bi-brush-fill fs-1 text-warning"></i>

                                                </div>

                                            </div>

                                            <a href="/user/materi/css/property"
                                                class="btn btn-warning mt-3 text-white">

                                                Pelajari Materi

                                            </a>

                                        </div>

                                    </div>

                                </div>



                                <!-- MATERI 4 -->
                                <div class="col-md-6 mb-4">

                                    <div class="card border shadow-sm h-100">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <div>

                                                    <h5>
                                                        4. Layout CSS
                                                    </h5>

                                                    <p class="text-muted">
                                                        Belajar mengatur posisi elemen,
                                                        margin, padding,
                                                        flexbox, dan layout website.
                                                    </p>

                                                </div>

                                                <div>

                                                    <i class="bi bi-grid-3x3-gap-fill fs-1 text-danger"></i>

                                                </div>

                                            </div>

                                            <a href="/user/materi/css/layout"
                                                class="btn btn-danger mt-3">

                                                Pelajari Materi

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </div>
            <!-- VIDEO PEMBELAJARAN -->
            <section class="section">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">
                            Video Pembelajaran CSS
                        </h4>

                    </div>

                    <div class="card-body">

                        <div class="row">



                            <!-- VIDEO 1 -->
                            <div class="col-md-4 mb-4">

                                <div class="card border shadow-sm h-100">

                                    <iframe
                                        width="100%"
                                        height="220"
                                        src="https://www.youtube.com/embed/1PnVor36_40"
                                        title="Belajar CSS Dasar"
                                        frameborder="0"
                                        allowfullscreen>
                                    </iframe>

                                    <div class="card-body">

                                        <h5>
                                            Pengenalan CSS
                                        </h5>

                                        <p class="text-muted">
                                            Memahami pengertian CSS
                                            dan fungsi CSS pada website.
                                        </p>

                                    </div>

                                </div>

                            </div>



                            <!-- VIDEO 2 -->
                            <div class="col-md-4 mb-4">

                                <div class="card border shadow-sm h-100">

                                    <iframe
                                        width="100%"
                                        height="220"
                                        src="https://www.youtube.com/embed/n7vZxg9pxkg"
                                        title="Dasar CSS"
                                        frameborder="0"
                                        allowfullscreen>
                                    </iframe>

                                    <div class="card-body">

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

                                <div class="card border shadow-sm h-100">

                                    <iframe
                                        width="100%"
                                        height="220"
                                        src="https://www.youtube.com/embed/ESnrn1kAD4E"
                                        title="CSS Layout"
                                        frameborder="0"
                                        allowfullscreen>
                                    </iframe>

                                    <div class="card-body">

                                        <h5>
                                            Layout & Styling CSS
                                        </h5>

                                        <p class="text-muted">
                                            Belajar membuat tampilan website
                                            lebih modern menggunakan CSS.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

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