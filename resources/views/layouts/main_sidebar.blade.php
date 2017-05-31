<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from html-demo.proteusthemes.com/readable/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2017 03:20:48 GMT -->
@include('components.head')
@include('components.navbar')
@include('components.search')

<div class="container">
  <div class="row">
  @yield('content')
 {{--  @include('components.sidebar') --}}
  </div>
</div>
  




@include('components.footer')
@include('components.script')


</html>