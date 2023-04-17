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
            <div class="mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="form-group">
                            <label>Poliklinik Spesialis</label>
                            <select id="xpoli" class="form-control form-select">
                                <option value="" selected hidden>Pilih</option>
                                <option value="ANA">ANA</option>
                                <option value="ANT">ANT</option>
                                <option value="BED">BED</option>
                                <option value="GIG">GIG</option>
                                <option value="INT">INT</option>
                                <option value="IRM">IRM</option>
                                <option value="JAN">JAN</option>
                                <option value="JIW">JIW</option>
                                <option value="KLT">KLT</option>
                                <option value="MAT">MAT</option>
                                <option value="OBG">OBG</option>
                                <option value="ORT">ORT</option>
                                <option value="PAR">PAR</option>
                                <option value="SAR">SAR</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="form-group">
                            <label>Tanggal Pelayanan</label><br>
                            <input type="date" class="form-control" id="xtgl">
                        </div>
                    </div>
                    <div id="response"></div>

                    <div class="col-lg-12 col-md-12">
                        <div class="submit-btn">
                            <button class="btn btn-primary" onclick="cariJadwal()">Tampilkan <i class="flaticon-right-chevron"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor-calendar-table table-responsive" id="tablejadwal" hidden>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Poliklinik Dokter Spesialis</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Kuota</th>
                        </tr>
                    </thead>

                    <tbody id="tampil-tbody"><tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
                </table>
            </div>
            <h6 class="mt-3">* Mohon maaf, jadwal sewaktu-waktu bisa berubah<br>* Jadwal diambil dari Sistem Bridging dengan BPJS<br>* Silakan Konfirmasi jadwal pada Bagian Informasi RS : <a href="https://wa.me/6281227203899" target="_blank"><u>+6281227203899</u> (Whatsapp)</a></h6>
        </div>
    </section>
    <!-- End Doctor Calendar Area -->

    <script>
        $(document).ready(function() {
            // $('#xpoli').select2({
            //     placeholder: 'Pilih',
            //     allowClear: true
            // });
            // $('#xtgl').flatpickr({
            //     enableTime: false,
            //     dateFormat: "Y-m-d",
            //     minDate: "today",
            // });
            // $.ajax({
            //     url: "/bpjs/bridging/antrean/poli",
            //     type: 'GET',
            //     dataType: 'json',
            //     success: function(res) {
            //         console.log(res.response);
            //         $("#xpoli").empty();
            //         if(res.length === null){
            //             alert('Gagal memuat data Poliklinik, silakan refresh halaman ini');
            //         } else {
            //             res.response.forEach(item => {
            //                 if (
            //                     item.kdsubspesialis === 'ANA' ||
            //                     item.kdsubspesialis === 'ANT' ||
            //                     item.kdsubspesialis === 'BED' ||
            //                     item.kdsubspesialis === 'GIG' ||
            //                     item.kdsubspesialis === 'INT' ||
            //                     item.kdsubspesialis === 'IRM' ||
            //                     item.kdsubspesialis === 'JAN' ||
            //                     item.kdsubspesialis === 'JIW' ||
            //                     item.kdsubspesialis === 'KLT' ||
            //                     item.kdsubspesialis === 'MAT' ||
            //                     item.kdsubspesialis === 'OBG' ||
            //                     item.kdsubspesialis === 'ORT' ||
            //                     item.kdsubspesialis === 'PAR' ||
            //                     item.kdsubspesialis === 'SAR'
            //                     ) {
            //                         $(".list").append(`
            //                             <option value="${item.kdpoli}">${item.nmsubspesialis}</option>
            //                         `);
            //                         // <li class="option" data-value="${item.kdpoli}">${item.nmsubspesialis}</li>
            //                 }
            //             });
            //         }
            //     }
            // });
        });

        // function-function
        function cariJadwal() {
            var xpoli = $("#xpoli").val();
            var xtgl = $("#xtgl").val();
            $("#tablejadwal").prop('hidden', false);
            // console.log(xpoli);

            $.ajax({
                url: "/bpjs/bridging/antrean/poli/"+xpoli+"/"+xtgl,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    $("#tampil-tbody").empty();
                    console.log(res);
                    if(res.response == null){
                        $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Data gagal dimuat, silakan ulangi sekali lagi</td></tr>");
                        alert('Gagal memuat pencarian Poliklinik, silakan ulangi sekali lagi');
                    } else {
                        // Swal.fire({
                        //     position: 'top-end',
                        //     icon: 'success',
                        //     title: 'Your work has been saved',
                        //     showConfirmButton: false,
                        //     timer: 1500
                        // })
                        var i = 1;
                        res.response.forEach(item => {
                            console.log(item.jadwal);
                            content = "<tr id='data"+ item.id +"' style='padding-top: 0px'>"
                                    + "<td>"+ i +"</td>"
                                    + "<td style='text-align:left'><h3>" + item.namadokter + "</h3><span>" + item.namasubspesialis + " ("+item.kodesubspesialis+")</span></td>"
                                    + "<td>" + item.namahari + "</td>"
                                    + "<td>" + item.jadwal + "</td>"
                                    + "<td>" + item.kapasitaspasien + "Pasien Per Hari</td>";
                            $('#tampil-tbody').append(content);
                            i++;
                        });
                    }
                }
            });
        }
    </script>
@endsection
