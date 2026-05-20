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

                                <h3>Pengenalan JavaScript</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari dasar JavaScript untuk membuat website interaktif dan dinamis.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu JavaScript -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu JavaScript?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                JavaScript adalah bahasa pemrograman yang digunakan
                                untuk membuat website menjadi lebih interaktif dan dinamis.
                                Dengan JavaScript, website dapat merespon tindakan pengguna
                                seperti klik tombol, input form, animasi, popup, dan lainnya.
                            </p>

                            <p>
                                JavaScript bekerja bersama HTML dan CSS.
                                HTML digunakan untuk struktur website,
                                CSS digunakan untuk desain,
                                dan JavaScript digunakan untuk interaksi dan logika website.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                JavaScript adalah salah satu bahasa pemrograman
                                paling populer dalam pengembangan website modern.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi JavaScript -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>Membuat website lebih interaktif</li>

                                <li>Membuat popup dan alert</li>

                                <li>Mengatur event klik tombol</li>

                                <li>Membuat validasi form</li>

                                <li>Membuat animasi website</li>

                                <li>Mengubah isi HTML dan CSS secara dinamis</li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa JavaScript Penting -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa JavaScript Penting Dipelajari?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Hampir semua website modern menggunakan JavaScript.
                                Tanpa JavaScript, website hanya akan menjadi halaman statis
                                tanpa interaksi.
                            </p>

                            <p>
                                Dengan JavaScript, developer dapat membuat website
                                yang lebih menarik, responsif, dan nyaman digunakan pengguna.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh JavaScript -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Dasar JavaScript
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan dasar JavaScript.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Alert JavaScript
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;script&gt;

alert("Hello World");

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>&lt;script&gt;</strong>
                                        digunakan untuk menuliskan code JavaScript.
                                    </li>

                                    <li>
                                        <strong>alert()</strong>
                                        digunakan untuk menampilkan popup pada browser.
                                    </li>

                                    <li>
                                        Teks "Hello World"
                                        akan muncul dalam kotak popup.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <button class="btn btn-primary">
                                        Hello World Popup
                                    </button>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Mengubah Teks HTML
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h1 id="judul"&gt;Belajar JavaScript&lt;/h1&gt;

&lt;script&gt;

document.getElementById("judul").innerHTML =
"JavaScript Itu Mudah";

&lt;/script&gt;
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>document.getElementById()</strong>
                                        digunakan untuk mengambil elemen HTML berdasarkan ID.
                                    </li>

                                    <li>
                                        <strong>innerHTML</strong>
                                        digunakan untuk mengubah isi elemen HTML.
                                    </li>

                                    <li>
                                        Teks heading akan berubah menjadi
                                        "JavaScript Itu Mudah".
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <h1>
                                        JavaScript Itu Mudah
                                    </h1>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Event Klik Tombol
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;button onclick="tampil()"&gt;
Klik Saya
&lt;/button&gt;

&lt;script&gt;

function tampil() {
    alert("Tombol berhasil diklik");
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
                                        <strong>function tampil()</strong>
                                        digunakan untuk membuat function JavaScript.
                                    </li>

                                    <li>
                                        Saat tombol ditekan,
                                        popup alert akan muncul.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    <button class="btn btn-success">
                                        Klik Saya
                                    </button>

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
                                Sudah memahami materi JavaScript?
                            </h5>

                            <a href="/quiz/javascript/1"
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