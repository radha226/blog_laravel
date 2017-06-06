<?php
	$menu='add_blog';
?>
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   	
      <!--BEGIN PAGE CONTENT-->
 <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">Blog</div>
        </div>
        <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
            <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                    class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">Form Editor</li>
        </ol>
        <div class="view-code-wrapper pull-right">
            <div id="setting-view-code" data-on="success" data-off="default" data-on-label="View"
                 data-text-label="Code" data-off-label="Off" class="make-switch switch-small"><input
                    type="checkbox" checked="checked" class="switch"/></div>
        </div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <div class="box-content"><!--BEGIN CONTENT-->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="caption">Blog add</div>
                        </div>
                        <div class="panel-body">
                            <div id="viewcode-editor-markdown" class="viewcode-example">
                            <div style="color: #FF9800; font-size: 15px;">
                                {{Session::get('insert')}}
                            </div>
                                <form action="{{route('blog.submit')}}" enctype="multipart/form-data"  method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input name="title" type="text" placeholder="Enter a title"
                                                        class="form-control mbm"/>
                                <textarea name="desc" data-provide="markdown" rows="10"></textarea><br>
                                <input name="userid" type="hidden" placeholder="Enter a title"
                                                        class="form-control mbm" value="<?=Auth::user()->id; ?>"/>
                                <select name="category_id" style="width:100%; padding:10px; margin:20px 0px;">
                                    @foreach(App\add_category::categorylist() as $key => $value)
                                        <option value="{{$key}}"> {{$value}} </option>
                                    @endforeach
                                </select>



                                 
                                <input type="file" name="img">

                                    <hr/>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!--END CONTENT--></div>
</div>
     @endsection
    <!--BEGIN FOOTER-->
 