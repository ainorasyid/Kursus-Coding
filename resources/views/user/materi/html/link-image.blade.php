<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>link-image</title>

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

        <div id="main" class="layout-navbar">

            <x-user.navbar></x-user.navbar>

            <div id="main-content">



                <!-- HEADING -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <h3>Link & Image HTML</h3>

                                <p class="text-subtitle text-muted">
                                    Memahami cara membuat link dan menampilkan gambar pada HTML.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- PENGERTIAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Apa itu Link dan Image?
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Link dan image merupakan elemen penting dalam HTML
                                yang sering digunakan pada website.
                            </p>

                            <p>
                                Link digunakan untuk berpindah dari satu halaman
                                ke halaman lainnya, sedangkan image digunakan
                                untuk menampilkan gambar pada website.
                            </p>

                            <p>
                                Hampir semua website modern menggunakan link
                                dan gambar agar tampilan website lebih menarik
                                dan mudah digunakan.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Link membantu navigasi website,
                                sedangkan image membantu mempercantik tampilan website.

                            </div>

                        </div>

                    </div>

                </section>



                <!-- LINK HTML -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Link HTML
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Link pada HTML dibuat menggunakan tag
                                <strong>&lt;a&gt;</strong>.
                            </p>

                            <p>
                                Link digunakan untuk menghubungkan halaman website,
                                membuka file, atau menuju website lain.
                            </p>

                            <h5>Struktur Dasar Link</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;a href="https://google.com"&gt;
    Kunjungi Google
&lt;/a&gt;
</code>
</pre>

                        </div>

                    </div>

                </section>



                <!-- PENJELASAN LINK -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Penjelasan Tag Link
                            </h4>

                        </div>

                        <div class="card-body">

                            <div class="mb-5">

                                <h4 class="text-primary">
                                    1. Tag &lt;a&gt;
                                </h4>

                                <p>
                                    Tag a digunakan untuk membuat hyperlink atau link.
                                </p>

                                <p>
                                    Hyperlink memungkinkan pengguna berpindah
                                    ke halaman lain ketika link diklik.
                                </p>

                            </div>



                            <div class="mb-5">

                                <h4 class="text-primary">
                                    2. Atribut href
                                </h4>

                                <p>
                                    href digunakan untuk menentukan tujuan link.
                                </p>

                                <p>
                                    Isi href bisa berupa:
                                </p>

                                <ul>

                                    <li>
                                        URL website
                                    </li>

                                    <li>
                                        File
                                    </li>

                                    <li>
                                        Halaman HTML lain
                                    </li>

                                </ul>

                            </div>



                            <div class="mb-5">

                                <h4 class="text-primary">
                                    3. Teks Link
                                </h4>

                                <p>
                                    Teks di dalam tag a akan tampil sebagai tulisan link.
                                </p>

                                <p>
                                    Pengguna akan mengklik tulisan tersebut
                                    untuk membuka tujuan link.
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- CONTOH LINK -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Link HTML
                            </h4>

                        </div>

                        <div class="card-body">



                            <!-- CONTOH 1 -->
                            <div class="mb-5">

                                <h5>
                                    Contoh 1 - Link Website
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;a href="https://google.com"&gt;
    Buka Google
&lt;/a&gt;
</code>
</pre>

                                <h5>Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <a href="#">
                                        Buka Google
                                    </a>

                                </div>

                            </div>



                            <!-- CONTOH 2 -->
                            <div class="mb-5">

                                <h5>
                                    Contoh 2 - Link Halaman
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;a href="about.html"&gt;
    Halaman About
&lt;/a&gt;
</code>
</pre>

                                <h5>Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <a href="#">
                                        Halaman About
                                    </a>

                                </div>

                            </div>



                            <!-- CONTOH 3 -->
                            <div class="mb-5">

                                <h5>
                                    Contoh 3 - Link Tab Baru
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;a href="https://youtube.com"
target="_blank"&gt;

    Buka YouTube

&lt;/a&gt;
</code>
</pre>

                                <h5>Penjelasan</h5>

                                <p>
                                    target="_blank" digunakan
                                    agar link terbuka di tab baru.
                                </p>

                                <h5>Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <a href="#">
                                        Buka YouTube
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- IMAGE HTML -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Image HTML
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Image digunakan untuk menampilkan gambar pada website.
                            </p>

                            <p>
                                Pada HTML, gambar dibuat menggunakan tag
                                <strong>&lt;img&gt;</strong>.
                            </p>

                            <h5>Struktur Dasar Image</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;img src="gambar.jpg"&gt;
</code>
</pre>

                        </div>

                    </div>

                </section>



                <!-- PENJELASAN IMAGE -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Penjelasan Tag Image
                            </h4>

                        </div>

                        <div class="card-body">



                            <!-- IMG -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    1. Tag &lt;img&gt;
                                </h4>

                                <p>
                                    Tag img digunakan untuk menampilkan gambar.
                                </p>

                                <p>
                                    Tag ini tidak memiliki penutup.
                                </p>

                            </div>



                            <!-- SRC -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    2. Atribut src
                                </h4>

                                <p>
                                    src digunakan untuk menentukan lokasi gambar.
                                </p>

                                <p>
                                    Browser akan mengambil gambar
                                    dari lokasi yang ditentukan.
                                </p>

                            </div>



                            <!-- ALT -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    3. Atribut alt
                                </h4>

                                <p>
                                    alt digunakan untuk memberikan deskripsi gambar.
                                </p>

                                <p>
                                    Jika gambar gagal dimuat,
                                    maka teks alt akan tampil.
                                </p>

                            </div>



                            <!-- WIDTH -->
                            <div class="mb-5">

                                <h4 class="text-primary">
                                    4. Atribut width
                                </h4>

                                <p>
                                    width digunakan untuk mengatur ukuran lebar gambar.
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- CONTOH IMAGE -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Image HTML
                            </h4>

                        </div>

                        <div class="card-body">



                            <!-- CONTOH 1 -->
                            <div class="mb-5">

                                <h5>
                                    Contoh 1 - Menampilkan Gambar
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;img src="gambar.jpg"&gt;
</code>
</pre>

                                <h5>Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <img
                                        src="https://via.placeholder.com/200"
                                        class="img-fluid rounded">

                                </div>

                            </div>



                            <!-- CONTOH 2 -->
                            <div class="mb-5">

                                <h5>
                                    Contoh 2 - Mengatur Ukuran Gambar
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;img src="gambar.jpg"
width="200"&gt;
</code>
</pre>

                                <h5>Output</h5>

                                <div class="border rounded p-4 bg-light">

                                    <img
                                        src="https://via.placeholder.com/200"
                                        width="200"
                                        class="rounded">

                                </div>

                            </div>



                            <!-- CONTOH 3 -->
                            <div class="mb-5">

                                <h5>
                                    Contoh 3 - Menggunakan Alt
                                </h5>

                                <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;img src="gambar.jpg"
alt="Gambar Pemandangan"&gt;
</code>
</pre>

                                <h5>Penjelasan</h5>

                                <p>
                                    alt membantu browser membaca deskripsi gambar.
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- GABUNGAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Contoh Gabungan Link & Image
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Gambar juga bisa dijadikan link.
                            </p>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;a href="https://youtube.com"&gt;

    &lt;img src="gambar.jpg" width="200"&gt;

&lt;/a&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <a href="#">

                                    <img
                                        src="https://via.placeholder.com/200"
                                        class="rounded">

                                </a>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- KELEBIHAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kenapa Link dan Image Penting?
                            </h4>

                        </div>

                        <div class="card-body">

                            <ul>

                                <li class="mb-3">
                                    Membantu navigasi website
                                </li>

                                <li class="mb-3">
                                    Membuat website lebih menarik
                                </li>

                                <li class="mb-3">
                                    Mempermudah pengguna memahami isi website
                                </li>

                                <li class="mb-3">
                                    Membantu meningkatkan pengalaman pengguna
                                </li>

                                <li class="mb-3">
                                    Membuat tampilan website lebih modern
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>



                <!-- KESIMPULAN -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">
                                Kesimpulan
                            </h4>

                        </div>

                        <div class="card-body">

                            <p>
                                Link digunakan untuk menghubungkan halaman,
                                sedangkan image digunakan untuk menampilkan gambar.
                            </p>

                            <p>
                                Kedua elemen ini sangat penting
                                dalam pembuatan website modern.
                            </p>

                            <p>
                                Dengan memahami link dan image,
                                website akan menjadi lebih interaktif
                                dan menarik untuk pengguna.
                            </p>

                        </div>

                    </div>

                </section>

                <section class="section">

                    <div class="text-center mb-4">
                        <h1>
                            Video: Link dan Image HTML
                        </h1>
                    </div>

                    <div class="col-md-10 mx-auto">

                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/G3e-cpL7ofc"
                                title="Link dan Image HTML"
                                allowfullscreen
                                style="border-radius:10px;">
                            </iframe>
                        </div>

                    </div>

                </section>
                <!-- Navigation Materi -->
                <section class="section">

                    <div class="card">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <!-- Previous -->
                                <a href="{{ route('user.learning.html.heading-paragraph') }}"
                                    class="btn btn-secondary d-flex align-items-center gap-2">

                                    <i class="bi bi-arrow-left-circle-fill"></i>

                                    Previous

                                </a>


                            </div>

                        </div>

                    </div>

                </section>
                <!-- QUIZ -->
                <section class="section">

                    <div class="card">

                        <div class="card-body text-center">

                            <h5 class="mb-3">
                                Sudah memahami Link & Image HTML?
                            </h5>

                            <a href="/quiz/html/4"
                                class="btn btn-primary btn-lg">

                                <i class="bi bi-patch-question-fill"></i>

                                Mulai Quiz

                            </a>

                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>

    <x-footer></x-footer>
    <script src="{{ asset('assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
</body>

</html>