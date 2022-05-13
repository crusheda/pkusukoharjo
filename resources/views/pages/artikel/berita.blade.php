@extends('layouts.layout2')

@section('content')

  <main id="main" style="margin-top: 40px">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li>Portal</li>
          <li>Artikel</li>
        </ol>
        <h2>Berita</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Sejarah Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ url('storage/'.substr($list['show']->filename,7,1000)) }}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Informasi Artikel</h3>
            <ul>
              <li><strong>Penulis</strong>: {{ $list['show']->nama }}</li>
              <li><strong>Upload</strong>: {{ \Carbon\Carbon::parse($list['show']->tgl)->isoFormat('dddd, D MMMM Y') }}</li>
              <li><strong>Diperbarui</strong>: {{ \Carbon\Carbon::parse($list['show']->updated_at)->diffForHumans() }}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{ $list['show']->judul }}</h2>
          {!! $list['show']->deskripsi !!}
        </div>

      </div>
    </section><!-- End Sejarah Section -->
  </main>
@endsection