@extends('layouts.fovia')

@section('content')
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
        <div class="container">
            <div class="section-title">
                <span>Terupdate oleh Sistem</span>
                <h2>Tabel Waktu</h2>
                <p>Pendaftaran ditutup <strong>30 menit</strong> sebelum poli dimulai, harap datang lebih awal.</p>
            </div>

            <div class="doctor-calendar-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dokter</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jum'at</th>
                            <th>Sabtu</th>
                        </tr>
                    </thead>

                    <tbody id="tampil-tbody"><tr><center><td colspan="7"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
                </table>
            </div>
            <h6 class="mt-3">Jadwal sewaktu-waktu bisa berubah</h6>
        </div>
    </section>
    <!-- End Doctor Calendar Area -->

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "http://103.155.246.25:8000/api/jadwaldokter/",
                // url: "http://192.168.1.3:8000/api/all/"+this.value,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    $("#tampil-tbody").empty();
                    if(res.length == 0){
                        $("#tampil-tbody").append(`<tr><td colspan="7"><center>Gagal memuat data</center></td></tr>`);
                    } else {
                        // Array.from(res, item => {
                        console.log(res);
                        // Object.keys(res).forEach(item => {
                        res.forEach(item => {
                            content = "<tr id='data"+ item.id +"'>" 
                                    + "<td style='text-align:left'><h3>" + item.NAMA + "</h3><span>" + item.SUBINSTALASI + " ("+item.REF_POLIBPJS+")</span></td>";
                                    if (item.SENIN != null) { content += "<td>" + item.SENIN + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.SELASA != null) { content += "<td>" + item.SELASA + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.RABU != null) { content += "<td>" + item.RABU + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.KAMIS != null) { content += "<td>" + item.KAMIS + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.JUMAT != null) { content += "<td>" + item.JUMAT + "</td>" ; } else { content += "<td>-</td>"; }
                                    if (item.SABTU != null) { content += "<td>" + item.SABTU + "</td>" ; } else { content += "<td>-</td>"; }
                            $('#tampil-tbody').append(content);
                        });
                    }
                }
            });
        });
    </script>
@endsection
