

@extends('layouts/main')
@section('content')
<div class="col-xs-12  col-md-8">
 @foreach($data as $row)

	{{-- {{dd($row->users())}}  --}}

<div class="boxed  sticky  push-down-45">
 
<div class="meta">
<img class="wp-post-image" src="{{asset('images/')}}/<?=$row['img']; ?>" alt="Blog image" width="748" height="324">
<div class="meta__container">
<div class="row">
<div class="col-xs-12  col-sm-8">
<div class="meta__info">
<span class="meta__author"><img src="{{asset('images/')}}/<?=$row['users']['images']; ?>" alt="Meta avatar" width="30" height="30"> <a href="#">{{$row['users']['name']}}</a> in <a href="#">{{$row['category']['category']}}</a> </span>
<span class="meta__date"><span class="glyphicon glyphicon-calendar"> <?php echo date('d M Y',strtotime($row['created_at'])); ?></span>
</div>
</div>
<div class="col-xs-12  col-sm-4">
<div class="meta__comments">
<span class="glyphicon glyphicon-comment"></span> &nbsp;
<a href="single-post.html#disqus_thread"></a>
</div>
</div>
</div>
</div>
</div>
 
<div class="sticky__box">
<span class="sticky__circle"></span>
<span class="sticky__circle"></span>
<span class="sticky__circle"></span>
<span class="sticky__circle"></span>
</div>
 
<div class="row">
<div class="col-xs-10  col-xs-offset-1">
 
<div class="post-content--front-page">
<h2 class="front-page-title">
<a href="javascript:;">{{$row['title']}}</a>

</h2>


<h2 class="front-page-title">
{{-- <a href="javascript:;">{{$row['title']}}</a>
</h2> --}}
 <h3><a href="javascript:;">{{$row['category']['category']}}</a></h3>
<p>{{substr($row['desc'],0,150)}}...</p>
</div>
 
<a href="single_post/<?=$row['id']; ?>">
<div class="read-more">
Continue reading
<div class="read-more__arrow">
<span class="glyphicon  glyphicon-chevron-right"></span>
</div>
</div>
</a>
</div>
</div>
</div>
 @endforeach

 
</div>
 


@endsection('content')

<!-- Mirrored from html-demo.proteusthemes.com/readable/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2017 03:21:08 GMT -->
