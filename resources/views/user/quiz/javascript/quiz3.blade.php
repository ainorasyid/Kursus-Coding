<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz Function JavaScript</title>

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

                            <h3>Quiz Function JavaScript</h3>

                            <p class="text-subtitle text-muted">
                                Jawab pertanyaan berikut untuk menguji pemahaman tentang Function JavaScript.
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

                                <h5>1. Apa itu function dalam JavaScript?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Sekumpulan code untuk menjalankan tugas tertentu
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Tempat menyimpan database
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        CSS selector
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 2 -->
                            <div class="mb-5">

                                <h5>2. Keyword untuk membuat function adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">function</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">let</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">const</label>
                                </div>

                            </div>

                            <!-- SOAL 3 -->
                            <div class="mb-5">

                                <h5>3. Function digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Mengelompokkan code agar bisa dipakai ulang
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Menghapus HTML
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">
                                        Mengatur CSS
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 4 -->
                            <div class="mb-5">

                                <h5>4. Cara memanggil function adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        namaFunction();
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        function nama();
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">
                                        call function
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 5 -->
                            <div class="mb-5">

                                <h5>5. Parameter function adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        Data yang dikirim ke function
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        CSS property
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">
                                        HTML tag
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 6 -->
                            <div class="mb-5">

                                <h5>6. return digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Mengembalikan nilai dari function
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Menghapus function
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Membuat CSS
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 7 -->
                            <div class="mb-5">

                                <h5>7. document.write digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Menampilkan output ke browser
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Menghapus file
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Mengubah server
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 8 -->
                            <div class="mb-5">

                                <h5>8. Function membuat code menjadi...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Lebih rapi dan bisa digunakan ulang
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Lebih panjang
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">
                                        Lebih berat
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 9 -->
                            <div class="mb-5">

                                <h5>9. Function bisa dipanggil...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Berkali-kali
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Sekali saja
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Tidak bisa dipanggil
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 10 -->
                            <div class="mb-4">

                                <h5>10. Kenapa function penting?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        Agar code bisa digunakan ulang
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
                                        Agar jadi database
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