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
                                <h1>Pilih kursus yang ingin {{ auth()->user()->pengguna->fullname }} pelajari</h1>
                                <p class="text-subtitle text-muted">Selamat belajar.</p>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <section class="row">
                            @foreach ($kursus as $k)
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm h-100 kursus-card">
                                        <div class="card-body d-flex flex-column">
                                            <h4 class="fw-bold mb-3">
                                                {{ $k->judul }}
                                            </h4>
                                            <p class="text-muted flex-grow-1">
                                                {{ $k->deskripsi }}
                                            </p>
                                            <div class="mt-3">
                                                <a href="{{ route('user.pembelajaran.show', $k->judul) }}" class="btn btn-primary px-4">
                                                    Pelajari Kursus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </section>
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