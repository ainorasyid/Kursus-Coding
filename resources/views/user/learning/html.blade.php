<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
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

               

                <!-- Next -->
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('materi') }}"
                        class="btn btn-success">

                        Next
                        <i class="bi bi-arrow-right-circle-fill ms-1"></i>

                    </a>
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