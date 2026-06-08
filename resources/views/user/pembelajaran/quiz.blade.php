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
            <x-user.navbar></x-user.navbar>

            <div id="main-content">
                <div class="page-heading">
                    <section class="section">
                        <!-- Header Quiz -->
                        <div class="card border-0 shadow-sm">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="fw-bold mb-1">
                                        {{ $soal->first()->kursus->judul ?? 'Quiz' }}
                                    </h3>
                                    <p class="text-muted mb-0">
                                        {{ $soal->count() }} Soal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Area Soal -->
                            <div class="col-lg-12">
                                <form action="{{ route('user.pembelajaran.quiz.submit', $kursus->id) }}" method="POST">
                                    @csrf
                                    @foreach($soal as $index => $item)
                                        <div class="card shadow-sm border-0 mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">
                                                        Soal {{ $loop->iteration }}
                                                    </span>
                                                    <h5 class="mb-0">{{ $item->soal }}</h5>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <label class="option-card d-block">
                                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="a">
                                                        A. {{ $item->pilihan_a }}
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <label class="option-card d-block">
                                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="b">
                                                        B. {{ $item->pilihan_b }}
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <label class="option-card d-block">
                                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="c">
                                                        C. {{ $item->pilihan_c }}
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <label class="option-card d-block">
                                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="d">
                                                        D. {{ $item->pilihan_d }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="d-flex justify-content-between mt-4">
                                        @if($lastMateri)
                                            <a href="{{ route('user.pembelajaran.show', [$kursus->judul, $lastMateri->judul]) }}"
                                                class="btn btn-secondary">
                                                Kembali ke Materi
                                            </a>
                                        @endif
                                        <button type="submit" class="btn btn-success">
                                            Kirim
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
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