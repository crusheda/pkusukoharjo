@extends('layouts.layout2')

@section('content')

  <main id="main" style="margin-top: 40px">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li>Jadwal Pelayanan</li>
        </ol>
        <h2>Jadwal Pelayanan Poliklinik Dokter Spesialis</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Main Section ======= -->
    <section id="sejarah" class="sejarah">
      <div class="container">

        <div class="card" data-aos="fade-up">
          <div class="card-body" style="text-align: justify;text-justify: inter-word;">
            
            <table id="table" class="table table-bordered dt-responsive nowrap w-100">
              <thead>
              <tr>
                  <th>Dokter</th>
                  <th>Poliklinik</th>
                  <th>Waktu</th>
              </tr>
              </thead>
              <tbody id="tampil-tbody"><tr><td colspan="3"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></tr></tbody>
            </table>
            <hr>
            <p>
              <b>*) dengan perjanjian</b>
                <br>
                Pendaftaran ditutup 30 menit sebelum poli dimulai, harap datang lebih awal. Jadwal Sewaktu-waktu bisa berubah, silakan hubungi :
                <br>
                Telp : (0271) 593979 | Whatsapp : 0812 2720 3899 (Bagian Informasi)
            </p>

          </div>
        </div>

      </div>
    </section><!-- End Main Section -->
  </main>

  <script>
    $(document).ready( function () {
        $.ajax(
            {
                url: "./jadwalpelayanan/api/data",
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    $("#tampil-tbody").empty();
                    res.show.forEach(item => {
                        $("#tampil-tbody").append(`
                            <tr id="data${item.id}">
                                <td>${item.nama}</td>
                                <td>${item.poli}</td>
                                <td>${item.ket}</td>
                            </tr>
                        `);
                    });
                    $('#table').DataTable(
                        {
                            paging: true,
                            searching: true,
                            dom: 'Bfrtip',
                            order: [[ 1, "desc" ]],
                            responsive: true,
                            scrollX: true,
                        }
                    ).columns.adjust();
                }
            }
        );
    });
  </script>
@endsection