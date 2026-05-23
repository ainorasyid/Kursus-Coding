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

    <style>
        .kursus-card {
            border-radius: 18px;
            transition: all 0.3s ease;
        }

        .kursus-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .kursus-card .card-body {
            padding: 28px;
        }

        .kursus-card p {
            line-height: 1.7;
        }
    </style>

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
                            <div class="col-12 order-md-1 order-last">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('user.pembelajaran') }}" class="btn btn-secondary mb-3">
                                            ← Kembali ke Kursus
                                        </a>
                                        <h2 class="fw-bold">{{ $materi->judul }}</h2>
                                        <hr>
                                        <div>{!! $materi->konten !!}</div>
                                        <div class="d-flex align-items-center mt-5">
                                            <div>
                                                @if($prev)<a href="{{ route('user.pembelajaran.show', [
                                                        $kursus->judul,
                                                        $prev->judul
                                                    ]) }}" class="btn btn-secondary">← Prev</a>
                                                @endif
                                            </div>

                                            <div class="ms-auto">
                                                @if($next)<a href="{{ route('user.pembelajaran.show', [
                                                        $kursus->judul,
                                                        $next->judul
                                                    ]) }}" class="btn btn-primary">Next →</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
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