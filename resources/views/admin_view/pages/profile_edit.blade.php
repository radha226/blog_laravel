	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Form</title>
</head>
<body>
	
	{!!Form::model($model,['method'=>'PATCH','route'=>['profile/update','id'=>$model->id]])!!}
		@include('admin_view.pages._profile')
			
	{!!Form::close() !!}

</body>
</html>