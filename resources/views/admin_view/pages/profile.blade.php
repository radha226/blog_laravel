<?php
	$menu='profile'
?>
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   	
      <!--BEGIN PAGE CONTENT-->
 <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
        
         
    <div class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">Profile</div>
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
                            <div class="caption"</div>
                        </div>
                        <div class="panel-body">
                            <div id="viewcode-editor-CKEditor" class="viewcode-example">
                                <form  class="form-horizontal" method="post" action="{{route('profile/edit',Auth::user()->id)}}">
                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-body pal">
                                        <div class="form-group"><label for="inputUsername"
                                         class="col-md-3 control-label">name
                                            <span class='require'>*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-icon"><i class="fa fa-user"></i><input
                                                        id="inputUsername" type="text"
                                                        placeholder="Username" class="form-control" value="<?= Auth::user()->name; ?>
         "></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label for="inputEmail"
                                                                       class="col-md-3 control-label">Email
                                            <span class='require'>*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-group"><span class="input-group-addon"><i
                                                        class="fa fa-envelope"></i></span><input type="text"
                                             placeholder="Email Address"
                                                                     class="form-control" value="<?= Auth::user()->email; ?>
         ">
                                                </div>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                               <label class="col-md-3 control-label" style="color: #FF9800;
    font-size: 15px;">
                                             <span class="require">
                                                             {{Session::get('insert')}}</span></label> 
                                             <div class="col-md-9">               
                                           <button type="submit" class="btn btn-success btn-block">Edit Profile </button>
                                           </div>
                                        </div>
                                      
                                        
                                    </div>
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
 