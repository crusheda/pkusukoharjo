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
                            <li>Tentang</li>
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
                                    <li>Mewujudkan SDM yang professional dan sejahtera</li>
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
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA PERIJINAN</th>
                                            <th>NO. PERIJINAN</th>
                                            <th>TGL TERBIT</th>
                                            <th>DINAS/BADAN</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: left;">
                                        <tr>
                                            <td>1</td>
                                            <td>Izin Lokasi</td>
                                            <td>590/7443/2011</td>
                                            <td>25/10/2021</td>
                                            <td>Bupati Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Izin Mendirikan Bangunan(IMB)</td>
                                            <td>503/160/II/2012</td>
                                            <td>20/02/2012</td>
                                            <td>Kantor Pelayanan Prizinan Terpadu Kab. Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Izin Lingkungan</td>
                                            <td>503/171/X/2016</td>
                                            <td>03/10/2016</td>
                                            <td>Badan Lingkungan Hidup Kab. Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Izin Gangguan (HO)</td>
                                            <td>503/IG/539/X/2016</td>
                                            <td>02/10/2016</td>
                                            <td>Badan Penanaman Modal dan Pelayanan Perizinan Kab. Skh</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Izin Mendirikan Rumah Sakit</td>
                                            <td>445/9120/X/2011</td>
                                            <td>18/01/2014</td>
                                            <td>Dinas Kesehatan Kab. Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Izin Operasional dan Penetapan Kelas RS</td>
                                            <td>445/7936/VI/2016</td>
                                            <td>14/06/2016</td>
                                            <td>Dinas Kesehatan Kab. Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Izin Penyimpanan Sementara Limbah B3</td>
                                            <td>503/654.1/001/LB3/I/2018</td>
                                            <td>09/01/2018</td>
                                            <td>DPM PTSP Kab. Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Izin Pembuangan Air Limbah / IPLC</td>
                                            <td>503/654/I/IPLC/003/XI/2017</td>
                                            <td>07/11/2017</td>
                                            <td>DPM PTSP Kab. Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Sertifikat Laik Operasi Instalasi Listrik</td>
                                            <td>876/PRT/XII/2021</td>
                                            <td>23/12/2021</td>
                                            <td>Dinas Tenaga Kerja dan Transmigrasi Jateng </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Izin Pemanfaatan Tenaga Nuklir</td>
                                            <td>061349.010.11.170619</td>
                                            <td>17/06/2019</td>
                                            <td>Badan Pengawas Tenaga Nuklir / BAPETAN</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Izin Lift</td>
                                            <td>2674/E/II/2022</td>
                                            <td>04/02/2022</td>
                                            <td>Dinas Tenaga Kerja dan Transmigrasi Jateng</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Izin Operasi Genset
                                                <ul>
                                                    <li>Merk Perkins (No Seri : X14K475419)</li>
                                                    <li>Merk Maxtron (No Seri : 201205038)</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>Merk Perkins 878/PRT/I/2022</li>
                                                    <li>Merk Maxtron 1248/PRT/I/2022</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>Merk Perkins : 23/12/2021</li>
                                                    <li>Merk Maxtron : 03/01/2022</li>
                                                </ul>
                                            </td>
                                            <td>Dinas Tenaga Kerja dan Transmigrasi Jateng</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Pemeriksaan dan Pengujian Instalasi Penyalur Petir</td>
                                            <td>1470/IPP/I/2022</td>
                                            <td>08/01/2022</td>
                                            <td>Dinas Tenaga Kerja dan Transmigrasi Jateng</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Perjanjinan Pengangkutan dan Pengelolaan Limbah B3</td>
                                            <td>009/PRJ/DIR/III.6.AU/PKU SKH/2022</td>
                                            <td>02/02/2022</td>
                                            <td>PT. Arah Environmental Indonesia</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Sertifikat Laik Fungsi</td>
                                            <td>045.2/7321/XII/2020</td>
                                            <td>02/12/2020</td>
                                            <td>Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Air Bawah Tanah </td>
                                            <td>503/10057/TAHUN 2017</td>
                                            <td>13/10/2017</td>
                                            <td>DPMPTSP</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Izin Proteksi Alarm Fire</td>
                                            <td>936/SPK/XII/2021</td>
                                            <td>25/12/2021</td>
                                            <td>Dinas Tenaga Kerja dan Transmigrasi Jateng</td>
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
                                <li><a href="{{ asset('file/surat-izin-operasional.pdf') }}">Surat Izin Operasional <i class="far fa-file-alt"></i></a></li>
                                <li><a href="{{ asset('file/sertifikat-akreditasi-paripurna.pdf') }}">Sertifikat Akreditasi <i class="far fa-file-alt"></i></a></li>
                            </ul>
                        </section>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Section -->

<script>
$(document).ready( function () {

});
</script>
@endsection
