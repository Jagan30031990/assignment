<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/auth.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<style>
	.error
{
	color: red !important;
}
</style>
</head>

<body id="kt_body" class="bg-body">
<!--begin::Root-->
<div class="d-flex flex-column flex-root-a">
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-md-row flex-column-fluid">
<!--begin::Aside-->
<div class="d-flex flex-column flex-lg-row-auto  w-lg-700px w-md-500px positon-xl-relative left_side_div">
<!--begin::Wrapper-->
<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-lg-700px scroll-y">
<!--begin::Content-->
<div class="d-flex flex-column text-center p-10 pt-lg-20">
	
	<!--begin::Logo-->
	
	<!--end::Logo-->
	<!--begin::Title-->
	
    

	
	<!--end::Title-->
	<!--begin::Description-->
	
	<!--end::Description-->
</div>

<!--end::Content-->
<!--begin::Illustration-->

<!--end::Illustration-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Aside-->
<!--begin::Body-->

<div class="d-flex flex-column flex-lg-row-fluid py-10">
<!--begin::Content-->
<div class="d-flex flex-center flex-column flex-column-fluid">
<!--begin::Wrapper-->
<div class="w-lg-600px auth_form p-10 p-lg-15 mx-auto">
	<!--begin::Form-->

	<form id="ajax-contact-form" action="javascript:void(0)" method="POST">
		@csrf
		<!--begin::Heading-->
		<div class="text-center mb-10">
			<!--begin::Title-->
			<h1 class="text-dark mb-3">Sign In</h1>
			<!--end::Title-->
			<!--begin::Link-->
			
				<!--end::Link-->
			</div>
			<!--begin::Heading-->
			<!--begin::Input group-->
			<div class="fv-row mb-5">
				<!--begin::Label-->
				<label class="form-label fs-6 fw-bolder text-dark">Email</label>
				<!--end::Label-->
				<!--begin::Input-->
				<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
				<!--end::Input-->
			</div>
			
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-5">
				<!--begin::Wrapper-->
				<div class="d-flex flex-stack mb-2">
					<!--begin::Label-->
					<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
					<!--end::Label-->
					<!--begin::Link-->
					
					<!--end::Link-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Input-->
				<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
				<!--end::Input-->
			</div>
			
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="text-center">
				<!--begin::Submit button-->
				<button type="submit" id="submit" class="btn btn-lg common_btn_one w-100 mb-5">
					<span class="indicator-label">Sign In</span>
					<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Submit button-->
					<!--begin::Separator-->
					
					<!--end::Separator-->
					<!--begin::Google link-->
					
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->

			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->

	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>

	<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	{!!Toastr::message()!!}
	<script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
	
	<!--end::Page Custom Javascript-->
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
if ($("#ajax-contact-form").length > 0) {
$("#ajax-contact-form").validate({
	rules: {
		email: {
			required: true,
			maxlength: 50,
			email: true,
		},
		password: {
			required: true,
		},
		
	},
	messages: {
		email: {
		    required: "Please enter valid email",
			email: "Please enter valid email",
			maxlength: "The email name should less than or equal to 50 characters",
		},
		password: {
			required: "Please enter valid password",
		},
	},
	submitHandler: function(form) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#submit').html('Please Wait...');
		$("#submit"). attr("disabled", true);
		$.ajax({
			url: "{{url('chklogin')}}",
			type: "POST",
			data: $('#ajax-contact-form').serialize(),
			success: function( data ) {
				console.log(data);
				if($.trim(data['success']) =='false')
				{
					toastr.error("Login Failed!! Please Login with valid credentials");
					$("#submit"). attr("disabled", false);
					$('#submit').html('Sign In');
					return false;
				}
				else if($.trim(data['success']) =='admin')
				{				
					toastr.success('LogIn successfully');
					$('#submit').html('...Redirecting...');	
					$("#submit"). attr("disabled", true);
					setTimeout(function () {	
						$('#submit').html('Please Wait...redirecting');	
						$("#submit"). attr("disabled", true);				
						window.location.href = '/admin/home-page';
					}, 2000);
				}
				else
				{
					toastr.success('LogIn successfully');
					$('#submit').html('...Redirecting...');	
					$("#submit"). attr("disabled", true);
					setTimeout(function () {	
						$('#submit').html('Please Wait...redirecting');	
						$("#submit"). attr("disabled", true);				
						window.location.href = '/admin/home-page-user';
					}, 2000);
				}
			}
		});
	}
})
}
</script>