<?php
	$menu='add_category'
?>
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   	
      <!--BEGIN PAGE CONTENT-->
<!--BEGIN PAGE CONTENT-->
            <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Form Validation</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Form Validation</li>
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
                                        <div class="caption">Add Category</div>
                                    </div>
                                    <div class="panel-body">
                                        <div id="viewcode-form-register-script" class="viewcode-example">
                                         
                                            <form id="form-register" method="post" action="{{route('store.category')}}">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Category name &nbsp;
                                                                <span class="require">*</span>
                                                            </label>
                                                            <input type="text" name="category" class="form-control"/>
                                                        </div>
                                                        
                                                    </div>
                                                                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="color: #FF9800;
    font-size: 15px;">
                                                            <span class="require"> {{Session::get('insert')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-success btn-block">Submit </button>
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
            </div>     @endsection
    <!--BEGIN FOOTER-->
 