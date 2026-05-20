<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz Variabel & Tipe Data C++</title>

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

                                <h3>Quiz Variabel & Tipe Data C++</h3>

                                <p class="text-subtitle text-muted">
                                    Uji pemahamanmu tentang variabel dan tipe data pada bahasa C++.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Quiz -->

                <section class="section">

                    <div class="card">

                        <div class="card-body">

                            <form>

                                <!-- Soal 1 -->

                                <div class="mb-5">

                                    <h5>
                                        1. Apa pengertian variabel dalam C++?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            Tempat menyimpan data
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            Program untuk membuat game
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal1">

                                        <label class="form-check-label">
                                            Library pada C++
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 2 -->

                                <div class="mb-5">

                                    <h5>
                                        2. Tipe data apakah yang digunakan untuk angka bulat?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            string
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            int
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal2">

                                        <label class="form-check-label">
                                            float
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 3 -->

                                <div class="mb-5">

                                    <h5>
                                        3. Tipe data apa yang digunakan untuk teks?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            char
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            string
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal3">

                                        <label class="form-check-label">
                                            bool
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 4 -->

                                <div class="mb-5">

                                    <h5>
                                        4. Tipe data float digunakan untuk?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            Huruf
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            Angka desimal
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal4">

                                        <label class="form-check-label">
                                            Nilai true false
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 5 -->

                                <div class="mb-5">

                                    <h5>
                                        5. Apa fungsi cout pada C++?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Menampilkan output
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Menyimpan data
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal5">

                                        <label class="form-check-label">
                                            Menghapus program
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 6 -->

                                <div class="mb-5">

                                    <h5>
                                        6. Manakah contoh variabel integer yang benar?
                                    </h5>

<pre class="bg-dark text-white p-3 rounded">
<code>
A. int umur = 17;
B. string nama = "Budi";
C. float tinggi = 170.5;
</code>
</pre>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            A
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            B
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal6">

                                        <label class="form-check-label">
                                            C
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 7 -->

                                <div class="mb-5">

                                    <h5>
                                        7. Tipe data bool digunakan untuk?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Angka desimal
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Nilai true atau false
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal7">

                                        <label class="form-check-label">
                                            Menyimpan teks
                                        </label>

                                    </div>

                                </div>

                                <!-- Soal 8 -->

                                <div class="mb-5">

                                    <h5>
                                        8. Mengapa variabel penting dalam pemrograman?
                                    </h5>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            Untuk menghias tampilan website
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            Untuk menyimpan dan mengolah data
                                        </label>

                                    </div>

                                    <div class="form-check">

                                        <input class="form-check-input"
                                            type="radio"
                                            name="soal8">

                                        <label class="form-check-label">
                                            Untuk menghapus data komputer
                                        </label>

                                    </div>

                                </div>

                                <!-- Tombol -->

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