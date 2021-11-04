  @extends('admin.navbaradmin')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Unit Pendidikan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Unit Pendidikan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="/insertunitpendidikan" enctype="multipart/form-data">
          {{ csrf_field() }}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
  <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <!-- /.card-header -->
              <div class="card-body">
              Nama Unit
                <div class="form-group">
                  <input class="form-control" placeholder="silahkan isi nama unit" name="nama">
                </div>
                Deskripsi Unit
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="deskripsi"></textarea>
                </div>
                Foto/Logo Unit
                <div class="form-group">
                  <div class="btn btn-default btn-image">
                    <input type="file" id="foto" name="foto">
                  </div>
                  <p class="help-block">Max. 5MB</p>
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