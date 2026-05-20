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

                                <h3>CSS Selector</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari cara memilih elemen HTML menggunakan selector seperti element, class, dan ID dalam CSS.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Materi CSS Selector -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Apa itu CSS Selector ?</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                CSS Selector adalah pola atau cara untuk memilih elemen HTML
                                yang akan diberi gaya (style) menggunakan CSS.
                            </p>

                            <p>
                                Dengan selector, kita bisa menentukan elemen tertentu seperti
                                tag, class, id, atau elemen tertentu dalam struktur HTML.
                            </p>

                            <div class="alert alert-primary">
                                <i class="bi bi-lightbulb-fill"></i>
                                Selector adalah bagian penting dalam CSS karena tanpa selector,
                                CSS tidak tahu elemen mana yang ingin diberi style.
                            </div>

                        </div>

                    </div>

                </section>

                <!-- Jenis Selector -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Jenis-Jenis CSS Selector</h4>
                        </div>

                        <div class="card-body">

                            <ul>
                                <li><strong>Element Selector</strong> → memilih berdasarkan tag (h1, p, div)</li>
                                <li><strong>Class Selector</strong> → menggunakan titik (.)</li>
                                <li><strong>ID Selector</strong> → menggunakan pagar (#)</li>
                            </ul>

                        </div>

                    </div>

                </section>

                <!-- CONTOH -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Contoh CSS Selector</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan CSS Selector dalam HTML.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 1: Element Selector</h5>

                                <!-- CODE -->
                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
p {
    color: red;
    font-size: 18px;
}
&lt;/style&gt;

&lt;p&gt;Ini paragraf pertama&lt;/p&gt;
&lt;p&gt;Ini paragraf kedua&lt;/p&gt;
</code>
</pre>

                                <!-- PENJELASAN -->
                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>p</strong> → selector untuk semua tag paragraf.</li>
                                    <li>Semua elemen &lt;p&gt; akan terkena style yang sama.</li>
                                    <li>Warna teks menjadi merah.</li>
                                    <li>Ukuran teks menjadi 18px.</li>
                                </ul>

                                <!-- OUTPUT -->
                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light">
                                    <p style="color:red;font-size:18px;">Ini paragraf pertama</p>
                                    <p style="color:red;font-size:18px;">Ini paragraf kedua</p>
                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 2: Class Selector</h5>

                                <!-- CODE -->
                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.teks-biru {
    color: blue;
    font-weight: bold;
}
&lt;/style&gt;

&lt;p class="teks-biru"&gt;Ini teks biru&lt;/p&gt;
&lt;p&gt;Ini teks biasa&lt;/p&gt;
</code>
</pre>

                                <!-- PENJELASAN -->
                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>.teks-biru</strong> → selector class menggunakan titik (.)</li>
                                    <li>Hanya elemen dengan class tersebut yang terkena style.</li>
                                    <li>Membuat teks menjadi biru dan tebal.</li>
                                </ul>

                                <!-- OUTPUT -->
                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light">

                                    <p style="color:blue;font-weight:bold;">Ini teks biru</p>
                                    <p>Ini teks biasa</p>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->
                            <div class="mb-2">

                                <h5 class="text-primary">Contoh 3: ID Selector</h5>

                                <!-- CODE -->
                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
#judul {
    color: green;
    text-align: center;
}
&lt;/style&gt;

&lt;h1 id="judul"&gt;Selamat Datang&lt;/h1&gt;
</code>
</pre>

                                <!-- PENJELASAN -->
                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>#judul</strong> → selector ID menggunakan tanda pagar (#)</li>
                                    <li>ID hanya boleh digunakan 1 kali dalam 1 halaman.</li>
                                    <li>Digunakan untuk elemen unik.</li>
                                    <li>Teks menjadi hijau dan berada di tengah.</li>
                                </ul>

                                <!-- OUTPUT -->
                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light">

                                    <h1 style="color:green;text-align:center;">Selamat Datang</h1>

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

                            <a href="/quiz/css/selector/1" class="btn btn-primary btn-lg">

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