<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Mazer Admin Dashboard</title>

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
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="fw-bold">
                            Selamat Datang Admin 👋
                        </h3>
                        <p class="text-muted mb-0">
                            Kelola seluruh sistem pembelajaran, pengguna, kursus, materi, dan pantau aktivitas platform
                            secara real-time.
                        </p>
                    </div>
                </div>
                {{-- Statistik Utama --}}
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="stats-icon blue me-3">
                                    <i class="iconly-boldUser1"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Total Users</h6>
                                    <h4 class="mb-0">{{ $total }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="stats-icon green me-3">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Total Pengguna</h6>
                                    <h4 class="mb-0">{{ $totalPengguna }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="stats-icon red me-3">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Total Kursus</h6>
                                    <h4 class="mb-0">{{ $totalKursus }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="stats-icon purple me-3">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Total Materi</h6>
                                    <h4 class="mb-0">{{ $totalMateri }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Statistik Quiz --}}
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Total Quiz</h6>
                                <h2 class="text-primary">{{ $totalQuiz }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Hasil Quiz</h6>
                                <h2 class="text-success">{{ $totalHasil }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Rata-rata Nilai</h6>
                                <h2 class="text-info">{{ $nilaiRataRata }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Total Jawaban</h6>
                                <h2 class="text-warning">{{ $totalJawaban }}</h2>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Ringkasan Nilai --}}
                <div class="row">

                    <div class="col-md-4">
                        <div class="card border-start border-success border-4">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Nilai Tertinggi</h6>
                                <h1 class="text-success fw-bold">
                                    {{ $nilaiTertinggi }}
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-start border-danger border-4">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Nilai Terendah</h6>
                                <h1 class="text-danger fw-bold">
                                    {{ $nilaiTerendah }}
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-start border-primary border-4">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Tingkat Kelulusan</h6>
                                <h1 class="text-primary fw-bold">
                                    {{ $persentaseLulus }}%
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Aktivitas Terbaru --}}
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-title mb-0">
                            Aktivitas Quiz Terbaru
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-hover align-middle">

                                <thead>
                                    <tr>
                                        <th>Peserta</th>
                                        <th>Kursus</th>
                                        <th>Nilai</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse($hasilTerbaru as $item)
                                        <tr>
                                            <td>
                                                {{ $item->pengguna->fullname }}
                                            </td>

                                            <td>
                                                {{ $item->kursus->judul }}
                                            </td>

                                            <td>
                                                <span class="badge bg-success">
                                                    {{ $item->nilai }}
                                                </span>
                                            </td>

                                            <td>
                                                {{ $item->created_at->format('d M Y H:i') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                Belum ada aktivitas quiz
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>

            </div>

            <x-footer></x-footer>
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