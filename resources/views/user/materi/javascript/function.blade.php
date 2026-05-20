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

                                <h3>Function JavaScript</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari cara membuat dan menggunakan function pada JavaScript.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu Function -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu Function JavaScript?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Function adalah sekumpulan code yang dibuat untuk menjalankan
                                tugas tertentu dalam JavaScript.
                            </p>

                            <p>
                                Dengan function, programmer tidak perlu menulis code yang sama
                                secara berulang karena function dapat dipanggil kapan saja.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Function membuat code menjadi lebih rapi,
                                terstruktur, dan mudah digunakan kembali.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi Function -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi Function JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>Mengelompokkan code menjadi lebih rapi</li>

                                <li>Mengurangi penulisan code berulang</li>

                                <li>Membuat program lebih mudah dipahami</li>

                                <li>Membuat code lebih mudah diperbaiki</li>

                                <li>Dapat digunakan berkali-kali</li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Struktur Function -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Struktur Dasar Function
                            </h4>

                        </div>

                        <div class="card-body">

                            <pre class="bg-dark text-white p-4 rounded">
<code>
function namaFunction() {

    // isi code

}
</code>
</pre>

                            <p class="mt-3">
                                Function dibuat menggunakan keyword
                                <strong>function</strong>,
                                kemudian diikuti nama function dan kurung <strong>()</strong>.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Function JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan function dalam JavaScript.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Function Sederhana
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

function salam() {

    document.write("Selamat Datang");

}

salam();

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>function salam()</strong>
                                        digunakan untuk membuat function bernama salam.
                                    </li>

                                    <li>
                                        <strong>document.write()</strong>
                                        digunakan untuk menampilkan teks ke browser.
                                    </li>

                                    <li>
                                        <strong>salam();</strong>
                                        digunakan untuk memanggil function.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Selamat Datang

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Function Dengan Parameter
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

function halo(nama) {

    document.write("Halo " + nama);

}

halo("Budi");

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>nama</strong>
                                        disebut parameter function.
                                    </li>

                                    <li>
                                        Parameter digunakan untuk menerima data.
                                    </li>

                                    <li>
                                        Function akan menampilkan teks
                                        "Halo Budi".
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Halo Budi

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Function Penjumlahan
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

function tambah(a, b) {

    return a + b;

}

document.write(tambah(5, 3));

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>a</strong> dan <strong>b</strong>
                                        merupakan parameter angka.
                                    </li>

                                    <li>
                                        <strong>return</strong>
                                        digunakan untuk mengembalikan nilai.
                                    </li>

                                    <li>
                                        Function akan menjumlahkan angka
                                        5 + 3 sehingga menghasilkan 8.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    8

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
                                Sudah memahami Function JavaScript?
                            </h5>

                            <a href="/quiz/javascript/3"
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