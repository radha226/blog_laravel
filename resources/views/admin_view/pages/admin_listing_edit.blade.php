<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
</head>
<body>

{{-- {{dd($model)}}
 --}}
	
	{!!Form::model($model,['method'=>'PATCH','route'=>['blog_listing/update','id'=>$model->id],'files' => true])!!}
		@include('admin_view.pages._blog_edit')
		
	{!!Form::close()!!}

</body>
</html>