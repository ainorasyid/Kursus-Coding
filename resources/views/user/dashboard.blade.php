<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Mazer Admin Dashboard</title>

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

            <x-user.navbar></x-user.navbar>

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-8 order-md-1 order-last">
                                <h1>Selamat datang {{ auth()->user()->pengguna->fullname }}!</h1>
                                <p class="text-subtitle text-muted">Semoga aktivitas belajarmu menyenangkan.</p>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Belajar dasar bahasa pemograman bersama kami</h4>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis
                                laudantium tempore
                                exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio
                                reprehenderit
                                distinctio incidunt! Vel aspernatur dicta consequatur!
                            </div>
                        </div>
                    </section>
                </div>
                <section class="row mt-4">

                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Kursus</h6>
                                <h2>{{ $totalKursus }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Materi</h6>
                                <h2>{{ $totalMateri }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Quiz Selesai</h6>
                                <h2>{{ $quizSelesai }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Rata-rata Nilai</h6>
                                <h2>{{ $nilaiRataRata }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>Hasil Quiz Terakhir</h4>
                        </div>

                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kursus</th>
                                        <th>Nilai</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($hasilTerbaru as $hasil)
                                        <tr>
                                            <td>{{ $hasil->kursus->judul }}</td>
                                            <td>
                                                <span class="badge bg-success">
                                                    {{ $hasil->nilai }}
                                                </span>
                                            </td>
                                            <td>
                                                {{ $hasil->created_at->format('d M Y') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('user.pembelajaran.quiz.hasil', $hasil->id ) }}" class="btn btn-info">
                                                    lihat
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                Belum ada hasil quiz.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>

                        </div>
                    </div>
                </section>

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