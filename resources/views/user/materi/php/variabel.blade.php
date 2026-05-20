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

                                <h3>Variabel PHP</h3>

                                <p class="text-subtitle text-muted">

                                    Pelajari cara menyimpan dan mengelola data
                                    menggunakan variabel pada PHP.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu Variabel -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu Variabel PHP?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>

                                Variabel adalah tempat untuk menyimpan data
                                pada program PHP.

                            </p>

                            <p>

                                Data yang disimpan bisa berupa teks, angka,
                                maupun nilai lainnya yang dapat digunakan
                                kembali dalam program.

                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Variabel PHP selalu diawali dengan tanda
                                <strong>$</strong>.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi Variabel -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi Variabel PHP
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    Menyimpan data sementara
                                </li>

                                <li>
                                    Mempermudah pengolahan data
                                </li>

                                <li>
                                    Digunakan dalam perhitungan program
                                </li>

                                <li>
                                    Menampilkan data ke halaman website
                                </li>

                                <li>
                                    Membuat program lebih dinamis
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Jenis Data -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Jenis Data Variabel PHP
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    <strong>String</strong>
                                    → data teks
                                </li>

                                <li>
                                    <strong>Integer</strong>
                                    → bilangan bulat
                                </li>

                                <li>
                                    <strong>Float</strong>
                                    → bilangan desimal
                                </li>

                                <li>
                                    <strong>Boolean</strong>
                                    → true atau false
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Contoh Variabel -->

                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Variabel PHP
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>

                                Berikut beberapa contoh penggunaan variabel
                                pada PHP.

                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Variabel String
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
                                        <strong>$nama</strong>
                                        adalah variabel untuk menyimpan teks.
                                    </li>

                                    <li>
                                        Nilai "Majdi"
                                        disimpan ke dalam variabel.
                                    </li>

                                    <li>
                                        <strong>echo</strong>
                                        digunakan untuk menampilkan isi variabel.
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

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Variabel Integer
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;?php

$umur = 20;

echo $umur;

?&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>$umur</strong>
                                        digunakan untuk menyimpan angka.
                                    </li>

                                    <li>
                                        Integer adalah bilangan bulat.
                                    </li>

                                    <li>
                                        Nilai variabel akan ditampilkan menggunakan echo.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    20

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Penjumlahan Variabel
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
                                        Variabel <strong>$a</strong>
                                        dan <strong>$b</strong>
                                        menyimpan angka.
                                    </li>

                                    <li>
                                        Operator <strong>+</strong>
                                        digunakan untuk penjumlahan.
                                    </li>

                                    <li>
                                        Hasil disimpan dalam variabel
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

                                Sudah memahami Variabel PHP?

                            </h5>

                            <a href="/quiz/php/2"
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