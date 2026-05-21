<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>struktur-html</title>

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



                <!-- HEADING -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <h3>Struktur Dasar HTML</h3>

                                <p class="text-subtitle text-muted">
                                    Memahami struktur utama dalam dokumen HTML.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- PENGERTIAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu Struktur HTML?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Struktur HTML adalah susunan dasar dari sebuah halaman website.
                                Struktur ini digunakan agar browser dapat membaca,
                                memahami, dan menampilkan isi website dengan benar.
                            </p>

                            <p>
                                Setiap halaman website wajib memiliki struktur HTML
                                agar elemen-elemen di dalam website tersusun dengan rapi.
                            </p>

                            <p>
                                Struktur HTML terdiri dari beberapa bagian penting
                                seperti DOCTYPE, html, head, title, dan body.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Struktur HTML adalah pondasi utama dalam pembuatan website.

                            </div>

                        </div>

                    </div>

                </section>



                <!-- CONTOH STRUKTUR -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Struktur Dasar HTML
                            </h4>

                        </div>

                        <div class="card-body">

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;!DOCTYPE html&gt;

&lt;html&gt;

&lt;head&gt;

    &lt;title&gt;Website Saya&lt;/title&gt;

&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Hello World&lt;/h1&gt;

    &lt;p&gt;Saya sedang belajar HTML&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
</code>
</pre>

                        </div>

                    </div>

                </section>



                <!-- PENJELASAN STRUKTUR -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Penjelasan Struktur HTML
                            </h4>

                        </div>

                        <div class="card-body">



                            <!-- DOCTYPE -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    1. &lt;!DOCTYPE html&gt;
                                </h4>

                                <p>
                                    DOCTYPE digunakan untuk memberi tahu browser
                                    bahwa dokumen menggunakan HTML5.
                                </p>

                                <p>
                                    Tag ini wajib ditulis pada bagian paling atas dokumen HTML.
                                </p>

                                <p>
                                    Jika DOCTYPE tidak ditulis,
                                    browser bisa mengalami kesalahan dalam membaca website.
                                </p>

                                <h5>Contoh Code</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;!DOCTYPE html&gt;
</code>
</pre>

                                <h5>Fungsi</h5>

                                <ul>

                                    <li>
                                        Menentukan versi HTML
                                    </li>

                                    <li>
                                        Membantu browser membaca dokumen HTML
                                    </li>

                                    <li>
                                        Menghindari error tampilan website
                                    </li>

                                </ul>

                            </div>



                            <!-- HTML -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    2. &lt;html&gt;
                                </h4>

                                <p>
                                    Tag html adalah tag utama yang membungkus
                                    seluruh isi website.
                                </p>

                                <p>
                                    Semua struktur HTML harus berada di dalam tag html.
                                </p>

                                <h5>Contoh Code</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;html&gt;

&lt;/html&gt;
</code>
</pre>

                                <h5>Fungsi</h5>

                                <ul>

                                    <li>
                                        Sebagai pembungkus seluruh dokumen HTML
                                    </li>

                                    <li>
                                        Menjadi struktur utama website
                                    </li>

                                </ul>

                            </div>



                            <!-- HEAD -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    3. &lt;head&gt;
                                </h4>

                                <p>
                                    Head digunakan untuk menyimpan informasi website
                                    yang tidak langsung tampil pada halaman browser.
                                </p>

                                <p>
                                    Biasanya head digunakan untuk title,
                                    CSS, metadata, dan JavaScript.
                                </p>

                                <h5>Contoh Code</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;head&gt;

&lt;/head&gt;
</code>
</pre>

                                <h5>Fungsi</h5>

                                <ul>

                                    <li>
                                        Tempat konfigurasi website
                                    </li>

                                    <li>
                                        Menyimpan metadata website
                                    </li>

                                    <li>
                                        Menghubungkan CSS dan JavaScript
                                    </li>

                                </ul>

                            </div>



                            <!-- TITLE -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    4. &lt;title&gt;
                                </h4>

                                <p>
                                    Title digunakan untuk memberikan judul website
                                    pada tab browser.
                                </p>

                                <p>
                                    Judul ini akan muncul di bagian atas browser.
                                </p>

                                <h5>Contoh Code</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;title&gt;Belajar HTML&lt;/title&gt;
</code>
</pre>

                                <h5>Output</h5>

                                <div class="border rounded p-3 bg-light">

                                    Belajar HTML
                                    <small class="text-muted">
                                        (judul tab browser)
                                    </small>

                                </div>

                                <h5 class="mt-4">Fungsi</h5>

                                <ul>

                                    <li>
                                        Memberikan nama halaman website
                                    </li>

                                    <li>
                                        Membantu SEO website
                                    </li>

                                    <li>
                                        Mempermudah pengguna mengenali halaman
                                    </li>

                                </ul>

                            </div>



                            <!-- BODY -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    5. &lt;body&gt;
                                </h4>

                                <p>
                                    Body adalah bagian utama website
                                    yang berisi seluruh konten website.
                                </p>

                                <p>
                                    Semua teks, gambar, video,
                                    tabel, tombol, dan isi website
                                    biasanya ditulis di dalam body.
                                </p>

                                <h5>Contoh Code</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;body&gt;

    &lt;h1&gt;Hello World&lt;/h1&gt;

&lt;/body&gt;
</code>
</pre>

                                <h5>Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <h1>Hello World</h1>

                                </div>

                                <h5 class="mt-4">Fungsi</h5>

                                <ul>

                                    <li>
                                        Menampilkan isi website
                                    </li>

                                    <li>
                                        Tempat seluruh elemen website
                                    </li>

                                    <li>
                                        Menjadi tampilan utama halaman browser
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- OUTPUT -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Hasil Output Struktur HTML
                            </h4>

                        </div>

                        <div class="card-body">

                            <div class="border rounded p-4 bg-light">

                                <h1>Hello World</h1>

                                <p>
                                    Saya sedang belajar HTML
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- KELEBIHAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa Struktur HTML Penting?
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li class="mb-3">
                                    Membantu browser membaca website dengan benar
                                </li>

                                <li class="mb-3">
                                    Membuat struktur website lebih rapi
                                </li>

                                <li class="mb-3">
                                    Mempermudah pengembangan website
                                </li>

                                <li class="mb-3">
                                    Mempermudah penggunaan CSS dan JavaScript
                                </li>

                                <li class="mb-3">
                                    Membantu SEO website menjadi lebih baik
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>



                <!-- KESIMPULAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kesimpulan
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Struktur HTML adalah pondasi utama sebuah website.
                            </p>

                            <p>
                                Dengan memahami struktur HTML,
                                kita dapat membuat halaman website
                                yang lebih rapi, mudah dipahami browser,
                                dan mudah dikembangkan.
                            </p>

                            <p>
                                Struktur dasar HTML terdiri dari:
                            </p>

                            <ul>

                                <li>
                                    DOCTYPE
                                </li>

                                <li>
                                    html
                                </li>

                                <li>
                                    head
                                </li>

                                <li>
                                    title
                                </li>

                                <li>
                                    body
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>
                <section class="section">

                    <div class="text-center mb-4">
                        <h1>
                            Video: Struktur Dasar HTML
                        </h1>
                    </div>

                    <div class="col-md-10 mx-auto">

                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/UB1O30fR-EE"
                                title="Struktur Dasar HTML"
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
                                <a href="{{ route('user.learning.html.pengenalan') }}"
                                    class="btn btn-secondary d-flex align-items-center gap-2">

                                    <i class="bi bi-arrow-left-circle-fill"></i>

                                    Previous

                                </a>

                                <!-- Next -->
                                <a href="{{ route('user.learning.html.heading-paragraph') }}"
                                    class="btn btn-success">

                                    Next

                                    <i class="bi bi-arrow-right-circle-fill"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>
    <x-footer></x-footer>
    <script src="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
</body>

</html>