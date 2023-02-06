@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Profil Rumah Sakit</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Profil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Content Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc" style="text-align: justify;">
                        <div class="article-image">
                            <img src="/img/gedung-pku/drone-pku.jpg" alt="image">
                        </div>

                        <div class="article-content">

                            <h3>VISI</h3>
                            <p>Menjadi Rumah Sakit pilihan yang Islami dengan pelayanan kesehatan yang bermutu, Paripurna dan terpercaya.</p>
                            <h3>MISI</h3>
                            <p>
                                <ul>
                                    <li>Menyelenggarakan Rumah Sakit yang bernuansa Islami</li>
                                    <li>Menyelenggarakan pelayanan kesehatan yang professional, bermutu dan paripurna</li>
                                    <li>Meningkatkan mutu pelayanan kesehatan secara berkesinambungan</li>
                                    <li>Menyelenggarakan sistem manajemen yang profesional</li>
                                    <li>Mewujudkan SDM yang professional</li>
                                </ul>
                            </p>
                            <h3>MOTTO</h3>
                            <blockquote class="wp-block-quote">
                                <p>Kesembuhan Datangnya dari Allah,<br>Kepuasan Anda adalah tanggungjawab kami</p>

                                <cite>Motto</cite>
                            </blockquote>
                            <h3>FALSAFAH</h3>
                            <p>Pelayanan yang Islami dalam rangka mengharap Ridho Allah</p>
                            <h3>TATA NILAI</h3>
                            <p>Amanah, Santun, Ramah, Ikhlas (<strong>ASRI</strong>)</p>
                            <h3>TUJUAN</h3>
                            <p>
                                <ul>
                                    <li>Terwujudnya Rumah Sakit yang mengutamakan kaidah Islami</li>
                                    <li>Tercapainya pelayanan kesehatan yang professional, bermutu dan paripurna</li>
                                    <li>Tercapainya mutu pelayanan kesehatan secara berkesinambungan</li>
                                    <li>Terlaksananya dakwah Islamiah sesuai tujuan Muhammadiyah</li>
                                    <li>Tercapainya karyawan yang profesional dan sejahtera</li>
                                </ul>
                            </p>

                            {{-- <ul class="wp-block-gallery columns-3">
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="assets/img/blog/9.jpg" alt="image">
                                    </figure>
                                </li>

                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="assets/img/blog/8.jpg" alt="image">
                                    </figure>
                                </li>

                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="assets/img/blog/7.jpg" alt="image">
                                    </figure>
                                </li>
                            </ul> --}}

                            <h3>SEJARAH</h3>

                            <ul class="features-list">
                                <li><i class="flaticon-check-mark"></i> Tahun 1992 mendapat wakaf tanah dari keluarga ibu Hj. Sunarto Batik Putri Pantes seluas 1100 m2</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 1993 PDM Sukoharjo mendapat bantuan dari Hj. Khodijah Al Kubro (Emirat Arab) untuk membangun Rumah Bersalin PKU Muhammadiyah Sukoharjo</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 1995 (4 Desember 1995) diresmikan bangunan Rumah Bersalin PKU Muhammadiyah Sukoharjo oleh Bupati Sukoharjo (Bapak Ir. Tedjo Suminto)</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 1999 dapat membeli tanah dibelakang bangunan yang ada seluas 1100 m2</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 2002 2003 membangun gedung VIP 2 (dua) lantai</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 2009 (24 Maret 2009) berubah status menjadi Klinik Rawat Inap Pelayanan Medik Dasar PKU Muhammadiyah Sukoharjo dengan SK DINKES Kabupaten Sukoharjo No. 01/KRIPMD/III/2009</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 2010 (8 Desember 2010) Pimpinan Daerah Muhammadiyah Sukoharjo membentuk panitia pembangunan Rumah Sakit PKU Muhammadiyah Sukoharjo</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 2011 (20 Maret 2011) membeli tanah disebelah barat yang dimiliki saat ini menjadi 3.210 m2.dilanjutkan pembangunan gedung 4 (empat) lantai kapasitas 100 tempat tidur, 2 ruang operasi, IGD, ruang laboratorium, radiologi, berserta peralatan dan sarana penunjangnya</li>
                                <li><i class="flaticon-check-mark"></i> Tanggal 18 Nopember 2011 mendapat Surat Izin Operasional Sementara Rumah Sakit Nomor : 445/9855/XI/2011</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 2014 (18 Januari 2014) mendapatkan SK Dinas Kesehatan Sukoharjo Nomor 445/769/I/2014. Tentang izin mendirikan Rumah Sakit Umum PKU Muhammadiyah Jl. Mayor Sunaryo No 37 Sukoharjo</li>
                                <li><i class="flaticon-check-mark"></i> Tahun 2016 Mendapatkan Surat Izin Operasional dan Penetapan Rumah Sakit Umum Kelas C dari Dinas Kesehatan Kabupaten Sukoharjo. SK Nomor : 445/7936/VI/2016 Tanggal 14 Juni 2016</li>
                                {{-- dan diperbaharui/diperpanjang pada 10 Agustus 2022 dengan Nomor : Nomor : 91201142810850002 --}}
                            </ul>

                            <h3>DAFTAR PERIZINAN</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA PERIJINAN</th>
                                            <th>NO. PERIJINAN</th>
                                            <th>TANGGAL TERBIT</th>
                                            <th>DINAS/BADAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Izin Lokasi</td>
                                            <td>590/7443/2011</td>
                                            <td>25/10/2021</td>
                                            <td>Bupati Sukoharjo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-bookmark"></i></span>

                                <a href="javascript:void(0);">Profil Rumah Sakit</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Bagikan:</span></li>
                                    <li><a href="javascript:void(0);" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript:void(0);" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">

                        <section class="widget widget_download">
                            <h3 class="widget-title">Download</h3>

                            <ul>
                                <li><a href="javascript:void(0);">Struktur Organisasi <i class="far fa-file-pdf"></i></a></li>
                                <li><a href="javascript:void(0);">Surat Izin Operasional <i class="far fa-file-alt"></i></a></li>
                                <li><a href="javascript:void(0);">Sertifikat Akreditasi <i class="far fa-file-alt"></i></a></li>
                            </ul>
                        </section>

                    </aside>
                </div>

                {{-- <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">

                        <section class="widget widget_fovia_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 30, 2021</time>
                                    <h4 class="title usmall"><a href="#">How to change yourself for the better</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 30, 2021</time>
                                    <h4 class="title usmall"><a href="#">10 Tactics for marketing your company</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 30, 2021</time>
                                    <h4 class="title usmall"><a href="#">Google web ranking changing much</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>
                        </section>

                    </aside>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Main Section -->
  </main>

  <script>
    $(document).ready( function () {
        $.ajax(
            {
                url: "./jadwalpelayanan/api/data",
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    $("#tampil-tbody").empty();
                    res.show.forEach(item => {
                        $("#tampil-tbody").append(`
                            <tr id="data${item.id}">
                                <td>${item.nama}</td>
                                <td>${item.poli}</td>
                                <td>${item.ket}</td>
                            </tr>
                        `);
                    });
                    $('#table').DataTable(
                        {
                            paging: true,
                            searching: true,
                            dom: 'Bfrtip',
                            order: [[ 1, "desc" ]],
                            responsive: true,
                            scrollX: true,
                        }
                    ).columns.adjust();
                }
            }
        );
    });
  </script>
@endsection
