@extends('admin.index')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Category</h3>
          </div>
          <div class="box-body">
            @if (Session::has('flash_message'))
                  <div class="alert alert-success">
                    {{Session('flash_message')}}
                  </div>
                @endif
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Category Title</th>
                  <th>Category Slug</th>
                  <th>Category Desciption</th>
                  <th>Category Images</th>
                  <th>Category Link</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $cate)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$cate->title}}</td>
                  <td>{{$cate->slug}}</td>
                  <td>{{$cate->description}}</td>
                  <td><img width="50px" src="{{ asset('upload/'.$cate->thumbnail) }}" /></td>
                  <td style="width: 50px;">{{$cate->url}}</td>
                  <td>
                    <a href="{{ url('admin/category/edit-category/'.$cate->id) }}" class="btn btn-success">Edit</a>
                    <a id="deleteCategory" href="{{ url('admin/category/delete-category/'.$cate->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                
               </tbody>
              </table>
        </div>
          
        </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
 
@endsection  
