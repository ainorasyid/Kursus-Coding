<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Percabangan C++</title>

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

                <!-- HEADING -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <h3>Quiz Percabangan C++</h3>

                                <p class="text-subtitle text-muted">
                                    Uji pemahamanmu tentang percabangan pada bahasa C++.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- QUIZ -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Soal Pilihan Ganda
                            </h4>

                        </div>

                        <div class="card-body">

                            <form>

                                <!-- SOAL 1 -->
                                <div class="mb-5">

                                    <h5>
                                        1. Apa fungsi percabangan pada C++?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1">
                                        <label class="form-check-label">
                                            Menyimpan data
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1">
                                        <label class="form-check-label">
                                            Mengambil keputusan berdasarkan kondisi
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1">
                                        <label class="form-check-label">
                                            Menampilkan gambar
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 2 -->
                                <div class="mb-5">

                                    <h5>
                                        2. Percabangan untuk kondisi tunggal adalah?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q2">
                                        <label class="form-check-label">
                                            switch
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q2">
                                        <label class="form-check-label">
                                            loop
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q2">
                                        <label class="form-check-label">
                                            if
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 3 -->
                                <div class="mb-5">

                                    <h5>
                                        3. Bagian else dijalankan ketika?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q3">
                                        <label class="form-check-label">
                                            Kondisi benar
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q3">
                                        <label class="form-check-label">
                                            Kondisi salah
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q3">
                                        <label class="form-check-label">
                                            Program selesai
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 4 -->
                                <div class="mb-5">

                                    <h5>
                                        4. Percabangan yang cocok untuk banyak pilihan adalah?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4">
                                        <label class="form-check-label">
                                            if
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4">
                                        <label class="form-check-label">
                                            switch case
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4">
                                        <label class="form-check-label">
                                            cout
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 5 -->
                                <div class="mb-5">

                                    <h5>
                                        5. Apa output dari kode berikut?
                                    </h5>

<pre class="bg-dark text-white p-3 rounded">
<code>
int nilai = 90;

if (nilai >= 75) {

    cout << "Lulus";

}
</code>
</pre>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5">
                                        <label class="form-check-label">
                                            Tidak ada output
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5">
                                        <label class="form-check-label">
                                            Lulus
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5">
                                        <label class="form-check-label">
                                            Gagal
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 6 -->
                                <div class="mb-5">

                                    <h5>
                                        6. Apa fungsi break pada switch case?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q6">
                                        <label class="form-check-label">
                                            Mengulang program
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q6">
                                        <label class="form-check-label">
                                            Menghentikan case
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q6">
                                        <label class="form-check-label">
                                            Menampilkan output
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 7 -->
                                <div class="mb-5">

                                    <h5>
                                        7. Apa output dari kode berikut?
                                    </h5>

<pre class="bg-dark text-white p-3 rounded">
<code>
int umur = 15;

if (umur >= 17) {

    cout << "Boleh";

} else {

    cout << "Belum Boleh";

}
</code>
</pre>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q7">
                                        <label class="form-check-label">
                                            Boleh
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q7">
                                        <label class="form-check-label">
                                            Belum Boleh
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q7">
                                        <label class="form-check-label">
                                            Error
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 8 -->
                                <div class="mb-5">

                                    <h5>
                                        8. Keyword default pada switch digunakan untuk?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q8">
                                        <label class="form-check-label">
                                            Menjalankan kondisi cadangan
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q8">
                                        <label class="form-check-label">
                                            Mengulang case
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q8">
                                        <label class="form-check-label">
                                            Menutup program
                                        </label>
                                    </div>

                                </div>

                                <!-- BUTTON -->
                                <div class="text-center">

                                    <button type="submit"
                                        class="btn btn-primary btn-lg">

                                        <i class="bi bi-check-circle-fill"></i>

                                        Submit Quiz

                                    </button>

                                </div>

                            </form>

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