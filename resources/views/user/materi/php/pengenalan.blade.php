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

                                <h3>Pengenalan PHP</h3>

                                <p class="text-subtitle text-muted">

                                    Pelajari dasar PHP untuk membuat website dinamis
                                    dan interaktif.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu PHP -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu PHP?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>

                                PHP (Hypertext Preprocessor) adalah bahasa
                                pemrograman server-side yang digunakan untuk
                                membuat website dinamis.

                            </p>

                            <p>

                                PHP sering digunakan untuk membuat sistem login,
                                register, CRUD, dashboard admin, dan berbagai
                                aplikasi berbasis web lainnya.

                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                PHP bekerja di server dan hasilnya akan
                                dikirim ke browser dalam bentuk HTML.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi PHP -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi PHP
                            </h4>

                        </div>

                        <div class="card-body">

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
                                    Mengelola data pengguna
                                </li>

                                <li>
                                    Membuat aplikasi web modern
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa PHP Penting -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa PHP Penting Dipelajari?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>

                                PHP merupakan salah satu bahasa pemrograman web
                                paling populer di dunia dan digunakan oleh banyak
                                website besar.

                            </p>

                            <p>

                                Framework seperti Laravel juga dibangun menggunakan PHP,
                                sehingga memahami PHP sangat penting sebelum belajar framework.

                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh PHP -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh PHP
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>

                                Berikut beberapa contoh dasar penggunaan PHP.

                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Menampilkan Teks
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;?php

echo "Hello World";

?&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>&lt;?php ?&gt;</strong>
                                        adalah tag pembuka dan penutup PHP.
                                    </li>

                                    <li>
                                        <strong>echo</strong>
                                        digunakan untuk menampilkan teks.
                                    </li>

                                    <li>
                                        Program akan menampilkan tulisan
                                        Hello World.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Hello World

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Variabel PHP
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;?php

$nama = "Majdi";

echo $nama;

?&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        Variabel pada PHP diawali dengan tanda
                                        <strong>$</strong>.
                                    </li>

                                    <li>
                                        <strong>$nama</strong>
                                        digunakan untuk menyimpan data teks.
                                    </li>

                                    <li>
                                        Nilai variabel ditampilkan menggunakan echo.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Majdi

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Perhitungan PHP
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;?php

$a = 10;
$b = 5;

$hasil = $a + $b;

echo $hasil;

?&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        PHP dapat digunakan untuk operasi matematika.
                                    </li>

                                    <li>
                                        Tanda <strong>+</strong>
                                        digunakan untuk penjumlahan.
                                    </li>

                                    <li>
                                        Hasil perhitungan disimpan dalam variabel
                                        <strong>$hasil</strong>.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    15

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

                                Sudah memahami Pengenalan PHP?

                            </h5>

                            <a href="/quiz/php/1"
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