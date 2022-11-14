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
												<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route('webViews.profiles.my_profile')}}">Overview</a>
											</li>
											<!--end::Nav item-->
											
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{route('webViews.profiles.company_details')}}">Company Details</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route('webViews.profiles.edit_profile')}}">Edit Profile</a>
											</li>
											<!--end::Nav item-->
											
										</ul>
										<!--begin::Navs-->
									</div>
								</div>
				                
								<!--end::Navbar-->
								<!--begin::details View-->
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">Company Details</h3>
										</div>
										<!--end::Card title-->
										
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Company Name</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">DECOR MASTERS LLP</a>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">GST</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">DECOR MASTERS LLP</a>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Company Address</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">DECOR MASTERS LLP</a>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Card body-->
									
								</div>
								<!--end::details View-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
@endsection