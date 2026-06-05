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
                        <form action="" method="POST">
                            <div class="card">
                                <div class="card-body">
                                        <div class="col-md-12">
                                            <h6 class="text-center">Pilih Kursus</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select @error('kursus_id') is-invalid @enderror"
                                                    name="kursus_id">
                                                    <option value="">-- Pilih Kursus --</option>
                                                    @foreach ($kursus as $items)
                                                        <option value="{{ $items->id }}">
                                                            {{ $items->judul }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('kursus_id')
                                                    <div class="invalid-feedback mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </fieldset>
                                        </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Pertanyaan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text"
                                                class="form-control @error('pertanyaan') is-invalid @enderror"
                                                name="pertanyaan">
                                            @error('pertanyaan')
                                                <div class="invalid-feedback mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jawaban a</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control @error('jawaban_a') is-invalid @enderror"
                                                name="jawaban_a">
                                            @error('jawaban_a')
                                                <div class="invalid-feedback mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jawaban b</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control @error('jawaban_b') is-invalid @enderror"
                                                name="jawaban_b">
                                            @error('jawaban_b')
                                                <div class="invalid-feedback mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jawaban c</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control @error('jawaban_c') is-invalid @enderror"
                                                name="jawaban_c">
                                            @error('jawaban_c')
                                                <div class="invalid-feedback mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jawaban d</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control @error('jawaban_d') is-invalid @enderror"
                                                name="jawaban_d">
                                            @error('jawaban_d')
                                                <div class="invalid-feedback mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jawaban Benar</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-check d-flex gap-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('jawaban_benar') is-invalid @enderror"
                                                        type="radio" name="jawaban_benar" id="jawabanA" value="a">
                                                    <label class="form-check-label" for="jawabanA">
                                                        A
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('jawaban_benar') is-invalid @enderror"
                                                        type="radio" name="jawaban_benar" id="jawabanB" value="b">
                                                    <label class="form-check-label" for="jawabanB">
                                                        B
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('jawaban_benar') is-invalid @enderror"
                                                        type="radio" name="jawaban_benar" id="jawabanC" value="c">
                                                    <label class="form-check-label" for="jawabanC">
                                                        C
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('jawaban_benar') is-invalid @enderror"
                                                        type="radio" name="jawaban_benar" id="jawabanD" value="d">
                                                    <label class="form-check-label" for="jawabanD">
                                                        D
                                                    </label>
                                                </div>
                                            </div>
                                            @error('jawaban_benar')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 mt-4 d-flex justify-content-end">
                                            <div>
                                                <button type="submit" class="btn btn-success me-1 mb-1">Tambah</button>
                                                <button type="reset" class="btn btn-light-danger me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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