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

                                <h3>Pengenalan CSS</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari dasar CSS untuk mempercantik tampilan website.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu CSS -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Apa itu CSS?</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                CSS (Cascading Style Sheets) adalah bahasa yang digunakan
                                untuk mengatur tampilan atau desain dari halaman website
                                yang dibuat menggunakan HTML.
                            </p>

                            <p>
                                Dengan CSS, kita bisa mengatur warna, ukuran teks, layout,
                                jarak, border, hingga animasi pada elemen HTML.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                CSS digunakan untuk memisahkan antara struktur (HTML)
                                dan tampilan (desain).

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi CSS -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Fungsi CSS</h4>
                        </div>

                        <div class="card-body">

                            <ul>
                                <li>Mengatur warna teks dan background</li>
                                <li>Mengatur ukuran dan jenis font</li>
                                <li>Membuat layout website (flexbox & grid)</li>
                                <li>Mengatur jarak (margin dan padding)</li>
                                <li>Membuat animasi dan efek transisi</li>
                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa CSS penting -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Kenapa CSS Penting Dipelajari?</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Tanpa CSS, website hanya akan terlihat polos dan tidak menarik.
                                CSS membuat website menjadi lebih modern, rapi, dan enak dilihat.
                            </p>

                            <p>
                                CSS juga sangat penting dalam dunia web development modern
                                karena hampir semua website profesional menggunakan CSS
                                untuk desain dan layout.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh CSS -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Contoh Dasar CSS</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan CSS dasar untuk mempercantik tampilan website.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 1: CSS Sederhana (Teks & Background)</h5>

                                <!-- CODE -->
                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
body {
    background-color: #f2f2f2;
}

h1 {
    color: blue;
    text-align: center;
}

p {
    color: gray;
    font-size: 18px;
}
&lt;/style&gt;

&lt;h1&gt;Belajar CSS&lt;/h1&gt;
&lt;p&gt;Ini adalah contoh penggunaan CSS&lt;/p&gt;
</code>
</pre>

                                <!-- PENJELASAN -->
                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>body</strong> → mengatur seluruh halaman website.</li>
                                    <li><strong>background-color</strong> → memberi warna latar belakang halaman.</li>
                                    <li><strong>h1</strong> → mengatur tampilan judul utama.</li>
                                    <li><strong>color</strong> → mengatur warna teks.</li>
                                    <li><strong>text-align</strong> → mengatur posisi teks (center).</li>
                                    <li><strong>p</strong> → mengatur paragraf.</li>
                                    <li><strong>font-size</strong> → mengatur ukuran teks.</li>
                                </ul>

                                <!-- OUTPUT -->
                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <h1 style="color: blue; text-align: center;">
                                        Belajar CSS
                                    </h1>

                                    <p style="color: gray; font-size: 18px;">
                                        Ini adalah contoh penggunaan CSS
                                    </p>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 2: CSS Button (Hover Effect)</h5>

                                <!-- CODE -->
                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.btn {
    background-color: green;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.btn:hover {
    background-color: darkgreen;
}
&lt;/style&gt;

&lt;button class="btn"&gt;Klik Saya&lt;/button&gt;
</code>
</pre>

                                <!-- PENJELASAN -->
                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>.btn</strong> → class CSS untuk tombol.</li>
                                    <li><strong>background-color</strong> → warna tombol.</li>
                                    <li><strong>padding</strong> → jarak dalam tombol.</li>
                                    <li><strong>border-radius</strong> → membuat sudut tombol melengkung.</li>
                                    <li><strong>cursor: pointer</strong> → mengubah kursor menjadi tangan.</li>
                                    <li><strong>:hover</strong> → efek saat mouse diarahkan ke tombol.</li>
                                </ul>

                                <!-- OUTPUT -->
                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <button style="background:green;color:white;padding:10px 20px;border:none;border-radius:8px;cursor:pointer;">
                                        Klik Saya
                                    </button>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->
                            <div class="mb-2">

                                <h5 class="text-primary">Contoh 3: CSS Card (Desain Kotak)</h5>

                                <!-- CODE -->
                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.card {
    width: 250px;
    padding: 15px;
    background: white;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
}
&lt;/style&gt;

&lt;div class="card"&gt;
    &lt;h3&gt;User&lt;/h3&gt;
    &lt;p&gt;Belajar CSS itu mudah&lt;/p&gt;
&lt;/div&gt;
</code>
</pre>

                                <!-- PENJELASAN -->
                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>.card</strong> → class untuk membuat kotak card.</li>
                                    <li><strong>width</strong> → lebar card.</li>
                                    <li><strong>padding</strong> → jarak isi dalam card.</li>
                                    <li><strong>background</strong> → warna background card.</li>
                                    <li><strong>border-radius</strong> → membuat sudut melengkung.</li>
                                    <li><strong>box-shadow</strong> → efek bayangan agar terlihat 3D.</li>
                                </ul>

                                <!-- OUTPUT -->
                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <div style="width:250px;padding:15px;background:white;border-radius:10px;box-shadow:0px 4px 10px rgba(0,0,0,0.2);">
                                        <h3>User</h3>
                                        <p>Belajar CSS itu mudah</p>
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
                                Sudah memahami materi CSS?
                            </h5>

                            <a href="/quiz/css/1" class="btn btn-primary btn-lg">

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