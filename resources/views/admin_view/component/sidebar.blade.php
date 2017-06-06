   @if(Auth::user()->status == 'admin') 
     
  
  <div class="sidebar-main sidebar">
                <div class="sidebar-collapse sidebar-scroll">
                    <ul id="sidebar-main" class="nav">
                        <li class="sidebar-search">
                           
                        </li>
                        <li class="sidebar-hide"><h4 class="sidebar-title-section">Main</h4></li>
                        <li <?php if($menu=='index'){ ?>class="active" <?php } ?>><a href="{{route('admin')}}"><i class="icon-home"></i><span class="menu-title">Dashboard</span></a>
                        </li>
                        <li <?php if($menu=='profile') {?> class="active" <?php } ?>><a href="{{route('profile')}}"><i class="icon-user"></i><span class="menu-title">Profile</span><span
                                class="badge badge-success"></span></a></li>
                        <li <?php if($menu=='add_category'){ ?>class="active" <?php } ?>><a href="{{route('categories')}}"><i class="icon-home"></i><span class="menu-title">Add Category</span></a>
                        </li>
                          <li <?php if($menu=='adminblog'){ ?>class="active" <?php } ?>><a href="{{route('adminblog')}}"><i class="icon-home"></i><span class="menu-title">Add Blog</span></a>
                        </li>
                         <li <?php if($menu=='blog_listing'){ ?>class="active" <?php } ?>><a href="{{route('blog_listing')}}"><i class="icon-home"></i><span class="menu-title">Blog List</span></a>
                        </li>
                         <li <?php if($menu=='comment_listing'){ ?>class="active" <?php } ?>><a href="{{route('comment_listing')}}"><i class="icon-home"></i><span class="menu-title">comment List</span></a>
                        </li>

                       
                    </ul>
                </div>
            </div>
        @endif

        <!--user panel-->

          @if(Auth::user()->status == 'user') 


  
  <div class="sidebar-main sidebar">
                <div class="sidebar-collapse sidebar-scroll">
                    <ul id="sidebar-main" class="nav">
                      
                        <li class="sidebar-hide"><h4 class="sidebar-title-section">Main</h4></li>
                        <li <?php if($menu=='index'){ ?>class="active" <?php } ?>><a href="{{route('admin')}}"><i class="icon-home"></i><span class="menu-title">Dashboard</span></a>
                        </li>
                        <li <?php if($menu=='profile') {?> class="active" <?php } ?>><a href="{{route('profile')}}"><i class="icon-user"></i><span class="menu-title">Profile</span><span
                                class="badge badge-success"></span></a></li>
                        
                        <li <?php if($menu=='add_blog'){ ?>class="active" <?php } ?>><a href="{{route('blog')}}"><i class="icon-home"></i><span class="menu-title">Add Blog</span></a>
                        </li>
                          <li <?php if($menu=='user_comment'){ ?>class="active" <?php } ?>><a href="{{route('comment_user')}}"><i class="icon-home"></i>
                          <span class="menu-title">Comment Listing</span></a>
                        </li>

                     
                    </ul>
                </div>
            </div>
        @endif