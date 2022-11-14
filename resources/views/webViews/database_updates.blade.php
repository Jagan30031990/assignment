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
                                    <h3 class="fw-bolder my-2">Database Updates
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Controls-->
                                   
                                    <!--end::Controls-->
                                </div>
                                
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
                                                   
                                                    <th class="min-w-50px">Type</th>
                                                    <th class="min-w-150px">Record Count</th>
                                                    <th class="min-w-150px">Start Date</th>
                                                    <th class="min-w-150px">End Date</th>
                                                   
                                                   
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
                                                       India Export T1
                                                    </td>
                                                    <!--end::Category=-->
                                                    <!--begin::Type=-->
                                                    <td>
                                                       303002443
                                                    </td>
                                                    <!--end::Type=-->
                                                    
                                                     <!--begin::Type=-->
                                                    <td>
                                                        18-Aug-2022 
                                                    </td>
                                                    <!--end::Type=-->
                                                     <!--begin::Type=-->
                                                    <td>
                                                        18-Aug-2022 
                                                    </td>
                                                    <!--end::Type=-->
                                                    
                                                   
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




<!----------------alert---------->

@endsection
