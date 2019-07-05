@extends('admin.index')
@section('content')

<div class="wrapper">
	<div class="content-wrapper">
    	<section class="content-header">
	     
	    <ol class="breadcrumb">
	    	<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
	        <li><a href="#">Category</a></li>
	        <li class="active">Edit Category</li>
	    </ol>
	    </section>

    	<section class="content">
      		<div class="row">
       			<div class="col-md-6">
          <!-- Horizontal Form -->
        		<div class="box box-info">
            		<div class="box-header with-border">
              			<h3 class="box-title">Edition Category</h3>
            		</div>
            <!-- /.box-header -->
            <!-- form start -->
            		@if ($errors->any())
						<div class="alert alert-danger">
        					<ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
        					</ul>
    					</div>
					@endif

            		@if (Session::has('flash_message'))
            			<div class="alert alert-success">
            				{{Session('flash_message')}}
            			</div>
            		@endif
		            <form class="form-horizontal" method="post" name="add_category" id="add_category" action="{{ url('admin/category/edit-category') }}">
		            	@csrf
		                <div class="box-body">
							<div class="form-group">
		                		<label for="inputEmail3" class="col-sm-2 control-label">Parent Category</label>
			                  	<div class="col-sm-10">
			                    	<select class="form-control" id="exampleFormControlSelect1" name="category_parent">
								      <option>Please choose Category</option>
								      
								      <option value=""></option>

								    </select>
			                  	</div>
		                	</div>
		                    <div class="form-group">
		                		<label for="inputEmail3" class="col-sm-2 control-label">Category Title</label>
			                  	<div class="col-sm-10">
			                    	<input type="text" class="form-control" id="name" name="category_title" placeholder="Please enter Category name" value="{{ old('category_title') ?? $category->title }}">
			                  	</div>
		                	</div>
		                	<div class="form-group">
		                      	<label for="inputPassword3" class="col-sm-2 control-label">Desciption</label>

			                	<div class="col-sm-10">
			                    	<textarea rows="" cols="65" name="description" id="description"></textarea>
			                  	</div>
		                	</div>
		                	<div class="form-group">
		                      	<label for="inputPassword3" class="col-sm-2 control-label">Link</label>

			                	<div class="col-sm-10">
			                    	<input type="text" class="form-control" name="url" id="url" placeholder="">
			                  	</div>
		                	</div>
		                </div>
		              <!-- /.box-body -->
			            <div class="box-footer">
			                <button type="submit" value="add" class="btn btn-info pull-right">Update</button>
			            </div>
		              <!-- /.box-footer -->
		            </form>
        		</div>
	        	</div>
       		</div>
        </section>
   	</div>
</div>

@endsection