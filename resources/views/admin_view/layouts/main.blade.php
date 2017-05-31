<!DOCTYPE html>
<html lang="en">

@include('admin_view.component.head')
<body class="sidebar-color-grey font-source-sans-pro"><!--Modal Default-->
@include('admin_view.component.sidebar_collapse')
    <!--END TEMPLATE SETTING--><!--BEGIN TOPBAR-->
 @include('.admin_view.component.topbar')
  
    <!--END TOPBAR--><!--BEGIN HORIZONTAL MENU-->
@include('admin_view.component.horizontal')
 <div id="wrapper"><!--BEGIN PAGE WRAPPER-->
  <div id="page-wrapper"><!--BEGIN SIDEBAR MAIN-->
  		@include('admin_view.component.sidebar')<!--END SIDEBAR MAIN-->
  		<!--BEGIN CHAT FORM-->
  		@include('admin_view.component.chat')
    @yield('admin_view.content')
  </div> <!--END PAGE CONTENT-->
  </div> <!--END PAGE WRAPPER-->
 	<!--BEGIN FOOTER-->
    @include('admin_view.component.footer')
    <!--END FOOTER--></div>
@include('admin_view.component.script')
</body>

</html>