@extends('layouts.admin.layout1')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Poster Kesehatan</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Posting</li>
                            <li class="breadcrumb-item">Poster Kesehatan</li>
                            <li class="breadcrumb-item active">Ubah</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="hstack gap-3">
                            <button type="button" class="btn btn-dark" onclick="window.location='{{ route('admin.eposter.index') }}'"><i class="mdi mdi-chevron-left"></i> Kembali</button>
                        </div>
                    </div>
                    <form class="form-auth-small" action="{{ route('admin.eposter.update', $list->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Judul</label>
                                        <input class="form-control" type="text" name="judul" value="{{ $list->judul }}" placeholder="Tuliskan Judul" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Upload Poster Kesehatan Baru</label><br>
                                        <input type="file" name="file" value="{{ $list->filename }}" class="form-control-file" onchange="readURL(this);">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <label class="form-label">Poster Kesehatan Lama</label><br>
                                    <img src="/storage/{{ substr($list->filename,7,1000) }}" width="100%" style="max-width: 100%" alt="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Poster Kesehatan Baru</label><br>
                                    <img id="blah" src="#" alt="your image" style="max-width: 100%" />
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success float-end mb-3" type="submit"><i class="mdi mdi-content-save"></i> Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result).width('100%'); // .height(200)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
