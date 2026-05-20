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

                                <h3>Looping C++</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari penggunaan perulangan atau looping dalam bahasa pemrograman C++.
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
                                Apa itu Looping?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Looping atau perulangan adalah proses menjalankan
                                kode program secara berulang-ulang selama kondisi
                                tertentu masih bernilai benar.
                            </p>

                            <p>
                                Dengan looping, programmer tidak perlu menulis
                                kode yang sama berulang kali sehingga program
                                menjadi lebih singkat dan efisien.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Looping sangat berguna untuk menampilkan data,
                                menghitung angka, dan mengolah informasi secara otomatis.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Jenis Looping -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Jenis Looping di C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    <strong>for</strong>
                                    → digunakan ketika jumlah perulangan sudah diketahui.
                                </li>

                                <li>
                                    <strong>while</strong>
                                    → digunakan ketika perulangan bergantung pada kondisi.
                                </li>

                                <li>
                                    <strong>do while</strong>
                                    → perulangan dijalankan minimal satu kali.
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

                <!-- Contoh -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Looping C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan looping dalam C++.
                            </p>

                            <!-- ===================== CONTOH 1 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1: Perulangan For
                                </h5>

<pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    for(int i = 1; i &lt;= 5; i++) {

        cout &lt;&lt; "Perulangan ke-" &lt;&lt; i &lt;&lt; endl;

    }

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
                                        <strong>for</strong>
                                        digunakan untuk melakukan perulangan.
                                    </li>

                                    <li>
                                        <strong>int i = 1</strong>
                                        adalah nilai awal perulangan.
                                    </li>

                                    <li>
                                        <strong>i &lt;= 5</strong>
                                        berarti looping berjalan sampai angka 5.
                                    </li>

                                    <li>
                                        <strong>i++</strong>
                                        digunakan untuk menambah nilai i setiap perulangan.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

<pre>
Perulangan ke-1
Perulangan ke-2
Perulangan ke-3
Perulangan ke-4
Perulangan ke-5
</pre>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2: Perulangan While
                                </h5>

<pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int angka = 1;

    while(angka &lt;= 3) {

        cout &lt;&lt; "Angka: " &lt;&lt; angka &lt;&lt; endl;

        angka++;

    }

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
                                        <strong>while</strong>
                                        digunakan untuk looping berdasarkan kondisi.
                                    </li>

                                    <li>
                                        Selama nilai angka kurang dari atau sama dengan 3,
                                        maka looping terus berjalan.
                                    </li>

                                    <li>
                                        <strong>angka++</strong>
                                        menambah nilai angka setiap perulangan.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

<pre>
Angka: 1
Angka: 2
Angka: 3
</pre>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3: Perulangan Do While
                                </h5>

<pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int nomor = 1;

    do {

        cout &lt;&lt; "Nomor: " &lt;&lt; nomor &lt;&lt; endl;

        nomor++;

    } while(nomor &lt;= 4);

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
                                        <strong>do while</strong>
                                        akan menjalankan kode minimal satu kali.
                                    </li>

                                    <li>
                                        Kondisi dicek setelah program dijalankan.
                                    </li>

                                    <li>
                                        Perulangan berjalan sampai nomor bernilai 4.
                                    </li>

                                </ul>

                                <!-- Output -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

<pre>
Nomor: 1
Nomor: 2
Nomor: 3
Nomor: 4
</pre>

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
                                Sudah memahami Looping C++?
                            </h5>

                            <a href="/quiz/cpp/4"
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