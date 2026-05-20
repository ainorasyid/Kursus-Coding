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

                                <h3>Percabangan C++</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari penggunaan percabangan pada C++ untuk membuat keputusan dalam program.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Apa itu Percabangan -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu Percabangan?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Percabangan adalah proses pengambilan keputusan
                                di dalam program berdasarkan kondisi tertentu.
                            </p>

                            <p>
                                Dengan percabangan, program dapat menjalankan
                                kode yang berbeda sesuai kondisi yang diberikan.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Percabangan membuat program menjadi lebih
                                interaktif dan dapat mengambil keputusan otomatis.

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Jenis Percabangan -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Jenis Percabangan C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li>
                                    <strong>if</strong>
                                    → digunakan untuk kondisi tunggal.
                                </li>

                                <li>
                                    <strong>if else</strong>
                                    → digunakan untuk kondisi benar dan salah.
                                </li>

                                <li>
                                    <strong>switch case</strong>
                                    → digunakan untuk banyak pilihan kondisi.
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
                                Kenapa Percabangan Penting?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Percabangan sangat penting dalam pemrograman
                                karena hampir semua aplikasi membutuhkan logika keputusan.
                            </p>

                            <p>
                                Contohnya seperti login, validasi nilai,
                                menentukan status, dan berbagai fitur lainnya.
                            </p>

                        </div>

                    </div>

                </section>

                <!-- Contoh -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Percabangan C++
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Berikut beberapa contoh penggunaan percabangan pada C++.
                            </p>

                            <!-- CONTOH 1 -->
                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 1 : If Statement
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int nilai = 80;

    if (nilai >= 75) {

        cout &lt;&lt; "Anda Lulus";

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
                                        Variabel <strong>nilai</strong>
                                        menyimpan angka 80.
                                    </li>

                                    <li>
                                        <strong>if (nilai >= 75)</strong>
                                        memeriksa apakah nilai lebih besar atau sama dengan 75.
                                    </li>

                                    <li>
                                        Karena kondisi benar,
                                        program menampilkan "Anda Lulus".
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Anda Lulus

                                </div>

                            </div>

                            <!-- CONTOH 2 -->

                            <div class="mb-5">

                                <h5 class="text-primary">
                                    Contoh 2 : If Else
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int umur = 16;

    if (umur >= 17) {

        cout &lt;&lt; "Boleh Membuat SIM";

    } else {

        cout &lt;&lt; "Belum Boleh Membuat SIM";

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
                                        Variabel <strong>umur</strong>
                                        berisi angka 16.
                                    </li>

                                    <li>
                                        Jika umur lebih dari atau sama dengan 17,
                                        maka program menampilkan "Boleh Membuat SIM".
                                    </li>

                                    <li>
                                        Karena umur masih 16,
                                        maka program menjalankan bagian else.
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Belum Boleh Membuat SIM

                                </div>

                            </div>

                            <!-- CONTOH 3 -->

                            <div class="mb-2">

                                <h5 class="text-primary">
                                    Contoh 3 : Switch Case
                                </h5>

                                <!-- CODE -->

                                <pre class="bg-dark text-white p-4 rounded">
<code>
#include &lt;iostream&gt;
using namespace std;

int main() {

    int pilihan = 2;

    switch (pilihan) {

        case 1:
            cout &lt;&lt; "Menu Makanan";
            break;

        case 2:
            cout &lt;&lt; "Menu Minuman";
            break;

        default:
            cout &lt;&lt; "Menu Tidak Ada";

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
                                        <strong>switch</strong>
                                        digunakan untuk memilih banyak kondisi.
                                    </li>

                                    <li>
                                        Variabel <strong>pilihan</strong>
                                        berisi angka 2.
                                    </li>

                                    <li>
                                        Karena nilai sesuai dengan
                                        <strong>case 2</strong>,
                                        maka output menjadi "Menu Minuman".
                                    </li>

                                </ul>

                                <!-- OUTPUT -->

                                <h5 class="text-primary mt-3">
                                    Output
                                </h5>

                                <div class="border rounded p-4 bg-light">

                                    Menu Minuman

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
                                Sudah memahami Percabangan C++?
                            </h5>

                            <a href="/quiz/cpp/3"
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