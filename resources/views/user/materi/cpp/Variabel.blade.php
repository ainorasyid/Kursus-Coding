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

                                <h3>Variabel & Tipe Data C++</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari cara menyimpan data menggunakan variabel dan memahami tipe data pada bahasa C++.
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
                                Apa itu Variabel?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Variabel adalah tempat untuk menyimpan data di dalam program.
                                Data yang disimpan dapat berupa angka, teks, maupun karakter.
                            </p>

                            <p>
                                Dalam C++, setiap variabel harus memiliki tipe data
                                agar compiler mengetahui jenis data yang digunakan.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Variabel digunakan untuk menyimpan nilai
                                yang dapat digunakan kembali di dalam program.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Tipe Data -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Jenis Tipe Data C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    <strong>int</strong>
                                    → digunakan untuk bilangan bulat.
                                </li>

                                <li>
                                    <strong>float</strong>
                                    → digunakan untuk angka desimal.
                                </li>

                                <li>
                                    <strong>char</strong>
                                    → digunakan untuk satu karakter.
                                </li>

                                <li>
                                    <strong>string</strong>
                                    → digunakan untuk teks atau kalimat.
                                </li>

                                <li>
                                    <strong>bool</strong>
                                    → digunakan untuk nilai true atau false.
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Kenapa Penting -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa Variabel Penting?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Variabel sangat penting dalam pemrograman karena
                                digunakan untuk menyimpan dan mengolah data.
                            </p>

                            <p>
                                Hampir semua program membutuhkan variabel
                                untuk melakukan proses perhitungan,
                                penyimpanan data, dan manipulasi informasi.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Variabel & Tipe Data C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan variabel dan tipe data pada C++.
                            </p>

                            <!-- CONTOH 1 -->
                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1 : Variabel Integer
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int umur = 17;

    cout &lt;&lt; "Umur Saya : " &lt;&lt; umur;

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
                                        digunakan untuk tipe data bilangan bulat.
                                    </li>

                                    <li>
                                        Variabel <strong>umur</strong>
                                        menyimpan angka 17.
                                    </li>

                                    <li>
                                        <strong>cout</strong>
                                        digunakan untuk menampilkan isi variabel.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Umur Saya : 17

                                </div>

                            </div>

                            <!-- CONTOH 2 -->
                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2 : Variabel String
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    string nama = "Andi";

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
                                        <strong>string</strong>
                                        digunakan untuk menyimpan teks.
                                    </li>

                                    <li>
                                        Variabel <strong>nama</strong>
                                        menyimpan nilai "Andi".
                                    </li>

                                    <li>
                                        Program menampilkan nama menggunakan cout.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Nama Saya : Andi

                                </div>

                            </div>

                            <!-- CONTOH 3 -->
                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3 : Variabel Float
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    float tinggi = 170.5;

    cout &lt;&lt; "Tinggi Badan : " &lt;&lt; tinggi;

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
                                        <strong>float</strong>
                                        digunakan untuk angka desimal.
                                    </li>

                                    <li>
                                        Variabel <strong>tinggi</strong>
                                        menyimpan nilai 170.5.
                                    </li>

                                    <li>
                                        Program menampilkan angka desimal ke layar.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Tinggi Badan : 170.5

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
                                Sudah memahami Variabel & Tipe Data C++?
                            </h5>

                            <a href="/quiz/cpp/2"
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