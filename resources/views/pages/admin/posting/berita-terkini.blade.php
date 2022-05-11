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
                            <li class="breadcrumb-item active">Berita Terkini</li>
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
                            <button type="button" class="btn btn-primary" onclick="window.location='{{ route('admin.berita.create') }}'"><i class="mdi mdi-plus-thick"></i> Tambah</button>
                            <div class="vr"></div>
                            <button type="reset" class="btn btn-info"><i class="mdi mdi-information-outline"></i> Informasi</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 datatableku">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#datatable").DataTable({responsive:!1});
        // $(".dataTables_length select").addClass("form-select form-select-sm")
    });
</script>
@endsection