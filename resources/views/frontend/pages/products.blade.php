<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1px;">
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Image</td>
			<td>Price</td>
			<td>Description</td>
			<td>Content</td>
			<td>Detail</td>
		</tr>
		@foreach ($product as $pr)
		<tr>
			<td>{{$pr->id}}</td>
			<td>{{$pr->title}}</td>
			<td>{{$pr->thumbnail}}</td>
			<td>{{$pr->price}}</td>
			<td>{{$pr->description}}</td>
			<td>{{$pr->content}}</td>
			<td><a href="{{ route('chitiet',['id' => $pr->id]) }}">Detail</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>