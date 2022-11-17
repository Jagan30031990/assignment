@extends('layout.layout') @section('title','Exim Pulse')
@section('content')




<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
    <!--begin::Form-->
    <form action="#">
        <!--begin::Card-->
        <div class="card mb-7">
            <!--begin::Card body-->
            <div class="card-body ">
                <div class="card-header border-0 p-0">
                    <h3 class="card-title fw-bolder text-dark">Select Search Parameters</h3>

                </div>
                <div class="form-group row mb-5">
                    <div class="col-md-3 mb-2">
                        <label class="form-label">Period:</label>
                        <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                            <option></option>
                            <option value="6">Last 30 Days</option>
                            <option value="3">Last Month</option>
                            <option value="1">Last 3 Months</option>
                            <option value="2">Last 6 Months</option>
                            <option value="10">Last 90 Days</option>
                            <option value="11">Last 180 Days</option>
                            <option value="4">Last Year</option>
                            <option value="9">Last One Year</option>
                            <option value="-1">Custom</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="form-label">Start Date:</label>
                        <input class="form-control" data-kt-repeater="datepicker" placeholder="Pick a date" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="form-label">End Date:</label>
                        <input class="form-control" data-kt-repeater="datepicker" placeholder="Pick a date" />
                    </div>

                </div>
                <div class="form-group row mb-5">
                    <div class="col-md-3">
                        <label class="form-label">Search Field:</label>
                        <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                            <option></option>
                            <option value="productDesc">Product</option>
                            <option value="hSCode">HS 2</option>
                            <option value="hs4Or8">HS 4, 6 Or 8</option>
                            <option value="GlobalImporter">Consignee Name</option>
                            <option value="GlobalExporter">Shipper Name</option>
                            <option value="GlobalCompany">Company Name</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Operator:</label>
                        <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                            <option></option>
                            <option value="contains">Contains</option>
                            <option value="equal">Exact phrase</option>
                            <option value="wildcard">Partial Phrase</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tags:</label>
                        <input class="form-control" data-kt-repeater="tagify" value="tag1, tag2, tag3" />
                    </div>

                </div>
                <!--begin::Repeater-->
                <div id="kt_docs_repeater_advanced">
                    <!--begin::Form group-->
                    <div class="form-group">
                        <div data-repeater-list="kt_docs_repeater_advanced">
                            <div data-repeater-item>
                                <div class="form-group row mb-5">
                                    <div class="col-md-2">
                                        <label class="form-label">Search Operator:</label>
                                        <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                            <option></option>
                                            <option value="And">And</option>
                                            <option value="Or">Or</option>
                                            <option value="Not">And Not</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Search Field:</label>
                                        <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                            <option></option>
                                            <option value="0">Select</option>
                                            <option value="productDesc">Product</option>
                                            <option value="hSCode">HS 2</option>
                                            <option value="hs4Or8">HS 4, 6 Or 8</option>
                                            <option value="GlobalImporter">Consignee Name</option>
                                            <option value="GlobalExporter">Shipper Name</option>
                                            <option value="GlobalCompany">Company Name</option>
                                            <option value="destinationCountry">Country of Destination</option>
                                            <option value="originCountry">Country of Origin</option>
                                            <option value="destinationPort">Port of Destination</option>
                                            <option value="originPort">Port of Origin</option>
                                            <option value="quantity">Qty</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                    <label class="form-label">Operator:</label>
                                    <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="contains">Contains</option>
                                        <option value="equal">Exact phrase</option>
                                        <option value="wildcard">Partial Phrase</option>
                                    </select>
                                </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tags:</label>
                                        <input class="form-control" data-kt-repeater="tagify" value="tag1, tag2, tag3" />
                                    </div>
                                    <div class="col-md-1">
                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                            <i class="la la-trash-o fs-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->
                   <div class="button_box">
                    <!--begin::Form group-->
                   <div class="form-group">
                        <a href="javascript:;" class="btn btn-sm common_btn_one_two">
                           Reset
                        </a>
                    </div>
                    <!--end::Form group-->
                     <!--begin::Form group-->
                   <div class="form-group">
                        <a href="javascript:;" class="btn btn-sm common_btn_one">
                           Submit
                        </a>
                    </div>
                    <!--end::Form group-->
                    <!--begin::Form group-->
                    <div class="form-group">
                        <a href="javascript:;" data-repeater-create class="btn btn-sm common_btn_one">
                            <i class="la la-plus"></i>Add
                        </a>
                    </div>
                    <!--end::Form group-->
                   </div>
                </div>
                <!--end::Repeater-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </form>
    <!--end::Form-->

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function() {
            $('#kt_docs_repeater_advanced').repeater({
                initEmpty: true,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();

                    // Re-init select2
                    $(this).find('[data-kt-repeater="select2"]').select2();

                    // Re-init flatpickr
                    $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                    // Re-init tagify
                    new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },

                ready: function() {
                    // Init select2
                    $('[data-kt-repeater="select2"]').select2();

                    // Init flatpickr
                    $('[data-kt-repeater="datepicker"]').flatpickr();

                    // Init Tagify

                    new Tagify(document.querySelector('[data-kt-repeater="tagify"]'), {
                        whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
                        maxTags: 5,
                        dropdown: {
                            maxItems: 10, // <- mixumum allowed rendered suggestions
                            enabled: 1, // <- show suggestions on focus
                            closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
                        }
                    });
                }
            });
        })
    </script>

    @endsection