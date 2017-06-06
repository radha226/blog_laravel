
<header class="header  push-down-45">
<div class="container">
<div class="logo  pull-left">
<a href="/">
<img src="{{asset('template/images/logo.png')}}" alt="Logo" width="352" height="140">
</a>
</div>
 
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#readable-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<nav class="navbar  navbar-default" role="navigation">
 
<div class="collapse  navbar-collapse" id="readable-navbar-collapse">
<ul class="navigation">
<li class="dropdown  active">
<a href="/" class="dropdown-toggle" data-toggle="dropdown">Home</a>
{{-- <ul class="navigation__dropdown">
<li> <a href="index.html">Home (Sidebar)</a> </li>
<li> <a href="home-slider.html">Home (Slider)</a> </li>
<li> <a href="home-multi-columns.html">Home (Multi Columns)</a> </li>
<li> <a href="home-ads.html">Home (With Ads)</a> </li>
<li> <a href="home-no-sidebar.html">Home (No Sidebar)</a> </li>
<li> <a href="home-full-width.html">Home (Full Width)</a> </li>
</ul> --}}
</li>
{{--<li class="dropdown">
<a href="single_post" class="dropdown-toggle" data-toggle="dropdown">Single Post</a>
 <ul class="navigation__dropdown">
<li> <a href="single-post.html">Single Post</a> </li>
<li> <a href="single-post-without-image.html">Single Post (No Image)</a> </li>
<li> <a href="single-post-video.html">Single Post (Video)</a> </li>
<li> <a href="single-post-full-width.html">Single Post (Full Width Image)</a> </li>
<li> <a href="search-results.html">Search Results</a> </li>
</ul> 
</li>--}}

{{-- <li class="">
<a href="features.html" class="dropdown-toggle" data-toggle="dropdown">Features</a>
</li> --}}
<li class="">

 <a href="{{route('about')}}" class="dropdown-toggle" data-toggle="dropdown">About</a>
</li>
<li class="">
<a href="{{route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
</li>

	@if(Auth::guest())

<li class="">
<a href="{{route('login')}}" class="dropdown-toggle" data-toggle="dropdown">login</a>
</li>
<li class="">
<a href="{{route('register')}}" class="dropdown-toggle" data-toggle="dropdown">register</a>
</li>
	@else

<li class="">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">{{ Auth::user()->name}}</a>
</li>
<li class="dropdown">
<a href="{{route('admin')}}" class="dropdown-toggle" data-toggle="dropdown">My account</a>
{{-- <ul class="navigation__dropdown">
<li> <a href="single-post.html">Single Post</a> </li>
<li> <a href="single-post-without-image.html">Single Post (No Image)</a> </li>
</ul> --}}
</li>


<li class="">
<a href="{{route('logout')}}" class="dropdown-toggle" data-toggle="dropdown">logout</a>
</li>
@endif

</ul>
</div> 
</nav>

</div>
</header>