<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@if (Session('flash_message'))
		<div class="alert alert-success">
			{{Session('flash_message')}}
		</div>
	@endif

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form action="{{ route('them') }}" method="post" enctype="multipart/form-data">
		@csrf
		
		<table>
			<tr>
				<td>Title</td>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td>
					<input type="text" name="price">
				</td>
			</tr>
			<tr>
				<td>Images</td>
				<td>
					<input type="file" name="images">
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>
					<input type="text" name="description">
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td>
					<input type="text" name="content">
				</td>
			</tr>
			<tr>
				<td>Thêm</td>
				<td>
					<input type="submit" name="them" value="them">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>