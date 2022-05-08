@extends('layouts.layout1')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h2><strong>Portal Resmi</strong></h2>
            <h1 style="margin-top: -30px;margin-bottom: 10px">Rumah Sakit<br>PKU Muhammadiyah<br>Sukoharjo</h1>
            <h2><i>Amanah, Santun, Ramah, Ikhlas</i> <strong>(ASRI)</strong></h2>
            <a class="btn-get-started" style="background-color: #047D3E" href="#berita"><i class="fas fa-newspaper"></i>&nbsp;&nbsp;Berita Terkini</a>
            <button class="btn btn-get-started btn-primary"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;Pendaftaran Online</button>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="pelayanan" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pelayanan Kami</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Galeri</h2>
          <p>Berikut adalah foto-foto kegiatan kami di kawasan internal maupun eksternal Rumah Sakit PKU Muhammadiyah Sukoharjo</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= News Section ======= -->
    <section id="berita" class="section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Berita Terkini</h2>
          <p>Ikuti berita-berita terbaru dari kami. Berikut ini merupakan berita terkini Rumah Sakit PKU Muhammadiyah Sukoharjo<br>yang dapat anda lihat di bawah ini</p>
        </div>
        <div class="row">
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="margin-bottom: 0px">RS PKU Muhammadiyah Sukoharjo Jalin Mou Dengan BPJS Ketenagakerjaan</h5>
                <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                <p style="margin-top: 10px" class="card-text">KBRN Sukoharjo : Rumah Sakit PKU Muhammadiyah Sukoharjo dipastikan menjadi Pusat Layanan Kecelakaan Kerja (PLKK). 
                  Kepastian bagi salah satu rumah sakit swasta terbesar...
                </p>
                <a href="#" class="btn btn-warning text-white">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="100">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>Survei Akreditasi KARS</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="200">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>RS PKU Sukoharjo, Klinik Sederhana Menjadi Rumah Sakit Luar Biasa</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="300">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>Pemberian Imunisasi MR Gratis</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="400">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>Visitasi dan Kredensial BPJS</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <center><button class="btn btn-light btn-sm float-right" data-aos="zoomin" data-aos-delay="500"><i class="fas fa-newspaper"></i>&nbsp;&nbsp;Lihat Semua Berita</button></center>
      </div>
    </section><!-- End News Section -->

    <!-- ======= Features Section ======= -->
    <style> /* IFRAME YOUTUBE RESPONSIVE */
      .videowrapper { float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; } .videowrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style> 
    <section id="features" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Video Terbaru</h2>
          <p>Berikut ini merupakan Video terbaru yg diambil dari Youtube kami, Rumah Sakit PKU Muhammadiyah Sukoharjo<br>yang dapat anda lihat di bawah ini</p>
        </div>
        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Menebar Manfaat Melayani Penuh Khidmat</h4>
                  <p>Sebuah Film Pendek RS PKU Muhammadiyah Sukoharjo</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Tips Anak Masuk Sekolah di Masa Pandemi</h4>
                  <p>#TipsAnakMasukSekolah #PandemiCovid19 #RSPKUMuhammadiyahSukoharjo</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Tips Mengelola Hipertensi</h4>
                  <p>#TipsMengelolaHipertensi #RSPKUMuhammadiyahSukoharjo</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Pentingnya Serat Bagi Kesehatan</h4>
                  <p>Kerap kita diinggatkan "Jangan Lupa makan makanan berserat". Seberapa penting makanan berserat bagi tubuh kita?</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mt-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  {{-- <img src="img/features-1.png" alt="" class="img-fluid"> --}}
                  <div class="videowrapper">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/1fOjW4SzE9w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <div class="videowrapper">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/T6YUxDqDPjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <div class="videowrapper">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/4tpwTlncnFk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <div class="videowrapper">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/aZFWBpeuni4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Jadwal Poliklinik terbaru?</h3>
            <p>Jadwal dapat berubah sewaktu-waktu, lakukan konfirmasi jadwal terlebih dahulu dengan kami atau lakukan cek secara berkala</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <button class="btn text-white" style="background-color: #047D3E"><i class="fas fa-user-md"></i>&nbsp;&nbsp;Jadwal Dokter</button>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pertanyaan Terkait Pelayanan</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    {{-- <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in">
              <div class="pic"><img src="img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    <!-- ======= Healthy Section ======= -->
    <section id="berita" class="section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Artikel Kesehatan</h2>
          <p>Tetap sehat bersama Rumah Sakit PKU Muhammadiyah Sukoharjo</p>
        </div>
        <div class="row">
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="margin-bottom: 0px">RS PKU Muhammadiyah Sukoharjo Jalin Mou Dengan BPJS Ketenagakerjaan</h5>
                <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                <p style="margin-top: 10px" class="card-text">KBRN Sukoharjo : Rumah Sakit PKU Muhammadiyah Sukoharjo dipastikan menjadi Pusat Layanan Kecelakaan Kerja (PLKK). 
                  Kepastian bagi salah satu rumah sakit swasta terbesar...
                </p>
                <a href="#" class="btn btn-warning text-white">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="100">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>Survei Akreditasi KARS</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="200">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>RS PKU Sukoharjo, Klinik Sederhana Menjadi Rumah Sakit Luar Biasa</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="300">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>Pemberian Imunisasi MR Gratis</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4" style="" data-aos="fade-up" data-aos-delay="400">
                  <img src="img/news1.jpg" class="card-img-top" style="height: 100%" alt="...">
                  <div class="card-body">
                    <a>Visitasi dan Kredensial BPJS</a><br>
                    <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;Dian Sastro &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;6 Mei 2022</sub>
                    <a style="margin-top: 10px" href="#" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <center><button class="btn btn-light btn-sm float-right" data-aos="zoomin" data-aos-delay="500"><i class="fas fa-newspaper"></i>&nbsp;&nbsp;Lihat Semua Berita</button></center>
      </div>
    </section><!-- End News Section -->

    {{-- <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimoni</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kerja Sama</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in">
              <img src="img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
              <img src="img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
              <img src="img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
              <img src="img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
              <img src="img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
              <img src="img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="client-logo">
              <img src="img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
@endsection