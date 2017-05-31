

@extends('layouts/main_sidebar')
@section('content')


 

<div class="container">
<div class="boxed  push-down-60"> 
<div class="meta">
{{-- {{dd($model)}}  --}}
<img class="wp-post-image" src="{{asset('images')}}/<?=$model['img']; ?>" alt="Blog image" width="1138" height="493">
<div class="meta__container">
<div class="row">

<div class="col-xs-12  col-sm-4">
<div class="meta__comments">

</div>
</div>
</div>
</div>
</div>

 
<div class="row">
<div class="col-xs-10  col-xs-offset-1  col-md-8  col-md-offset-2  push-down-60">
 
<div class="post-content">
<h1>
<a href="#"><?=$model['title']; ?></a>
</h1>

<p><?=$model['desc']; ?></p>

</div>
 
<div class="row">
<div class="col-xs-12  col-sm-6">
 
<div class="post-comments">
<a class="btn  btn-primary" href="single-post.html">{{$model->userscomment->count()}} Comments</a>
</div>
 
</div>
<div class="col-xs-12  col-sm-6">
 

</div>
</div>

<div class="disqus-comments  push-down-45" id="comments">
<div id="disqus_thread"></div>
<div class="contact">
<h2>Comment</h2>
<p class="contact__text"></p>
 {{--  <form action="{{route('comment.submit')}}" enctype="multipart/form-data"  method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="row">

<div class="col-xs-12">
<textarea rows="6" type="text" placeholder="Your Message *"></textarea>
<a href="#" class="btn  btn-primary">Send Message</a> <span class="contact__obligatory">Fields marked with * are obligatory</span>
</div>
</div>
</form>
 --}}
 {{-- {{dd(Auth::user()->id)}} --}}
@if(Auth::guest())
   <li class="">
<a href="/login" class="dropdown-toggle" data-toggle="dropdown" style="color:red;font-size:26px;">pls login first for comment</a>
</li>
 
@else
<form action="{{route('comment.submit')}}" enctype="multipart/form-data"  method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  <input name="userid" type="hidden" placeholder="Enter a title"
                                                        class="form-control mbm" value="<?=Auth::user()->id; ?>"> 
                                  {{-- <input name="usercommentid" type="hidden" placeholder="Enter a title"
                                                        class="form-control mbm" value=""/>
                                --}}
                                 <input name="blogid" type="hidden" placeholder="Enter a title"
                                                        class="form-control mbm" value="<?= $model['id'];?>"> 
                                <textarea name="message" data-provide="markdown" rows="10"></textarea>
                               

                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
@endif


</div>
<script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                // var disqus_shortname = 'readablehtml'; 
              
                // (function() {
                //   var dsq = document.createElement('script');
                //   dsq.type = 'text/javascript';
                //   dsq.async = true;
                //   dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                //   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                // })();
              </script>
<noscript>Please enable JavaScript to view the

</noscript>

</div>

<!--comment listing-->
<div class="row">

 <div class="col-xs-12  col-sm-12">
 
<div class="post-author">
<h5>Comments</h5>
<hr>


@foreach($model->userscomment as $value1)
  
<div class="comment_section">
  <img src="{{asset('images')}}/<?=$model->users->images; ?>" alt="Post authordfdfdf" style="width:60px;height:53px;">
  <h5>
  <a href="javascript:;">{{$model->users->name}}</a>
  </h5>
  <span class="post-author__text">{{$value1['message']}}</span>
</div>

@endforeach

</div>
 
</div> 
 <div class="col-xs-12  col-sm-6">
 

 
</div> 
</div>
 

 
</div>
</div>
 
</div>
</div>

@endsection('content')

<!-- Mirrored from html-demo.proteusthemes.com/readable/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2017 03:21:08 GMT -->
