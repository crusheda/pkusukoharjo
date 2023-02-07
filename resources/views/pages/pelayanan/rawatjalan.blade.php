@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Pelayanan Rawat Jalan</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Pelayanan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Content Area -->
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="blog-details-desc" style="text-align: justify;">

                <div class="article-image">
                    <img src="/img/content/pelayanan/poli2.jpg" alt="image">
                </div>

                <div class="article-content">

                    <h2 class="mb-4">Poliklinik</h2>
                    <p>Rawat Jalan merupakan pelayanan medis kepada pasien untuk tujuan observasi diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya tanpa mengharuskan pasien tersebut dirawat inap.</p>
                    <p>
                        Poliklinik Rumah Sakit PKU Muhammadiyah Sukoharjo dibuka 6 (enam) hari dalam seminggu (Senin s/d Sabtu) yang ditangani oleh dokter spesialis yang handal dengan dibantu oleh tenaga perawat.
                        Poliklinik Rawat jalan terletak di lantai dua. Poliklinik Rumah Sakit PKU Muhammadiyah Sukoharjo memiliki Dokter Spesialis terdiri dari :
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="/img/content/pelayanan/poli3.jpg" width="100%" alt="image">
                        </div>
                        <div class="col-md-7">
                            <h3>1. Pelayanan Poliklinik Gigi Umum</h3>
                            <h3>2. Pelayanan Poliklinik Spesialis :</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="features-list">
                                        <li><i class="flaticon-check-mark"></i> Spesialis Bedah</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Penyakit Dalam</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Obsgyn</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Anak</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis THT</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Neurologi/Saraf</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Paru</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Jantung</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="features-list">
                                        <li><i class="flaticon-check-mark"></i> Spesialis Jiwa / Psikiatri</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Orthopedi</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Radiologi</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Mata</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Rehab Medik</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Patologi Klinik</li>
                                        <li><i class="flaticon-check-mark"></i> Spesialis Anestesi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 text-center mb-5">
                                    <img src="/img/content/pelayanan/poli1.jpg" style="height: 235px" alt="image">
                                </div>
                                <div class="col-md-6 text-center">
                                    <img src="/img/content/pelayanan/poli4.jpg" style="height: 235px" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
