<div class="col-xs-12  col-md-4">
 
<div class="widget-author  boxed  push-down-30">
<div class="widget-author__image-container">
<div class="widget-author__avatar--blurred">
<img src="images/dummy/about-1.jpg" alt="Avatar image" width="90" height="90">
</div>
<img class="widget-author__avatar" src="{{asset('template/images/dummy/about-1.jpg')}}" alt="Avatar image" width="90" height="90">
</div>
<div class="row">
<div class="col-xs-10  col-xs-offset-1">
<h4>Timothy Miler</h4>
<br><br>
{{-- <p>User Interface Designer, Amateurish Poker Player and Imaginary Breakdancer ...</p>
 --}}</div>
</div>
</div>
<div class="sidebar  boxed  push-down-30">
<div class="row">
<div class="col-xs-10  col-xs-offset-1">
 
<div class="widget-categories  push-down-30">
<h6>Categories</h6>
<ul>
@foreach(App\add_category::categorylist() as $key => $value)
<li>

<a href="#">{{$value}}&nbsp; {{-- <span class="widget-categories__text">(16)</span>  --}}</a>

</li>
@endforeach()

</ul>
</div>
 

 

 
<div class="widget-posts  push-down-30">
<h6>Recent</h6>
 
<ul class="nav  nav-tabs">
<li class="active">
<a href="#recent-posts" data-toggle="tab"> <span class="glyphicon  glyphicon-time"></span> &nbsp;Recent Posts </a>
</li>

</ul>
 
<div class="tab-content">
<div class="tab-pane  fade  in  active" id="recent-posts">
<div class="push-down-15">
<img src="images/dummy-licensed/blog-image-small.jpg" alt="Posts">
<h5>
<a href="single-post.html">This is a showcase of the most recent posts</a>
</h5>
<span class="widget-posts__time">19 hours ago</span>
</div>
<div class="push-down-15">
<img src="{{asset('template/images/dummy-licensed/blog-image-3-small.jpg')}}" alt="Posts">
<h5>
<a href="single-post.html">This is a showcase of the most recent posts</a>
</h5>
<span class="widget-posts__time">19 hours ago</span>
</div>
<div class="push-down-15">
<img src="{{asset('template/images/dummy-licensed/blog-image-small.jpg')}}" alt="Posts">
<h5>
<a href="single-post.html">This is a showcase of the most recent posts</a>
</h5>
<span class="widget-posts__time">19 hours ago</span>
</div>
</div>
<div class="tab-pane  fade" id="popular-posts">
<div class="push-down-15">
<img src="{{asset('template/images/dummy-licensed/blog-image-3-small.jpg')}}" alt="Posts">
<h5>
<a href="single-post.html">This is a showcase of the most popular posts</a>
</h5>
<span class="widget-posts__time">9 hours ago</span>
</div>
<div class="push-down-15">
<img src="{{asset('template/images/dummy-licensed/blog-image-3-small.jpg')}}" alt="Posts">
<h5>
<a href="single-post.html">This is a showcase of the most popular posts</a>
</h5>
<span class="widget-posts__time">12 hours ago</span>
</div>
<div class="push-down-15">
<img src="{{asset('template/images/dummy-licensed/blog-image-3-small.jpg')}}" alt="Posts">
<h5>
<a href="single-post.html">This is a showcase of the most popular posts</a>
</h5>
<span class="widget-posts__time">19 hours ago</span>
</div>
</div>
</div>
</div>

 

<div class="widget-recent-comments  push-down-30">
<h6>Recent Comments</h6>
<ul>
<li>
Mihael on
<a href="single-post.html#comments">ProteusThemes and its products are great</a>
<br/>
</li>
<li>
Jaka on
<a href="single-post.html#comments">Readable is most readable WordPress theme out there</a>
</li>
<li>
Mihael on
<a href="single-post.html#comments">Everybody loves Readable</a>
</li>
</ul>
</div>

</div>
</div>
</div>
</div>
