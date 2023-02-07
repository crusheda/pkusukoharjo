@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Pelayanan Gawat Darurat</h2>
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
                    <img src="/img/content/pelayanan/igd1.jpg" alt="image">
                </div>

                <div class="article-content">

                    <h2 class="mb-5 text-center">Instalasi Gawat Darurat</h2>
                    <h3>
                        Instalasi Gawat Darurat Berperan dalam:
                    </h3>
                    <ul class="features-list">
                        <li><i class="flaticon-check-mark"></i> Memberikan pelayanan gawat darurat yang cepat, tepat dan tanggap serta menyiapkan fasilitas SDM yang terampil dan bermutudalam melakukan pelayanan gawat darurat</li>
                        <li><i class="flaticon-check-mark"></i> Meningkatkan mutu tenaga pelayanan khusus gawat darurat secara berkesinambungan</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="/img/content/pelayanan/igd2.jpg" width="100%" alt="image">
                        </div>
                        <div class="col-md-7">
                            <h3>Instalasi Gawat Darurat bertugas:</h3>
                            <p>
                                Menyelenggarakan pelayanan medis pasien gawat darurat yaitu pasien dengan ancaman kematian dan perlu pertolongan segera (critically ill patient),
                                pasien yang tidak ada ancaman kematian tetapi perlu pertolongan segera (emergency patient), dan pelayanan pasien tidak gawat tidak darurat yang datang ke IGD selama 24 jam terus menerus.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
