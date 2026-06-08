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
                    <section class="section">
                        <div class="row" id="table-hover-row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Semua Hasil Quiz Pengguna</h4>
                                        <p class="text-muted">
                                            Table hasil quiz pada kursus Codenova.
                                        </p>
                                    </div>
                                    <div class="card-content px-4">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pengguna</th>
                                                        <th>Kursus</th>
                                                        <th>Nilai</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($hasil as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->pengguna->fullname }}</td>
                                                            <td>{{ $item->kursus->judul }}</td>
                                                            <td>{{ $item->nilai }}</td>
                                                            <td>
                                                                <a href="{{ route('mentor.hasil.quiz.user', $item->id) }}" class="btn btn-info">
                                                                    lihat 
                                                                </a>
                                                            </td>
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