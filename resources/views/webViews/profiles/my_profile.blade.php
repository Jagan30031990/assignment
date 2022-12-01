@extends('layout.layout') @section('title','Exim Pulse')
@section('content')
<div id="kt_content_container" class="container-xxl">
<!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
	 @section('profile')
    @include('webViews.profiles.profile')
    @show
	@foreach($user_data as $user_data)
<!--begin::Navs-->
	<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
		<!--begin::Nav item-->
		<li class="nav-item mt-2">
			<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{route('webViews.profiles.my_profile')}}">Overview</a>
		</li>
		<!--end::Nav item-->
		
		<!--begin::Nav item-->
		<li class="nav-item mt-2">
			<a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Company Details</a>
		</li>
		<!--end::Nav item-->
		<!--begin::Nav item-->
		<li class="nav-item mt-2">
			<a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('edit.profile.data')}}">Edit Profile</a>
		</li>
		<!--end::Nav item-->
		
	</ul>
	<!--begin::Navs-->
</div>
</div>

<!--end::Navbar-->

<!--begin::Row-->
<div class="row gy-5 g-xl-10">
<!--begin::Col-->
<div class="card col-xl-8 mb-xl-10">
	<!--begin::Chart widget 5-->
	<!--begin::Header-->
		<div class="card-header flex-nowrap mb-5">
			<!--begin::Title-->
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bolder text-dark">My Activities</span>
				
			</h3>
			<!--end::Title-->
			
		</div>
		<!--end::Header-->
	<!--begin::Row-->
  <div class="row p_0_box_ g-6 g-xl-9 mb-6 mb-xl-9">
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/users.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Login count till date</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">100</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/search.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Searches in last 30 days</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">13</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/database.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2"> Points consumed</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">18308 </div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/growth-graph.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Workspace</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">25 </div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/downloads.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Downloads</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">24</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/ticket.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Tickets Project</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">2</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/heart.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2"> Favorites Companies</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">25</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/chat.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Comments</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">5</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-6 col-md-6 col-lg-4 col-xl-4">
	<!--begin::Card-->
	<div class="card h-100">
		<!--begin::Card body-->
		<div class="card-body d-flex justify-content-center text-center flex-column p-8">
			<!--begin::Name-->
			<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
				<!--begin::Image-->
				<div class="symbol symbol-40px mb-5">
					<img src="{{asset('assets/images/user.svg')}}" alt="" />
				</div>
				<!--end::Image-->
				<!--begin::Title-->
				<div class="fs-5 fw-bolder mb-2">Users Created</div>
				<!--end::Title-->
			</a>
			<!--end::Name-->
			<!--begin::Description-->
			<div class="fs-7 fw-bold text-gray-400">8</div>
			<!--end::Description-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Col-->
</div>
<!--end:Row-->
	<!--end::Chart widget 5-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-xl-4">
	<!--begin::List Widget 6-->
	<div class="card card-xl-stretch p_0_box mb-xl-8">
		<!--begin::Header-->
		<div class="card-header border-0">
			<h3 class="card-title fw-bolder text-dark">My Balance</h3>
			
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-0">
			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
				<!--begin::Icon-->
				<span class="svg-icon svg-icon-warning me-5">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 64 64"><path fill="none" stroke="#37a849" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M46,18V14.94a3.31,3.31,0,0,0-3.9-3.26l-28,5.09C11.5,17.25,9,19.33,9,22"/><path fill="none" stroke="#37a849" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M53,30V22a4,4,0,0,0-4-4H13a4,4,0,0,0-4,4V49a4,4,0,0,0,4,4H49a4,4,0,0,0,4-4V41"/><path fill="none" stroke="#37a849" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M42,41H54a2,2,0,0,0,2-2V32a2,2,0,0,0-2-2H42l-3,5.5Z"/><circle cx="46" cy="35.5" r="2" fill="#37a849"/></svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<!--end::Icon-->
				<!--begin::Title-->
				<div class="flex-grow-1 me-2">
					<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Annual Advance Balance</a>
					<span class="text-muted fw-bold d-block">3431/3600</span>
				</div>
				<!--end::Title-->
				
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
				<!--begin::Icon-->
				<span class="svg-icon svg-icon-success me-5">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8,17a1,1,0,1,0,1,1A1,1,0,0,0,8,17Zm0-6a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm8-9H8A4,4,0,0,0,4,6V18a4,4,0,0,0,4,4h8a4,4,0,0,0,4-4V6A4,4,0,0,0,16,2Zm2,16a2,2,0,0,1-2,2H8a2,2,0,0,1-2-2V15.44A3.91,3.91,0,0,0,8,16h8a3.91,3.91,0,0,0,2-.56Zm0-6a2,2,0,0,1-2,2H8a2,2,0,0,1-2-2V9.44A3.91,3.91,0,0,0,8,10h8a3.91,3.91,0,0,0,2-.56ZM16,8H8A2,2,0,0,1,8,4h8a2,2,0,0,1,0,4Z"/></svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<!--end::Icon-->
				<!--begin::Title-->
				<div class="flex-grow-1 me-2">
					<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Annual Download Balance Points</a>
					<span class="text-muted fw-bold d-block">281692/300000</span>
				</div>
				<!--end::Title-->
				
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
				<!--begin::Icon-->
				<span class="svg-icon svg-icon-danger me-5">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
					<span class="svg-icon svg-icon-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M20 4h2v2h-2zm4 0h2v2h-2zm-4 4h2v2h-2zm4 0h2v2h-2zm-4 4h2v2h-2zm4 0h2v2h-2zm-4 4h2v2h-2zm4 0h2v2h-2zm-4 4h2v2h-2zm4 0h2v2h-2zm4-20H18a2 2 0 0 0-2 2v6H6a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h22a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM12 30h-2v-4h2v4zm2 0v-6H8v6H6V10h10v20h-2zm10 0h-2v-4h2v4zm4 0h-2v-6h-6v6h-2V2h10v28zM8 12h2v2H8zm4 0h2v2h-2zm-4 4h2v2H8zm4 0h2v2h-2zm-4 4h2v2H8zm4 0h2v2h-2z"/></svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<!--end::Icon-->
				<!--begin::Title-->
				<div class="flex-grow-1 me-2">
					<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Searches left in Hot Companies per Annual</a>
					<span class="text-muted fw-bold d-block">20/20</span>
				</div>
				<!--end::Title-->
				
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-info rounded p-5 mb-7">
				<!--begin::Icon-->
				<span class="svg-icon svg-icon-info me-5">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g fill="#134563"><path d="M15.8 40.1c-4.4 0-7.9-3.5-7.9-7.9s3.5-7.9 7.9-7.9 7.9 3.5 7.9 7.9c0 4.3-3.5 7.9-7.9 7.9zm0-12.9c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9c0-2.6-2.2-4.9-4.9-4.9zM47.9 24c-4.4 0-7.9-3.5-7.9-7.9s3.5-7.9 7.9-7.9 7.9 3.5 7.9 7.9-3.6 7.9-7.9 7.9zm0-12.8c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9-2.2-4.9-4.9-4.9zm0 44.9c-4.4 0-7.9-3.5-7.9-7.9s3.5-7.9 7.9-7.9 7.9 3.5 7.9 7.9-3.6 7.9-7.9 7.9zm0-12.8c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9-2.2-4.9-4.9-4.9z"/><path d="M41.4 46.8 20.8 36.5l1.4-2.9 20.7 10.3-1.5 2.9M22.2 30.7l-1.4-2.8 20.6-10.3 1.5 2.8-20.7 10.3"/></g></svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<!--end::Icon-->
				<!--begin::Title-->
				<div class="flex-grow-1 me-2">
					<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Searches Left in Hot Products per Annual</a>
					<span class="text-muted fw-bold d-block">100/100</span>
				</div>
				<!--end::Title-->
				
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-info rounded p-5 mb-7">
				<!--begin::Icon-->
				<span class="svg-icon svg-icon-info me-5">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#231f20" d="M256 250.8a73.34 73.34 0 1 1 73.33-73.34A73.41 73.41 0 0 1 256 250.8zm0-125.53a52.2 52.2 0 1 0 52.19 52.19A52.25 52.25 0 0 0 256 125.27zm117.07 282.6H138.93l-10.57-10.57a127.64 127.64 0 1 1 255.28 0zM150 386.73h212a106.51 106.51 0 0 0-212 0z"/></svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<!--end::Icon-->
				<!--begin::Title-->
				<div class="flex-grow-1 me-2">
					<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Profile View Balance</a>
					<span class="text-muted fw-bold d-block">499/500</span>
				</div>
				<!--end::Title-->
				
			</div>
			<!--end::Item-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::List Widget 6-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
<!--begin::Card header-->
<div class="card-header cursor-pointer">
	<!--begin::Card title-->
	<div class="card-title m-0">
		<h3 class="fw-bolder m-0">Profile Details</h3>
	</div>
	<!--end::Card title-->
	<!--begin::Action-->
	<a href="{{route('edit.profile.data')}}" class="btn common_btn_one align-self-center">Edit Profile</a>
	<!--end::Action-->
</div>
<!--begin::Card header-->
<!--begin::Card body-->
<div class="card-body p-9">
	<!--begin::Row-->
	<div class="row mb-7">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">Full Name</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8">
			<span class="fw-bolder fs-6 text-gray-800">{{$user_data->name}}</span>
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Input group-->
	<div class="row mb-7">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">Email</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<span class="fw-bold text-gray-800 fs-6">{{$user_data->email}}</span>
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-7">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">Mobile
		<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 d-flex align-items-center">
			<span class="fw-bolder fs-6 text-gray-800 me-2">{{$user_data->mobile_no}}</span>
			<span class="badge badge-success">Verified</span>
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-7">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">Company</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8">
			<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{$user_data->company_name ? $user_data->company_name :'N.A'}}</a>
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-7">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">User role
		<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8">
			@if($user_data->is_admin==1)
			<span class="fw-bolder fs-6 text-gray-800">Admin</span>
			@else
			<span class="fw-bolder fs-6 text-gray-800">User</span>
			@endif
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-7">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">Designation</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8">
			<span class="fw-bolder fs-6 text-gray-800">{{$user_data->designation ? $user_data->designation:'N.A.'}}</span>
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-10">
		<!--begin::Label-->
		<label class="col-lg-4 fw-bold text-muted">Sales Executive</label>
		<!--begin::Label-->
		<!--begin::Label-->
		<div class="col-lg-8">
			<span class="fw-bold fs-6 text-gray-800">{{$user_data->sales_executive ? $user_data->sales_executive:'N.A.'}}</span>
		</div>
		<!--begin::Label-->
	</div>
	<!--end::Input group-->
	
</div>
<!--end::Card body-->
</div>
<!--end::details View-->
<!--begin::Row-->
<div class="row gy-5 g-xl-10">

<!--begin::Col-->
<div class="col-xl-12">
	<!--begin::Category-->
<div class="card card-flush">

<!--end::Card header-->
<!--begin::Card body-->
<div class="card-body pt-0">
	<!--begin::Table-->
	<div class="table-responsive">
		<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
		<!--begin::Table head-->
		<thead>
			<!--begin::Table row-->
			<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
				<th class="w-10px pe-2">
					SR.No
				</th>
				<th class="min-w-250px">Current Subscriptions</th>
				<th class="min-w-150px">End Date</th>
				<th class="min-w-150px">Time Till Renewal</th>
				<th class="min-w-150px">Status</th>
				<th class="text-end min-w-70px">Actions</th>
			</tr>
			<!--end::Table row-->
		</thead>
		<!--end::Table head-->
		<!--begin::Table body-->
		<tbody class="fw-bold text-gray-600">
			
			
			<!--begin::Table row-->
			<tr>
				<!--begin::Checkbox-->
				<td>
					1
				</td>
				<!--end::Checkbox-->
				<!--begin::Category=-->
				<td>
					<div class="d-flex">
						<!--begin::Thumbnail-->
						<a href="#" class="symbol symbol-50px">
							<span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg);"></span>
						</a>
						<!--end::Thumbnail-->
						<div class="ms-5">
							<!--begin::Title-->
							<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Micro</a>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fs-7 fw-bolder">Flexible</div>
							<!--end::Description-->
						</div>
					</div>
				</td>
				<!--end::Category=-->
				<!--begin::Type=-->
				<td>
					<!--begin::Badges-->
					<div class="badge badge-light-success">Automated</div>
					<!--end::Badges-->
				</td>
				<!--end::Type=-->
				<!--begin::RENEWAL=-->
				<td>TIME TILL RENEWAL</td>
				<!--end::RENEWAL=-->
				<!--begin::status=-->
				<td>
					<div class="form-check form-switch form-check-custom form-check-solid">
			    <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
			    <label class="form-check-label" for="flexSwitchChecked">
			        Status
			    </label>
			</div>
				</td>
				<!--end::Type=-->

				<!--begin::Action=-->
				<td class="text-end">
					<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
					<span class="svg-icon svg-icon-5 m-0">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
					<!--begin::Menu-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Upgrade</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Renew</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu-->
				</td>
				<!--end::Action=-->
			</tr>
			<!--end::Table row-->
		</tbody>
		<!--end::Table body-->
	</table>
	</div>
	<!--end::Table-->
</div>
<!--end::Card body-->
</div>
<!--end::Category-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
@endforeach
@endsection