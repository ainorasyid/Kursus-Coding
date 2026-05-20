<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz Pengenalan PHP</title>

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

                            <h3>Quiz Pengenalan PHP</h3>

                            <p class="text-subtitle text-muted">
                                Jawab pertanyaan berikut untuk menguji pemahaman dasar PHP.
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

                                <h5>1. Apa itu PHP?</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Bahasa pemrograman server-side
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">
                                        Bahasa desain website
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

                                <h5>2. PHP berjalan di...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">Server</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">Browser</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">CSS file</label>
                                </div>

                            </div>

                            <!-- SOAL 3 -->
                            <div class="mb-5">

                                <h5>3. Tag pembuka PHP adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">&lt;?php ?&gt;</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">&lt;php&gt;</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">&lt;script php&gt;</label>
                                </div>

                            </div>

                            <!-- SOAL 4 -->
                            <div class="mb-5">

                                <h5>4. Untuk menampilkan teks di PHP menggunakan...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">echo</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">printHTML</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">show()</label>
                                </div>

                            </div>

                            <!-- SOAL 5 -->
                            <div class="mb-5">

                                <h5>5. Variabel PHP diawali dengan...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">$ (dollar)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">#</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">@</label>
                                </div>

                            </div>

                            <!-- SOAL 6 -->
                            <div class="mb-5">

                                <h5>6. PHP digunakan untuk membuat...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Website dinamis
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Desain gambar
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">
                                        Game engine
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 7 -->
                            <div class="mb-5">

                                <h5>7. PHP biasanya digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Backend website
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Frontend CSS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">
                                        Animasi UI
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 8 -->
                            <div class="mb-5">

                                <h5>8. Contoh framework PHP adalah...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">Laravel</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">React</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">Vue CSS</label>
                                </div>

                            </div>

                            <!-- SOAL 9 -->
                            <div class="mb-5">

                                <h5>9. PHP sering digunakan untuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Sistem login & CRUD
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Desain UI
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">
                                        Editing video
                                    </label>
                                </div>

                            </div>

                            <!-- SOAL 10 -->
                            <div class="mb-4">

                                <h5>10. Output PHP dikirim ke browser dalam bentuk...</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        HTML
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        EXE file
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">
                                        CSS file
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