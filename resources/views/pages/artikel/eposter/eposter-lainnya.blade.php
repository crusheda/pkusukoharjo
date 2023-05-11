@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Semua Poster Kesehatan</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Semua E-Poster</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <section class="blog-area ptb-100">
        <div class="container" style="max-width:1800px">
            <div class="row">
                <div class="portfolio-item row" id="eposter">
                    @if (count($list['eposter']) > 0)
                        @foreach ($list['eposter'] as $item)
                            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                                <div class="single-doctor-box" style="padding: 5px">
                                    <a data-fancybox="gallery" class="primary-btn" href="/storage/{{ substr($item->filename,7,1000) }}">
                                        <img class="img-fluid" src="/storage/{{ substr($item->filename,7,1000) }}" alt="{{ $item->judul }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <center><p>Poster tidak tersedia untuk saat ini.</p></center>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12">
                    @if ($list['totalEposter'] > 20 )
                        <center><p>Semua poster diurutkan berdasarkan upload terbaru</p></center>
                    @endif
                    <div class="pagination-area">
                        {{ $list['eposter']->render() }}
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
