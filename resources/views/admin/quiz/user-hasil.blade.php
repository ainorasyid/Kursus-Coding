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
                <div class="page-heading">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div>
                                    <h2 class="fw-bold mb-1">
                                        Hasil Quiz
                                    </h2>
                                    <p class="text-muted">
                                        Kursus: {{ $hasil->kursus->judul }}
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ $hasil->pengguna->fullname }}
                                    </p>
                                </div>
                                <div class="text-center mt-3 mt-md-0">
                                    <div class="fs-6 text-muted">
                                        Nilai Akhir
                                    </div>
                                    @if($hasil->nilai >= 80)
                                        <h1 class="fw-bold text-success mb-0">
                                            {{ $hasil->nilai }}
                                        </h1>
                                        <span class="badge bg-success">
                                            Sangat Baik
                                        </span>
                                    @elseif($hasil->nilai >= 60)
                                        <h1 class="fw-bold text-warning mb-0">
                                            {{ $hasil->nilai }}
                                        </h1>
                                        <span class="badge bg-warning">
                                            Cukup
                                        </span>
                                    @else
                                        <h1 class="fw-bold text-danger mb-0">
                                            {{ $hasil->nilai }}
                                        </h1>
                                        <span class="badge bg-danger">
                                            Perlu Belajar Lagi
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($soal as $item)
                        @php
                            $jawaban = $jawabanUser[$item->id]->jawaban ?? null;
                        @endphp
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>{{ $loop->iteration }}. {{ $item->soal }}</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" disabled {{ $jawaban == 'a' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        A. {{ $item->pilihan_a }}

                                        @if($item->jawaban_benar == 'a')
                                            <span class="badge bg-success ms-2">Jawaban Benar</span>
                                        @endif
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" disabled {{ $jawaban == 'b' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        B. {{ $item->pilihan_b }}
                                        @if($item->jawaban_benar == 'b')
                                            <span class="badge bg-success ms-2">Jawaban Benar</span>
                                        @endif
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" disabled {{ $jawaban == 'c' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        C. {{ $item->pilihan_c }}
                                        @if($item->jawaban_benar == 'c')
                                            <span class="badge bg-success ms-2">Jawaban Benar</span>
                                        @endif
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" disabled {{ $jawaban == 'd' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        D. {{ $item->pilihan_d }}
                                        @if($item->jawaban_benar == 'd')
                                            <span class="badge bg-success ms-2">Jawaban Benar</span>
                                        @endif
                                    </label>
                                </div>
                                <hr>
                                @if($jawaban == $item->jawaban_benar)
                                    <div class="text-success fw-bold">
                                        Jawaban Anda Benar
                                    </div>
                                @else
                                    <div class="text-danger fw-bold">
                                        Jawaban Anda Salah
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('admin.hasil.quiz') }}" class="btn btn-secondary mb-3">
                        Kembali
                    </a>
                </div>
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