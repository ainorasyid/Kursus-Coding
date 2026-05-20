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
                                <h1>Update User {{ $pengguna->fullname }}!</h1>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('admin.management.user.update', $pengguna->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" name="firstname"
                                                    placeholder="First Name" value="{{ $pengguna->firstname }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text"  class="form-control" name="lastname"
                                                    placeholder="Last Name" value="{{ $pengguna->lastname }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="email" class="form-control"
                                                    name="email" placeholder="Email" value="{{ $pengguna->user?->email }}">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-between">
                                                <a href="{{ route('admin.management.user') }}" class="btn btn-primary me-1 mb-1">Kembali</a>
                                                <div>
                                                    <button type="submit" class="btn btn-success me-1 mb-1">Update</button>
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