  @extends('admin.navbaradmin')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Logo </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Logo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="/insertlogo" enctype="multipart/form-data">
          {{ csrf_field() }}
    <section class="content">
      <div class="container-fluid">
 <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                Penjelasan Logo
                  <div class="form-group">     
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="penjelasan"></textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-image">
                    <input type="file" id="foto" name="foto">
                  </div>
                  <p class="help-block">Max. 5MB</p>
                </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @include('sweetalert::alert')
  
@endsection