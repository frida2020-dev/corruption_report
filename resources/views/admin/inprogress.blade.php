@extends('layouts.admin_layout.admin_layout')
@section('content')

<main>
    <div class="container-fluid">
        <br>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Inprogress Reports</li>
        </ol>
        
        
        <div class="card mb-6">
            <div class="container-fluid">
                <div class="card-header"><i class="fa fa-desktop mr-1"></i>&nbsp; Inprogress Reports</div>
                <br><br>
                <div class="table-responsive">
                    <div class="bootstrap-table bootstrap4">
                        <div class="fixed-table-toolbar"><div class="columns columns-right btn-group float-right"><button class="btn btn-secondary" type="button" name="paginationSwitch" aria-label="Pagination Switch" title="Hide/Show pagination">
                            <i class="fa fa-caret-square-down"></i>
                            
                        </button><button class="btn btn-secondary" type="button" name="refresh" aria-label="Refresh" title="Refresh">
                            <i class="fa fa-sync"></i>
                            
                        </button><button class="btn btn-secondary" type="button" name="toggle" aria-label="Toggle" title="Toggle">
                            <i class="fa fa-toggle-off"></i>
                            
                        </button><button class="btn btn-secondary" type="button" name="fullscreen" aria-label="Fullscreen" title="Fullscreen">
                            <i class="fa fa-arrows-alt"></i>
                            
                        </button>
                        <br><br>
                        <div class="keep-open btn-group" title="Columns">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-label="Columns" title="Columns">
                                <i class="fa fa-th-list"></i>
                                
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right"><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="date" value="2" checked="checked"> <span>Date</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="names" value="3" checked="checked"> <span>Names</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="refno" value="4" checked="checked"> <span>RefNo</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="gender" value="5" checked="checked"> <span>Gender</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="cont" value="6" checked="checked"> <span>Tel</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="comment" value="7" checked="checked"> <span>Comment</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="status" value="8" checked="checked"> <span>Status</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="action" value="9" checked="checked"> <span>Complain</span></label></div></div><div class="export btn-group">
                                <button class="btn btn-secondary dropdown-toggle" aria-label="Export" data-toggle="dropdown" type="button" title="Export data">
                                    <i class="fa fa-download"></i>
                                    
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item " href="#" data-type="json">JSON</a><a class="dropdown-item " href="#" data-type="xml">XML</a><a class="dropdown-item " href="#" data-type="csv">CSV</a><a class="dropdown-item " href="#" data-type="txt">TXT</a><a class="dropdown-item " href="#" data-type="sql">SQL</a><a class="dropdown-item " href="#" data-type="excel">MS-Excel</a></div></div></div>
                                <div class="float-left search btn-group">
                                    <input class="form-control
                                    
                                    search-input" type="text" placeholder="Search" autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="fixed-table-container" style="padding-bottom: 0px;">
                                <div class="fixed-table-header" style="display: none;"><table></table></div>
                                <div class="fixed-table-body">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-search-align="left" data-show-columns="true" data-show-toggle="true" data-show-refresh="true" data-show-fullscreen="true" data-show-export="true" class="table table-striped table-sm table-bordered table-hover" data-id-field="id" data-show-pagination-switch="true" data-striped="true" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-page-list="[5, 10, 20, 30, 40, 50, All]" data-export-options="{
                                        &quot;fileName&quot;: &quot;inprogress&quot;,
                                        &quot;ignoreColumn&quot;: [&quot;action&quot;,&quot;image&quot;,&quot;change&quot;,&quot;checkbox&quot;,&quot;checkincheckout&quot;,&quot;icon&quot;]
                                    }">
                                    <thead><tr><th style="text-align: center; " colspan="10"><div class="th-inner ">  Inprogress Complains</div><div class="fht-cell"></div></th></tr><tr><th class="bs-checkbox " style="vertical-align: siddle; width: 36px; " data-field="0" data-not-first-th=""><div class="th-inner "><label><input name="btSelectAll" type="checkbox"><span></span></label></div><div class="fht-cell"></div></th><th style="" data-field="sno"><div class="th-inner sortable both">Sno</div><div class="fht-cell"></div></th><th style="" data-field="date"><div class="th-inner sortable both">Date</div><div class="fht-cell"></div></th><th style="" data-field="names"><div class="th-inner sortable both">Names</div><div class="fht-cell"></div></th><th style="" data-field="refno"><div class="th-inner sortable both">RefNo</div><div class="fht-cell"></div></th><th style="" data-field="gender"><div class="th-inner sortable both">Gender</div><div class="fht-cell"></div></th><th style="" data-field="cont"><div class="th-inner sortable both">Tel</div><div class="fht-cell"></div></th><th style="" data-field="comment"><div class="th-inner sortable both">Comment</div><div class="fht-cell"></div></th><th style="" data-field="status"><div class="th-inner sortable both">Status</div><div class="fht-cell"></div></th><th style="" data-field="action"><div class="th-inner sortable both">Complain</div><div class="fht-cell"></div></th></tr></thead>
                                    <tbody>
                                        <tr class="odd gradeX" data-index="0">
                                            <td class="bs-checkbox " style="vertical-align: siddle; width: 36px; ">
                                                <label>
                                                    <input data-index="0" name="btSelectItem" type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                            <td style=""></td>
                                        </tr>
                                    </tbody>
                                            
                                </table></div>
                                <div class="fixed-table-footer"><table><thead><tr></tr></thead></table></div>
                            </div>
                            <div class="fixed-table-pagination"><div class="float-right pagination-detail">
                                <span class="pagination-info">
                                    Showing 1 to 1 of 1 rows
                                </span><span class="page-list" style="display: none;"><span class="btn-group dropdown dropup">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="page-size">
                                            10
                                        </span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu"><a class="dropdown-item " href="#">5</a></div></span> rows per page</span></div><div class="float-left pagination" style="display: none;"><ul class="pagination"><li class="page-item page-pre"><a class="page-link" aria-label="previous page" href="javascript:void(0)">Previous</a></li><li class="page-item active"><a class="page-link" aria-label="to page 1" href="javascript:void(0)">1</a></li><li class="page-item page-next"><a class="page-link" aria-label="next page" href="javascript:void(0)">Next</a></li></ul></div></div>
                                </div><div class="clearfix"></div>
                            </div>
                            
                        </div>
                        <div class="modal fade" id="form_modal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="saves/save_vdi.php">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Register VDI</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Make</label>
                                                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="make" placeholder="Enter VDI Make" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Serial No</label>
                                                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="serial_no" placeholder="Enter VDI Serial No" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Contractor| Delivered from</label>
                                                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="contractor" class="form-control" placeholder="Enter VDI Supplier" required="">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Station|Centre</label>
                                                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="centre" placeholder="Enter VDI Location" class="form-control" required="">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Condition</label>
                                                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="status" placeholder="Enter VDI condition" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Comment</label>
                                                    <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="comment" placeholder="Cemment about VDI" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                        <div class="modal-footer">
                                            <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                                            <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                        </div>
                                    </form></div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
                
                
                
@endsection