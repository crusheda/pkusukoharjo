@extends('layouts.fovia')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Detail Berita</h2>
                        <ul>
                            <li><a href="{{ route('portal') }}">Beranda</a></li>
                            <li>Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="/storage/{{ (substr($list['berita']->filename,7,1000)) }}" alt="image">
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Diposting pada : </span> <a href="#">{{ \Carbon\Carbon::parse($list['berita']->tgl)->isoFormat('D MMMM Y') }}</a></li>
                                    <li><span>Oleh: </span> <a href="#">{{ $list['berita']->nama }}</a></li>
                                </ul>
                            </div>

                            <h3>{{ $list['berita']->judul }}</h3>
                            <p>{!! $list['berita']->deskripsi !!}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Pencarian:</span>
                                    <input type="search" class="search-field" placeholder="Pencarian...">
                                </label>
                                <button type="submit" disabled><i class="fas fa-search"></i></button>
                            </form>
                        </section>

                        <section class="widget widget_fovia_posts_thumb">
                            <h3 class="widget-title">Postingan Terbaru</h3>
                            <p>Fitur ini akan segera hadir</p>
                            {{-- <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 30, 2021</time>
                                    <h4 class="title usmall"><a href="#">How to change yourself for the better</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article> --}}
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Kategori</h3>
                            <p>Fitur ini akan segera hadir</p>
                            {{-- <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul> --}}
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
