@extends('layouts.layout1')

@section('content')

  <main id="main" style="margin-top: 40px">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kontak Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Mayor Sunaryo No. 37 Sukoharjo, JT (57512)</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>pku.sukoharjo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telp:</h4>
                <p>(0271) 593979</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26600.063032559498!2d110.85186661334393!3d-7.6699205791820555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda883f7a08b44f3e!2sRumah%20Sakit%20PKU%20Muhammadiyah%20Sukoharjo!5e0!3m2!1sid!2sid!4v1651924615607!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Judul</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Memproses Pesan</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda berhasil terkirim. Terima Kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main>

@endsection