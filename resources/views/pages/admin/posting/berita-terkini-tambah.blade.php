@extends('layouts.admin.layout1')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Berita Terkini</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Posting</li>
                            <li class="breadcrumb-item">Artikel</li>
                            <li class="breadcrumb-item">Berita Terkini</li>
                            <li class="breadcrumb-item active">Tambah</li>
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
                            <button type="button" class="btn btn-dark" onclick="window.location='{{ route('admin.berita.index') }}'"><i class="mdi mdi-chevron-left"></i> Kembali</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Judul</label>
                                        <input class="form-control" type="text" placeholder="Tuliskan Judul">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Penulis</label>
                                        <input class="form-control" type="text" placeholder="Tuliskan Nama Lengkap Penulis">
                                    </div>                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Upload</label>
                                        <input class="form-control" type="date" value="2019-08-19">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Upload Thumbnail</label><br>
                                        <input type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Deskripsi Berita</label>
                                <textarea class="ckeditor" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success float-end" type="submit"><i class="mdi mdi-content-save"></i> Simpan</button>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection