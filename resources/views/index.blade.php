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
	<form id="category-form" action="javascript:void(0)" method="POST">
		@csrf
		<!--begin::Card-->
		<div class="card_box_common mb-7">
			<!--begin::Card body-->
			<div class="">

				<!--begin::Compact form-->
				<div class="d-flex align-items-center">
					
					<!--begin::Input group-->
					<div class="position-relative w-md-400px me-md-2">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						
						<!--end::Svg Icon-->
						<!-- <input type="text" class="form-control form-control-solid ps-10 typeahead" name="search_data" value="{{request('search_data')}}" placeholder="Search" /> -->

						<input class="typeahead search_p form-control  form-control-solid ps-10" data-placeholder="Please enter details of _" type="text" autofocus="autofocus" name="category" required>
						<button class="btn btn-sm btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear_tags">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
							
							<!--end::Svg Icon-->
						</button>
					</div>
					<!--end::Input group-->
					<!--begin:Action-->
					<div id="loader" style="display:none;">@include('layout.loader')</div>
					<div class="d-flex align-items-center">
						<button type="submit" id="submit_search" class="btn btn-sm common_btn_one me-2 btn-submit">Add Category</button>

						

					</div>
					<!--end:Action-->
				</div>
			</form>

		</div>	

	</div>
	<div class="card_box_common mb-2">
		<!--begin::Card body-->
		<div class="">
			<form id="sub-category-form" action="javascript:void(0)" method="POST">
		 @csrf
			<!--begin::Compact form-->
			<div class="d-flex align-items-center">
				<div class="position-relative w-md-250px me-md-2">
					<select class="form-select input_padding_common search_product" data-kt-repeater="select2" on data-placeholder="Select an option" name="category_id" required>
						<option value="">Select Category</option>
						@foreach($categories as $category_data)
						<option value="{{$category_data->id}}">{{$category_data->category_name}}</option>
						@endforeach
					</select>
				</div>
				<!--begin::Input group-->
				<div class="position-relative w-md-400px me-md-2">
					<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->

					

					<input class="form-control  form-control-solid ps-10" data-placeholder="Please enter details of _" type="text" autofocus="autofocus" name="sub_category" required>
					<button class="btn btn-sm btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear_tags">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->

						<!--end::Svg Icon-->
					</button>
				</div>
				<!--end::Input group-->
				<!--begin:Action-->
				<div id="loader" style="display:none;">@include('layout.loader')</div>
				<div class="d-flex align-items-center">
					<button type="submit" id="submit_search" class="btn btn-sm common_btn_one me-2 btn-submit">Add SubCategory</button>



				</div>
			</div>
		</form>
		</div>
	</div>
	<!--end::Container-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
	<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">

	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
	<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


	<script>
		if ($("#category-form").length > 0) {
			$("#category-form").validate({
				rules: {
					category_id: {
						required: true
					},  
					sub_category: {
						required: true
					},    

				},
				messages: {
					category_id: {
						required: "Category name is required",
					},		
					sub_category: {
						required: "Sub category name is required",
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
						url: "{{route('store.category')}}",
						type: "POST",
						datatype: 'json',
						data: $('#category-form').serialize(),					
						success: function(data) {
							if($.trim(data['success']) =='true')
							{
								$("#loader").hide();
								toastr.success('Category added Successfully');
								location.reload();
								
								
							}
							else
							{
								toastr.success('Category not added Successfully');

							}
						}
					});
				}
			})
		}
	</script>
	<script>
		if ($("#sub-category-form").length > 0) {
			$("#sub-category-form").validate({
				rules: {
					category: {
						required: true,
						maxlength: 500
					},   

				},
				messages: {
					category: {
						required: "Category is required",
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
						url: "{{route('store.sub.category')}}",
						type: "POST",
						datatype: 'json',
						data: $('#sub-category-form').serialize(),					
						success: function(data) {
							if($.trim(data['success']) =='true')
							{
								$("#loader").hide();
								toastr.success('Sub-category added successfully');	
								location.reload();				
								
							}
							else
							{
								toastr.success('Sub-category not added successfully');
							}
						}
					});
				}
			})
		}
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


	@endsection