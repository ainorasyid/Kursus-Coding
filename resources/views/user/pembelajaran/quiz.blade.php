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
                    <section class="section">
                        <!-- Header Quiz -->
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-1">
                                            Quiz {{ $soal->first()->kursus->judul ?? 'Quiz' }}
                                        </h4>
                                        <p class="text-muted mb-0">
                                            Total {{ $soal->count() }} Soal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Area Soal -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            @csrf
                                            @foreach($soal as $index => $item)
                                                <div class="card border-0 shadow-none">
                                                    <div class="card-body">
                                                        <h5 class="mb-2">
                                                            {{ $loop->iteration }}. {{ $item->soal }}
                                                        </h5>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="jawaban[{{ $item->id }}]" value="a"
                                                                id="a{{ $item->id }}">
                                                            <label class="form-check-label" for="a{{ $item->id }}">
                                                                {{ $item->pilihan_a }}
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="jawaban[{{ $item->id }}]" value="b"
                                                                id="b{{ $item->id }}">
                                                            <label class="form-check-label" for="b{{ $item->id }}">
                                                                {{ $item->pilihan_b }}
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="jawaban[{{ $item->id }}]" value="c"
                                                                id="c{{ $item->id }}">
                                                            <label class="form-check-label" for="c{{ $item->id }}">
                                                                {{ $item->pilihan_c }}
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="jawaban[{{ $item->id }}]" value="d"
                                                                id="d{{ $item->id }}">
                                                            <label class="form-check-label" for="d{{ $item->id }}">
                                                                {{ $item->pilihan_d }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="d-flex justify-content-between mt-4">
                                                @if($lastMateri)
                                                    <a href="{{ route('user.pembelajaran.show', [$kursus->judul,$lastMateri->judul]) }}" 
                                                    class="btn btn-secondary">
                                                    Kembali ke Materi
                                                    </a>
                                                @endif
                                                <button type="submit" class="btn btn-success">
                                                    Selesai Quiz
                                                </button>
                                            </div>
                                        </form>
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

    <script>
        let currentQuestion = 0;

        const questions = document.querySelectorAll('.question-card');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function showQuestion(index) {

            questions.forEach((q) => {
                q.style.display = 'none';
            });

            questions[index].style.display = 'block';

            prevBtn.style.display = index === 0 ? 'none' : 'inline-block';

            nextBtn.style.display =
                index === questions.length - 1 ? 'none' : 'inline-block';
        }

        prevBtn.addEventListener('click', () => {
            if (currentQuestion > 0) {
                currentQuestion--;
                showQuestion(currentQuestion);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                showQuestion(currentQuestion);
            }
        });

        showQuestion(0);
    </script>
</body>

</html>