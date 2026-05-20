<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz Variabel JavaScript</title>

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

                            <h3>Quiz Variabel JavaScript</h3>

                            <p class="text-subtitle text-muted">
                                Jawab pertanyaan berikut untuk menguji pemahaman tentang Variabel JavaScript.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- QUIZ -->
            <section class="section">

                <div class="card">

                    <div class="card-body">

                        <form action="" method="POST">

                            <!-- SOAL 1 -->
                            <div class="mb-5">

                                <h5>1. Apa itu variabel dalam JavaScript?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Tempat untuk menyimpan data
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Tempat membuat desain
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Tempat membuat database
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 2 -->
                            <div class="mb-5">

                                <h5>2. Keyword untuk membuat variabel modern adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">let</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">var</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">const saja</label>
                                </div>

                            </div>

                            <!-- SOAL 3 -->
                            <div class="mb-5">

                                <h5>3. const digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Variabel yang tidak bisa diubah
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Variabel yang bisa dihapus
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Variabel CSS
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 4 -->
                            <div class="mb-5">

                                <h5>4. var termasuk jenis variabel...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Lama (legacy)
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        CSS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Database
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 5 -->
                            <div class="mb-5">

                                <h5>5. Variabel digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Menyimpan data
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Menghapus HTML
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Mengatur CSS
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 6 -->
                            <div class="mb-5">

                                <h5>6. Contoh penulisan variabel yang benar adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        let nama = "Budi"
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        nama let = Budi
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        var = nama Budi
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 7 -->
                            <div class="mb-5">

                                <h5>7. let digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Variabel yang bisa diubah
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Variabel CSS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Database
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 8 -->
                            <div class="mb-5">

                                <h5>8. Variabel dapat menyimpan...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Teks, angka, dan data lainnya
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Hanya gambar
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Hanya CSS
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 9 -->
                            <div class="mb-5">

                                <h5>9. document.write digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Menampilkan data ke halaman web
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Menghapus file
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Mengubah server
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 10 -->
                            <div class="mb-4">

                                <h5>10. Kenapa variabel penting?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar data bisa digunakan kembali
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar HTML hilang
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar website jadi database
                                    </label>
                                </div>

                            </div>

                            <!-- BUTTON -->
                            <div class="text-center mt-5">

                                <button type="submit" class="btn btn-primary btn-lg">
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