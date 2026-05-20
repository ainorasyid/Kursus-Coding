<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz CSS</title>

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

                            <h3>Quiz Pengenalan CSS</h3>

                            <p class="text-subtitle text-muted">
                                Kerjakan quiz berikut untuk menguji pemahaman tentang CSS.
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

                            <h5>1. Apa kepanjangan dari CSS?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Creative Style Sheet
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Cascading Style Sheets
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Computer Style System
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1">
                                <label class="form-check-label">
                                    Color Style Syntax
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 2 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>2. Fungsi utama CSS adalah?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    Membuat database
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    Mengatur tampilan website
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    Membuat server
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2">
                                <label class="form-check-label">
                                    Menghubungkan internet
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 3 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>3. Property CSS untuk mengubah warna teks adalah?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    font-size
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    background
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    color
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3">
                                <label class="form-check-label">
                                    border
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 4 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>4. Property CSS untuk mengatur ukuran teks adalah?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    font-size
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    color
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    width
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4">
                                <label class="form-check-label">
                                    border-radius
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 5 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>5. Property untuk memberi warna background adalah?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    background-color
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    color
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    font-style
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5">
                                <label class="form-check-label">
                                    text-align
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 6 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>6. Apa fungsi border-radius pada CSS?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    Mengatur warna teks
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    Membuat sudut menjadi melengkung
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    Menghapus background
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6">
                                <label class="form-check-label">
                                    Menampilkan gambar
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 7 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>7. Selector untuk class pada CSS menggunakan tanda?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7">
                                <label class="form-check-label">
                                    #
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7">
                                <label class="form-check-label">
                                    .
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7">
                                <label class="form-check-label">
                                    *
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7">
                                <label class="form-check-label">
                                    @
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 8 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>8. Hover pada CSS digunakan untuk?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8">
                                <label class="form-check-label">
                                    Efek saat mouse diarahkan
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8">
                                <label class="form-check-label">
                                    Membuat database
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8">
                                <label class="form-check-label">
                                    Membuat gambar bergerak
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8">
                                <label class="form-check-label">
                                    Menambah server
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 9 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>9. Property CSS untuk memberi bayangan adalah?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9">
                                <label class="form-check-label">
                                    box-shadow
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9">
                                <label class="form-check-label">
                                    font-size
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9">
                                <label class="form-check-label">
                                    margin
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9">
                                <label class="form-check-label">
                                    padding
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- SOAL 10 -->
                    <div class="card">
                        <div class="card-body">

                            <h5>10. CSS digunakan untuk memisahkan?</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10">
                                <label class="form-check-label">
                                    Database dan server
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10">
                                <label class="form-check-label">
                                    Struktur dan tampilan website
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10">
                                <label class="form-check-label">
                                    HTML dan internet
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10">
                                <label class="form-check-label">
                                    Browser dan komputer
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="card">

                        <div class="card-body text-center">

                            <button type="submit" class="btn btn-primary btn-lg">

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