
  @extends('admin.navbaradmin')
  @section('content')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Foto Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Edit Fotokegiatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="/updatefotokegiatan" enctype="multipart/form-data">
                  {{ csrf_field() }}
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Foto Kegiatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
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
                          Nama Kegiatan
                      </th>
                      <th style="width: 30%">
                          Preview
                      </th>
                      <th>
                          
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
                              {{$data->nama}}
                          </a>
                          <br/>

                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                @php
                                $path = Storage::url('public/fotokegiatan/'.$data->foto);
                                @endphp 
                                <button type="button" class="btn  btn-lg" data-toggle="modal" data-target="#modalfade-{{$data->id}}">
                                <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
                              </li>
                          </ul>
                      </td>
                      <td>
                      </td>
                      <td class="project-actions text-right">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalfade-{{$data->id}}">
                              <i class="fas fa-folder">
                              </i>
                            View
                          </button> 
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalfade1-{{$data->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                            Edit
                          </button> 
                          <a type="button" class="btn btn-danger"  href="/deletefotokegiatan/{{$data->id}}">
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
                              <h4 class="modal-title" id="myModalLabel">View Foto Kegiatan</h4>
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
    </section>
    <!-- /.content -->
          </div>
           
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="modalfade1-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Kegiatan</h4>
            </div>
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
                  <form action="/updatefotokegiatan" method="post">
                    @csrf
                  <input type="hidden" name="id" id="id" value="{{$data->id}}">
                  <input class="form-control" name="nama" value="{{$data->nama}}" >
                </div>
                <div class="form-group">

                </div>

                <div class="form-group">
                    <ul class="list-inline">
                       <li class="list-inline-item">
                        @php
                             $path = Storage::url('public/fotokegiatan/'.$data->foto);
                         @endphp
                        <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
                       </li>
                    </ul>
              </div>
              <div class="form-group">
                  <div class="btn btn-default btn-images">
                    <input type="file" name="foto">
                  </div>
                  <p class="help-block">Max. 5MB</p>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
 @endforeach
              </tbody>
          </table>
        </div>

      </div>


    </section>

  </div>
 @include('sweetalert::alert')
  @endsection