<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codenova</title>
  <link rel="stylesheet" href="{{ asset('assets/landingPage/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/landingPage/libs/aos-master/dist/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/landingPage/css/styles.css') }}" />
</head>

<body>

  <!-- Header -->
  <x-landing.navbar></x-landing.navbar>


  <!--  Page Wrapper -->
  <div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url('{{ asset('assets/landingPage/images/backgrounds/aboutus-banner.jpg') }}')">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="{{ asset('assets/landingPage/images/svgs/primary-leaf.svg')}}" alt=""
                  class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">Kami membantu <span class="text-primary">meningkatkan skill </span>digital dan melakukan pembelajaran dasar bahasa pemograman. </p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">About us</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--  About Content Section -->
    <section class="about-content py-5 py-lg-11 py-xl-12">
      <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
          <div class="row gap-4 gap-lg-0">
            <div class="col-lg-4">
              <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Codenova.</h2>
            </div>
            <div class="col-lg-8">
              <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                <p class="mb-0 fs-5 text-dark" style="text-align: justify;">
                  Codenova hadir sebagai tempat untuk belajar, berkembang, dan melatih skill digital secara mudah dan
                  fleksibel.
                  Kami percaya bahwa kemampuan coding adalah keterampilan penting di era modern, sehingga siapa saja
                  berhak mendapatkan akses
                  pembelajaran yang berkualitas tanpa biaya. Melalui materi yang interaktif dan mudah dipahami, peserta
                  dapat mempelajari
                  dasar pemrograman, pengembangan web, hingga berbagai teknologi yang digunakan di dunia kerja saat ini.
                </p>
                <p class="mb-0 fs-5 text-dark" style="text-align: justify;">
                  Tidak hanya belajar teori, Anda juga akan diajak untuk berlatih secara langsung melalui berbagai
                  proyek dan latihan
                  yang membantu meningkatkan kemampuan problem solving dan kreativitas. Dengan suasana belajar yang
                  fleksibel dan
                  terus berkembang, Kursus Coding Gratis menjadi wadah untuk membangun skill, menambah pengalaman, dan
                  mempersiapkan
                  diri menghadapi dunia digital yang terus berubah.
                </p>
              </div>
            </div>
          </div>
          <div class="row gx-xl-5">
            <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
              <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="45">100</span>+</h2>
                <div class="d-flex flex-column gap-3">
                  <h4 class="mb-0">Materi Kursus Gratis</h4>
                  <p class="mb-0" style="text-align: justify;">Berbagai materi pembelajaran coding dan teknologi
                    tersedia secara gratis dengan
                    pembahasan yang mudah dipahami untuk semua kalangan.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
              <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="15">50</span>+</h2>
                <div class="d-flex flex-column gap-3">
                  <h4 class="mb-0">Video Pembelajaran Interaktif</h4>
                  <p class="mb-0" style="text-align: justify;">Belajar menjadi lebih mudah melalui video pembelajaran
                    yang membantu
                    peserta memahami materi secara bertahap dan fleksibel.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
              <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="158">200</span>+</h2>
                <div class="d-flex flex-column gap-3">
                  <h4 class="mb-0">Quiz & Evaluasi Skill</h4>
                  <p class="mb-0" style="text-align: justify;">Tersedia quiz dan evaluasi untuk membantu mengukur
                    pemahaman serta meningkatkan
                    kemampuan selama proses belajar.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  About Img Section -->
    <section class="about-img">
      <div class="marquee w-100 d-flex align-items-center overflow-hidden bg-primary py-4">
        <div class="marquee-content d-flex align-items-center gap-8">

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">HTML</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">CSS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">JavaScript</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">PHP</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Python</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Java</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">C++</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <!-- repeat untuk menjaga marquee tetap panjang (tanpa ubah struktur) -->

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">HTML</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">CSS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">JavaScript</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">PHP</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Python</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Java</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">C++</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <!-- lanjut pengulangan seperti struktur awal agar panjang tetap sama -->
          <!-- saya lanjutkan pola yang sama -->

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">HTML</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">CSS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">JavaScript</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">PHP</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Python</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Java</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">C++</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>

        </div>
      </div>
      <img src="{{ asset('assets/landingPage/images/about/about-img.jpg')}}" alt="" class="w-100 object-fit-cover">
    </section>




    <x-landing.footer></x-landing.footer>

    <div class="get-template hstack gap-2">

      <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
        id="scrollToTopBtn">
        <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
      </button>
    </div>


    <script src="{{ asset('assets/landingPage/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/landingPage/libs/aos-master/dist/aos.js')}}"></script>
    <script src="{{ asset('assets/landingPage/js/custom.js')}}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>