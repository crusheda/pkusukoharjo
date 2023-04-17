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
        <div class="container"> <!--  style="max-width:1800px"  -->
            <div class="section-title">
                <span>Terupdate oleh Sistem</span>
                <h2>Tabel Waktu</h2>
                <p>Pendaftaran ditutup <strong>30 menit</strong> sebelum poli dimulai, harap datang lebih awal.</p>
            </div>
            <div class="mb-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="form-group">
                            <label>Poliklinik Spesialis</label>
                            <select id="xpoli" class="form-select">
                                <option value="" selected hidden>Pilih</option>
                                <option value="ANA">Poli Anak</option>
                                <option value="BED">Poli Bedah</option>
                                <option value="GIG">Poli Gigi</option>
                                <option value="INT">Poli Penyakit Dalam</option>
                                <option value="IRM">Poli Rehabilitasi Medik</option>
                                <option value="JAN">Poli Jantung Dan Pembuluh Darah</option>
                                <option value="JIW">Poli Jiwa</option>
                                <option value="KLT">Poli Kulit Dan Kelamin</option>
                                <option value="MAT">Poli Mata</option>
                                <option value="OBG">Poli Obstetri Dan Ginekologi (OBGYN)</option>
                                <option value="ORT">Poli Orthopedi Dan Traumatology</option>
                                <option value="PAR">Poli Paru</option>
                                <option value="SAR">Poli Saraf</option>
                                <option value="ANT">Anestesi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="form-group">
                            <label>Tanggal Pelayanan</label><br>
                            <input type="date" class="form-select" id="xtgl" disabled>
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
                            <th>Kuota +/-</th>
                        </tr>
                    </thead>

                    <tbody id="tampil-tbody"><tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
                </table>
            </div>
            <h6 class="mt-4">
                * Jadwal diambil dari <b>Sistem Bridging dengan BPJS</b><br>
                {{-- * Mohon maaf, jadwal dokter hanya terbuka untuk H-1 sampai H+3 saja<br> --}}
                * Silakan Konfirmasi jadwal pada Bagian Informasi RS : <a href="https://wa.me/6281227203899" target="_blank"><u>+6281227203899</u> (Whatsapp)</a>
            </h6>
        </div>
    </section>
    <!-- End Doctor Calendar Area -->

    <script>
        $(document).ready(function() {
            $('#xpoli').on('change', function() {
                if (this.value) {
                    $("#xtgl").prop('disabled', false);
                }
            });
        });

        // function-function
        function cariJadwal() {
            var xpoli = $("#xpoli").val();
            var xtgl = $("#xtgl").val();

            if (xpoli.length > 0) {
                $("#tampil-tbody").empty();
                $("#tampil-tbody").append(`<tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr>`);
                $("#tablejadwal").prop('hidden', false);
                // console.log(xpoli);

                $.ajax({
                    url: "/bpjs/bridging/antrean/poli/"+xpoli+"/"+xtgl,
                    type: 'GET',
                    dataType: 'json',
                    success: function(res) {
                        $("#tampil-tbody").empty();
                        // console.log(res);
                        if(res.response == null){
                            $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Data gagal dimuat, silakan ulangi sekali lagi</td></tr>");
                            // NOTIFIKASI
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'error',
                                title: 'Silakan tekan tombol Tampilkan sekali lagi'
                            })
                        } else {
                            // SHOWING TABLE
                            var i = 1;
                            var tampungdokter = null;
                            Object.values(res.response).forEach(item => {
                                if (tampungdokter != null) {
                                    if (item.kodedokter == tampungdokter) {
                                        // alert('angka i nya udah sampe = '+i);
                                        document.getElementById("no"+(i-2)).rowSpan = "2";
                                        document.getElementById("nama"+(i-2)).rowSpan = "2";
                                        document.getElementById("hari"+(i-2)).rowSpan = "2";
                                        content = "<tr id='data"+ (i-1) +"' style='padding-top: 0px'><td>" + item.jadwal + "</td><td>" + item.kapasitaspasien + " Pasien</td></tr>";
                                        $('#tampil-tbody').append(content);
                                    } else {
                                        content = "<tr id='data"+ (i-1) +"' style='padding-top: 0px'>"
                                                + "<td id='no"+ (i-1) +"'>"+ i +"</td>"
                                                + "<td id='nama"+ (i-1) +"' style='text-align:left'><h3>" + item.namadokter + "</h3><span>" + item.namasubspesialis + " ("+item.kodesubspesialis+")</span></td>"
                                                + "<td id='hari"+ (i-1) +"'>" + item.namahari + "</td>"
                                                + "<td>" + item.jadwal + "</td>"
                                                + "<td>" + item.kapasitaspasien + " Pasien</td>"
                                                + "</tr>";
                                        $('#tampil-tbody').append(content);
                                    }
                                } else {
                                    content = "<tr id='data"+ (i-1) +"' style='padding-top: 0px'>"
                                            + "<td id='no"+ (i-1) +"'>"+ i +"</td>"
                                            + "<td id='nama"+ (i-1) +"' style='text-align:left'><h3>" + item.namadokter + "</h3><span>" + item.namasubspesialis + " ("+item.kodesubspesialis+")</span></td>"
                                            + "<td id='hari"+ (i-1) +"'>" + item.namahari + "</td>"
                                            + "<td>" + item.jadwal + "</td>"
                                            + "<td>" + item.kapasitaspasien + " Pasien</td>"
                                            + "</tr>";
                                    $('#tampil-tbody').append(content);
                                }
                                i++;
                                tampungdokter = item.kodedokter;
                            });
                            // NOTIFIKASI
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: 'Jadwal Poliklinik berhasil ditampilkan'
                            })
                        }
                    },
                    error: function () {
                        $("#tampil-tbody").empty();
                        $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Pencarian gagal, pastikan anda telah memilih tanggal pelayanan dengan benar</td></tr>");
                        // NOTIFIKASI
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 7000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'Pastikan Anda tidak mengosongi semua data yang dibutuhkan dalam pencarian'
                        })
                    }
                });
            } else {
                // IF ERROR
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'Silakan memilih Poliklinik terlebih dahulul'
                })
            }
        }
    </script>
@endsection
