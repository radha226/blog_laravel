<?php
	$menu='user_comment'
?>
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   	
      <!--BEGIN PAGE CONTENT-->
<!--BEGIN PAGE CONTENT-->
<!--BEGIN TITLE & BREADCRUMB PAGE-->
<div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
<div class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Advanced Tables</div>
    </div>
    <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li><a href="#">Tables</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Advanced Tables</li>
    </ol>
    
</div>
<!--END TITLE & BREADCRUMB PAGE-->
<div class="box-content"><!--BEGIN CONTENT-->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="caption">Advanced Table</div>
                    </div>
                    <div class="panel-body">
                        <div class="row mbm">
                            <div class="col-md12">
                                <div id="viewcode-table-advanced" class="viewcode-example">
                                    <div class="table-responsive">
                                        <div id="table_id_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="row"><div class="col-md-4 col-xs-12"><div class="dataTables_length" id="table_id_length"><label>View <select name="table_id_length" aria-controls="table_id" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> records</label></div></div><div class="col-md-5 col-xs-12"><div class="DTTT_container" style="float: right;"><a class="DTTT_button DTTT_button_copy" id="ToolTables_table_id_0"><span>Copy</span><div style="position: absolute; left: 0px; top: 0px; width: 59px; height: 32px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_1" src="../assets/vendors/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="59" height="32" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=59&amp;height=32" wmode="transparent"></div></a><a class="DTTT_button DTTT_button_csv" id="ToolTables_table_id_1"><span>CSV</span><div style="position: absolute; left: 0px; top: 0px; width: 54px; height: 32px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_2" src="../assets/vendors/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="54" height="32" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=54&amp;height=32" wmode="transparent"></div></a><a class="DTTT_button DTTT_button_xls" id="ToolTables_table_id_2"><span>Excel</span><div style="position: absolute; left: 0px; top: 0px; width: 60px; height: 32px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_3" src="../assets/vendors/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="60" height="32" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=60&amp;height=32" wmode="transparent"></div></a><a class="DTTT_button DTTT_button_pdf" id="ToolTables_table_id_3"><span>PDF</span><div style="position: absolute; left: 0px; top: 0px; width: 54px; height: 32px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_4" src="../assets/vendors/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="54" height="32" name="ZeroClipboard_TableToolsMovie_4" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=4&amp;width=54&amp;height=32" wmode="transparent"></div></a><a class="DTTT_button DTTT_button_print" id="ToolTables_table_id_4" title="View print view"><span>Print</span></a></div></div><div class="col-md-3 col-xs-12"><div id="table_id_filter" class="dataTables_filter"><label>
                                        <div class="input-group input-group-sm mbs"><span class="input-group-btn"><button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#"><i class="fa fa-tint"></i>&nbsp;Newest</a></li><li><a href="#"><i class="fa fa-star"></i>&nbsp;Rating</a></li><li><a href="#"><i class="fa fa-money"></i>&nbsp;Price</a></li><li><a href="#"><i class="fa fa-user"></i>&nbsp;Sales</a></li></ul></span><input type="search" class="form-control input-sm" placeholder="" aria-controls="table_id"><span class="input-group-btn"><button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Search</button></span></div></label></div></div></div><table id="table_id" class="table table-hover table-striped table-advanced dataTable no-footer" role="grid">
                                            <thead>
            <tr role="row">
            <th style="width: 22px; padding: 5px 10px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="">
                <div class="icheckbox_square-blue checked" style="position: relative;"><input type="checkbox" class="checkall" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                </th>
                <th width="9%" class="sorting_asc" tabindex="0" aria-controls="table_id" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rec #: activate to sort column ascending" style="width: 56px;">id</th>
                <th class="sorting" tabindex="0" aria-controls="table_id" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 140px;">message</th>
               

               <!--  <th width="7%" class="sorting" tabindex="0" aria-controls="table_id" rowspan="1" colspan="1" aria-label="Order: activate to sort column ascending" style="width: 38px;">Order</th>

                <th width="12%" class="sorting" tabindex="0" aria-controls="table_id" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 87px;">Date</th>
                <th width="10%" class="sorting" tabindex="0" aria-controls="table_id" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 66px;">Price</th> -->
                <th width="9%" class="sorting" tabindex="0" aria-controls="table_id" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 56px;">Status</th>

                                            </thead><tbody>
                                         {{--    {{dd($listing)}} --}}
                                            @foreach($listing as $row)
                                            
                                                   
                                            <tr role="row" class="odd">
                                                <td><div class="icheckbox_square-blue checked" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
                                                <td class="sorting_1"><?=$row['id']; ?></td>
                                                <td><?=$row['message']; ?></td>
                                               
                                             

                                                 <td>
                                                   @if($row['status']=='1')

                                                <a href="javascript:;"><span style="padding:10px;" class="label label-sm label-success">approved</span></a>
                                                @endif
                                                 @if($row['status']=='0')

                                                <a href="javascript:;"><span style="padding:10px;" class="label label-sm label-danger">Disapproved</span></a>
                                                @endif
                                                 </td>
                                               
                                            </tr>
                                           @endforeach
                                           </tbody>
                                            </table><div class="row"><div class="col-md-6"><div class="dataTables_length"><label>View <select name="table_id_length" aria-controls="table_id" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> records</label></div></div><div class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="table_id_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="table_id" tabindex="0" id="table_id_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="table_id" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="table_id" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="table_id" tabindex="0"><a href="#">3</a></li><li class="paginate_button next" aria-controls="table_id" tabindex="0" id="table_id_next"><a href="#">Next</a></li></ul></div></div></div></div>
                                    </div>
                                <a href="javascript:;" class="btn-view-code" style="display: none;"><i class="fa fa-code"></i></a></div>
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
 