@extends('layout.layout') @section('title','Exim Pulse')

@section('content')
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
	<!--begin::Form-->
	<form action="{{route('search.filter')}}" method="POST">
		@csrf
		<!--begin::Card-->
		<div class="card_box_common mb-7">
			<!--begin::Card body-->
			<div class="">

				<!--begin::Compact form-->
				<div class="d-flex align-items-center">
					<div class="position-relative w-md-250px me-md-2">
						<select class="form-select input_padding_common search_product" data-kt-repeater="select2" on data-placeholder="Select an option" id="product_data" name="product_data" value="{{request('product_data')}}" required>
							<option value="">Search Field</option>
							<option value="productDesc" <?php echo (isset($_POST['product_data']) && $_POST['product_data'] == 'productDesc') ? 'selected="selected"' : '' ?>>Product</option>
							<option value="hSCode" <?php echo (isset($_POST['product_data']) && $_POST['product_data'] == 'hSCode') ? 'selected="selected"' : '' ?>>HS 2</option>
							<option value="hs4Or8" <?php echo (isset($_POST['product_data']) && $_POST['product_data'] == 'hs4Or8') ? 'selected="selected"' : '' ?>>HS 4, 6 Or 8</option>
							<!-- <option value="GlobalImporter">Consignee Name</option>
                            <option value="GlobalExporter">Shipper Name</option>
                            <option value="GlobalCompany">Company Name</option> -->
						</select>
					</div>
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
						<!-- <input type="text" class="form-control form-control-solid ps-10 typeahead" name="search_data" value="{{request('search_data')}}" placeholder="Search" /> -->

						<input class="typeahead search_p form-control  form-control-solid ps-10" data-placeholder="Please enter details of _" type="text" name="search_data" id="data_field" value="{{request('search_data')}}" required>
						<button class="btn btn-sm btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear_tags">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
									<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
					<!--end::Input group-->
					<!--begin:Action-->
					<div class="d-flex align-items-center">
						<button type="submit" id="submit_search" class="btn btn-sm common_btn_one me-2">Search</button>
						<a id="kt_horizontal_search_advanced_link" class="btn btn-sm common_btn_one" href="#kt_advanced_search_form">Advanced Search</a>
					</div>
					<!--end:Action-->
				</div>
				<div class="tag_example">
					<h3>Search Example:</h3>
					<ul class="example_tags">

					</ul>
				</div>
				<!--end::Compact form-->
				<!--begin::Advance form-->
				<div class="collapse filter_data show" id="kt_advanced_search_form">
					<!--begin::Separator-->
					<div class="separator separator-dashed mt-4 mb-4"></div>
					<!--end::Separator-->
					<!--begin::Row-->
					<h4 class="pb-2">Filter</h4>
					<div class="row g-8 mb-8">
						<!--begin::Col-->

						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xxl-12 mt-8">
							<!--begin::Row-->
							<div class="row g-8">
								<!--begin::Col-->
								<div class="col-lg-2 col-md-2 col-sm-4">

									<!--begin::Select-->
									<select class="export_import input_padding_common_tow form-select  multiselect_class" multiple="multiple">
										<option value="O1" data-badge="">Export</option>
										<option value="O2" data-badge="">Import</option>

									</select>
									<!--end::Select-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-3 col-md-3 col-sm-4">
									<!--begin::Select-->
									<select class="country_select input_padding_common_tow form-select  multiselect_class" multiple="multiple">

										<option value="O1" data-badge="">India</option>
										<option value="O2" data-badge="">USA</option>

									</select>
									<!--end::Col-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4">
									<!--begin::Select-->
									<select class="hscode form-select input_padding_common_tow multiselect_class" multiple="multiple">

										<option value="O1" data-badge="">25</option>
										<option value="O2" data-badge="">45</option>

									</select>
									<!--end::Col-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4">
									<!--begin::Select-->
									<select class="year_select form-select input_padding_common_tow multiselect_class" multiple="multiple">

										<option value="O1" data-badge="">2022</option>
										<option value="O2" data-badge="">2021</option>

									</select>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<div class="col-lg-1 col-md-1 col-sm-2">
									<button type="button" class="btn btn-sm common_btn_one me-5">Apply</button>
								</div>
							</div>
							<!--end::Col-->
						</div>

						<!--end::Row-->
						<!--begin::Row-->

						<!--end::Row-->
					</div>
					<!--end::Advance form-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
	</form>
	<!--end::Form-->
	<!--begin::Tab Content-->
	<div class="tab-content">

		<!--begin::Tab pane-->
		<div id="kt_project_users_table_pane" class="tab-pane fade show active">
			<!--begin::Card-->
			<div class="card card-flush">
				<!--begin::Card body-->
				<div class="card-body pt-0 common_card_body">
					<!--begin::Table container-->
					<div class="table-responsive table-responsive-common">
						<!--begin::Table-->


						<style>
							.dt-more-container {
								text-align: center;
								margin: 2em 0;
							}
						</style>
						<div class="card-header  align-items-center py-5 gap-2 gap-md-5">
							<!--begin::Card title-->
							<div class="card-title">
								<!--begin::Search-->
								<div class="d-flex align-items-center position-relative">

									<h3 class="fw-bolder me-5 my-1">Showing 1 to {{$exported_data_count->count()}} of {{$count_of_data}} records
										<!-- <span class="text-gray-400 fs-6">records</span> -->
									</h3>
								</div>
								<!--end::Search-->
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar" style="display: none;">
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
							<!--end::Card toolbar-->
						</div>
					</div>

					<table id="exportindia_table" class="table table-row-bordered table-row-dashed gy-4 same_table_design align-middle fw-bolder" style="border: none !important;" cellspacing="0" width="100%">
						<thead class="fs-7 text-gray-400 text-uppercase">
							<tr>
								<th class="min-w-50px">ID</th>
								<th class="min-w-100px">Data Type</th>
								<th class="min-w-100px">Country</th>
								<th class="min-w-200px">Consignment Type</th>
								<th class="min-w-200px">Consignment Period</th>
								<th class="min-w-200px">Shipment Month</th>
								<th class="min-w-200px">Port Of Loading</th>
								<th class="min-w-200px">Mode Of Shipment</th>
								<th class="min-w-150px">Port Code</th>
								<th class="min-w-100px">Sbill No</th>
								<th class="min-w-150px">Sbill Date</th>
								<th class="min-w-150px">Shipment ID</th>
								<th class="min-w-150px">Shipment Date</th>
								<th class="min-w-100px">HS Code</th>
								<th class="min-w-400px">Product Description</th>
								<th class="min-w-100px">Quantity</th>
								<th class="min-w-50px">UQC</th>
								<th class="min-w-200px">Invoice Unit Rate FC</th>
								<th class="min-w-200px">Invoice Currency</th>
								<th class="min-w-150px">Unit Value INR</th>
								<th class="min-w-150px">Total Fob INR</th>
								<th class="min-w-100px">Invoice No</th>
								<th class="min-w-200px">Port Code Discharge</th>
								<th class="min-w-200px">Country Destination</th>
								<th class="min-w-100px">Consignee ID</th>
								<th class="min-w-200px">Consignee Name</th>
								<th class="min-w-200px">Consignee Address</th>
								<th class="min-w-200px">Consignee Country</th>
								<th class="min-w-100px">CHA Code</th>
								<th class="min-w-100px">CHA Name</th>
								<th class="min-w-80px">IEC</th>
								<th class="min-w-150px">Exporter Name</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1;@endphp
							@if(!empty($exported_data) && $exported_data->count())
							@foreach($exported_data as $key => $value)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$value->data_type}}</td>
								<td>{{$value->country}}</td>
								<td>{{$value->consignment_type}}</td>
								<td>{{$value->consignment_period}}</td>
								<td>{{$value->shipment_month}}</td>
								<td>{{$value->port_of_loading}}</td>
								<td>{{$value->mode_of_shipment}}</td>
								<td>{{$value->port_code}}</td>
								<td>{{$value->sbill_no}}</td>
								<td>{{$value->sbill_date}}</td>
								<td>{{$value->shipment_id}}</td>
								<td>{{$value->shipment_date}}</td>
								<td>{{$value->hs_code}}</td>
								<td>{{$value->product_description}}</td>
								<td>{{$value->quantity}}</td>
								<td>{{$value->uqc}}</td>
								<td>{{$value->invoice_unit_rate_fc}}</td>
								<td>{{$value->invoice_currency}}</td>
								<td>{{$value->unit_value_inr}}</td>
								<td>{{$value->total_fob_value_inr}}</td>
								<td>{{$value->invoice_no}}</td>
								<td>{{$value->port_code_discharge}}</td>
								<td>{{$value->country_destination}}</td>
								<td>{{$value->consignee_id}}</td>
								<td>{{$value->consignee_name}}</td>
								<td>{{$value->consignee_address}}</td>
								<td>{{$value->consignee_country}}</td>
								<td>{{$value->cha_code}}</td>
								<td>{{$value->cha_name}}</td>
								<td>{{$value->iec}}</td>
								<td>{{$value->exporter_name}}</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td colspan="10">There are no data.</td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>


			</div>
			<!--end::Card body-->
			<!--end::Card-->
		</div>
		<!--end::Tab pane-->
	</div>
	<!--end::Tab Content-->
</div>
<!--end::Container-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
</script> -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
	var path = "{{ route('autocomplete') }}";
	$('input.typeahead').typeahead({
		source: function(query, process) {
			return $.get(path, {
				query: query
			}, function(data) {
				return process(data);
			});
		}
	});
</script>
<script>
	$(document).ready(function() {
		$("#exportindia_table").DataTable({
			"info": false,
			"scrollY": 450,
			"scrollX": true,
			"pageLength": 100,
			scrollCollapse: true,
			//  responsive: true,
			'order': [],

		});

		var hscode = ['10', '11', '12', '13', '14'];
		var product = ['PVC Resin', 'Cereals', 'Rice', 'Metal']
		var hs4Or8_c = ['10410', '10511', '10641', '110311', '110412', '110319', '27149010', '27149030']
		var example_tags = document.querySelector('.example_tags');

		var html0 = '';
		var html1 = '';
		var html2 = '';
		$(".search_product").change(function() {

			if ($(this).val() == "productDesc") {

				$('.tag_example').addClass('active')
				for (let index = 0; index < product.length; index++) {
					const element = product[index];

					html0 += `
					<li class="exple_text">${element},</li>
				`

				}
				example_tags.innerHTML = html0;
				product = [];
			} else if ($(this).val() == 'hSCode') {

				$('.tag_example').addClass('active')
				for (let index = 0; index < hscode.length; index++) {
					const element = hscode[index];

					html1 += `
					<li class="exple_text">${element},</li>
				`

				}
				example_tags.innerHTML = html1;
				hscode = [];
			} else if ($(this).val() == 'hs4Or8') {
				$('.tag_example').addClass('active')
				for (let index = 0; index < hs4Or8_c.length; index++) {
					const element = hs4Or8_c[index];

					html2 += `
					<li class="exple_text">${element},</li>
				`

				}
				example_tags.innerHTML = html2;
				hs4Or8_c = [];
			} else {
				$('.tag_example').removeClass('active')
			}


			console.log($(this).val())
		});

		$(".export_import").select2({
			closeOnSelect: false,
			placeholder: "Export Import",
			allowHtml: true,
			allowClear: true,
			tags: false // создает новые опции на лету
		});
		$(".country_select").select2({
			closeOnSelect: false,
			placeholder: "Reporting Country",
			allowHtml: true,
			allowClear: true,
			tags: false // создает новые опции на лету
		});
		$(".year_select").select2({
			closeOnSelect: false,
			placeholder: "Select Year",
			allowHtml: true,
			allowClear: true,
			tags: false // создает новые опции на лету
		});
		$(".hscode").select2({
			closeOnSelect: false,
			placeholder: "Select hscode",
			allowHtml: true,
			allowClear: true,
			tags: false // создает новые опции на лету
		});
	})
</script>
<script>
	$('#product_data').change(function() {
		const dbText = $(this).find(':selected').text();
		$('#data_field').attr('placeholder', function() {
			return $(this).data('placeholder').replace('_', dbText)
		});
	}).change()
</script>
<script>
	$('#submit_search').click(function() {
		data_field = $('#data_field').val();
		product_data = $('#data_field').val();
		if (data_field == "" && product_data == "") {
			$('#data_field').prop("required", true);
			$('#product_data').prop("required", true);
		} else {
			$('#data_field').prop("required", false);
			$('#product_data').prop("required", false);
		}
	});
</script>
<script>
	$('#kt_ecommerce_sales_flatpickr_clear_tags').hide();
	function search_data() {
		
		var inputBox = document.getElementById('data_field');
		this.value == 'hSCode' || this.value == 'hs4Or8' ? inputBox.type = 'number' : inputBox.type = 'text';
	}
	document.getElementById('product_data').addEventListener('change', search_data);

	$('#data_field').on('keydown',function(){
		$('#kt_ecommerce_sales_flatpickr_clear_tags').show();
	})
	$('#kt_ecommerce_sales_flatpickr_clear_tags').on('click',function(){
		$(this).hide();
		$('#data_field').val(' ');
	})
</script>
@endsection