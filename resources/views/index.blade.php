@extends('layout.layout') @section('title','Exim Pulse')
@section('content')
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
	<!--begin::Form-->
	<form action="#">
		<!--begin::Card-->
		<div class="card mb-7">
			<!--begin::Card body-->
			<div class="card-body">
				<!--begin::Compact form-->
				<div class="d-flex align-items-center">
					<!--begin::Input group-->
					<div class="position-relative w-md-400px me-md-2">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
					</div>
					<!--end::Input group-->
					<!--begin:Action-->
					<div class="d-flex align-items-center">
						<button type="submit" class="btn btn-primary me-5">Search</button>
						<a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form">Advanced Search</a>
					</div>
					<!--end:Action-->
				</div>
				<!--end::Compact form-->
				<!--begin::Advance form-->
				<div class="collapse" id="kt_advanced_search_form">
					<!--begin::Separator-->
					<div class="separator separator-dashed mt-9 mb-6"></div>
					<!--end::Separator-->
					<!--begin::Row-->
					<div class="row g-8 mb-8">
						<!--begin::Col-->
						<div class="col-xxl-7">
							<label class="fs-6 form-label fw-bolder text-dark">Tags</label>
							<input type="text" class="form-control form-control form-control-solid" name="tags" value="products, users, events" />
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xxl-5">
							<!--begin::Row-->
							<div class="row g-8">
								<!--begin::Col-->
								<div class="col-lg-6">
									<label class="fs-6 form-label fw-bolder text-dark">Team Type</label>
									<!--begin::Select-->
									<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
										<option value=""></option>
										<option value="1">Not started</option>
										<option value="2" selected="selected">In Progress</option>
										<option value="3">Done</option>
									</select>
									<!--end::Select-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<label class="fs-6 form-label fw-bolder text-dark">Select Group</label>
									<!--begin::Radio group-->
									<div class="nav-group nav-group-fluid">
										<!--begin::Option-->
										<label>
											<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
											<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bolder px-4">All</span>
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<label>
											<input type="radio" class="btn-check" name="type" value="users" />
											<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bolder px-4">Users</span>
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<label>
											<input type="radio" class="btn-check" name="type" value="orders" />
											<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bolder px-4">Orders</span>
										</label>
										<!--end::Option-->
									</div>
									<!--end::Radio group-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="row g-8">
						<!--begin::Col-->
						<div class="col-xxl-7">
							<!--begin::Row-->
							<div class="row g-8">
								<!--begin::Col-->
								<div class="col-lg-4">
									<label class="fs-6 form-label fw-bolder text-dark">Min. Amount</label>
									<!--begin::Dialer-->
									<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
										<!--begin::Decrease control-->
										<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
											<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Decrease control-->
										<!--begin::Input control-->
										<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50" />
										<!--end::Input control-->
										<!--begin::Increase control-->
										<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
											<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Increase control-->
									</div>
									<!--end::Dialer-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-4">
									<label class="fs-6 form-label fw-bolder text-dark">Max. Amount</label>
									<!--begin::Dialer-->
									<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
										<!--begin::Decrease control-->
										<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
											<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Decrease control-->
										<!--begin::Input control-->
										<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$100" />
										<!--end::Input control-->
										<!--begin::Increase control-->
										<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
											<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Increase control-->
									</div>
									<!--end::Dialer-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-4">
									<label class="fs-6 form-label fw-bolder text-dark">Team Size</label>
									<input type="text" class="form-control form-control form-control-solid" name="city" />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xxl-5">
							<!--begin::Row-->
							<div class="row g-8">
								<!--begin::Col-->
								<div class="col-lg-6">
									<label class="fs-6 form-label fw-bolder text-dark">Category</label>
									<!--begin::Select-->
									<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
										<option value=""></option>
										<option value="1">Not started</option>
										<option value="2" selected="selected">Select</option>
										<option value="3">Done</option>
									</select>
									<!--end::Select-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<label class="fs-6 form-label fw-bolder text-dark">Status</label>
									<div class="form-check form-switch form-check-custom form-check-solid mt-1">
										<input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
										<label class="form-check-label" for="flexSwitchChecked">Active</label>
									</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Advance form-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</form>
	<!--end::Form-->
	<!--begin::Toolbar-->
	<div class="d-flex flex-wrap flex-stack pb-7">
		<!--begin::Title-->
		<div class="d-flex flex-wrap align-items-center my-1">
			<h3 class="fw-bolder me-5 my-1">0 Items Found
				<span class="text-gray-400 fs-6">by Recent Updates ↓</span></h3>
			</div>
			<!--end::Title-->
			<!--begin::Controls-->
			<div class="d-flex flex-wrap my-1">
				<!--begin::Tab nav-->
				<ul class="nav nav-pills me-6 mb-2 mb-sm-0">

					<li class="nav-item m-0">
						<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active" data-bs-toggle="tab" href="#kt_project_users_table_pane">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
									<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
					</li>
				</ul>
				<!--end::Tab nav-->
				<!--begin::Actions-->
				<div class="d-flex my-0">
					<!--begin::Select-->
					<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-sm border-body bg-body w-150px me-5">
						<option value="1">Recently Updated</option>
						<option value="2">Last Month</option>
						<option value="3">Last Quarter</option>
						<option value="4">Last Year</option>
					</select>
					<!--end::Select-->
					<!--begin::Select-->
					<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-sm border-body bg-body w-100px">
						<option value="1">Excel</option>
						<option value="1">PDF</option>
						<option value="2">Print</option>
					</select>
					<!--end::Select-->
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Controls-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Tab Content-->
		<div class="tab-content">

			<!--begin::Tab pane-->
			<div id="kt_project_users_table_pane" class="tab-pane fade show active">
				<!--begin::Card-->
				<div class="card card-flush">
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->

						
								<style>
									.dt-more-container {
										text-align:center;
										margin:2em 0;
									}
								</style>

								

								<table id="example" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Data Type</th>
											<th>Country</th>
											<th>Consignment Type</th>
											<th>Consignment Period</th>
											<th>Shipment Month</th>
											<th>Port Of Loading</th>
											<th>Mode Of Shipment</th>
											<th>Port Code</th>
											<th>Sbill No</th>
											<th>Sbill Date</th>
											<th>HS Code</th>
											<th>Product Description</th>
											<th>Quantity</th>
											<th>UQC</th>
											<th>Invoice Unit Rate FC</th>
											<th>Invoice Currency</th>
											<th>Unit Value INR</th>
											<th>Total Fob INR</th>
											<th>Invoice No</th>
											<th>Port Code Discharge</th>
											<th>Port Code Discharge</th>
											<th>Country Destination</th>
											<th>Consignee ID</th>
											<th>Consignee Name</th>
											<th>Consignee Address</th>
											<th>Consignee Country</th>
											<th>CHA Code</th>
											<th>CHA Name</th>
											<th>IEC</th>
											<th>Exporter Name</th>
										</tr>
									</thead>
								</table>

								<div class="dt-more-container">
									<button id="btn-example-load-more" style="display:none">Load More</button>
								</div>


							</div>
							<!--end::Table container-->
						</div>
						<!--end::Card body-->
						<!--end::Card-->
					</div>
					<!--end::Tab pane-->
				</div>
				<!--end::Tab Content-->
			</div>
			<!--end::Container-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function (){
					var table = $('#example').DataTable({
						dom: 'frt',
						ajax: "{{route('admin.index')}}",
						columns: [
							{ "data": "id" },
							{ "data": "data_type" },
							{ "data": "country" },
							{ "data": "consignment_type" },
							{ "data": "consignment_period" },
							{ "data": "shipment_month" },
							{ "data": "port_of_loading" },
							{ "data": "port_code" },
							{ "data": "sbill_no" },
							{ "data": "sbill_date" },
							{ "data": "shipment_id" },
							{ "data": "shipment_date" },
							{ "data": "hs_code" },
							{ "data": "product_description" },
							{ "data": "quantity" },
							{ "data": "uqc" },
							{ "data": "invoice_unit_rate_fc" },
							{ "data": "invoice_currency" },
							{ "data": "unit_value_inr" },
							{ "data": "total_fob_value_inr" },
							{ "data": "invoice_no" },
							{ "data": "port_code_discharge" },
							{ "data": "country_destination" },
							{ "data": "consignee_id" },
							{ "data": "consignee_name" },
							{ "data": "consignee_address" },
							{ "data": "consignee_country" },
							{ "data": "cha_code" },
							{ "data": "cha_name" },
							{ "data": "iec" },
							{ "data": "exporter_name" },
							],
						drawCallback: function(){
							if($('#btn-example-load-more').is(':visible')){
								$('html, body').animate({
									scrollTop: $('#btn-example-load-more').offset().top
								}, 1000);
							}
							$('#btn-example-load-more').toggle(this.api().page.hasMore());
						}      
					});
					$('#btn-example-load-more').on('click', function(){
						table.page.loadMore();
					});
				});
			</script>			
			@endsection