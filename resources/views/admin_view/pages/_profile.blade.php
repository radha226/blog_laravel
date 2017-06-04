<?php
	$menu='profile'
?>
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   	<style>
		td{
			padding:6px;
			margin-bottom:20px;
		}
		input{
			border:0px;
		}
		.btn-success{
			width:auto !important;
		}
   	</style>
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
                           
                               <table border="" style="margin: 0 auto; width:100%; padding:30px;">
	<tr>
		<td colspan="2">User Edit</td>
	</tr>
	<tr>
		<td>Name:</td>
		<td>{!! Form::text('name',null,['placeholder'=>'Enter First name']) !!}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>{!! Form::text('email',null,['placeholder'=>'Enter email name']) !!}</td>
	</tr>
    <tr>
        <td>Image</td>
        {{-- <td>{!!Form::text('img') !!}</td> --}}
        <td>{!!Form::file('images') !!}</td>
    </tr>
	<tr>
	<td colspan="2" style="width:auto;">
	{!!Form::submit('Save User',['class'=>"btn btn-success btn-block"])!!}
	</td>
	</tr>

	

</table>
                           
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
                    <!--END CONTENT--></div>
 </div>
     @endsection
    <!--BEGIN FOOTER-->
