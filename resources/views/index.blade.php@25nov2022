@extends('layout.layout') @section('title','Exim Pulse')

@section('content')
<!--begin::Container-->
<style>
	.error
	{
		color:red !important;
	}
</style>
<div id="kt_content_container" class="container-xxl">
	<!--begin::Form-->
	<form id="ajax-contact-form" action="javascript:void(0)" method="POST">
		@csrf
		<!--begin::Card-->
		<div class="card_box_common mb-7">
			<!--begin::Card body-->
			<div class="">

				<!--begin::Compact form-->
				<div class="d-flex align-items-center">
					<div class="position-relative w-md-250px me-md-2">
						<select class="form-select input_padding_common search_product" data-kt-repeater="select2" on data-placeholder="Select an option" id="product_data" name="product_data" required>
							<option value="">Search Category</option>
							<option value="productDesc">Product</option>
							<option value="hSCode">HS 2</option>
							<option value="hs4Or8">HS 4, 6 Or 8</option>
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

						<input class="typeahead search_p form-control  form-control-solid ps-10" data-placeholder="Please enter details of _" type="text" autofocus="autofocus" name="search_data" id="data_field" required>
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
					<div id="loader" style="display:none;">@include('layout.loader')</div>
					<div class="d-flex align-items-center">
						<button type="submit" id="submit_search" class="btn btn-sm common_btn_one me-2 btn-submit">Search</button>

						<a id="kt_horizontal_search_advanced_link" class="btn btn-sm common_btn_one advanced-search" style="display:none;" href="{{route('webViews.advance_search')}}">Advanced Search</a>

					</div>
					<!--end:Action-->
				</div>
			</form>
			<div class="tag_example">
				<h3>Search Example:</h3>
				<ul class="example_tags">

				</ul>
			</div>

			<!--end::Compact form-->
			<!--begin::Advance form-->
			<form id="ajax-search-form" action="javascript:void(0)" method="POST">
				<div class="collapse filter_data" id="kt_advanced_search_form">
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
									<select class="export_import input_padding_common_tow form-select  multiselect_class" name="export_type[]" multiple="multiple">
										<option value="Export" data-badge="">Export</option>
										<option value="Import" data-badge="">Import</option>

									</select>
									<!--end::Select-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-3 col-md-3 col-sm-4">
									<!--begin::Select-->
									<select class="country_select input_padding_common_tow form-select multiselect_class" name="country_select[]" multiple="multiple">

										<option value="India" data-badge="">India</option>
										<option value="USA" data-badge="">USA</option>

									</select>
									<!--end::Col-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4">
									<!--begin::Select-->
									<select class="hscode form-select input_padding_common_tow multiselect_class" multiple="multiple" name="hs_code">

										<option value="O1" data-badge="">25</option>
										<option value="O2" data-badge="">45</option>

									</select>
									<!--end::Col-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4">
									<!--begin::Select-->
									<select class="year_select form-select input_padding_common_tow multiselect_class" multiple="multiple" name="year">

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
			</form>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	
	<!--end::Form-->
	<!--begin::Tab Content-->
	<div class="tab-content">

		<!--begin::Tab pane-->
		<div id="kt_project_users_table_pane" class="tab-pane fade show active">
			<!--begin::Card-->
			<div class="card card-flush import-data-table">
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

									<h3 class="fw-bolder me-5 my-1">
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

					<table id="example1" class="table table-row-bordered table-row-dashed gy-4 same_table_design align-middle fw-bolder" style="border: none !important;" cellspacing="0" width="100%">
						<thead class="fs-7 text-gray-400 text-uppercase">
							<tr>
								<th class="min-w-100px">SL.No</th>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">

<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<!-- <script>
$(document).ready(function() {
    src = "{{ route('autocomplete') }}";
    $("input.typeahead").autocomplete({
        select: function (event, ui) {//trigger when you click on the autocomplete item
            event.preventDefault();//you can prevent the default event
            alert( ui.item.product_name);//employee id
            // alert( ui.item.value);//employee name

        },
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);

                }
            });
        },
        minLength: 1,

    });
});
</script> -->
<!-- <script type="text/javascript">
	var path = "{{ route('autocomplete') }}";
	$('input.typeahead').autocomplete({
		source: function(query, process) {
			return $.get(path, {
				query: query
			}, function(data) {
				console.log(data);
				return process(data);
			});
		}
	});
</script> -->
<script>
	$("#data_field").on("blur", function(e) {
		var dropdown = $("#product_data").val();
		var inputValue = $(this).val();	
		if(dropdown === "hSCode") {
			if(inputValue.length > 2 || inputValue.length < 2){
				toastr.error('Please enter only 2 digit HS CODE!!');
				$(this).val("");
			}
		} else if(dropdown === "hs4Or8") {
		   if(inputValue.length > 8)
			{
				toastr.error('Please enter only 4,6,8 digit HS CODE!!');
				$(this).val("");
			}
			else if(inputValue.length <=3)
			{
				toastr.error('Please enter only 4,6,8 digit HS CODE!!');
				$(this).val("");
			}
		}
	});
</script>

<script>
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
			$('#data_field').val('');
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
			$('#data_field').val('');
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
			$('#data_field').val('');
			example_tags.innerHTML = html2;
			hs4Or8_c = [];
		} else {
			$('.tag_example').removeClass('active')
		}
		// console.log($(this).val())
	});

	$(document).ready(function(){
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
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
	$('#kt_ecommerce_sales_flatpickr_clear_tags').click(function() {
		window.location.reload();		
	});

</script>
<script>
	if ($("#ajax-contact-form").length > 0) {
		$("#ajax-contact-form").validate({
			rules: {
				search_data: {
					required: true,
					maxlength: 500
				},   
				product_data: {
					required: true,
				},   
			},
			messages: {
				search_data: {
					required: "Search Data is required",
				},
				product_data: {
					required: "Category Selection is required",
				},
			},
			submitHandler: function(form) {
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$("#loader").show();
				$.ajax({
					url: "{{route('search.filter')}}",
					type: "GET",
					datatype: 'json',
					data: $('#ajax-contact-form').serialize(),					
					success: function(data) {
						console.log(data);
						if(data=='')
						{
							$("#loader").hide();
							toastr.error('No Data Found!!');					
							$(".filter_data").removeClass("show");
							$(".advanced-search").hide();
						}
						else
						{
							$("#loader").hide();
							$(".import-data-table").addClass("active");
							$(".filter_data").addClass("show");
							$(".advanced-search").show();						
							$('#example1').DataTable({
								destroy: true,
								processing: true,
								serverSide: false,
								scrollY: 450,
								scrollX: true,
								scrollCollapse: true,
								lengthMenu: [[50,100], [50,100]],
								data: data,
								columns: [
								{
									data: 'id',
									render: function (data, type, row, meta) {
										return meta.row + meta.settings._iDisplayStart + 1;
									}

								},
								{
									data: 'data_type'
								},
								{
									data: 'country'
								},
								{
									data: 'consignment_type'
								},
								{
									data: 'consignment_period'
								},
								{
									data: 'shipment_month'
								},
								{
									data: 'port_of_loading'
								},
								{
									data: 'mode_of_shipment'
								},
								{
									data: 'port_code'
								},
								{
									data: 'sbill_no'
								},
								{
									data: 'sbill_date'
								},
								{
									data: 'shipment_id'
								},
								{
									data: 'shipment_date'
								},

								{
									data: 'hs_code'
								},
								{
									data: 'product_description'
								},
								{
									data: 'quantity'
								},
								{
									data: 'uqc'
								},
								{
									data: 'invoice_unit_rate_fc'
								},
								{
									data: 'invoice_currency'
								},
								{
									data: 'unit_value_inr'
								},
								{
									data: 'total_fob_value_inr'
								},
								{
									data: 'invoice_no'
								},
								{
									data: 'port_code_discharge'
								},
								{
									data: 'country_destination'
								},
								{
									data: 'consignee_id'
								},
								{
									data: 'consignee_name'
								},
								{
									data: 'consignee_address'
								},
								{
									data: 'consignee_country'
								},
								{
									data: 'cha_code'
								},
								{
									data: 'cha_name'
								},
								{
									data: 'iec'
								},
								{
									data: 'exporter_name'
								},                       
								]
							});				
						}


					}
				});
			}
		})
	}
</script>
<script>
	$("#ajax-search-form button").on('click', function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#loader").show();
		$.ajax({
			url: "{{route('search-filter-data')}}",
			type: "GET",
			datatype: 'json',
			data: $('#ajax-search-form').serialize(),					
			success: function(data) {
				console.log(data);
				if(data=='')
				{
					$("#loader").hide();							
					toastr.error('No Data Found!!');					
					$(".filter_data").addClass("show");
					$(".advanced-search").show();
					$('#example1').DataTable({
						"destroy": true,
						"data": [],
						"total": 0,
						"recordsTotal": 0,
						"recordsFiltered": 0
						
					});				
				}
				else
				{
					$("#loader").hide();
					$(".import-data-table").addClass("active");
					$(".filter_data").addClass("show");
					$(".advanced-search").show();						
					$('#example1').DataTable({

						destroy: true,
						processing: true,
						pageLength: 20,
						serverSide: true,
						// pageLength: 50,
						scrollY: 450,
						scrollX: true,
						scrollCollapse: true,
						lengthMenu: [[50,100], [50,100]],
						data: data,
						columns: [
						{
							data: 'id',
							render: function (data, type, row, meta) {
								return meta.row + meta.settings._iDisplayStart + 1;
							}
							
						},
						{
							data: 'data_type'
						},
						{
							data: 'country'
						},
						{
							data: 'consignment_type'
						},
						{
							data: 'consignment_period'
						},
						{
							data: 'shipment_month'
						},
						{
							data: 'port_of_loading'
						},
						{
							data: 'mode_of_shipment'
						},
						{
							data: 'port_code'
						},
						{
							data: 'sbill_no'
						},
						{
							data: 'sbill_date'
						},
						{
							data: 'shipment_id'
						},
						{
							data: 'shipment_date'
						},

						{
							data: 'hs_code'
						},
						{
							data: 'product_description'
						},
						{
							data: 'quantity'
						},
						{
							data: 'uqc'
						},
						{
							data: 'invoice_unit_rate_fc'
						},
						{
							data: 'invoice_currency'
						},
						{
							data: 'unit_value_inr'
						},
						{
							data: 'total_fob_value_inr'
						},
						{
							data: 'invoice_no'
						},
						{
							data: 'port_code_discharge'
						},
						{
							data: 'country_destination'
						},
						{
							data: 'consignee_id'
						},
						{
							data: 'consignee_name'
						},
						{
							data: 'consignee_address'
						},
						{
							data: 'consignee_country'
						},
						{
							data: 'cha_code'
						},
						{
							data: 'cha_name'
						},
						{
							data: 'iec'
						},
						{
							data: 'exporter_name'
						},                       
						]
					});				
				}


			}
		});
	});
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
function rtrim(str){
    return str.replace(/\s+$/, '');
}

	var path = "{{ route('autocomplete') }}";	
	$( "#data_field" ).autocomplete({
		source: function( request, response ) {
			request.term = request.term.trim();
			if(request.term == ""){
          //when empty, returns empty result
				response([]);
			}else{
				$.ajax({
					url: path,
					type: 'GET',
					dataType: "json",
					data: {
						search: request.term
					},
					success: function(data) {
							response(data);	

					}
				});
			}
		},
			select: function (event, ui) {
				console.log(event);
				// console.log(ui.item.label);
				$('.search_p').val();
				// $('.search_p').val(ui.item.label);
				
				return false;
			}
		});
	</script>
	@endsection