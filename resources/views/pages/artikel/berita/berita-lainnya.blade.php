@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Semua Berita</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Semua Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($list as $berita)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="/artikel/berita/{{ $berita->id }}"><img src="/storage/{{ substr($berita->filename,7,1000) }}" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <ul>
                                    <li>By: <a href="#">{{ $berita->nama }}</a></li>
                                    <li>{{ $berita->tgl }}</li>
                                </ul>
                            </div>

                            <h3><a href="/artikel/berita/{{ $berita->id }}">{{ $berita->judul }}</a></h3>
                            <p>{!! substr($berita->deskripsi,0,150) !!}...</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    <center><p class="">Semua berita diurutkan berdasarkan postingan terbaru</p></center>
                    <div class="pagination-area">
                        {{ $list->render() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.pagination').addClass('justify-content-center');
        $('.pagination li').addClass('page-numbers').removeClass('page-link').removeClass('page-item ');
        $('.pagination li a').addClass('next page-numbers').removeClass('page-link'); // .html('<i class="fas fa-angle-double-right"></i>')
        $('.pagination li.disabled span').addClass('prev page-numbers').removeClass('page-link'); // .html('<i class="fas fa-angle-double-left"></i>')
        $('.pagination li.active span').addClass('current page-numbers').removeClass('page-link');
    </script>
@endsection
