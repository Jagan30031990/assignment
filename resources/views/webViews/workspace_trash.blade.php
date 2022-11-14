@extends('layout.layout') @section('title','Exim Pulse')
@section('content')
<!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Navbar-->
        
        <!--end::Navbar-->
        <!--begin::Row-->
        <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap flex-stack mb-6">
                                    <!--begin::Title-->
                                    <h3 class="fw-bolder my-2">Trash
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Controls-->
                                    <div class="d-flex align-items-center my-2">
                                       <div class="search_box">
                                            <!--begin::Input-->
                                        <input type="text" name="text_input" class="form-control form-control-solid mb-lg-0" placeholder="Search" value="" />
                                        <!--end::Input-->
                                       <button class="search_i">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="#fff"></rect>
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="#fff"></path>
                                        </svg>
                                       </button>
                                        </div>
                                         <button class="btn common_btn_one btn-sm mx-4" data-bs-toggle="modal" data-bs-target="#help_popup">Help</button>
                                        <button class="btn common_btn_one btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_create_workspace">Create Folder</button>
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <div class="card mb-5 p-5 mb-10">
                                    <form>
                                        <div class="d-flex align-items-center filter_section">
                                            
                                    	<!--begin::Input group-->
                                            <div class="fv-row">
                                                <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                                    <option value="next">Select user</option>
                                                    <option value="last">Within the last</option>
                                                    <option value="between">Between</option>
                                                    <option value="on">On</option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->
                                    	<!--begin::Input group-->
                                            <div class="fv-row">
                                            <input class="form-control form-control-solid" placeholder="Select date" id="kt_daterangepicker_1" />
                                            </div>
                                            <!--end::Input group-->
                                             <!--begin::Input group-->
                                            <div class="fv-row">
                                                <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                                   <option value="-1">All</option><option value="IsFavorite_1">Favorites</option>
                                                    <option value="ImportExportId_1">Import</option>
                                                    <option value="ImportExportId_2">Export</option>
                                                    <option value="QueryTypeId_6">Fixed</option>
                                                    <option value="QueryTypeId_Flexible">Flexible</option>
                                                    <option value="IsFixedQueryExpired_Workspace">Expired</option>

                                                </select>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                                    <option value="next">Database type</option>
                                                    <option value="last">Within the last</option>
                                                    <option value="between">Between</option>
                                                    <option value="on">On</option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->
                                            
                                        </div>
                                    </form>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                   <div class="card">
                                       <div class="card-body pt-0">
                                        <!--begin::Table-->
                                         <div class="table-responsive">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                   
                                                    <th class="min-w-50px">Description</th>
                                                    <th class="min-w-150px">Query Type</th>
                                                    <th class="min-w-150px">Search Type</th>
                                                    <th class="min-w-150px">Search Date</th>
                                                    <th class="min-w-100px">Shipments</th>
                                                    <th class="min-w-150px">Keywords</th>
                                                   
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <!--begin::Table row-->
                                                <tr>
                                                  
                                                    <!--begin::Category=-->
                                                    <td>
                                                       <a href="#">
                                                           Training
                                                       </a>
                                                    </td>
                                                    <!--end::Category=-->
                                                    <!--begin::Type=-->
                                                    <td>
                                                        Desktop Saved Query
                                                    </td>
                                                    <!--end::Type=-->
                                                     <!--begin::Type=-->
                                                    <td>
                                                        India Import T2/T3/T3 - All ports
                                                    </td>
                                                    <!--end::Type=-->
                                                     <!--begin::Type=-->
                                                    <td>
                                                        18-Aug-2022 02:24:07 PM
                                                    </td>
                                                    <!--end::Type=-->
                                                     <!--begin::Type=-->
                                                    <td>
                                                       26405 
                                                    </td>
                                                    <!--end::Type=-->
                                                     <!--begin::Type=-->
                                                    <td>
                                                        teak wood, round logs
                                                    </td>
                                                    <!--end::Type=-->
                                                    <!--begin::Action=-->
                                                    
                                                    <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                               
                                               
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                        <!--end::Table-->
                                    </div>
                                   </div>
                                </div>
                                <!--end::Row-->
                               
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
<div class="modal fade" tabindex="-1" id="help_popup">
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
                        <h1 class="fw-bolder text-dark mb-4">Help</h1>
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                            <!--end::Col-->
                           
                        </div>
                        <!--end::Input group-->
                        
                        
                        <!--begin::Submit-->
                        <button type="submit" class="btn btn-sm common_btn_one" id="kt_contact_submit_button">
                            <!--begin::Indicator-->
                            <span class="indicator-label">Need more help?</span>
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
