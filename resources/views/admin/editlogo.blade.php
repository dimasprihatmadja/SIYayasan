  @extends('admin.navbaradmin')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Logo</h1>
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
    <form method="post" action="/updatelogo" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$okmek->id}}">
    <section class="content">
      <div id="summernote">
      <div class="container-fluid">
 <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">Edit Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                Penjelasan Logo
                  <div class="form-group">     
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="penjelasan">{{$okmek->penjelasan}}</textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-image">
                    <input type="file" id="foto" name="foto">
                  </div>
                  <p class="help-block">Max. 5MB</p>
                </div>
                  </div><!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
      </div><!-- /.container-fluid -->
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @include('sweetalert::alert')
@endsection