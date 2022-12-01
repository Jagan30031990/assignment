<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/auth.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

<style>
.refresh-button{
background-color: #182e65;
color: #fff !important; width: 100%;     min-height: calc(1.5em + 1.65rem + 3px);
padding: 0.825rem 1.5rem !important;
}
.captcha-image img{
height: 45px;
}
.error
{
color: red !important;
}
</style>
</head>
<body id="kt_body" class="bg-body">
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
<!--begin::Authentication - Sign-up -->
<div class="d-flex flex-column flex-md-row flex-column-fluid">
<!--begin::Aside-->
<div class="d-flex flex-column flex-lg-row-auto w-lg-700px w-md-500px positon-xl-relative left_side_div">
<!--begin::Wrapper-->
<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-700px scroll-y">
	<!--begin::Content-->
	<div class="d-flex flex-column text-center p-10 pt-lg-20">
		<!--begin::Logo-->
		<a href="#" class="py-9 mb-5">
			<img alt="Logo" src="{{asset('assets/images/logo-8-light.png')}}" class="h-60px" />
		</a>
		<!--end::Logo-->
		<!--begin::Title-->
		<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #fff;">Welcome to Exim Pluse</h1>
		<!--end::Title-->
		<!--begin::Description-->
		<p class="fw-bold fs-2" style="color: #fff;">In this kind of post, the bloggerintroduces a person they’ve interviewed and provides some background information about the intervieweeand their work following this is a transcript of the interview.</p>
		<!--end::Description-->
	</div>
	<!--end::Content-->
	<!--begin::Illustration-->
	<div class="d-flex flex-row-auto bgi-no-repeat bgi-no-repeat-auth bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-200px" style="background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/auth/agency.png')"></div>
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

		<!--begin::Heading-->
		<div class="mb-10 text-center">
			<!--begin::Title-->
			<h1 class="text-dark mb-3">Create an Account</h1>
			<!--end::Title-->
			<!--begin::Link-->
			<div class="text-gray-400 fw-bold fs-4">Already have an account?
				<a href="{{route('authentication.sign_in')}}" class="link-primary fw-bolder">Sign in here</a></div>
				<!--end::Link-->
			</div>
			<!--end::Heading-->
			<!--begin::Action-->
			<div class="media_ic_box">
				<a class="btn btn-light-primary fw-bolder  mb-5" href="{{ url('/google') }}">
					<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Google</a>
					<a type="button" class="btn btn-light-primary fw-bolder  mb-5">
						<img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="h-20px me-3" />Facebook</a>

					</div>
					<!--end::Action-->
					<!--begin::Separator-->
					<div class="d-flex align-items-center mb-5">
						<div class="border-bottom border-gray-300 mw-50 w-100"></div>
						<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
						<div class="border-bottom border-gray-300 mw-50 w-100"></div>
					</div>
					<!--end::Separator-->
					<!--begin::Input group-->

					<form id="ajax-contact-form" action="javascript:void(0)" method="POST">
						<div class="row fv-row mb-5">
							@csrf
							<!--begin::Col-->
							<div class="col-xl-12">
								<label class="form-label fw-bolder text-dark fs-6">Full Name<span style="color:red">*</span></label>
								<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Please Enter Your Name" name="name" autocomplete="off" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<label class="form-label fw-bolder text-dark fs-6">Email<span style="color:red;">*</span></label>
							<input class="form-control form-control-lg form-control-solid" type="email" placeholder="Please Enter your Email ID" name="email" autocomplete="off" />
						</div>
						<div class="fv-row mb-5">
							<label class="form-label fw-bolder text-dark fs-6">Password<span style="color:red;">*</span></label>
							<input class="form-control form-control-lg form-control-solid" id="password" type="password" placeholder="Please Enter your Password" name="password" autocomplete="off" />
						</div>
						<div class="fv-row mb-5">
							<label class="form-label fw-bolder text-dark fs-6">Confirm-Password<span style="color:red;">*</span></label>
							<input class="form-control form-control-lg form-control-solid" id="confirm_password" type="password" placeholder="Please Enter Confirm password" name="confirm_password" autocomplete="off" />
						</div>
						<span id='message'></span>
						<div class="fv-row mb-5">
							<label class="form-label fs-6 fw-bolder text-dark">Mobile<span style="color:red;">*</span></label>
							<input class="form-control form-control-lg form-control-solid" type="tel" name="mobile" placeholder="Please Enter yor Mobile No" onkeypress="return isNumber(event)" autocomplete="off" />	
						</div>

						<div class="fv-row mb-5 {{ $errors->has('captcha') ? ' has-error' : '' }}">
							<div class="row">
								<div class="col-sm-3">
									<span class="captcha-image">{!! Captcha::img() !!}</span>
								</div> 
								<div class="col-sm-3">
									<button type="button" class="btn refresh-button">Refresh</button>
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Enter the Captcha" class="form-control form-control-lg form-control-solid" name="captcha">
								</div>
							</div>           

						</div>

						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<label class="form-check form-check-custom form-check-solid form-check-inline">
								<input class="form-check-input" type="checkbox" id="terms_conditions"/>
								<span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
									<a href="#" class="ms-1 link-primary">Terms and conditions</a><span style="color:red;">*</span></span>
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="submit" id="submit" class="btn btn-lg common_btn common_btn_one w-100">
									<span class="indicator-label">Sign Up</span>
								</button>
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
		<!--end::Authentication - Sign-up-->
	</div>
	<!--end::Root-->

	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	{!!Toastr::message()!!}
	<script src="{{asset('assets/js/custom/authentication/sign-up/general.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<!--end::Page Custom Javascript-->
	<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->\
	<script>
		$('#password, #confirm_password').on('keyup', function () {
			if ($('#password').val() == $('#confirm_password').val()) {
				$('#message').html('Password Matched').css('color', 'green');
			} else 
			$('#message').html('Password not Matched').css('color', 'red');
		});
	</script>
	<script>
		$(document).ready(function(){
			$('#submit').attr('disabled',true);
		});
	</script>
	<script type="text/javascript">
		$(".refresh-button").click(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				type:'GET',
				url:'refresh_captcha',
				success:function(data){
					$(".captcha-image").html(data.captcha);
				}
			});
		});
	</script>
	<script>
		$(function() {
			$('#terms_conditions').click(function() {
				if ($(this).is(':checked')) {            
					$('#submit').removeAttr('disabled');
				} else {
					$('#submit').attr('disabled', 'disabled');
				}
			});
		});
	</script>
	<script>
		if ($("#ajax-contact-form").length > 0) {
			$("#ajax-contact-form").validate({
				rules: {
					name: {
						required: true,
						maxlength: 50
					},
					email: {
						required: true,
						maxlength: 50,
						email: true,
					},
					mobile: {
						required: true,
						maxlength: 10,
						minlength: 10,
					},
					captcha: {
						required: true,
					},
				},
				messages: {
					name: {
						required: "Please enter name",
						maxlength: "Your name maxlength should be 50 characters long."
					},
					email: {
						required: "Please enter valid email",
						email: "Please enter valid email",
						maxlength: "The email name should less than or equal to 50 characters",
					},
					mobile: {
						required: "Please enter valid mobile No",
						mobile: "Please enter valid Mobile No",
						maxlength: "The Mobile No should not greater than 10 digit",
					},
					captcha: {
						required: "Captcha field should not be blank"
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
						url: "{{url('store')}}",
						type: "POST",
						data: $('#ajax-contact-form').serialize(),
						success: function( data ) {
							console.log(data);
							if($.trim(data['success']) =='false')
							{
								toastr.error("Invalid Captcha");
								$("#submit"). attr("disabled", false);
								$('#submit').html('Sign Up');
								return false;
							}
							else if($.trim(data['success']) == 400)
							{
								toastr.error("Email ID already Exist!! Please Signup with different Email ID");
								$("#submit"). attr("disabled", true);
								$('#submit').html('Sign Up');
								// setTimeout(function () {						
								// 	location.reload(true);
								// }, 5000);

							}
							else
							{

								toastr.success('SignUp Successfully Completed');
								$('#submit').html('Sign Up');
								$("#submit"). attr("disabled", false);
								setTimeout(function () {						
									window.location.replace("{{route('admin.login')}}");
								}, 3000);
							}
						}
					});
				}
			})
		}
	</script>
	<script>
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		}
	</script>
</body>
</html>