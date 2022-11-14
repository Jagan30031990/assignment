@extends('layout.layout') @section('title','Exim Pulse')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@section('content')
<!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Navbar-->
        
        <!--end::Navbar-->
        <!--begin::Row-->
        <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap flex-stack mb-6">
                                    <!--begin::Title-->
                                    <h3 class="fw-bolder my-2">My Workspace
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Controls-->
                                    <div class="d-flex align-items-center my-2">
                                       
                                        <button class="btn common_btn_one btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_create_workspace">Create Folder</button>
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <div class="card mb-5 p-5 mb-10">
                                    <form>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Input group-->
                                       <div class="fv-row ">
                                       
                                        <div class="search_box">
                                            <!--begin::Input-->
                                        <input type="text" name="text_input" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Search" value="" />
                                        <!--end::Input-->
                                       <button class="search_i">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="#fff"></rect>
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="#fff"></path>
                                        </svg>
                                       </button>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <div class="fv-row ">
                                       <div class="rounded border p-10">
                                                <div class="mb-0">
                                                    <label class="form-label">Example</label>
                                                    <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_2" />
                                                </div>
                                            </div>
                                    </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card header-->
                                            <div class="card-header flex-nowrap border-0 pt-9">
                                                <!--begin::Card title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-45px w-45px bg-light me-5">
                                                        
                                                       
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="#182e65" />
                                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="#182e65" />
                                            </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Training</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar m-0">
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#182e65" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#182e65" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Manage Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Rename Workspace
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"> Delete Workspace</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                       
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3"> Add Comments</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                                
                                                <!--begin::Stats-->
                                                <div class="d-flex  flex-column mb-5 mt-auto fs-6">
                                                    <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                                                    <!--begin::Number-->
                                                    <div class="fw-bolder font_15px me-2 pb-2"><span title="India Import T2/T3/T3 - All ports">Database Type: India Import T2/T3/T3 - All ports</span></div>
                                                     
                                                    
                                                     <a href="#" class="py-2 my_work_link">Keyword: teak wood, ro</a>
                                                     <div class="fw-bold text-dark-400"><span class="font_15px" title="26405">Shipments:</span> 26405</div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold text-dark-400"><span class="font_15px" title="Aman Sachdeva">Created By:</span> Aman Sachdeva</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Indicator-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">18-Aug-2022</span>
                                                    <span class="text-dark-400 fs-7">02:24:07 PM</span>
                                                   <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                   <i class="fas fa-heart fs-7 ms-2" data-bs-toggle="Add to Favorites" title="Add to Favorites"></i>
                                                </div>
                                                <!--end::Indicator-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    
                                   
                                </div>
                                <!--end::Row-->
                                <!--begin::Pagination-->
                                <div class="d-flex flex-stack flex-wrap pt-10">
                                    <div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
                                    <!--begin::Pages-->
                                    <ul class="pagination">
                                        <li class="page-item previous">
                                            <a href="#" class="page-link">
                                                <i class="previous"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">6</a>
                                        </li>
                                        <li class="page-item next">
                                            <a href="#" class="page-link">
                                                <i class="next"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Pages-->
                                </div>
                                <!--end::Pagination-->
        <!--end::Row-->
       
      
    </div>
    <!--end::Container-->

<div class="modal fade" tabindex="-1" id="kt_modal_create_workspace">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered700px">
        <div class="modal-content">
           
            <div class="modal-body modal-body-change">
                <!--begin::Close-->
                <div class="btn close_btn  btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x common_btn_one">
                        <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="24px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fff" d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
                    </span>
                </div>
                <!--end::Close-->
                <!--begin::Form-->
                    <form action="" class="form mb-5" method="post" id="kt_contact_form">
                        <h1 class="fw-bolder text-dark mb-4">Create Workspace</h1>
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row mb-2">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Create Folder</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                           
                        </div>
                        <!--end::Input group-->
                        
                        
                        <!--begin::Submit-->
                        <button type="submit" class="btn btn-sm common_btn_one" id="kt_contact_submit_button">
                            <!--begin::Indicator-->
                            <span class="indicator-label">Save</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator-->
                        </button>
                        <!--end::Submit-->
                    </form>
                    <!--end::Form-->
            </div>

           
        </div>
    </div>
</div>


<!----------------alert---------->

@endsection
