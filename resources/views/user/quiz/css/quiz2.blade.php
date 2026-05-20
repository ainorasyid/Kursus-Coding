<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz CSS Selector</title>

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

                                <h3>Quiz CSS Selector</h3>

                                <p class="text-subtitle text-muted">
                                    Jawab pertanyaan berikut untuk menguji pemahaman tentang CSS Selector.
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

                                    <h5>
                                        1. Apa fungsi CSS Selector?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1">
                                        <label class="form-check-label">
                                            Untuk memilih elemen HTML yang akan diberi style
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1">
                                        <label class="form-check-label">
                                            Untuk membuat database
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q1">
                                        <label class="form-check-label">
                                            Untuk menjalankan server
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 2 -->

                                <div class="mb-5">

                                    <h5>
                                        2. Selector apa yang digunakan untuk memilih tag HTML langsung?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q2">
                                        <label class="form-check-label">
                                            Element Selector
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q2">
                                        <label class="form-check-label">
                                            Class Selector
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q2">
                                        <label class="form-check-label">
                                            ID Selector
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 3 -->

                                <div class="mb-5">

                                    <h5>
                                        3. Simbol apa yang digunakan untuk Class Selector?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q3">
                                        <label class="form-check-label">
                                            #
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q3">
                                        <label class="form-check-label">
                                            .
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q3">
                                        <label class="form-check-label">
                                            *
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 4 -->

                                <div class="mb-5">

                                    <h5>
                                        4. Simbol apa yang digunakan untuk ID Selector?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4">
                                        <label class="form-check-label">
                                            .
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4">
                                        <label class="form-check-label">
                                            #
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4">
                                        <label class="form-check-label">
                                            @
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 5 -->

                                <div class="mb-5">

                                    <h5>
                                        5. Selector berikut digunakan untuk apa?
                                    </h5>

<pre class="bg-dark text-white p-3 rounded">
<code>
p {
    color: red;
}
</code>
</pre>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5">
                                        <label class="form-check-label">
                                            Memilih semua tag paragraf
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5">
                                        <label class="form-check-label">
                                            Memilih semua gambar
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5">
                                        <label class="form-check-label">
                                            Memilih semua button
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 6 -->

                                <div class="mb-5">

                                    <h5>
                                        6. Class Selector diawali dengan?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q6">
                                        <label class="form-check-label">
                                            Titik (.)
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q6">
                                        <label class="form-check-label">
                                            Pagar (#)
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q6">
                                        <label class="form-check-label">
                                            Dollar ($)
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 7 -->

                                <div class="mb-5">

                                    <h5>
                                        7. ID biasanya digunakan untuk?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q7">
                                        <label class="form-check-label">
                                            Elemen unik
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q7">
                                        <label class="form-check-label">
                                            Semua elemen
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

                                    <h5>
                                        8. Selector berikut termasuk jenis apa?
                                    </h5>

<pre class="bg-dark text-white p-3 rounded">
<code>
.teks-biru {
    color: blue;
}
</code>
</pre>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q8">
                                        <label class="form-check-label">
                                            ID Selector
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q8">
                                        <label class="form-check-label">
                                            Class Selector
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q8">
                                        <label class="form-check-label">
                                            Element Selector
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 9 -->

                                <div class="mb-5">

                                    <h5>
                                        9. Selector berikut termasuk jenis apa?
                                    </h5>

<pre class="bg-dark text-white p-3 rounded">
<code>
#judul {
    color: green;
}
</code>
</pre>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q9">
                                        <label class="form-check-label">
                                            Element Selector
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q9">
                                        <label class="form-check-label">
                                            Class Selector
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q9">
                                        <label class="form-check-label">
                                            ID Selector
                                        </label>
                                    </div>

                                </div>

                                <!-- SOAL 10 -->

                                <div class="mb-4">

                                    <h5>
                                        10. CSS Selector sangat penting karena?
                                    </h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q10">
                                        <label class="form-check-label">
                                            CSS membutuhkan selector untuk mengetahui elemen yang akan diberi style
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q10">
                                        <label class="form-check-label">
                                            Agar HTML bisa menjadi database
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q10">
                                        <label class="form-check-label">
                                            Agar website menjadi server
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