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

                                <h3>Variabel JavaScript</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari cara menyimpan data menggunakan variabel pada JavaScript.
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
                                Apa itu Variabel JavaScript?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Variabel adalah tempat untuk menyimpan data dalam JavaScript.
                                Data yang disimpan bisa berupa teks, angka, boolean,
                                array, maupun object.
                            </p>

                            <p>
                                Dengan variabel, programmer dapat menggunakan kembali data
                                tanpa harus menulis ulang nilai tersebut secara terus menerus.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Variabel dalam JavaScript dapat dibuat menggunakan
                                <strong>var</strong>, <strong>let</strong>, dan <strong>const</strong>.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Jenis Variabel -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Jenis Variabel JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    <strong>var</strong>
                                    → variabel lama yang dapat diubah dan diakses ulang.
                                </li>

                                <li>
                                    <strong>let</strong>
                                    → variabel modern yang nilainya bisa diubah.
                                </li>

                                <li>
                                    <strong>const</strong>
                                    → variabel tetap yang nilainya tidak dapat diubah.
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa Variabel Penting -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa Variabel Penting?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Variabel sangat penting karena digunakan hampir di seluruh
                                program JavaScript untuk menyimpan data sementara maupun permanen.
                            </p>

                            <p>
                                Dengan variabel, program menjadi lebih fleksibel,
                                mudah diatur, dan lebih efisien.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Variabel JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan variabel pada JavaScript.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Variabel Menggunakan let
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

let nama = "Budi";

document.write(nama);

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>let</strong>
                                        digunakan untuk membuat variabel.
                                    </li>

                                    <li>
                                        Variabel <strong>nama</strong>
                                        menyimpan data teks "Budi".
                                    </li>

                                    <li>
                                        <strong>document.write()</strong>
                                        digunakan untuk menampilkan isi variabel ke browser.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Budi

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Variabel Angka
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

let angka1 = 10;

let angka2 = 5;

let hasil = angka1 + angka2;

document.write(hasil);

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        Variabel <strong>angka1</strong>
                                        menyimpan nilai 10.
                                    </li>

                                    <li>
                                        Variabel <strong>angka2</strong>
                                        menyimpan nilai 5.
                                    </li>

                                    <li>
                                        Variabel <strong>hasil</strong>
                                        digunakan untuk menyimpan hasil penjumlahan.
                                    </li>

                                    <li>
                                        Output yang ditampilkan adalah 15.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    15

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Variabel const
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

const sekolah = "SMK Negeri 1";

document.write(sekolah);

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>const</strong>
                                        digunakan untuk membuat variabel tetap.
                                    </li>

                                    <li>
                                        Nilai variabel tidak dapat diubah kembali.
                                    </li>

                                    <li>
                                        Variabel <strong>sekolah</strong>
                                        menyimpan teks "SMK Negeri 1".
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    SMK Negeri 1

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
                                Sudah memahami Variabel JavaScript?
                            </h5>

                            <a href="/quiz/javascript/2"
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