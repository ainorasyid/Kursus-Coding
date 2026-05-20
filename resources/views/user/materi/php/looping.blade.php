<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping PHP</title>

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

                            <h3>Looping PHP</h3>

                            <p class="text-subtitle text-muted">
                                Pelajari penggunaan perulangan (looping) pada PHP untuk menjalankan kode secara berulang.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Apa itu Looping -->
            <section class="section">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">
                            Apa itu Looping PHP?
                        </h4>

                    </div>

                    <div class="card-body">

                        <p>
                            Looping atau perulangan adalah proses menjalankan
                            blok kode secara berulang selama kondisi masih terpenuhi.
                        </p>

                        <p>
                            Dengan looping, kita tidak perlu menulis kode yang sama berulang-ulang.
                        </p>

                        <div class="alert alert-primary">
                            <i class="bi bi-lightbulb-fill"></i>
                            Looping membuat program lebih efisien dan ringkas.
                        </div>

                    </div>

                </div>

            </section>

            <!-- Jenis Looping -->
            <section class="section">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">
                            Jenis Looping PHP
                        </h4>

                    </div>

                    <div class="card-body">

                        <ul>
                            <li><strong>for</strong> → perulangan dengan jumlah tertentu</li>
                            <li><strong>while</strong> → perulangan selama kondisi benar</li>
                            <li><strong>do while</strong> → menjalankan kode minimal 1 kali</li>
                            <li><strong>foreach</strong> → perulangan untuk array</li>
                        </ul>

                    </div>

                </div>

            </section>

            <!-- Contoh -->
            <section class="section">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">
                            Contoh Looping PHP
                        </h4>

                    </div>

                    <div class="card-body">

                        <p>
                            Berikut beberapa contoh penggunaan looping pada PHP.
                        </p>

                        <!-- CONTOH 1 -->
                        <div class="mb-5">

                            <h5 class="text-primary">
                                Contoh 1 : For Loop
                            </h5>

                            <pre class="bg-dark text-white p-4 rounded"><code>
&lt;?php

for ($i = 1; $i <= 5; $i++) {
    echo $i;
}

?&gt;
</code></pre>

                            <h5 class="text-primary mt-3">
                                Penjelasan Code
                            </h5>

                            <ul>
                                <li><strong>for</strong> digunakan untuk perulangan.</li>
                                <li><strong>$i = 1</strong> nilai awal.</li>
                                <li><strong>$i <= 5</strong> batas perulangan.</li>
                                <li><strong>$i++</strong> menambah nilai setiap loop.</li>
                            </ul>

                            <h5 class="text-primary mt-3">
                                Output
                            </h5>

                            <div class="border rounded p-4 bg-light">
                                12345
                            </div>

                        </div>

                        <!-- CONTOH 2 -->
                        <div class="mb-5">

                            <h5 class="text-primary">
                                Contoh 2 : While Loop
                            </h5>

                            <pre class="bg-dark text-white p-4 rounded"><code>
&lt;?php

$i = 1;

while ($i <= 5) {
    echo $i;
    $i++;
}

?&gt;
</code></pre>

                            <h5 class="text-primary mt-3">
                                Penjelasan Code
                            </h5>

                            <ul>
                                <li><strong>while</strong> akan berjalan selama kondisi benar.</li>
                                <li><strong>$i++</strong> wajib agar tidak infinite loop.</li>
                                <li>Loop berhenti saat $i lebih dari 5.</li>
                            </ul>

                            <h5 class="text-primary mt-3">
                                Output
                            </h5>

                            <div class="border rounded p-4 bg-light">
                                12345
                            </div>

                        </div>

                        <!-- CONTOH 3 -->
                        <div class="mb-5">

                            <h5 class="text-primary">
                                Contoh 3 : Do While
                            </h5>

                            <pre class="bg-dark text-white p-4 rounded"><code>
&lt;?php

$i = 1;

do {
    echo $i;
    $i++;
} while ($i <= 5);

?&gt;
</code></pre>

                            <h5 class="text-primary mt-3">
                                Penjelasan Code
                            </h5>

                            <ul>
                                <li>Do while akan menjalankan kode minimal 1 kali.</li>
                                <li>Kondisi dicek setelah kode dijalankan.</li>
                            </ul>

                            <h5 class="text-primary mt-3">
                                Output
                            </h5>

                            <div class="border rounded p-4 bg-light">
                                12345
                            </div>

                        </div>

                        <!-- CONTOH 4 -->
                        <div class="mb-5">

                            <h5 class="text-primary">
                                Contoh 4 : Foreach Array
                            </h5>

                            <pre class="bg-dark text-white p-4 rounded"><code>
&lt;?php

$buah = ["Apel", "Mangga", "Jeruk"];

foreach ($buah as $b) {
    echo $b . " ";
}

?&gt;
</code></pre>

                            <h5 class="text-primary mt-3">
                                Penjelasan Code
                            </h5>

                            <ul>
                                <li><strong>foreach</strong> digunakan untuk array.</li>
                                <li>Mengambil setiap elemen secara otomatis.</li>
                            </ul>

                            <h5 class="text-primary mt-3">
                                Output
                            </h5>

                            <div class="border rounded p-4 bg-light">
                                Apel Mangga Jeruk
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
                            Sudah memahami Looping PHP?
                        </h5>

                        <a href="/quiz/php/4" class="btn btn-primary btn-lg">

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