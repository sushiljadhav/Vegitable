<?php 
include('header.php');
?>
<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</div>
 <section class="my-orders">
	 <div class="container">

        <div class="row py-5">
            <!--<div class="col-md-3">
                <h2 class="mb-3 font-weight-normal">Filter</h2>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                </div>
            </div>-->
            <div class="col-md-12">
                <div class="d-flex justify-content-between w-100 mb-3">
                    <h2 class="font-weight-bold">My Orders</h2>
                    <!--<div class="form-group mb-0 pull-right col-lg-4">
                        <input type="text" class="search form-control" placeholder="Search by typing here..">
                    </div>-->
                </div>
                <div class="col-md-12 table-responsive search-table-col pl-0">     
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length">
													<label class="d-flex">Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
														<option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6">
															<div id="example_filter" class="dataTables_filter ">
																<label class="d-flex justify-content-center align-items-center">Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label>
															</div>
														</div>
													</div>
																<div class="row"><div class="col-sm-12"><table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row"><th id="trs-hd" style="width: 80	px" class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL. No.: activate to sort column descending">SL. No.</th><th id="trs-hd" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Transaction ID: activate to sort column ascending" style="width: 455.4px;">Transaction ID</th><th id="trs-hd" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 215.4px;">Date</th><th id="trs-hd" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 259.4px;">Status</th><th id="trs-hd" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 262.6px;">Action</th></tr>
                            </thead>
                            <tbody>
                            <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination justify-content-end"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="example_next"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
        </div>
	 </div>
       
    </section>
<?php 
	include('footer.php');
?>