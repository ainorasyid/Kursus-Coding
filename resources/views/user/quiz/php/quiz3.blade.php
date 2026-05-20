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

                            <h3>Quiz Percabangan PHP</h3>

                            <p class="text-subtitle text-muted">
                                Uji pemahaman kamu tentang materi percabangan PHP (if, else, switch).
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- QUIZ 1 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">1. Percabangan digunakan untuk...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. Menyimpan data</li>
                            <li>B. Menghapus file</li>
                            <li>C. Mengambil keputusan berdasarkan kondisi</li>
                            <li>D. Menampilkan gambar</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 2 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">2. Keyword percabangan dalam PHP adalah...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. echo</li>
                            <li>B. if</li>
                            <li>C. var</li>
                            <li>D. print</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 3 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">3. If akan dijalankan jika kondisi...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. false</li>
                            <li>B. error</li>
                            <li>C. true</li>
                            <li>D. kosong</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 4 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">4. Struktur if yang benar adalah...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. if () { }</li>
                            <li>B. if {} ()</li>
                            <li>C. if [] { }</li>
                            <li>D. if <> { }</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 5 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">5. Fungsi else adalah...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. kondisi benar</li>
                            <li>B. kondisi salah</li>
                            <li>C. loop</li>
                            <li>D. variabel</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 6 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">6. Jika umur 20 dan if ($umur >= 18), hasilnya...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. Anak-anak</li>
                            <li>B. Dewasa</li>
                            <li>C. Error</li>
                            <li>D. Null</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 7 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">7. Percabangan banyak kondisi menggunakan...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. switch</li>
                            <li>B. for</li>
                            <li>C. echo</li>
                            <li>D. var</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 8 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">8. Fungsi break pada switch adalah...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. menghapus data</li>
                            <li>B. menghentikan case</li>
                            <li>C. menambah data</li>
                            <li>D. error</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 9 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">9. default pada switch akan dijalankan jika...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. semua benar</li>
                            <li>B. tidak ada case cocok</li>
                            <li>C. error</li>
                            <li>D. kosong</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- QUIZ 10 -->
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">10. Jika nilai 70 dan syarat >= 75, maka hasilnya...</h4>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>A. Lulus</li>
                            <li>B. Tidak Lulus</li>
                            <li>C. Error</li>
                            <li>D. Kosong</li>
                        </ul>
                    </div>
                </div>

            </section>

            <!-- BUTTON QUIZ -->
            <section class="section">

                <div class="card">

                    <div class="card-body text-center">

                        <h5 class="mb-3">
                            Sudah siap mengerjakan quiz Percabangan PHP?
                        </h5>

                        <a href="/quiz/php/3"
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