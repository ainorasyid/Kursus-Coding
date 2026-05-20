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

                                <h3>CSS Property</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari berbagai property CSS yang digunakan untuk mengatur warna, ukuran, jarak, dan tampilan elemen website.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Materi CSS Property -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Apa itu CSS Property?</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                CSS Property adalah bagian dari CSS yang digunakan untuk mengatur gaya atau tampilan dari elemen HTML.
                            </p>

                            <p>
                                Setiap property memiliki nilai (value) yang menentukan bagaimana elemen tersebut ditampilkan di browser.
                            </p>

                            <div class="alert alert-primary">
                                <i class="bi bi-lightbulb-fill"></i>
                                Property CSS selalu ditulis dalam pasangan: <strong>property: value;</strong>
                            </div>

                        </div>

                    </div>

                </section>

                <!-- Jenis Property -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Contoh Property CSS Umum</h4>
                        </div>

                        <div class="card-body">

                            <ul>
                                <li><strong>color</strong> → mengatur warna teks</li>
                                <li><strong>background-color</strong> → mengatur warna latar</li>
                                <li><strong>font-size</strong> → mengatur ukuran teks</li>
                                <li><strong>margin</strong> → mengatur jarak luar</li>
                                <li><strong>padding</strong> → mengatur jarak dalam</li>
                                <li><strong>border</strong> → membuat garis tepi</li>
                                <li><strong>text-align</strong> → mengatur posisi teks</li>
                            </ul>

                        </div>

                    </div>

                </section>

                <!-- CONTOH -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Contoh CSS Property</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Berikut contoh penggunaan property CSS dalam berbagai kasus.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 1: Color & Font Size</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
h1 {
    color: blue;
    font-size: 32px;
}
&lt;/style&gt;

&lt;h1&gt;Belajar CSS Property&lt;/h1&gt;
</code>
</pre>

                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>color</strong> → mengubah warna teks menjadi biru.</li>
                                    <li><strong>font-size</strong> → mengatur ukuran teks menjadi 32px.</li>
                                </ul>

                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light">
                                    <h1 style="color:blue;font-size:32px;">
                                        Belajar CSS Property
                                    </h1>
                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 2: Background & Padding</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.box {
    background-color: yellow;
    padding: 20px;
}
&lt;/style&gt;

&lt;div class="box"&gt;Ini kotak dengan padding&lt;/div&gt;
</code>
</pre>

                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>background-color</strong> → memberi warna latar kuning.</li>
                                    <li><strong>padding</strong> → memberi jarak di dalam kotak.</li>
                                </ul>

                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light">

                                    <div style="background:yellow;padding:20px;">
                                        Ini kotak dengan padding
                                    </div>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->
                            <div class="mb-2">

                                <h5 class="text-primary">Contoh 3: Border & Margin</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.card {
    border: 2px solid black;
    margin: 20px;
    padding: 10px;
}
&lt;/style&gt;

&lt;div class="card"&gt;Ini card sederhana&lt;/div&gt;
</code>
</pre>

                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>border</strong> → membuat garis tepi hitam.</li>
                                    <li><strong>margin</strong> → memberi jarak luar dari elemen lain.</li>
                                    <li><strong>padding</strong> → memberi jarak dalam isi elemen.</li>
                                </ul>

                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light">

                                    <div style="border:2px solid black;margin:20px;padding:10px;">
                                        Ini card sederhana
                                    </div>

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
                                Sudah memahami materi CSS Selector?
                            </h5>

                            <a href="/quiz/css/3" class="btn btn-primary btn-lg">

                                <i class="bi bi-patch-question-fill"></i>

                                Mulai Quiz

                            </a>

                        </div>

                    </div>

                </section>

                <script src="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
                <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>

                <script src="{{ asset('assets/dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
                <script src="{{ asset('assets/dashboard/js/pages/dashboard.js') }}"></script>

                <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

</body>

</html>