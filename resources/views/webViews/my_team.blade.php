@extends('layout.layout') @section('title','Exim Pulse')
@section('content')
<!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Navbar-->
        
        <!--end::Navbar-->
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="card col-xl-12">
                <!--begin::Category-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <h3 class="card-title fw-bolder text-dark">Total User Created : 2/5</h3>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                       
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    
                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="menu-link px-3"><i class="fa fa-user-plus"></i> &nbsp;Add Member</a>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="javascript:void(0);" id="activate_btn" class="menu-link px-3"><i class="fa fa-power-off"></i> &nbsp; Activate</a>
                                </div>
                                <!--end::Menu item-->
                                
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="javascript:void(0)" id="suspend_btn" class="menu-link px-3"><i class="fa fa-ban"></i> &nbsp; Suspend</a>
                                </div>
                                <!--end::Menu item-->
                                
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3"><i class="fa fa-trash" aria-hidden="true"></i>  &nbsp;  Remove Member</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                     <div class="table-responsive">
                          <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_ecommerce_category_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                              <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                            </div>
                        </th>
                            <th class="min-w-100px">First Name</th>
                            <th class="min-w-100px">Role</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-100px">Email</th>
                            <th class="min-w-100px">Last Login On</th>
                            <th class="min-w-50px">Re-send Link</th>
                            <th class="min-w-50px">Active Subscriptions</th>
                            
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bolder text-gray-600">
                        
                            <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <!--end::Checkbox-->
                            <!--begin::Order ID-->
                            <td>Aman Sachdeva</td>
                            <td>
                                <a href="#" class="text-dark text-hover-primary">Desktop Company Admin</a>
                            </td>
                            <!--end::Order ID-->
                            <!--begin::Crated date-->
                            <!--begin::Crated date-->
                            <!--badge badge-light-warning-->
                            <!--badge badge-light-danger-->

                            <td class="text-left">
                                <span class="badge py-3 px-4 fs-7 badge-light-success">Active</span>
                            </td>
                            <!--end::Created date-->
                            <!--begin::Customer-->
                            <td class="text-left">
                                <a href="" class="text-dark text-hover-primary">ajay.kumar@decor-masters.com</a>
                            </td>
                            <!--end::Customer-->
                            <!--begin::Total-->
                            <td class="text-left">
                                04-Nov-2022 10:41:00
                            </td>
                            <!--end::Total-->
                            <!--begin::Profit-->
                            <td class="text-left">
                                <a href="#" style="text-decoration: underline;">Send Link</a>
                            </td>
                            <!--end::Profit-->
                            <!--begin::Status-->
                            <td class="text-left">
                                <a class="btn  table_btn common_btn_one btn-flex h-40px border-0 fw-bolder px-4 px-lg-6" href="#">Check your plan</a>
                                
                            </td>
                            <!--end::Status-->
                            
                        </tr>
                        
                        
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                     </div>

                    <!--end::Card body-->
                </div>
                <!--end::Category-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10 mt-10">
            <!--begin::Col-->
            <div class="card col-xl-12 mb-xl-10">
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
                                    <div class="fs-5 fw-bolder mb-2">Points consumed</div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Name-->
                                <!--begin::Description-->
                                <div class="fs-7 fw-bold text-gray-400">18308</div>
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
                                    <div class="fs-5 fw-bolder mb-2">Favorites Companies</div>
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
        </div>
        <!--end::Row-->
       <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="card col-xl-12">
                <!--begin::Category-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <h3 class="card-title fw-bolder text-dark">Team Subscriptions Request</h3>
                        <!--end::Card title-->
                        
                    </div>
                    <!--end::Card header-->
                     <div class="table-responsive">
                          <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_ecommerce_category_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                             
                            <th class="min-w-100px">User Name</th>
                            <th class="min-w-100px">Company Name</th>
                            <th class="min-w-100px">Plan Name</th>
                            <th class="min-w-100px">Permission Requested On</th>
                            <th class="min-w-100px">Action</th>
                            
                            
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bolder text-gray-600">
                        
                            <!--begin::Order ID-->
                            <td>Aman Sachdeva</td>
                            <td>
                                <a href="#" class="text-dark text-hover-primary">Desktop Company Admin</a>
                            </td>
                            <!--end::Order ID-->
                            <!--begin::Crated date-->
                            <!--begin::Crated date-->
                            <!--badge badge-light-warning-->
                            <!--badge badge-light-danger-->

                            <td class="text-left">
                                <span class="badge py-3 px-4 fs-7 badge-light-success">Active</span>
                            </td>
                            <!--end::Created date-->
                            <!--begin::Customer-->
                            <td class="text-left">
                                <a href="" class="text-dark text-hover-primary">ajay.kumar@decor-masters.com</a>
                            </td>
                            <!--end::Customer-->
                            
                            <!--begin::Status-->
                                <td class="text-left">
                                    <div class="d-flex justify-content-start flex-shrink-0">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                </td>
                            <!--end::Status-->
                            
                        </tr>
                        
                        
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                     </div>

                    <!--end::Card body-->
                </div>
                <!--end::Category-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->

<div class="modal fade" tabindex="-1" id="kt_modal_1">
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
                        <h1 class="fw-bolder text-dark mb-4">Add New User</h1>
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row mb-2">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row mb-2">
                                <!--end::Label-->
                                <label class="fs-5 fw-bold mb-2">Email</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="email" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                               
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                            <span class="fw-bold ps-2 fs-6">Is Admin?</span>
                                        </label>
                                        <!--end::Option-->
                                        
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Workspace Permissions</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                            <span class="fw-bold ps-2 fs-6">Create</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                            <span class="fw-bold ps-2 fs-6">Download</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                            <span class="fw-bold ps-2 fs-6">Share</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
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
<script>
const activate_btn = document.getElementById('activate_btn');

activate_btn.addEventListener('click', e =>{
    e.preventDefault();

   activate_btn.addEventListener('click', e =>{
    e.preventDefault();

    Swal.fire({
        text: "Select at least one Member to Activate!",
        icon: "info",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-danger"
        }
    });
});
});
</script>
<script>
const suspend_btn = document.getElementById('suspend_btn');

suspend_btn.addEventListener('click', e =>{
    e.preventDefault();

   suspend_btn.addEventListener('click', e =>{
    e.preventDefault();

    Swal.fire({
        text: "Select at least one Member to Suspend!",
        icon: "info",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-danger"
        }
    });
});
});
</script>
@endsection
