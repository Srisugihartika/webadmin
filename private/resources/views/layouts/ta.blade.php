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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Buku Tajwid</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Tufatul Athfal</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          </ul> 
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Soal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>

      </ul>
    </section>

    <!-- /.sidebar -->
  </aside>

  <div class="px-content">

    <div class="row">
        <div class="col-sm-12">
        <div class="panel">
        	<div class="col text-left">
            <div id="judul_form" class="panel-title"><h2>Data Materi Ilmu Tajwid</h2></div>
        	</div>
                <div class="panel-body">
                    
                   <!--  <a class="btn btn-primary" href="#"> Tambah Data</a> -->
                    <div class="col text-lift">
                  	<button class="btn btn-primary " data-toggle="modal" data-target="#modal-form" >Tambah Data</button>
               		 </div>
                    <br />
                    <div class="table-success">
                        <table id="table-daftar" class="table table-bordered table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>JUDUL</th>
                                    <th>ISI</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                    <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <!-- <i class="fas fa-angle-left"></i> -->
                      <i class="fa fa-arrow-left"></i>
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
                      <i class="fa fa-arrow-right"></i>
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

<div id="modal-form" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Form Tambah Data Materi Ilmu Tajwid</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal" method="post">
                    <!-- hidden input id -->
                    <input type="hidden" id="id" name="id" style="display:none;">

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label">Judul</label>
                            <div class="col-sm-8">
                                <input type="text" id="judul" placeholder="Masukan Judul" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label">Isi Materi</label>
                            <div class="col-sm-8">
                                <textarea type="text" id="isi" placeholder="Masukan Isi Materi" class="form-control" required="" style="width: 389px; height: 247px;"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label">Gambar</label>
                            <div class="col-sm-8">
                                <button type="text" id="judul" placeholder="Masukan Judul" class="form-control"></button> 
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group text-right">
                        <div class="row">
                            <div class="col-sm-11">
                                <button type="button" id="btn-simpan" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
                                <button type="button" id="btn-update" class="btn btn-primary" style="display:none;"><i class="fa fa-edit"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  

@endsection