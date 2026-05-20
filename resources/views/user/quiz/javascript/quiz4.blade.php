<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz DOM JavaScript</title>

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

                            <h3>Quiz DOM JavaScript</h3>

                            <p class="text-subtitle text-muted">
                                Jawab pertanyaan berikut untuk menguji pemahaman tentang DOM JavaScript.
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

                                <h5>1. Apa itu DOM?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Struktur HTML yang direpresentasikan sebagai object
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Bahasa pemrograman database
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        CSS framework
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 2 -->
                            <div class="mb-5">

                                <h5>2. DOM digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">
                                        Memanipulasi elemen HTML
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
                                        Menghapus CSS
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 3 -->
                            <div class="mb-5">

                                <h5>3. Method untuk mengambil elemen berdasarkan ID adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        getElementById()
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        getElementsByClass()
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        queryStyle()
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 4 -->
                            <div class="mb-5">

                                <h5>4. innerHTML digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Mengubah isi HTML elemen
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Menghapus file
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        Membuat database
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 5 -->
                            <div class="mb-5">

                                <h5>5. DOM memungkinkan JavaScript untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Mengubah HTML secara dinamis
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Membuat server
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Menghapus browser
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 6 -->
                            <div class="mb-5">

                                <h5>6. Method querySelector digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Mengambil elemen dengan selector CSS
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
                                        Membuat database
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 7 -->
                            <div class="mb-5">

                                <h5>7. DOM bisa digunakan untuk mengubah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        HTML, CSS, dan isi elemen
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Database saja
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Server saja
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 8 -->
                            <div class="mb-5">

                                <h5>8. style.color digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Mengubah warna teks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Menghapus teks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Membuat function
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 9 -->
                            <div class="mb-5">

                                <h5>9. Event onclick digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Menjalankan aksi saat tombol diklik
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Menghapus CSS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Membuat database
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 10 -->
                            <div class="mb-4">

                                <h5>10. Kenapa DOM penting?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar website bisa interaktif
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar HTML jadi database
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar CSS hilang
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