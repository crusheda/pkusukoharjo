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
        padding-top: 8px;
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
                        <h2>Ketersediaan Tempat Tidur</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Ketersediaan Tempat Tidur</li>
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
                <h2>Tabel Tempat Tidur</h2>
                <p>Pemantauan ketersediaan tempat tidur terupdate dari sistem RS.</p>
            </div>
            <div class="mb-1">
                <div class="doctor-calendar-table table-responsive" id="tablett">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>instalasi / ruang</th>
                                <th>tempat tidur / kelas&nbsp;&nbsp;<kbd><a id="bed_total"></a> BED</kbd></th>
                                <th>biaya akomodasi</th>
                            </tr>
                        </thead>

                        <tbody id="tampil-tbody">
                            <tr>
                                <center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>&nbsp;
            <h6>* Refresh halaman ini untuk mendapatkan Update terbaru ketersediaan tempat tidur</h6>
        </div>
    </section>
    <!-- End Doctor Calendar Area -->

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "/api/informasi/tt",
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    if(res.show.length == 0){

                    } else {
                        $("#tampil-tbody").empty();
                        var tampung = null;
                        for (let i = 0; i < res.show.length; i++) {
                            // $("#tampil-tbody").append(`
                            //     <tr>
                            //         <td style='text-align:left'>`+res.show[i].SUBINSTALASI+`</td>
                            //         <td style='text-align:left'><h3>`+res.show[i].TMPTIDUR+`</h3><span>`+res.show[i].KELAS+`</span></td>
                            //         <td>Rp. `+res.show[i].JS_AKOMODASI+`</td>
                            //         <td>-</td>
                            //     </tr>
                            // `);
                            content = `<tr id='data`+res.show[i].SET_TMPTIDUR+`'>`;
                            if (res.show[i].REF_SUBINSTALASI != tampung) {
                                for (let x = 0; x < res.bed_per_kamar.length; x++) {
                                    if (res.show[i].REF_SUBINSTALASI == res.bed_per_kamar[x].REF_SUBINSTALASI) {
                                        tampung = res.show[i].REF_SUBINSTALASI;
                                        content += `<td style='text-align:left' rowspan='`+res.bed_per_kamar[x].jumlah+`'><h3>`+res.show[i].SUBINSTALASI+`&nbsp;&nbsp;<kbd>`+res.bed_per_kamar[x].jumlah+` BED</kbd></h3>`;
                                        content += `<span>`;
                                        for (let y = 0; y < res.bed_tersedia.length; y++) {
                                            if (res.bed_tersedia[y].REF_SUBINSTALASI == res.bed_per_kamar[x].REF_SUBINSTALASI) {
                                                content += `Tersedia : `+res.bed_tersedia[y].jumlah;
                                            }
                                        }
                                        content += `<br>`;
                                        for (let w = 0; w < res.bed_terisi.length; w++) {
                                            if (res.bed_terisi[w].REF_SUBINSTALASI == res.bed_per_kamar[x].REF_SUBINSTALASI) {
                                                content += `Terisi : `+res.bed_terisi[w].jumlah;
                                            }
                                        }
                                        content += `</span></td>`;
                                    }
                                }
                            }
                            // content += `<td style='text-align:left'><h3>`+res.show[i].TMPTIDUR+`</h3><span>`+res.show[i].KELAS+`</span></td><td>Rp. `+res.show[i].JS_AKOMODASI+`</td>`;
                            content += `<td style='text-align:left'><b>`+res.show[i].TMPTIDUR+`</b> (`+res.show[i].KELAS+`)</td><td style='text-align:left'>`+convertToRupiah(res.show[i].JS_AKOMODASI.substring(0,res.show[i].JS_AKOMODASI.length - 5))+` ,-</td>`;
                            content += `</tr>`;
                            $('#tampil-tbody').append(content);
                        }
                        $("#bed_total").text(res.bed_total);
                    }
                },
                error: function () {
                    // $("#tampil-tbody").empty();
                    // $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Pencarian gagal, pastikan anda telah memilih tanggal pelayanan dengan benar</td></tr>");
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
        });

        // function-function
        function convertToRupiah(angka)
        {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
        }
    </script>
@endsection
