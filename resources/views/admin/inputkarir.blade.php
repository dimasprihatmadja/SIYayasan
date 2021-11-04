  @extends('admin.navbaradmin')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Lowongan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Lowongan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="/insertkarir" enctype="multipart/form-data">
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
              Lowongan
                <div class="form-group">
                  <input class="form-control" placeholder="silahkan masukan lowongan yang akan diisi" name="lowongan">
                </div>
              Kategori
                <div class="form-group">
                  <input class="form-control" placeholder="silahkan masukan kategori yang akan diisi" name="kategori">
                </div>
                Deskripsi lowongan
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="deskripsi"></textarea>
                </div>
                Foto/poster Lowongan
                <div class="form-group">
                  <div class="btn btn-default btn-image">
                    <input type="file"  id="foto" name="foto">
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