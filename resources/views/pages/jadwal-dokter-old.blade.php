@extends('layouts.fovia')

@section('content')
    <style>
        .doctor-calendar-table table tbody tr td {
        vertical-align: middle;
        text-align: center;
        border: 1px solid #eeeeee;
        border-top: none;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        white-space: nowrap;
        padding-top: 5px;
        padding-right: 5px;
        padding-left: 5px;
        padding-bottom: 0px;
        }
    </style>

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Jadwal Dokter Spesialis</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Jadwal Dokter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Doctor Calendar Area -->
    <section class="doctor-calendar-area ptb-100">
        <div class="container" style="max-width:1800px">
            <div class="section-title">
                <span>Terupdate oleh Sistem</span>
                <h2>Tabel Waktu</h2>
                <p>Pendaftaran ditutup <strong>30 menit</strong> sebelum poli dimulai, harap datang lebih awal.</p>
            </div>
            <div class="doctor-calendar-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Poliklinik Dokter Spesialis</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jum'at</th>
                            <th>Sabtu</th>
                            <th>Ahad</th>
                        </tr>
                    </thead>

                    <tbody id="tampil-tbody"><tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
                </table>
            </div>
            <h6 class="mt-3">* Mohon maaf, jadwal sewaktu-waktu bisa berubah<br>* Konfirmasi jadwal pada Bagian Informasi RS : <a href="https://wa.me/6281227203899" target="_blank"><u>+6281227203899</u> (Whatsapp)</a></h6>
        </div>
    </section>
    <!-- End Doctor Calendar Area -->

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "./jadwal/push",
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#tampil-tbody").empty();
                    if(res.length == 0){
                        $("#tampil-tbody").append(`<tr><td colspan="9"><center>Gagal memuat data</center></td></tr>`);
                    } else {
                        var i = 1;
                        res.forEach(item => {
                            content = "<tr id='data"+ item.id +"' style='padding-top: 0px'><td>"+ i +"</td>"
                                    + "<td style='text-align:left'><h3>" + item.NAMA + "</h3><span>" + item.SUBINSTALASI + " ("+item.REF_POLIBPJS+")</span></td>";
                                    if (item.SENIN != null) { content += "<td>" + item.SENIN + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.SELASA != null) { content += "<td>" + item.SELASA + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.RABU != null) { content += "<td>" + item.RABU + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.KAMIS != null) { content += "<td>" + item.KAMIS + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.JUMAT != null) { content += "<td>" + item.JUMAT + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.SABTU != null) { content += "<td>" + item.SABTU + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.AHAD != null) { content += "<td>" + item.AHAD + "</td>" ; } else { content += "<td>-</td>"; }
                            $('#tampil-tbody').append(content);
                            i++;
                        });
                    }
                }
            });
        });
    </script>
@endsection