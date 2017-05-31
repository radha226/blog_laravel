<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>comment edit</title>
</head>
<body>
{{-- {{dd($model)}} --}}
		{{-- {!!Form::model($model,['method'=>'PATCH','route'=>'comment_listing/update','id'=>$model->id])!!} --}}
		{!!Form::model($model,['method'=>'PATCH','route'=>['comment_listing/update','id'=>$model->id]])!!}  
			@include('admin_view.pages._comment_edit')
			
		{!!Form::close()!!}
</body>
</html>