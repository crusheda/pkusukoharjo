@extends('layouts.fovia')

@section('content')
    <section class="page-title-area page-title-bg6">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Sejarah</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Sejarah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <main id="main" style="margin-top: 40px">
    <!-- ======= Breadcrumbs ======= -->
    {{-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li>Profil</li>
          <li>Sejarah</li>
        </ol>
        <h2>Sejarah Singkat</h2>

      </div>
    </section><!-- End Breadcrumbs --> --}}

    <!-- ======= Sejarah Section ======= -->
    <section id="sejarah" class="sejarah">
      <div class="container">

        <div class="card" data-aos="fade-up">
          <div class="card-header">
            <center><strong>Rumah Sakit PKU Muhammadiyah Sukoharjo</strong></center>
          </div>
          <div class="card-body" style="text-align: justify;text-justify: inter-word;">
            <p>
              <ul style="line-height:3em;">
                <li><strong>Tahun 1992</strong> mendapat wakaf tanah dari keluarga ibu Hj. Sunarto Batik Putri Pantes seluas 1100 m2</li>
                <li><strong>Tahun 1993</strong> PDM Sukoharjo mendapat bantuan dari Hj. Khodijah Al Kubro ( Emirat Arab ) untuk membangun Rumah Bersalin PKU Muhammadiyah Sukoharjo</li>
                <li><strong>Tahun 1995</strong> ( tgl 4 Desember 1995 ) diresmikan bangunan Rumah Bersalin PKU Muhammadiyah Sukoharjo oleh Bupati Sukoharjo ( Bapak Ir. Tedjo Suminto )</li>
                <li><strong>Tahun 1999</strong> dapat membeli tanah dibelakang bangunan yang ada seluas 1100 m2</li>
                <li><strong>Tahun 2002-2003</strong> membangun gedung VIP 2 ( dua ) lantai</li>
                <li><strong>Tahun 2009</strong> ( Tanggal 24 Maret 2009 ) berubah status menjadi Klinik Rawat Inap Pelayanan Medik Dasar PKU Muhammadiyah Sukoharjo dengan SK DINKES Kabupaten Sukoharjo No. 01 / KRIPMD/III/2009</li>
                <li><strong>Tahun 2010</strong> ( Tanggal 8 Desember 2010 ) Pimpinan Daerah Muhammadiyah Sukoharjo membentuk panitia pembangunan Rumah Sakit PKU Muhammadiyah Sukoharjo</li>
                <li><strong>Tahun 2011</strong> ( Tanggal 20 Maret 2011 ) membeli tanah disebelah barat yang dimiliki saat ini menjadi 3.210 m2.dilanjutkan pembangunan gedung 4 ( empat ) lantai kapasitas 100 tempat tidur, 2 ruang operasi, IGD, ruang laboratorium, radiologi, berserta peralatan dan sarana penunjangnya</li>
                <li>Tanggal 18 Nopember 2011 mendapat Surat Izin Operasional Sementara Rumah Sakit Nomor :  445/9855/XI/2011.</li>
                <li><strong>Tahun 2014</strong> ( Tanggal 18 Januari 2014) mendapatkan SK Dinas Kesehatan Sukoharjo Nomor 445/769/I/2014. Tentang izin mendirikan Rumah Sakit Umum PKU Muhammadiyah Jl. Mayor Sunaryo No 37 Sukoharjo</li>
                <li><strong>Tahun 2016</strong> Mendapatkan Surat Izin Operasional dan Penetapan Rumah Sakit Umum Kelas C dari Dinas Kesehatan Kabupaten Sukoharjo.SK Nomor : 445 / 7936 / VI / 2016 Tanggal 14 Juni 2016</li>
                <li>Legalitas Badan Hukum pada dengan Nomor akte Badan Hukum Nomor : AHU.UM.01.01-637 diterbitkan tanggal 01 Juli 2016</li>
                <li>Nomor Registrasi Nasional Rumah Sakit 3311225</li>
                <li>Rumah Sakit PKU Muhammadiyah Sukoharjo berada pada <i>110.815 0 BT,-7.69788450 LU</i>, dengan kondisi topografi dataran yang landau ± 3060 M2</li>
              </ul>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Sejarah Section -->
  </main>

@endsection
