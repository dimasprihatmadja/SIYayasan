
  @extends('admin.navbaradmin')
  @section('content')

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

 
  </nav>
  <!-- /.navbar -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">List Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="col-sm-12">
        <div class="card-header">
          <h3 class="card-title">List Berita</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-2">
          <div class="table-responsive">
            <table class="table table-striped projects" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th style="width: 30%">
                          Nama Lengkap
                      </th>
                      <th style="width: 30%">
                          Preview
                      </th>
                      <th style="width: 20%">
                          Hapus
                      </th>
                     
                  </tr>
              </thead>
              <tbody>
                 @php $no = 1; @endphp
                        @foreach($okmek as $key => $data)
                  <tr>
                      <td>
                          {{$no++}}
                      </td>

                      <td>
                          <a>
                              {{$data->nama}}
                          </a>
                          <br/>

                      </td>

                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                @php
                                $path = Storage::url('public/portofolio/'.$data->foto);
                                @endphp 
                                <button type="button" class="btn  btn-lg" data-toggle="modal" data-target="#modalfade-{{$data->id}}">
                                <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
                                </button>
                                <div class="modal fade" id="#modalfade-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <!-- Modal Header -->
                                          <div class="modal-header">
                                              <h4 class="modal-title" id="myModalLabel">View Portofolio</h4>
                                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                          </div>
                                          <!-- Modal body -->
                                          <div class="modal-body">
                                            <center>
                                              @php
                                               $a = Storage::url('public/portofolio/'.$data->foto);   
                                              @endphp
                                            <button type="button" class="btn  btn-lg" data-toggle="modal" data-target="#modalfade-{{$data->id}}">
                                            <img alt="Avatar" class="table-avatar" src="{{url($a)}}">
                                            
                                          </center>
                                          </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                              </li>
                          </ul>
                      </td>
                      <td class="project-actions text-left">
                          <a class="btn btn-danger btn-sm" href="/deleteportofolio/{{$data->id}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>

                  <!-- MODAL PREVIEW GAMBAR -->
                  <div class="modal fade" id="modalfade-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <!-- Modal Header -->
                          <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">View Portofolio</h4>
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          </div>
                          <!-- Modal body -->
                          <div class="modal-body">
                            <center>
                            <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
                          </center>
                          </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                  </div>
                  <!-- MODAL PREVIEW GAMBAR -->
        
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @include('sweetalert::alert')
  
  @endsection