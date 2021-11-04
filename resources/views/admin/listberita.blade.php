
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
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Berita</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" id="TABLE" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th style="width: 20%">
                          Judul
                      </th>
                      <th style="width: 30%">
                          Preview
                      </th>
                      <th>
                          Deskripsi
                      </th>
                      <th style="width: 30%">
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
                              {{$data->judul}}
                          </a>
                          <br/>

                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                @php
                                $path = Storage::url('public/berita/'.$data->foto);
                                @endphp 
                                <button type="button" class="btn  btn-lg" data-toggle="modal" data-target="#modalfade-{{$data->id}}">
                                  <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
                              </li>
                          </ul>
                      </td>
                      <td>
                         {{$isi = substr($data->isi,0,25)}}

                      </td>

                      <td class="project-actions text-right">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalfade1-{{$data->id}}">
                              <i class="fas fa-folder">
                              </i>
                            View
                          </button> 
                          <a href="/editberita/{{$data->id}}"><button type="button" class="btn btn-info">
                            
                              <i class="fas fa-pencil-alt">
                              </i>
                            Edit

                          </button> </a>
                           <a class="btn btn-danger btn-sm" href="/deleteberita/{{$data->id}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a> 
                      </td>
                      <!-- <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalfade1"> -->
                         <!--  <a class="btn btn-info btn-sm" href="/editberita/{{$data->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="/deleteberita/{{$data->id}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td> --> 
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

                  <!-- MODAL VIEW -->
                  <div class="modal fade" id="modalfade1-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">View Berita</h4>

                            
                        </div>
         

                    <!-- Modal View -->
                    <div class="modal-body">
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
                                        
                                        <div class="form-group">
                                          <p>"{{$data->judul}}"</p>
                                        </div>
                                        <div class="form-group">
                                          <p class="input--style-4" type="text" name="kategori" value="({$data->kategori}}"></p>
                                        <div class="form-group">
                                            <textarea id="compose-textarea" class="form-control" style="height: 300px" name="isi" > {{$data->isi}}
                                              
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <ul class="list-inline">
                                               <li class="list-inline-item">
                                                  
                                                  <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
                                                
                                               </li>
                                            </ul>
                                      </div>
                                      <!-- /.card-body -->
                                      <div class="card-footer">
                                        <div class="float-right">

                                          <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
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
                                   
                                </div>
                            </div>
                        </div>
                  <!-- MODAL VIEW -->


                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- {-- DATA TABLE --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#TABLE').DataTable();
    });
  </script> -->
  @include('sweetalert::alert')

  @endsection