@extends('layout.layout') @section('title','Exim Pulse')
@section('content')
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">

<!--begin::Timeline-->
<div class="card">
<!--begin::Card head-->
<div class="card-header card-header-stretch">
<!--begin::Title-->
<div class="card-title d-flex align-items-center">
<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
<span class="svg-icon svg-icon-1 svg-icon-primary me-3 lh-0">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
</svg>
</span>
<!--end::Svg Icon-->
<div class="fv-row">
<input class="form-control form-control-solid" placeholder="Select date" id="kt_daterangepicker_1" />
</div>
</div>
<!--end::Title-->
<!--begin::Toolbar-->
<div class="card-toolbar m-0">
<!--begin::Tab nav-->
<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bolder" role="tablist">
<li class="nav-item" role="presentation">
    <a id="kt_activity_Import_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_Import">Import</a>
</li>
<li class="nav-item" role="presentation">
    <a id="kt_activity_Export_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_Export">Export</a>
</li>

</ul>
<!--end::Tab nav-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Card head-->
<!--begin::Card body-->
<div class="card-body">
<!--begin::Tab Content-->
<div class="tab-content">
<!--begin::Tab panel-->
<div id="kt_activity_Import" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_Import_tab">
<!--begin::Timeline-->
<div class="timeline">
<div class="card-body card-body-n pt-0">
        <!--begin::Table-->
         <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                   
                    <th class="min-w-50px">HS Codes</th>
                    <th class="min-w-150px">Suppliers<br>My Vs All</th>
                    <th class="min-w-150px">Countries<br>My Vs All</th>
                    <th class="min-w-150px">Value & Share<br>My Vs All</th>
                    <th class="min-w-100px">Growth Potential</th>
                    
                   
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
<!--end::Timeline-->
</div>
<!--end::Tab panel-->
<!--begin::Tab panel-->
<div id="kt_activity_Export" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_Export_tab">
<div class="timeline">
    <h1>Table0</h1>
    
</div>
</div>
<!--end::Tab panel-->


</div>
<!--end::Tab Content-->
</div>
<!--end::Card body-->
</div>
<!--end::Timeline-->
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
