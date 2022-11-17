@extends('layout.layout') @section('title','Exim Pulse')
@section('content')




<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">

    <!--begin::Card-->
    <div class="card card_box">
        <!--begin::Card body-->
        <div class="card-body ">
            <div class="card-header border-0 p-0">
                <h3 class="card-title fw-bolder text-dark">Select Search Parameters</h3>

            </div>
            <form class="common_form_box">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="button_box">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <a href="javascript:;" class="btn btn-sm import_export_btn active">
                                    Import
                                </a>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <a href="javascript:;" class="btn btn-sm import_export_btn">
                                    Export
                                </a>
                            </div>
                            <!--end::Form group-->

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group row mb-5">
                            <div class="col-md-12 mb-5">

                                <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                    <option>Select Country</option>
                                    <option value="6">India</option>


                                </select>
                            </div>
                            <div class="col-md-12 mb-5">

                                <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                    <option value="0">Choose Value USD (Million)</option>
                                    <option value="1">Less Than 1M</option>
                                    <option value="2">Greater Than 1M to 5M</option>
                                    <option value="3">Greater Than 5M to 25M</option>
                                    <option value="4">Greater Than 25M to 50M</option>
                                    <option value="5">Greater Than 50M to 75M</option>
                                    <option value="6">Greater Than 75M to 100M</option>
                                    <option value="7">Greater Than 100M</option>

                                </select>
                            </div>
                            <div class="col-md-12 mb-5">

                                <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                    <option value="2">HS 2 Digit</option>
                                    <option value="4">HS 4 Digit</option>
                                    <option value="8">HS 8 Digit</option>

                                </select>
                            </div>
                            <div class="col-md-12 mb-5">
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Group by Country</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <div class="col-md-12">
                                <div class="button_box">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <a href="javascript:;" class="btn btn-sm common_btn_one_two">
                                            HS Locator
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <a href="javascript:;" class="btn btn-sm common_btn_one">
                                            Search
                                        </a>
                                    </div>
                                    <!--end::Form group-->

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="left_search">
                            <div class="chart" data-percent="73" data-scale-color="#182e65">
                               <div class="chart_p_c">
                               <h2>73%</h2>
                                <p>Searches Left</p>
                               </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->


    @endsection
