  @extends('admin.navbaradmin')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Visi & Misi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Visimisi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
  <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <form method="post" action="/insertvisimisi" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                Visi
                  <input class="form-control" placeholder="" name="visi">
                </div>
                <div class="form-group">
                Misi
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="misi"></textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @include('sweetalert::alert')
  
@endsection