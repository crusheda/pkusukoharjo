@extends('layouts.admin.layout1')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Ubah Jadwal</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Posting</li>
                            <li class="breadcrumb-item">Jadwal Pelayanan</li>
                            <li class="breadcrumb-item">Dokter Spesialis</li>
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
                            <button type="button" class="btn btn-dark" onclick="window.location='{{ route('admin.jadwal.index') }}'"><i class="mdi mdi-chevron-left"></i> Kembali</button>
                        </div>
                    </div>
                    <form class="form-auth-small" action="{{ route('admin.jadwal.update', $list->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Dokter + Gelar</label>
                                        <input class="form-control" type="text" name="nama" value="{{ $list->nama }}" placeholder="Tuliskan Nama Lengkap dan Gelar Dokter" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Penulis</label>
                                        <input class="form-control" type="text" name="poli" value="{{ $list->poli }}" placeholder="e.g Spesialis Dalam" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <center><label class="form-label">Deskripsi Jadwal</label></center>
                                    <textarea class="textarea" name="ket">{{ $list->ket }}</textarea>
                                    {{-- <textarea class="form-control" name="summernote" id="summernote"></textarea> --}}
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
@endsection