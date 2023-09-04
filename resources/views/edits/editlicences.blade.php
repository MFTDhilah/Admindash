@extends('layouts.app')
@section('content')

@include('layouts.partials.nav')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@if($page_title){{$page_title}}@endif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">@if($page_title){{$page_title}}@endif</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="card-body">                    
                @if(session('msg'))
                <div class="alert alert-info alert-sm alert-dismissible">{{session('msg')}}</div>
                @endif    
                <div class="col-md-2 float-sm-right my-2">
                  <a href="{{route('licences.all')}}"><button type="button" class="btn btn-sm btn-primary btn-block text-white btn-inline"><i class="fa fa-arrow-left"></i> Back to Licenses</button></a>
                </div> 
                <form method="POST" action="{{route('licences.update',$data->slug)}}" enctype="multipart/form-data">
                  @csrf()                   
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Post Name</label>
                        <input type="text" class="form-control" name="name" value="{{$data->name}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                     <div class="form-group">
                      <label for="name">Post Content</label>
                      <textarea class="form-control" name="content">{{$data->content}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">                      
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Post Image</label>
                      <input type="file" class="form-control" name="postimage">
                    </div>
                  </div>
                  @if($data->image)
                  <div class="col-md-8">
                    <div class="img-wrap"  style="max-width:210px">
                      <a onclick="return deleteAction();" href="{{route('licences.deletepostimage',$data->slug)}}"><span class="close deletelogos">&times;</span></a>
                      <img src="data:image/png;base64,{{$data->image}}" class="img-fluid" data-id="{{$data->slug}}" style="max-width:400px"><br>
                    </div>
                  </div>
                  @endif
                </div>                    
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection('content')
