<?php
    $menu='index';
?>
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   
   <!--BEGIN PAGE CONTENT-->
            <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <ol class="breadcrumb charts-inline hidden-xs pull-right">
                        <li><p><span class="chart-title">Income</span><span
                                values="50000,60000,70000,50000,60000,50000,80000,40000,70000,80000"
                                class="sparkbar green mls mrm"></span><span class="chart-title">Outcome</span><span
                                values="5000,6000,3000,8000,4000,7000,5000,6000,3000,2000"
                                class="sparkbar default mls"></span></p></li>
                    </ol>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <div class="box-content"><!--BEGIN CONTENT-->
                    <div class="content">
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row mtl">
                                            <div class="col-md-12">
                                                <div id="map-visitor-chart" style="width: 100%; height:200px">
                                                    
                                                    <h3 class="info-title mtn" style="width: 100%;text-align: center; font-size: 53px;margin-top: 56px !important;color: #07bf29;">WELCOME</h3>
                
                                        @if(Auth::user()->status == 'admin') 
                                        <small style="width: 100%;text-align: center;font-size: 26px;padding-top: 36px !important;display: inline-block;">To Admin panel</small>
                                        @endif

                                         @if(Auth::user()->status == 'user')
                                         <small style="width: 100%;text-align: center;font-size: 26px;padding-top: 36px !important;display: inline-block;">To User panel</small>
                                        @endif 
                                                </div>
                                            </div>
                                          
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
 