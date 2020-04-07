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
            <i class="fa fa-dashboard"></i> 
            <span>Home</span>
            
          </a>
        </li>

         <li class="active treeview">
          <a href="{{ url('caradaftar', []) }}">
            <i class="fa fa-files-o"></i>
            <span>Data Pendaftar</span>
            
          </a>
        </li>
        
          
        </li>
        
         <li class="#">
          <a href="{{ url('profiladmin', []) }}">
            <i class="fa fa-laptop"></i>
            <span>Profil Admin</span>
            </a>
        </li>
      
        <li class="#">
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

            <h2>Update Data Daftar</h2>

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

   
<form style="margin:20px;" action="{{ url('editdaftar/update', $caradaftar->id) }}"method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" class="form-control" value="{{$caradaftar->nama}}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" class="form-control" value="{{$caradaftar->alamat}}">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No HP:</strong>

                <input type="text" name="no_hp" class="form-control" value="{{$caradaftar->no_hp}}">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="email" name="email" class="form-control" value="{{$caradaftar->email}}">

            </div>

        </div>
        <div class="col-xl-12" >
          <label for="basis" class="col-sm-6">Pilih Basis :</label>
                        <div class="col-12">
                            <div class="form-group">
                                <select name="basis" value="{{$caradaftar->basis}}">
                                    <option value="Bagama">Basis Agama</option>
                                    <option value="Bkeluarga">Basis Keluarga</option>
                                    <option value="Bkomunitas">Basis Komunitas</option>
                                    <option value="Bwarganet">Basis Warganet</option>
                                    <option value="Bdisabilitas">Basis Disabilitas</option>
                                </select>
                            </div>
                        </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
   			 <label for="fto">FOTO :</label>
   			 <div class="custom-file">
          <label class="custom-file-label" for="validatedCustomFile">Pilih Foto</label>
   			 <input type="file" class="custom-file-input" name="foto" value="{{$caradaftar->foto}}" required>
 			 </div>
		  </div>

    		<div class="col-xs-12 col-sm-12 col-md-12">
    		<label for="file">FILE :</label>
    		<div class="custom-file">
          <label class="custom-file-label" for="validatedCustomFile">Pilih File</label>
    		<input type="file" class="custom-file-input" name="file" value="{{$caradaftar->file}}" required>
  		</div>
  </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Update</button>
                

                 <a class="btn btn-primary" href="{{ url('caradaftar', []) }}"> Back</a>

                
        </div>


    </div>

   

</form>
</div>


@endsection