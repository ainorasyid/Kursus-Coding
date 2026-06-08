<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor - Mazer Admin Dashboard</title>

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

        <div id="main" class='layout-navbar'>
            <x-admin.navbar></x-admin.navbar>
            <div id="main-content">
                <div class="page-content">

                    {{-- Welcome Card --}}
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="fw-bold">
                                Selamat Datang, Mentor 👋
                            </h3>
                            <p class="text-muted mb-0">
                                Kelola kursus, materi, quiz, dan pantau hasil belajar peserta dari dashboard ini.
                            </p>
                        </div>
                    </div>

                    <section class="row">

                        {{-- Total Kursus --}}
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Total Kursus
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $totalKursus }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Total Materi --}}
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldDocument"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Total Materi
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $totalMateri }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Total Quiz --}}
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="iconly-boldEdit"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Total Quiz
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $totalQuiz }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Total Hasil Quiz --}}
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldChart"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Hasil Quiz
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $totalHasil }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Peserta -->
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon orange">
                                                <i class="iconly-boldUser1"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Total Peserta
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $totalPeserta }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rata-rata Nilai -->
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldStar"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Rata-rata Nilai
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $rataRataNilai }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nilai Tertinggi -->
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldAward"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Nilai Tertinggi
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $nilaiTertinggi }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nilai Terendah -->
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldDanger"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">
                                                Nilai Terendah
                                            </h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ $nilaiTerendah }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>



                    </section>

                </div>

                <script
                    src="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
                <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>

                <script src="{{ asset('assets/dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
                <script src="{{ asset('assets/dashboard/js/pages/dashboard.js') }}"></script>

                <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
</body>

</html>