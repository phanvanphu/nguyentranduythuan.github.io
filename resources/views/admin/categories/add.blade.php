@extends('admin.index')
@section('content')

<div class="wrapper">
	<div class="content-wrapper">
    	<section class="content-header">
	     
	    <ol class="breadcrumb">
	    	<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
	        <li><a href="#">Category</a></li>
	        <li class="active">Add Category</li>
	    </ol>
	    </section>

    	<section class="content">
      		<div class="row">
       			<div class="col-md-6">
          <!-- Horizontal Form -->
        		<div class="box box-info">
            		<div class="box-header with-border">
              			<h3 class="box-title">Addition Category</h3>
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
		            <form class="form-horizontal" method="post" name="add_category" id="add_category" action="{{ url('admin/category/add-category') }}" enctype="multipart/form-data">
		            	@csrf
		                <div class="box-body">
							<div class="form-group">
		                		<label for="inputEmail3" class="col-sm-2 control-label">Parent Category</label>
			                  	<div class="col-sm-10">
			                    	<select class="form-control" id="exampleFormControlSelect1" name="category_parent">
								      <option>Please choose Category</option>
								      @foreach ($parent as $pr)
								      <option value="{{$pr->id}}">{{$pr->title}}</option>
								      @endforeach
								    </select>
			                  	</div>
		                	</div>
		                    <div class="form-group">
		                		<label for="inputEmail3" class="col-sm-2 control-label">Category Title</label>
			                  	<div class="col-sm-10">
			                    	<input type="text" class="form-control" id="name" name="category_title" placeholder="Please enter Category name">
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
		                	
						    <div class="form-group">
						    	<label for="inputPassword3" class="col-sm-2 control-label">Images</label>
			                	<div class="col-sm-10">
			                    	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="images">
			                  	</div>   
						    </div>

						    <div class="form-group">
							     <label class="col-sm-2" for="inlineFormCustomSelect">Position</label>
								<div class="col-sm-10">
									<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="position">
								        <option selected>Choose...</option>
								        <option value="1">1</option>
								        <option value="2">2</option>
								        <option value="3">3</option>
								        <option value="3">4</option>
								        <option value="3">5</option>
							    	</select>
								</div>
						    </div>

						    <div class="form-group" style="text-align: center">
						    	<div class="col-sm-6">
								  <input class="form-check-input" type="radio" name="AnHien" id="AnHien_1" value="1">
								  <label class="form-check-label" for="inlineRadio1">Hiện</label>
								</div>
								<div class="col-sm-6">
								  <input class="form-check-input" type="radio" name="AnHien" id="AnHien_0" value="0">
								  <label class="form-check-label" for="inlineRadio2">Ẩn</label>
								</div>
						    </div>
						</div>
				    
		                </div>
		              <!-- /.box-body -->
			            <div class="box-footer">
			                <button type="submit" value="add" class="btn btn-info pull-right">Add</button>
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