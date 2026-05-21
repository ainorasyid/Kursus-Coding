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
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-8 order-md-1 order-last mb-3">
                                <h1>Tambah Materi</h1>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <form class="form form-horizontal"
                                    action="{{ route('mentor.manajemen-kursus.materi.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Kursus</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="kursus_id">
                                                        <option value="">-- Pilih Kursus --</option>
                                                        @foreach ($kursus as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->judul }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Judul</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" name="judul">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Konten</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <textarea class="form-control" name="konten" rows="5"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Video</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" name="video">
                                            </div>
                                            <div class="col-sm-12 mt-4 d-flex justify-content-between">
                                                <a href="{{ route('mentor.manajemen-kursus.materi') }}"
                                                    class="btn btn-primary me-1 mb-1 d-flex align-items-center gap-2"><i
                                                        class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-success me-1 mb-1">Tambah</button>
                                                    <button type="reset"
                                                        class="btn btn-light-danger me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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