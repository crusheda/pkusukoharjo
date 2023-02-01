@extends('layouts.fovia')

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-content">
                    {{-- <span class="sub-title">Our Mission & Vision</span> --}}
                    <h3>Visi</h3>
                    <p>Menjadi Rumah Sakit pilihan yang Islami dengan pelayanan kesehatan yang bermutu, Paripurna dan terpercaya.</p></br>

                    <h3>Misi</h3>
                    <p>
                    1. Menyelenggarakan Rumah Sakit yang bernuansa Islami.</br>
                    2. Menyelenggarakan pelayanan kesehatan yang professional, bermutu dan paripurna.</br>
                    3. Meningkatkan mutu pelayanan kesehatan secara berkesinambungan.</br>
                    4. Menyelenggarakan sistem manajemen yang profesional.</br>
                    5. Mewujudkan SDM  yang professional dan sejahtera.
                    </p></br>

                    <h3>Falsafah</h3>
                    <p>Pelayanan yang Islami dalam rangka mengharap Ridho Allah.</p></br>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-image">
                    <img src="{{ asset('pku-kotak.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="">
                    <img src="{{ asset('assets/img/pku-kotak2.jpg') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-content">
                    <h3>Tata Nilai</h3>
                    <p>Amanah, Santun, Ramah, Ikhlas.</p></br>

                    <h3>Motto</h3>
                    <p>Kesembuhan Datangnya dari Allah, Kepuasan Anda adalah tanggung  jawab kami</p></br>

                    <h3>Tujuan</h3>
                    <p>
                    1. Terwujudnya Rumah Sakit yang mengutamakan kaidah Islami.</br>
                    2. Tercapainya pelayanan kesehatan yang professional, bermutu dan paripurna.</br>
                    3. Tercapainya mutu pelayanan kesehatan secara berkesinambungan.</br>
                    4. Terlaksananya dakwah Islamiah sesuai tujuan Muhammadiyah.</br>
                    5. Tercapainya karyawan yang profesional dan sejahtera.
                    </p></br>
                </div>
            </div>
        </div>
    </div>

@endsection
