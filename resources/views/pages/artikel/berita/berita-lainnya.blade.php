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
                <div id="berita"></div>
                {{-- <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <script>
        $(document).ready( function () {
            $.ajax(
                {
                    url: "/api/show/berita/lainnya",
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(res) {
                        $("#berita").empty();
                        console.log(res.berita.length);
                        if(res.berita.length == 0){
                            $("#berita").append(`
                                <div class="col-md-12"><center>Berita tidak tersedia untuk saat ini</center></div>
                            `);
                        } else {
                            for (let i = 0; i < res.berita.length; i++) {
                                $("#berita").append(`
                                    <div class="col-md-4">
                                        <div class="single-blog-post">
                                            <div class="post-image">
                                                <a href="/artikel/berita/${res.berita[i].id}"><img src="/storage/${(res.berita[i].filename).substring(7,1000)}" alt="image"></a>
                                            </div>

                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <ul>
                                                        <li>By: <a href="javascript:void(0)">${res.berita[i].nama}</a></li>
                                                        <li>${res.berita[i].tgl}</li>
                                                    </ul>
                                                </div>

                                                <h3><a href="/artikel/berita/${res.berita[0].id}">${res.berita[i].judul}</a></h3>
                                                <p>${res.berita[i].deskripsi.substring(0,150)}...</p>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            };
                            $("#berita").append(`
                                <div class="col-lg-12 col-md-12">
                                    <div class="pagination-area">
                                        <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                                        <a href="#" class="page-numbers">1</a>
                                        <span class="page-numbers current" aria-current="page">2</span>
                                        <a href="#" class="page-numbers">3</a>
                                        <a href="#" class="page-numbers">4</a>
                                        <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            `);
                        }
                            // for (let i = 1; i < res.berita.length; i++) {
                            //     $("#berita").append(`
                            //         <div class="col-lg-4 col-md-6">
                            //             <div class="single-blog-post">
                            //                 <div class="post-image">
                            //                     <a href="artikel/berita/${res.berita[0].id}"><img src="storage/${(res.berita[0].filename).substring(7,1000)}" alt="image"></a>
                            //                 </div>

                            //                 <div class="post-content">
                            //                     <div class="post-meta">
                            //                         <ul>
                            //                             <li>By: <a href="#">${res.berita[0].nama}</a></li>
                            //                             <li>${res.berita[0].tgl}</li>
                            //                         </ul>
                            //                     </div>

                            //                     <h3><a href="artikel/berita/${res.berita[0].id}">${res.berita[0].judul}</a></h3>
                            //                     <p>${res.berita[0].deskripsi.substring(0,150)}...</p>
                            //                 </div>
                            //             </div>
                            //         </div>
                            //     `);
                            // for (let i = 1; i < res.berita.length; i++) {
                            //     console.log(i);
                            //     $("#berita"+i).empty();
                            //     $("#berita"+i).append(`
                            //     <img src="storage/${(res.berita[i].filename).substring(7,1000)}" class="card-img-top" style="height: 140px">
                            //     <div class="card-body d-flex flex-column">
                            //         <a>${res.berita[i].judul}</a><br>
                            //         <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;${res.berita[i].nama} &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;${res.berita[i].tgl}</sub>
                            //         <a style="margin-top: 10px" href="artikel/berita/${res.berita[i].id}" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            //     </div>
                            //     `);
                            // }

                    }
                }
            );
        });
    </script>
@endsection
