@extends('layouts.admin_layout.admin_layout')
@section('content')
<main>
    <div class="container-fluid">
        <br>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Report Status Search</li>
        </ol>
        
        <div class="card mb-4">
            
            <div class="card-body">

                <form method="POST" action="">
                    <div class="form-inline">
                        <input type="text" class="form-control" name="keyword" placeholder="Search here..." required="required">
                        <button class="btn btn-success" name="search"><i class="fas fa-search"></i> Search Report</button>
                    </div>
                </form>


                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="bootstrap-table bootstrap4">
                                <div class="fixed-table-toolbar">
                                    <div class="columns columns-right btn-group float-right"><button class="btn btn-secondary" type="button" name="paginationSwitch" aria-label="Pagination Switch" title="Hide/Show pagination">
                                        <i class="fa fa-caret-square-down"></i>
                                        
                                        </button><button class="btn btn-secondary" type="button" name="refresh" aria-label="Refresh" title="Refresh">
                                            <i class="fa fa-sync"></i>
                                            
                                        </button><button class="btn btn-secondary" type="button" name="toggle" aria-label="Toggle" title="Toggle">
                                            <i class="fa fa-toggle-off"></i>
                                            
                                        </button><button class="btn btn-secondary" type="button" name="fullscreen" aria-label="Fullscreen" title="Fullscreen">
                                            <i class="fa fa-arrows-alt"></i>
                                            
                                        </button>
                                        <div class="keep-open btn-group" title="Columns">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-label="Columns" title="Columns">
                                                <i class="fa fa-th-list"></i>
                                                
                                                <span class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <label class="dropdown-item dropdown-item-marker">
                                                    <input type="checkbox" data-field="repdate" value="0" checked="checked"> 
                                                    <span>Reporting date</span>
                                                </label>
                                                <label class="dropdown-item dropdown-item-marker">
                                                    <input type="checkbox" data-field="refno" value="2" checked="checked"> 
                                                    <span>RefNo</span>
                                                </label>
                                                <label class="dropdown-item dropdown-item-marker">
                                                    <input type="checkbox" data-field="gender" value="3" checked="checked"> 
                                                    <span>Gender</span>
                                                </label>
                                                <label class="dropdown-item dropdown-item-marker">
                                                    <input type="checkbox" data-field="phone" value="4" checked="checked"> 
                                                    <span>Phone</span>
                                                </label>
                                                <label class="dropdown-item dropdown-item-marker">
                                                    <input type="checkbox" data-field="insdate" value="5" checked="checked"> 
                                                    <span>Insident date</span>
                                                </label>
                                                <label class="dropdown-item dropdown-item-marker">
                                                    <input type="checkbox" data-field="status" value="6" checked="checked"> 
                                                    <span>Status</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="export btn-group">
                                            <button class="btn btn-secondary dropdown-toggle" aria-label="Export" data-toggle="dropdown" type="button" title="Export data">
                                                <i class="fa fa-download"></i>
                                                
                                                <span class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item " href="#" data-type="json">JSON</a>
                                                <a class="dropdown-item " href="#" data-type="xml">XML</a>
                                                <a class="dropdown-item " href="#" data-type="csv">CSV</a>
                                                <a class="dropdown-item " href="#" data-type="txt">TXT</a>
                                                <a class="dropdown-item " href="#" data-type="sql">SQL</a>
                                                <a class="dropdown-item " href="#" data-type="excel">MS-Excel</a>
                                            </div>
                                            
                                            
                                        </div>
                                    
                                    </div>
                                
                                </div>
                                <br><br>
                            
                                <div class="fixed-table-container" style="padding-bottom: 0px;">
                                    <div class="fixed-table-header" style="display: none;"><table></table></div>
                                    <div class="fixed-table-body">
                                        
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="false" data-search-align="left" data-show-columns="true" data-show-toggle="true" data-show-refresh="true" data-show-fullscreen="true" data-show-export="true" class="table table-striped table-sm table-bordered table-hover" data-id-field="id" data-show-pagination-switch="true" data-striped="true" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-page-list="[5, 10, 20, 30, 40, 50, All]" data-export-options="{
                                            &quot;fileName&quot;: &quot;vdis&quot;,
                                            &quot;ignoreColumn&quot;: [&quot;action&quot;,&quot;image&quot;,&quot;change&quot;,&quot;checkbox&quot;,&quot;checkincheckout&quot;,&quot;icon&quot;]
                                        }">
                                            <thead><tr><th style="text-align: center; " colspan="7"><div class="th-inner ">  Search Results</div><div class="fht-cell"></div></th></tr><tr><th style="" data-field="repdate" data-not-first-th=""><div class="th-inner sortable both">Reporting date</div><div class="fht-cell"></div></th><th style="" data-field="cname"><div class="th-inner sortable both">Complainant's Names</div><div class="fht-cell"></div></th><th style="" data-field="refno"><div class="th-inner sortable both">RefNo</div><div class="fht-cell"></div></th><th style="" data-field="gender"><div class="th-inner sortable both">Gender</div><div class="fht-cell"></div></th><th style="" data-field="phone"><div class="th-inner sortable both">Phone</div><div class="fht-cell"></div></th><th style="" data-field="insdate"><div class="th-inner sortable both">Insident date</div><div class="fht-cell"></div></th><th style="" data-field="status"><div class="th-inner sortable both">Status</div><div class="fht-cell"></div></th></tr></thead>
                                            <tbody><tr data-index="0"><td style="" data-align="center" colspan="7">Key in details to search</td></tr></tbody>
                                        </table>
                                    </div>
                                    <div class="fixed-table-footer"><table><thead><tr></tr></thead></table></div>
                                </div>
                                <div class="fixed-table-pagination">
                                    <div class="float-right pagination-detail">
                                        <span class="pagination-info">
                                            Showing 1 to 1 of 1 rows
                                        </span>
                                        <span class="page-list" style="display: none;">
                                            <span class="btn-group dropdown dropup">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span class="page-size">
                                                        10
                                                    </span>
                                                    <span class="caret"></span>
                                                </button>
                                                <div class="dropdown-menu"><a class="dropdown-item " href="#">5</a></div>
                                            </span> 
                                            rows per page
                                        </span>
                                    </div>

                                    <div class="float-left pagination" style="display: none;">
                                        <ul class="pagination">
                                            <li class="page-item page-pre">
                                                <a class="page-link" aria-label="previous page" href="javascript:void(0)">Previous</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" aria-label="to page 1" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item page-next">
                                                <a class="page-link" aria-label="next page" href="javascript:void(0)">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="clearfix"></div>
                                
                                
                        </div>
                        
                    </div>
                        
                    <div></div>
                    
                </div>
            </div>
        </div>
    </div>
</main>


@endsection