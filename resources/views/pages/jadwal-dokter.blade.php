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
                <span>Update 5 menit yang lalu</span>
                <h2>Tabel Waktu</h2>
                <p>Pendaftaran ditutup <strong>30 menit</strong> sebelum poli dimulai, harap datang lebih awal. Jadwal Sewaktu-waktu bisa berubah.</p>
            </div>

            <div class="doctor-calendar-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><span class="time">9.00</span></td>
                            <td>
                                <h3>Dr. Tanner</h3>
                                <span>Dermatologists</span>
                            </td>
                            <td>
                                <h3>Dr. Kwak</h3>
                                <span>Ear, Nose</span>
                            </td>
                            <td>
                                <h3>Dr. Slaughter</h3>
                                <span>Neurologist</span>
                            </td>
                            <td></td>
                            <td>
                                <h3>Dr. Foley</h3>
                                <span>Oncologist</span>
                            </td>
                            <td>
                                <h3>Dr. Palmer</h3>
                                <span>Maxine lowe</span>
                            </td>
                        </tr>

                        <tr>
                            <td><span class="time">12.00</span></td>
                            <td></td>
                            <td>
                                <h3>Dr. Megahead</h3>
                                <span>Orthopedics</span>
                            </td>
                            <td>
                                <h3>Dr. Neupane</h3>
                                <span>Pain Management</span>
                            </td>
                            <td>
                                <h3>Dr. Breidin</h3>
                                <span>Radiologist</span>
                            </td>
                            <td></td>
                            <td>
                                <h3>Dr. Pipe</h3>
                                <span>Surgeons</span>
                            </td>
                        </tr>

                        <tr>
                            <td><span class="time">15.00</span></td>
                            <td>
                                <h3>Dr. Tanner</h3>
                                <span>Dermatologists</span>
                            </td>
                            <td>
                                <h3>Dr. Kwak</h3>
                                <span>Ear, Nose</span>
                            </td>
                            <td></td>
                            <td>
                                <h3>Dr. Slaughter</h3>
                                <span>Neurologist</span>
                            </td>
                            <td>
                                <h3>Dr. Foley</h3>
                                <span>Oncologist</span>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><span class="time">18.00</span></td>
                            <td>
                                <h3>Dr. Slaughter</h3>
                                <span>Neurologist</span>
                            </td>
                            <td>
                                <h3>Dr. Megahead</h3>
                                <span>Orthopedics</span>
                            </td>
                            <td>
                                <h3>Dr. Neupane</h3>
                                <span>Pain Management</span>
                            </td>
                            <td>
                                <h3>Dr. Breidin</h3>
                                <span>Radiologist</span>
                            </td>
                            <td>
                                <h3>Dr. Kwak</h3>
                                <span>Ear, Nose</span>
                            </td>
                            <td>
                                <h3>Dr. Pipe</h3>
                                <span>Surgeons</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Doctor Calendar Area -->
    
    {{-- $.ajax({
        url: "http://103.155.246.25:8000/api/all/"+this.value,
        // url: "http://192.168.1.3:8000/api/all/"+this.value,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            // console.log(res);
            $("#nama1").val(res.NAMAPASIEN);
            $("#nama2").val(res.NAMAPASIEN);
            $("#jns_kelamin1").val(res.JNSKELAMIN);
            $("#jns_kelamin2").val(res.JNSKELAMIN);
            $("#umur1").val(res.UMUR);
            $("#umur2").val(res.UMUR);
            $("#alamat1").val(res.ALAMAT);
            $("#alamat2").val(res.ALAMAT);

            $("#des").val(res.DESA);
            $("#kec").val(res.KECAMATAN);
            $("#kab").val(res.NAMA_KABKOTA);
            // $('#jumlah20').attr('required', true);
        }
    }); --}}
@endsection
