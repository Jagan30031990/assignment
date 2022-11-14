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

	<form action="{{route('admin.chklogin')}}" method="POST">
		@csrf
		<!--begin::Heading-->
		<div class="text-center mb-10">
			<!--begin::Title-->
			<h1 class="text-dark mb-3">Sign In to Exim Pluse</h1>
			<!--end::Title-->
			<!--begin::Link-->
			<div class="text-gray-400 fw-bold fs-4">New Here?
				<a href="{{route('authentication.sign_up')}}" class="link-primary fw-bolder">Create an Account</a></div>
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
					<a href="{{route('authentication.password_reset')}}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
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
				<button type="submit" id="kt_sign_in_submit" class="btn btn-lg common_btn_one w-100 mb-5">
					<span class="indicator-label">Sign In</span>
					<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Submit button-->
					<!--begin::Separator-->
					<div class="d-flex align-items-center mb-5">
						<div class="border-bottom border-gray-300 mw-50 w-100"></div>
						<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
						<div class="border-bottom border-gray-300 mw-50 w-100"></div>
					</div>
					<!--end::Separator-->
					<!--begin::Google link-->
					<div class="media_ic_box">
						<a class="btn btn-light-primary fw-bolder mb-5" href="{{ route('auth/google') }}">
							<img alt="Logo"  src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Google</a>
							<a  class="btn btn-light-primary fw-bolder mb-5">
								<img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="h-20px me-3" />Facebook</a>
								</div>
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