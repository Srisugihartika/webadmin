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
      <ul class="sidebar-menu" profiladmin-widget="tree">
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
          
        
        <li class="#">
         <li class="active treeview">
          <a href="{{ url('profiladmin', []) }}">
            <i class="fa fa-laptop"></i>
            <span>Profil Admin</span>
            </a>
        </li>
        </li>
        <li class="#">
          <a href="{{ url('pengumuman', []) }}">
            <i class="fa fa-edit"></i> <span>Pengumuman</span>
            </a>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<div class="row">

    <div class="col-lg-10 margin-tb">

        <div class="pull-left">

            <h2>Edit data Profil Admin</h2>

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


<form method="post" action="{{ url('editprofil/update', $profiladmin->id) }}">

    {{ csrf_field() }}
    {{ method_field('PUT') }}
  

     <div class="row">
      <!-- <input type="hidden" name="id" value="{{$profiladmin->id}}">  -->

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="name" class="form-control" value="{{$profiladmin->nama}}" placeholder="name" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" class="form-control" value="{{$profiladmin->alamat}}" placeholder="alamat">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No HP:</strong>

                <input type="text" name="nohp" class="form-control" value="{{$profiladmin->no_hp}}" placeholder="nohp">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="email" name="email" class="form-control" value="{{$profiladmin->email}}" placeholder="email">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan:</strong>

                <input type="text" name="jabatan" class="form-control" value="{{$profiladmin->jabatan}}" placeholder="jabatan">

            </div>

        </div>
        
       

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Update</button>
                

                 <a class="btn btn-primary" href="{{ url('profiladmin', []) }}"> Back</a>

                
        </div>


    </div>

   

</form>
</div>


@endsection