@extends('layout.layout') @section('title','Exim Pulse')
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
<!--begin::Navbar-->

<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
@section('profile')
@include('webViews.profiles.profile')
@show
<!--begin::Navs-->
<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
<!--begin::Nav item-->
<li class="nav-item mt-2">
	<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route('profile.data')}}">Overview</a>
</li>
<!--end::Nav item-->

<!--begin::Nav item-->
<li class="nav-item mt-2">
	<a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('webViews.profiles.company_details')}}">Company Details</a>
</li>
<!--end::Nav item-->
<!--begin::Nav item-->
<li class="nav-item mt-2">
	<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{route('edit.profile.data')}}">Edit Profile</a>
</li>
<!--end::Nav item-->

</ul>
<!--begin::Navs-->
</div>
</div>

<!--end::Navbar-->
<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
<!--begin::Card title-->
<div class="card-title m-0">
<h3 class="fw-bolder m-0">Profile Details</h3>
</div>
<!--end::Card title-->
</div>
<!--begin::Card header-->
<!--begin::Content-->
<div id="kt_account_settings_profile_details" class="collapse show">
<!--begin::Form-->
<form id="ajax-update-form" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
<!--begin::Card body-->
@csrf
<div class="card-body border-top p-9">
	<!--begin::Input group-->
	<div class="row mb-6">
		@foreach($user_data as $user_data)
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">Profile Image</label>
		<!--end::Label-->
		<!--begin::Col-->
		<input type="hidden" name="user_id" value="{{$user_data->id}}">
		<div class="col-lg-8">
			<!--begin::Image input-->
			<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
				<!--begin::Preview existing avatar-->
				@if($user_data->profile_image!='')
				<div class="image-input-wrapper w-125px h-125px" style="background-image: url({{url('images/'.$user_data->profile_image)}})"></div>
				@else
				<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/images/no-image.jpeg)"></div>
				@endif
				<!--end::Preview existing avatar-->
				<!--begin::Label-->
				<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
					<i class="bi bi-pencil-fill fs-7"></i>
					<!--begin::Inputs-->
					<input type="file" name="profile_image" accept=".png, .jpg, .jpeg" />
					<input type="hidden" name="avatar_remove" />
					<!--end::Inputs-->
				</label>
				<!--end::Label-->
				<!--begin::Cancel-->
				<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
					<i class="bi bi-x fs-2"></i>
				</span>
				<!--end::Cancel-->
				<!--begin::Remove-->
				<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
					<i class="bi bi-x fs-2"></i>
				</span>
				<!--end::Remove-->
			</div>
			<!--end::Image input-->
			<!--begin::Hint-->
			<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
			<!--end::Hint-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8">
			<!--begin::Row-->

			<div class="row">
				<!--begin::Col-->
				<div class="col-lg-6 fv-row">
					<input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{$user_data->name}}" />
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-lg-6 fv-row">
					<input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="{{$user_data->last_name}}" />
				</div>
				<!--end::Col-->
			</div>

			<!--end::Row-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->

	<div class="row d-flex align-items-center mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">
			<span class="required">Email</span>

		</label>
		<!--end::Label-->
		<!--begin::Col-->

		<div class="col-lg-6 fv-row">
			<input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email Address" value="{{$user_data->email}}" readonly />
		</div>

		@if($user_data->is_email_verified==1)
		<div class="col-lg-2 fv-row">
			<span class="badge badge-success">Verified</span>
		</div>
		@else
		<div class="col-lg-2 fv-row">
			<button id="verify_email" value="{{$user_data->id}}" class="btn mx-3 mt-2 btn-sm common_btn_one align-self-center">Verify Email</button>
		</div>
		@endif
	</div>

	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">
			<span class="required">Mobile</span>
			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
		</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="tel" name="mobile_no" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{$user_data->mobile_no}}" />
		</div>
		<!--end::Col-->
	</div>

	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">Company</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" name="company_name" class="form-control form-control-lg form-control-solid" placeholder="Company" value="{{$user_data->company_name}}"/>
		</div>
		<!--end::Col-->
	</div>

	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">User role </label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="User role " value="{{$user_data->is_admin==1?'User':'NA'}}" />
		</div>
		<!--end::Col-->
	</div>
<div id="loader" style="display:none;">@include('layout.loader')</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">Designation </label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" name="designation" class="form-control form-control-lg form-control-solid" placeholder="Designation " value="{{$user_data->designation}}" />
		</div>
		<!--end::Col-->
	</div>

	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-bold fs-6">Sales Executive </label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" name="sales_executive" class="form-control form-control-lg form-control-solid" placeholder="Sales Executive " value="{{$user_data->sales_executive}}"/>
		</div>
		<!--end::Col-->
	</div>
	@endforeach
	<!--end::Input group-->

	<!--end::Input group-->
</div>
<!--end::Card body-->
<!--begin::Content-->
<div id="kt_account_settings_signin_method" class="collapse show">
	<!--begin::Card body-->
	<div class="card-body border-top p-9">
			<!--begin::Password-->
			<div class="d-flex flex-wrap align-items-center">
				<!--begin::Label-->
				<div id="kt_signin_password">
					<div class="fs-6 fw-bolder mb-1">Password</div>
					<div class="fw-bold text-gray-600">************</div>
				</div>
				<!--end::Label-->
				<!--begin::Edit-->
				<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
					<div class="row mb-1">
						<div class="col-lg-4">
							<div class="fv-row mb-0">
								<label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
								<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fv-row mb-0">
								<label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
								<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fv-row mb-0">
								<label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
								<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
							</div>
						</div>
					</div>
					<span id='message'></span>
					<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
					<div class="d-flex">						
						<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
					</div>

					<!--end::Form-->
				</div>
				<!--end::Edit-->
				<!--begin::Action-->
				<div id="kt_signin_password_button" class="ms-auto">
					<button 
					class="btn btn-light btn-active-light-primary">Reset Password</button>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Password-->
	</div>
	<!--end::Card body-->
</div>
<!--end::Content-->
<!--begin::Actions-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
	<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
	<button id="save_changes" type="submit" class="btn common_btn_one">Save Changes</button>
</div>

<!--end::Actions-->
</form>
<!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Basic info-->
</div>
<!--end::Container-->
</div>
<!--end::Post-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{!!Toastr::message()!!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$("#save_changes").on('click', function(){
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$("#loader").show();
var formData = new FormData($('#ajax-update-form')[0]);
$.ajax({
url: "{{route('update.profile.data')}}",
type: "POST",
datatype: 'json',
data: formData,
processData: false,
contentType: false,					
success: function(data) {
console.log(data['success']);
if($.trim(data['success']) =='true')
{
$("#loader").hide();							
toastr.success('Profile Updated Successfully');					
setTimeout(function () {						
	location.reload(true);
}, 2000);

}
else if($.trim(data['success']) ==400)
{
	toastr.error('password should not be same');		
}
else
{

}


}
});
});
</script>
<script>
$("#verify_email").on('click', function(){
var user_id = document.getElementById('verify_email').value;
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$("#loader").show();
$.ajax({
url: "{{route('profile.email.verify')}}",
type: "POST",
data: {user_id:user_id},					
success: function(data) {
console.log(data['success']);
if($.trim(data['success']) =='true')
{
$("#loader").hide();							
toastr.success('Verification Email has been Successfully Sent');
}
else if($.trim(data['success']) ==400)
{
	toastr.error('password should not be same');		
}
else
{

}


}
});
});
</script>
<script>
		$('#newpassword,#confirmpassword').on('keyup', function () {
			if ($('#newpassword').val() == $('#confirmpassword').val()) {
				$('#message').html('Password Matched').css('color', 'green');
			} else 
			$('#message').html('Password not Matched').css('color', 'red');
		});
	</script>
@endsection