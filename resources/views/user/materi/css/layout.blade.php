<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz1 html</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/app.css') }}">
</head>

<body>

    <<div id="app">

        <x-sidebar></x-sidebar>

        <div id="main" class="layout-navbar">

            <x-user.navbar></x-user.navbar>

            <div id="main-content">

                <!-- Heading -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <h3>CSS Layout</h3>

                                <p class="text-subtitle text-muted">
                                    Pelajari cara mengatur tata letak website menggunakan CSS seperti flexbox, grid, margin, dan positioning.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Materi CSS Layout -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Apa itu CSS Layout?</h4>
                        </div>

                        <div class="card-body">

                            <p>
                                CSS Layout adalah cara untuk mengatur posisi, struktur, dan tata letak elemen HTML pada halaman website.
                            </p>

                            <p>
                                Dengan layout CSS, kita bisa membuat website menjadi rapi, responsif, dan mudah dibaca.
                            </p>

                            <div class="alert alert-primary">
                                <i class="bi bi-lightbulb-fill"></i>
                                CSS Layout membantu kita mengatur posisi elemen seperti kiri, kanan, atas, bawah, bahkan membuat kolom.
                            </div>

                        </div>

                    </div>

                </section>

                <!-- Jenis Layout -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Teknik Layout CSS</h4>
                        </div>

                        <div class="card-body">

                            <ul>
                                <li><strong>Display</strong> → mengatur tampilan elemen (block, inline, flex)</li>
                                <li><strong>Flexbox</strong> → mengatur layout secara fleksibel</li>
                                <li><strong>Grid</strong> → membuat layout berbentuk kolom & baris</li>
                                <li><strong>Position</strong> → mengatur posisi elemen (absolute, relative)</li>
                                <li><strong>Margin & Padding</strong> → mengatur jarak antar elemen</li>
                            </ul>

                        </div>

                    </div>

                </section>

                <!-- CONTOH -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Contoh CSS Layout</h4>
                        </div>

                        <div class="card-body">

                            <!-- ===================== CONTOH 1 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 1: Display Flex (Horizontal Layout)</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.container {
    display: flex;
    gap: 10px;
}

.box {
    background: lightblue;
    padding: 20px;
}
&lt;/style&gt;

&lt;div class="container"&gt;
    &lt;div class="box"&gt;Box 1&lt;/div&gt;
    &lt;div class="box"&gt;Box 2&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>

                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>display: flex</strong> → membuat elemen sejajar horizontal.</li>
                                    <li><strong>gap</strong> → memberi jarak antar box.</li>
                                    <li><strong>box</strong> → elemen kotak berwarna.</li>
                                </ul>

                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light d-flex gap-2">

                                    <div style="background:lightblue;padding:20px;">Box 1</div>
                                    <div style="background:lightblue;padding:20px;">Box 2</div>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 2 ===================== -->
                            <div class="mb-5">

                                <h5 class="text-primary">Contoh 2: Grid Layout (Kolom & Baris)</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.item {
    background: pink;
    padding: 20px;
}
&lt;/style&gt;

&lt;div class="grid"&gt;
    &lt;div class="item"&gt;1&lt;/div&gt;
    &lt;div class="item"&gt;2&lt;/div&gt;
    &lt;div class="item"&gt;3&lt;/div&gt;
    &lt;div class="item"&gt;4&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>

                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>display: grid</strong> → membuat layout berbentuk grid.</li>
                                    <li><strong>grid-template-columns</strong> → membuat 2 kolom.</li>
                                    <li><strong>repeat(2, 1fr)</strong> → membagi ruang sama rata.</li>
                                    <li><strong>gap</strong> → jarak antar item.</li>
                                </ul>

                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light d-grid" style="grid-template-columns: repeat(2, 1fr); gap: 10px;">

                                    <div style="background:pink;padding:20px;">1</div>
                                    <div style="background:pink;padding:20px;">2</div>
                                    <div style="background:pink;padding:20px;">3</div>
                                    <div style="background:pink;padding:20px;">4</div>

                                </div>

                            </div>

                            <!-- ===================== CONTOH 3 ===================== -->
                            <div class="mb-2">

                                <h5 class="text-primary">Contoh 3: Position (Teks di Tengah)</h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;style&gt;
.box {
    position: relative;
    height: 100px;
    background: lightgray;
}

.text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
&lt;/style&gt;

&lt;div class="box"&gt;
    &lt;div class="text"&gt;Tengah&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>

                                <h5 class="text-primary mt-3">Penjelasan Code</h5>

                                <ul>
                                    <li><strong>position: relative</strong> → menjadi acuan posisi.</li>
                                    <li><strong>position: absolute</strong> → bebas diposisikan.</li>
                                    <li><strong>top & left 50%</strong> → posisi tengah.</li>
                                    <li><strong>transform</strong> → benar-benar memusatkan elemen.</li>
                                </ul>

                                <h5 class="text-primary mt-3">Output</h5>

                                <div class="border rounded p-3 bg-light position-relative" style="height:100px;background:lightgray;">

                                    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);">
                                        Tengah
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <!-- Quiz -->
                <section class="section">

                    <div class="card">

                        <div class="card-body text-center">

                            <h5 class="mb-3">
                                Sudah memahami CSS Layout?
                            </h5>

                            <a href="/quiz/css/layout/1" class="btn btn-primary btn-lg">

                                <i class="bi bi-patch-question-fill"></i>

                                Mulai Quiz

                            </a>

                        </div>

                    </div>

                </section>

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