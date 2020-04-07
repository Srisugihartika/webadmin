@extends('layouts.app')

@section('content')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/adminlte/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="#">
          <a href="{{ route('admin.home') }}">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
        </li>

         <li class="#">
          <a href="{{ url('caradaftar', []) }}">
            <i class="fa fa-files-o"></i>
            <span>Data Pendaftar</span>
            
          </a>
        </li>
         
        
         <li class="#">
          <a href="{{ url('profiladmin', []) }}">
            <i class="fa fa-laptop"></i>
            <span>Profil Admin</span>
            </a>
        </li>

      <li class="active treeview">
        
          <a href="{{ url('pengumuman', []) }}">
            <i class="fa fa-edit"></i> 
            <span>Pengumuman</span>
            </a>
      </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="px-content">

    <div class="row">
        <div class="col-sm-12">
        <div class="panel">
            <div id="judul_form" class="panel-title"><h2>Data Informasi</h2></div>
                <div class="panel-body">
                    <a class="btn btn-primary" href="{{ route('info.tbhinfo') }}"> Tambah Data</a>
                    <br /><br />
                    <div class="table-success">
                        <table id="table-daftar" class="table table-bordered table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>TANGGAL</th>
                                    <th>FILE</th>
                                    <th>AKSI</th>
                                </tr>
                                <tbody >
                                @foreach ($data as $item)
                                  <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->nama}}</td>
                                  <td>{{$item->tanggal}}</td>
                                  <td>{{$item->file}}</td>
                                      
                                <td>
                                    <a href="{{ url('editinfo', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url('hapusinfo', $item->id) }}" class="btn btn-danger">Hapus</a>
                                </td>

                                 </tr>
                                  @endforeach
                            </tbody>
                            </thead>
                           
                        </table>
                    </div>
                    <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->

</div>
<!-- content -->



@endsection
