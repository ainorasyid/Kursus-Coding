<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heading-paragraph</title>

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

                <!-- Heading -->
                <div class="page-heading">

                    <div class="page-title mb-4">

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <h3>Heading & Paragraph HTML</h3>

                                <p class="text-subtitle text-muted">
                                    Memahami penggunaan heading dan paragraph pada HTML.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Pengertian -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">
                                Apa itu Heading dan Paragraph?
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Heading dan paragraph merupakan elemen dasar HTML
                                yang digunakan untuk membuat struktur tulisan pada website.
                            </p>

                            <p>
                                Heading digunakan sebagai judul dan subjudul,
                                sedangkan paragraph digunakan untuk membuat isi teks
                                atau penjelasan.
                            </p>

                            <p>
                                Dengan heading dan paragraph, tampilan website akan
                                menjadi lebih rapi, terstruktur, dan mudah dibaca oleh pengguna.
                            </p>

                            <div class="alert alert-primary">

                                <i class="bi bi-lightbulb-fill"></i>

                                Heading membantu membuat struktur artikel lebih rapi,
                                sedangkan paragraph membantu menyampaikan isi materi.

                            </div>

                        </div>

                    </div>

                </section>



                <!-- Jenis Heading -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">
                                Jenis-Jenis Heading HTML
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                HTML memiliki 6 jenis heading,
                                mulai dari h1 sampai h6.
                            </p>

                            <p>
                                Semakin kecil angka heading,
                                maka ukuran teks akan semakin besar.
                            </p>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;
</code>
</pre>

                        </div>

                    </div>

                </section>



                <!-- H1 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-primary">
                                Heading 1 (h1)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                h1 adalah heading terbesar pada HTML.
                            </p>

                            <p>
                                Biasanya digunakan sebagai judul utama halaman website.
                            </p>

                            <p>
                                Dalam satu halaman website,
                                sebaiknya hanya menggunakan satu h1
                                agar struktur website lebih baik.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h1&gt;Belajar HTML&lt;/h1&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h1>Belajar HTML</h1>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- H2 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-primary">
                                Heading 2 (h2)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                h2 digunakan sebagai subjudul utama.
                            </p>

                            <p>
                                Heading ini biasanya digunakan untuk membagi isi artikel.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h2&gt;Materi Dasar HTML&lt;/h2&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h2>Materi Dasar HTML</h2>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- H3 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-primary">
                                Heading 3 (h3)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                h3 digunakan sebagai subbagian dari h2.
                            </p>

                            <p>
                                Heading ini membuat struktur tulisan lebih detail.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h3&gt;Pengenalan Tag HTML&lt;/h3&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h3>Pengenalan Tag HTML</h3>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- H4 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-primary">
                                Heading 4 (h4)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                h4 digunakan untuk penjelasan yang lebih spesifik.
                            </p>

                            <p>
                                Biasanya digunakan pada dokumentasi atau pembelajaran.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h4&gt;Struktur Dasar HTML&lt;/h4&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h4>Struktur Dasar HTML</h4>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- H5 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-primary">
                                Heading 5 (h5)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                h5 digunakan untuk heading kecil.
                            </p>

                            <p>
                                Biasanya digunakan pada sidebar,
                                card, atau menu kecil.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h5&gt;Menu Belajar&lt;/h5&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h5>Menu Belajar</h5>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- H6 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-primary">
                                Heading 6 (h6)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                h6 adalah heading terkecil pada HTML.
                            </p>

                            <p>
                                Biasanya digunakan untuk teks tambahan
                                atau subjudul kecil.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h6&gt;Belajar Web Development&lt;/h6&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h6>Belajar Web Development</h6>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- H7 -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title text-danger">
                                Heading 7 (h7)
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Pada HTML tidak terdapat heading h7.
                            </p>

                            <p>
                                HTML hanya menyediakan heading dari h1 sampai h6.
                            </p>

                            <p>
                                Jika menggunakan h7,
                                browser tidak akan mengenalinya
                                sebagai heading resmi HTML.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h7&gt;Contoh h7&lt;/h7&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                Contoh h7

                            </div>

                        </div>

                    </div>

                </section>



                <!-- Paragraph -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">
                                Paragraph HTML
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Paragraph digunakan untuk membuat teks atau isi tulisan
                                pada website.
                            </p>

                            <p>
                                Tag paragraph pada HTML menggunakan tag p.
                            </p>

                            <h5>Contoh Code</h5>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;p&gt;
Saya sedang belajar HTML
&lt;/p&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <p>
                                    Saya sedang belajar HTML
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- Contoh Gabungan -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">
                                Contoh Gabungan Heading & Paragraph
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Heading dan paragraph biasanya digunakan bersamaan
                                untuk membuat artikel atau halaman website.
                            </p>

                            <pre class="bg-dark text-white p-4 rounded">
<code>
&lt;h1&gt;Belajar HTML&lt;/h1&gt;

&lt;p&gt;
HTML adalah bahasa markup
untuk membuat website
&lt;/p&gt;
</code>
</pre>

                            <h5>Output</h5>

                            <div class="border rounded p-4 bg-light">

                                <h1>Belajar HTML</h1>

                                <p>
                                    HTML adalah bahasa markup
                                    untuk membuat website
                                </p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- Kesimpulan -->
                <section class="section">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">
                                Kesimpulan
                            </h4>
                        </div>

                        <div class="card-body">

                            <p>
                                Heading digunakan untuk membuat judul,
                                sedangkan paragraph digunakan untuk membuat isi tulisan.
                            </p>

                            <p>
                                Dengan menggunakan heading dan paragraph,
                                tampilan website menjadi lebih rapi,
                                mudah dibaca, dan terstruktur.
                            </p>

                            <p>
                                Heading HTML hanya tersedia dari h1 sampai h6.
                            </p>

                        </div>

                    </div>

                </section>


                <section class="section">

                    <div class="text-center mb-4">
                        <h1>
                            Video: Heading dan Paragraph HTML
                        </h1>
                    </div>

                    <div class="col-md-10 mx-auto">

                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/salY_Sm6mv4"
                                title="Heading dan Paragraph HTML"
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

                                <!-- Next -->
                                <a href="{{ route('user.learning.html.link-image') }}"
                                    class="btn btn-success">

                                    Next

                                    <i class="bi bi-arrow-right-circle-fill"></i>

                                </a>

                            </div>

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