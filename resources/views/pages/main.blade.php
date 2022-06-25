@extends('layouts.admin_layout')
@section('content')
      
          <main>
              <div class="container-fluid px-4">
                  <h1 class="mt-4">Main</h1>
                  <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                      <li class="breadcrumb-item active">Main</li>
                  </ol>
                  <form action="{{ route('admin.main.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="row">
                   <div class="form-group col-md-4 mt-3">
                    <div>
                      <label for="title"><h4>Title</h4></label>
                      <input type="text" name="title" class="form-control" value="{{ $main->title }}">
                    </div>
                    <br>

                    <div>
                      <label for="title"><h4>Sub_Title</h4></label>
                      <input type="text" name="sub_title" class="form-control" value="{{ $main->sub_title }}">
                    </div>
                     
                     <br>

                    <div>
                      <label for="title"><h4>Upload Image</h4></label>
                      <img src="{{ url($main->image) }}" style="height: 30vh;">

                      <input type="file" name="image" class="form-control" class="mt-3 py-2">
                    </div>
                   </div>
                    
                  </div>
                  <br><br>
                  <input type="submit" name="" value="submit" class="btn btn-info">
                
              </div>
                 
                 </form>  
          </main>
      @endsection    
