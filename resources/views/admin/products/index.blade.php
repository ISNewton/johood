@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">

              <h3 class="card-title">DataTable with minimal features & hover style</h3>
              <a class="btn btn-primary text-end" href="{{ route('dashboard.products.create') }}">
                <i class="fas fa-plus"></i>
                Add New
              </a>
            </div>

          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="data-table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection

@push('scripts')
<script>
  let role;

  let dataTable = $('#data-table').DataTable({
      dom: "tiplr",
      serverSide: true,
      processing: true,
      ajax: {
          url: '{{ route('dashboard.products.data') }}',
      },
      columns: [
          {data: 'record_select', name: 'record_select', searchable: false, sortable: false},
          {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, sortable: false},
          {data: 'title', title: 'name'},
      ],
     
  });

  $('#data-table-search').keyup(function () {
      dataTable.search(this.value).draw();
  })


</script>

@endpush