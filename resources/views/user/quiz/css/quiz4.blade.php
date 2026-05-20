<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz CSS Layout</title>

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

                            <h3>Quiz CSS Layout</h3>

                            <p class="text-subtitle text-muted">
                                Jawab pertanyaan berikut untuk menguji pemahaman tentang CSS Layout.
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

                                <h5>1. Apa fungsi CSS Layout?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Mengatur posisi dan tata letak elemen HTML
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Membuat database
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Menjalankan server
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 2 -->
                            <div class="mb-5">

                                <h5>2. Property CSS untuk membuat layout fleksibel adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">flexbox</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">grid</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">float</label>
                                </div>

                            </div>

                            <!-- SOAL 3 -->
                            <div class="mb-5">

                                <h5>3. display: flex digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Membuat elemen sejajar (horizontal/vertikal fleksibel)
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Menghapus elemen
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Mengubah warna teks
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 4 -->
                            <div class="mb-5">

                                <h5>4. display: grid digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Membuat layout baris dan kolom
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Mengubah font
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Menghapus margin
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 5 -->
                            <div class="mb-5">

                                <h5>5. position: absolute digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Memposisikan elemen secara bebas
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Membuat teks besar
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Menghapus elemen
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 6 -->
                            <div class="mb-5">

                                <h5>6. position: relative digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Menjadi acuan posisi elemen lain
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Menghapus elemen
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Mengubah warna background
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 7 -->
                            <div class="mb-5">

                                <h5>7. gap pada flexbox digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Memberi jarak antar elemen
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Menghapus elemen
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Mengubah warna teks
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 8 -->
                            <div class="mb-5">

                                <h5>8. grid-template-columns digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Mengatur jumlah kolom pada grid
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Mengubah warna
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Menghapus margin
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 9 -->
                            <div class="mb-5">

                                <h5>9. Flexbox cocok digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Layout satu arah (baris atau kolom)
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Database
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Server
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 10 -->
                            <div class="mb-4">

                                <h5>10. CSS Layout membuat website menjadi...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Rapi dan terstruktur
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Lebih berat
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Menjadi database
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