<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - materi html</title>

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

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <h3>Pengenalan HTML</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari dasar HTML untuk membuat website.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Materi -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu HTML?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                HTML atau HyperText Markup Language adalah bahasa markup
                                yang digunakan untuk membuat struktur sebuah website.
                                HTML menjadi pondasi utama dalam pengembangan web karena
                                semua halaman website dibuat menggunakan HTML.
                            </p>

                            <p>
                                Dengan HTML, kita dapat menampilkan teks, gambar, video,
                                tabel, tombol, link, dan berbagai elemen lainnya pada browser.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                HTML bukan bahasa pemrograman, tetapi bahasa markup
                                untuk menyusun struktur halaman website.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi HTML -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi HTML
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    Membuat struktur halaman website
                                </li>

                                <li>
                                    Menampilkan teks dan gambar
                                </li>

                                <li>
                                    Membuat form login dan register
                                </li>

                                <li>
                                    Menghubungkan halaman menggunakan link
                                </li>

                                <li>
                                    Menampilkan video dan audio
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa Penting -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa HTML Penting Dipelajari?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                HTML merupakan dasar utama dalam pembuatan website.
                                Sebelum mempelajari CSS, JavaScript, atau framework
                                seperti Laravel dan React, seseorang wajib memahami
                                HTML terlebih dahulu.
                            </p>

                            <p>
                                Dengan memahami HTML, proses belajar web development
                                akan menjadi lebih mudah karena kita memahami bagaimana
                                sebuah halaman website dibangun.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh HTML -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">
                                Contoh Dasar HTML
                            </h4>
                        </div>

                        <div class="card-body">

                            <!-- Penjelasan -->
                            <p>
                                Berikut adalah contoh struktur dasar HTML sederhana
                                beserta penjelasan dan hasil outputnya.
                            </p>

                            <!-- Code -->
                            <div class="mb-4">

                                <h5 class="text-primary">
                                    Code HTML
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;Belajar HTML&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Hello World&lt;/h1&gt;

    &lt;p&gt;Saya sedang belajar HTML&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
</code>
</pre>

                            </div>

                            <!-- Penjelasan per code -->
                            <div class="mb-4">

                                <h5 class="text-primary">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li class="mb-2">
                                        <strong>&lt;!DOCTYPE html&gt;</strong>
                                        digunakan untuk memberi tahu browser bahwa dokumen
                                        menggunakan HTML5.
                                    </li>

                                    <li class="mb-2">
                                        <strong>&lt;html&gt;</strong>
                                        merupakan tag utama yang membungkus seluruh isi HTML.
                                    </li>

                                    <li class="mb-2">
                                        <strong>&lt;head&gt;</strong>
                                        berisi konfigurasi website seperti title dan metadata.
                                    </li>

                                    <li class="mb-2">
                                        <strong>&lt;title&gt;</strong>
                                        digunakan untuk memberikan judul pada tab browser.
                                    </li>

                                    <li class="mb-2">
                                        <strong>&lt;body&gt;</strong>
                                        berisi seluruh konten yang tampil pada website.
                                    </li>

                                    <li class="mb-2">
                                        <strong>&lt;h1&gt;</strong>
                                        digunakan untuk membuat heading atau judul besar.
                                    </li>

                                    <li class="mb-2">
                                        <strong>&lt;p&gt;</strong>
                                        digunakan untuk membuat paragraph atau teks.
                                    </li>

                                </ul>

                            </div>

                            <!-- Output -->
                            <div>

                                <h5 class="text-primary">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <h1>Hello World</h1>

                                    <p>
                                        Saya sedang belajar HTML
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <section class="section">

                        <div class="text-center mb-4">
                            <h1>
                                Video: HTML for Beginners
                            </h1>
                        </div>

                        <div class="col-md-10 mx-auto">

                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/qz0aGYrrlhU"
                                    title="HTML for Beginners"
                                    allowfullscreen
                                    style="border-radius:10px;">
                                </iframe>
                            </div>

                        </div>

                    </section>

                    <!-- Navigation Materi -->
                    <section class="section">

                        <div class="card">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <!-- Previous -->
                                    <a href="/user/materi/html"
                                        class="btn btn-secondary d-flex align-items-center gap-2">

                                        <i class="bi bi-arrow-left-circle-fill"></i>

                                        Previous

                                    </a>

                                    <!-- Next -->
                                    <a href="{{ route('user.learning.html.struktur-html') }}"
                                        class="btn btn-success">

                                        Next

                                        <i class="bi bi-arrow-right-circle-fill"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </section>
                    <x-footer></x-footer>
                    <script src="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
                    <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>

                    <script src="{{ asset('assets/dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
                    <script src="{{ asset('assets/dashboard/js/pages/dashboard.js') }}"></script>

                    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
</body>

</html>