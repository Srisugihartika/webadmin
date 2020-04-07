@extends('layouts.app')

@section('content')

<div class="content">
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('public/adminlte/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
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


<div class="row">

    <div class="col-lg-10 margin-tb">

        <div class="pull-left">

            <h2>Tambah Data Informasi</h2>

        </div>

        

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

 <form style="margin:20px;" action="{{ url('pengumuman', []) }}" method="post" enctype="multipart/form-data">
        

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal:</strong>

                <input type="date" name="tanggal" class="form-control" >

            </div>

        </div>
        
   

    		<div class="col-xs-12 col-sm-12 col-md-12">
    		<label for="file">FILE :</label>
    		<div class="custom-file">
    		<input type="file" class="custom-file-input" name="file" required>
    		</div>
  			</div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Simpan</button>
                

                 <a class="btn btn-primary" href="{{ url('pengumuman', []) }}"> Back</a>

                
        </div>


    </div>

   

</form>
</div>


@endsection