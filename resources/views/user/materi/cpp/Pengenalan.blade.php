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

                                <h3>Pengenalan C++</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari dasar bahasa pemrograman C++ untuk membuat program dan memahami logika pemrograman.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu C++ -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu C++?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                C++ adalah bahasa pemrograman yang dikembangkan dari bahasa C
                                dan digunakan untuk membuat berbagai jenis aplikasi seperti
                                aplikasi desktop, game, sistem operasi, hingga software modern.
                            </p>

                            <p>
                                Bahasa C++ terkenal karena memiliki performa cepat,
                                mendukung pemrograman berbasis object (OOP),
                                dan banyak digunakan dalam dunia teknologi.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                C++ merupakan salah satu bahasa pemrograman populer
                                yang sering digunakan untuk mempelajari dasar algoritma
                                dan logika pemrograman.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Fungsi C++ -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Fungsi dan Kegunaan C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>Membuat aplikasi desktop</li>

                                <li>Membuat game dan game engine</li>

                                <li>Membuat software sistem operasi</li>

                                <li>Belajar algoritma dan struktur data</li>

                                <li>Membuat program berbasis object (OOP)</li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa Penting -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa C++ Penting Dipelajari?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                C++ banyak digunakan di dunia industri teknologi
                                karena memiliki performa yang cepat dan stabil.
                            </p>

                            <p>
                                Dengan mempelajari C++, seseorang dapat memahami
                                dasar logika pemrograman, algoritma,
                                dan konsep pemrograman modern.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Dasar Program C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh dasar penggunaan bahasa C++.
                            </p>

                            <!-- CONTOH 1 -->
                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1 : Hello World
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    cout &lt;&lt; "Hello World";

    return 0;
}
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>#include &lt;iostream&gt;</strong>
                                        digunakan untuk memanggil library input output.
                                    </li>

                                    <li>
                                        <strong>using namespace std;</strong>
                                        digunakan agar tidak perlu menulis std:: secara terus menerus.
                                    </li>

                                    <li>
                                        <strong>main()</strong>
                                        adalah fungsi utama program.
                                    </li>

                                    <li>
                                        <strong>cout</strong>
                                        digunakan untuk menampilkan output.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Hello World

                                </div>

                            </div>

                            <!-- CONTOH 2 -->
                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2 : Menampilkan Nama
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    string nama = "Budi";

    cout &lt;&lt; "Nama Saya : " &lt;&lt; nama;

    return 0;
}
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>string nama</strong>
                                        digunakan untuk menyimpan data teks.
                                    </li>

                                    <li>
                                        Variabel <strong>nama</strong>
                                        berisi nilai "Budi".
                                    </li>

                                    <li>
                                        Program menampilkan teks dan isi variabel.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Nama Saya : Budi

                                </div>

                            </div>

                            <!-- CONTOH 3 -->
                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3 : Penjumlahan Sederhana
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int angka1 = 10;
    int angka2 = 5;

    int hasil = angka1 + angka2;

    cout &lt;&lt; "Hasil : " &lt;&lt; hasil;

    return 0;
}
</code>
</pre>

                                <!-- Penjelasan -->

                                <h5 class="text-primary mt-3">
                                    Penjelasan Code
                                </h5>

                                <ul>

                                    <li>
                                        <strong>int</strong>
                                        digunakan untuk tipe data angka.
                                    </li>

                                    <li>
                                        Variabel <strong>hasil</strong>
                                        menyimpan hasil penjumlahan.
                                    </li>

                                    <li>
                                        Program menjumlahkan angka1 dan angka2.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Hasil : 15

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
                                Sudah memahami Pengenalan C++?
                            </h5>

                            <a href="/quiz/cpp/1"
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