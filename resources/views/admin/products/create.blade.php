@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>المنتجات</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
            <li class="breadcrumb-item active">المنتجات</li>
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
              <h3 class="card-title">انشاء منتج جديد</h3>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{ route('dashboard.products.store') }}">
              @csrf
              <div class="card-body">
                <div class="row">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="title">العنوان <span class="text-danger">*</span></label>
                      <input name="title" type="text" class="form-control" id="title" placeholder="Enter">
                    </div>
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="title">الوصف <span class="text-danger">*</span></label>
                      <input name="description" type="text" class="form-control" id="title" placeholder="Enter">
                    </div>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputFile"> الصور <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="images[]" multiple type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Browse...</label>
                        </div>
                      </div>
                      @error('images')
                      <span class="text-danger">{{ $message }}</span>

                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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