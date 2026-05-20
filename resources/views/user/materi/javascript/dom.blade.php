<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz1 html</title>

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

                                <h3>DOM JavaScript</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari cara mengakses dan memanipulasi elemen HTML menggunakan DOM JavaScript.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu DOM -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu DOM?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                DOM (Document Object Model) adalah struktur dokumen HTML
                                yang direpresentasikan sebagai object oleh browser.
                            </p>

                            <p>
                                Dengan DOM, JavaScript dapat mengakses, mengubah,
                                menambah, maupun menghapus elemen HTML secara dinamis.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                DOM memungkinkan JavaScript membuat website menjadi
                                lebih interaktif dan responsif.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi DOM -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi DOM JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>Mengubah isi teks HTML</li>

                                <li>Mengubah style CSS menggunakan JavaScript</li>

                                <li>Mengambil data dari input form</li>

                                <li>Membuat event klik tombol</li>

                                <li>Menambah dan menghapus elemen HTML</li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Cara Mengakses DOM -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Cara Mengakses DOM
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                JavaScript memiliki beberapa method untuk mengambil elemen HTML.
                            </p>

                            <ul>

                                <li>
                                    <strong>document.getElementById()</strong>
                                    → mengambil elemen berdasarkan ID.
                                </li>

                                <li>
                                    <strong>document.getElementsByClassName()</strong>
                                    → mengambil elemen berdasarkan class.
                                </li>

                                <li>
                                    <strong>document.querySelector()</strong>
                                    → mengambil elemen menggunakan selector CSS.
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Contoh DOM -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh DOM JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan DOM pada JavaScript.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Mengubah Teks HTML
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h1 id="judul"&gt;
Belajar DOM
&lt;/h1&gt;

&lt;script&gt;

document.getElementById("judul").innerHTML =
"DOM JavaScript";

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>getElementById()</strong>
                                        digunakan untuk mengambil elemen berdasarkan ID.
                                    </li>

                                    <li>
                                        <strong>innerHTML</strong>
                                        digunakan untuk mengubah isi elemen HTML.
                                    </li>

                                    <li>
                                        Teks "Belajar DOM"
                                        berubah menjadi "DOM JavaScript".
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <h1>
                                        DOM JavaScript
                                    </h1>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Mengubah Warna Teks
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;p id="teks"&gt;
Saya belajar JavaScript
&lt;/p&gt;

&lt;script&gt;

document.getElementById("teks").style.color =
"blue";

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>style.color</strong>
                                        digunakan untuk mengubah warna teks.
                                    </li>

                                    <li>
                                        JavaScript dapat mengubah CSS melalui DOM.
                                    </li>

                                    <li>
                                        Warna teks berubah menjadi biru.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <p style="color: blue;">
                                        Saya belajar JavaScript
                                    </p>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Event Klik Tombol
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;button onclick="ubahTeks()"&gt;
Klik Saya
&lt;/button&gt;

&lt;p id="hasil"&gt;
Teks Awal
&lt;/p&gt;

&lt;script&gt;

function ubahTeks() {

    document.getElementById("hasil").innerHTML =
    "Tombol Berhasil Diklik";

}

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>onclick</strong>
                                        digunakan untuk menjalankan function saat tombol diklik.
                                    </li>

                                    <li>
                                        Function <strong>ubahTeks()</strong>
                                        digunakan untuk mengubah isi paragraf.
                                    </li>

                                    <li>
                                        Setelah tombol ditekan,
                                        teks akan berubah.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <button class="btn btn-primary mb-3">
                                        Klik Saya
                                    </button>

                                    <p>
                                        Tombol Berhasil Diklik
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Quiz -->
                <section class="section">

                    <div class="card">

                        <div class="card-body text-center">

                            <h5 class="mb-3">
                                Sudah memahami DOM JavaScript?
                            </h5>

                            <a href="/quiz/javascript/4"
                                class="btn btn-primary btn-lg">

                                <i class="bi bi-patch-question-fill"></i>

                                Mulai Quiz

                            </a>

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