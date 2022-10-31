@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Kontak</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Kontak</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Hubungi Kami</span>
                <h2>Lebih dekat dengan Kami</h2>
                <p>Kami siap menerima saran dan kritik Anda</p>
            </div>

            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26600.063032559498!2d110.85186661334393!3d-7.6699205791820555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda883f7a08b44f3e!2sRumah%20Sakit%20PKU%20Muhammadiyah%20Sukoharjo!5e0!3m2!1sid!2sid!4v1651924615607!5m2!1sid!2sid" frameborder="0" style="border-radius: 25px; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <span>Alamat</span>
                                <a href="https://goo.gl/maps/VpV76aV38b2tb8tr9" target="_blank">Jl. Mayor Sunaryo No. 37 Sukoharjo, JT (57512)</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span>Email</span>
                                <a href="mailto:pku.sukoharjo@gmail.com">pku.sukoharjo@gmail.com</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <span>Telp</span>
                                <a href="tel:0271593979" target="_blank">- <strong>IGD (24 Jam)</strong> : 0271-593-979</a>
                                <a href="https://wa.me/6281227203899" target="_blank">- <strong>Informasi (Whatsapp)</strong> : 62812-2720-3899</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
    </section>
    <!-- End Contact Area -->
@endsection
