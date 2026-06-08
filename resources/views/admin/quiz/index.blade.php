<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Management User</title>

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
                    <section class="section">
                        <div class="row" id="table-hover-row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Tabel Soal Kursus</h4>
                                        <p class="text-muted">
                                            Table semua soal pada setiap kursus di Codenova.
                                        </p>
                                    </div>
                                    <div class="card-content px-4">
                                        <!-- table hover -->
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0 ">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">No</th>
                                                        <th rowspan="2">Kursus</th>
                                                        <th rowspan="2">Pertanyaan</th>
                                                        <th colspan="4" class="text-center">Jawaban</th>
                                                        <th rowspan="2">Jawaban Benar</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">A</th>
                                                        <th class="text-center">B</th>
                                                        <th class="text-center">C</th>
                                                        <th class="text-center">D</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($soal as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->kursus->judul }}</td>
                                                            <td>{{ $item->soal }}</td>
                                                            <td>{{ $item->pilihan_a }}</td>
                                                            <td>{{ $item->pilihan_b }}</td>
                                                            <td>{{ $item->pilihan_c }}</td>
                                                            <td>{{ $item->pilihan_d }}</td>
                                                            <td class="text-center">{{ $item->jawaban_benar }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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