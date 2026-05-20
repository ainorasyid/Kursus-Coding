<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Looping C++</title>

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

                            <h3>Quiz Looping C++</h3>

                            <p class="text-subtitle text-muted">
                                Kerjakan quiz berikut untuk menguji pemahaman tentang Looping C++.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- QUIZ -->
            <section class="section">

                <form action="#" method="POST">

                    @csrf

                    <!-- SOAL 1 -->
                    <div class="card">

                        <div class="card-body">

                            <h5>
                                1. Apa yang dimaksud dengan looping pada C++?
                            </h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Proses menghapus data
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Proses pengulangan kode program
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Proses membuat gambar
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Proses membuat variabel
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- SOAL 2 -->
                    <div class="card">

                        <div class="card-body">

                            <h5>
                                2. Perulangan yang digunakan jika jumlah looping sudah diketahui adalah?
                            </h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    if else
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    switch
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    for
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    cout
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- SOAL 3 -->
                    <div class="card">

                        <div class="card-body">

                            <h5>
                                3. Looping while berjalan berdasarkan?
                            </h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    Warna
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    Kondisi
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    File
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    Gambar
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- SOAL 4 -->
                    <div class="card">

                        <div class="card-body">

                            <h5>
                                4. Do while akan dijalankan minimal sebanyak?
                            </h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    0 kali
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    1 kali
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    10 kali
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    Tidak berjalan
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- SOAL 5 -->
                    <div class="card">

                        <div class="card-body">

                            <h5>
                                5. Fungsi i++ pada looping adalah?
                            </h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    Mengurangi nilai
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    Menghapus variabel
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    Menambah nilai variabel
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    Menampilkan output
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- SOAL 6 -->
                    <div class="card">

                        <div class="card-body">

                            <h5>
                                6. Keyword untuk looping berdasarkan kondisi adalah?
                            </h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    while
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    case
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    break
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    return
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="card">

                        <div class="card-body text-center">

                            <button type="submit"
                                class="btn btn-primary btn-lg">

                                <i class="bi bi-check-circle-fill"></i>

                                Submit Quiz

                            </button>

                        </div>

                    </div>

                </form>

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