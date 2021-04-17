@extends('layouts.admin.app')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        System Users </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    {{-- <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                Crud </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                KTDatatable </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                Base </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                Local Data </a>
                        </li>
                    </ul> --}}
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">
                    Actions
                </a>
                <!--end::Actions-->

                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left"
                    data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path
                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path
                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span> </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-success">User</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer py-4">
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                    <i class="ki ki-plus icon-sm"></i>
                                    Add new
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!-- begin::Entery-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Notice-->
            <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                    fill="#000000" opacity="0.3"></path>
                                <path
                                    d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                    fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <div class="alert-text">
                    The Metronic KTDatatable supports vertical scrolling with fixed height.local or remote data source. For
                    the local data you can pass javascript array as data source. In this example the grid fetches its
                    data from a javascript array data source. For more information visit <a class="font-weight-bold"
                        href="https://keenthemes.com/metronic/?page=docs&amp;section=html/components/datatable"
                        target="_blank">Metronic KTDatatable Documentation</a>.
                </div>
            </div>
            <!--end::Notice-->

            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Users
                            <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                fill="#000000" opacity="0.3"></path>
                                            <path
                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span> Export
                            </button>

                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                        Choose an option:
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="la la-print"></i></span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="la la-copy"></i></span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="la la-file-text-o"></i></span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->

                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                        <path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span> New Record
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..."
                                                id="kt_datatable_search_query">
                                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <div class="dropdown bootstrap-select form-control dropup"><select
                                                    class="form-control" id="kt_datatable_search_status" tabindex="null">
                                                    <option value="">All</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Delivered</option>
                                                    <option value="3">Canceled</option>
                                                    <option value="4">Success</option>
                                                    <option value="5">Info</option>
                                                    <option value="6">Danger</option>
                                                </select><button type="button" tabindex="-1"
                                                    class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                    role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                                    aria-expanded="false" data-id="kt_datatable_search_status"
                                                    title="Canceled">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Canceled</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu"
                                                    style="max-height: 331.25px; overflow: hidden; min-height: 130px;">
                                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"
                                                        aria-activedescendant="bs-select-1-3"
                                                        style="max-height: 318.25px; overflow-y: auto; min-height: 117px;">
                                                        <ul class="dropdown-menu inner show" role="presentation"
                                                            style="margin-top: 0px; margin-bottom: 0px;">
                                                            <li class=""><a role="option" class="dropdown-item"
                                                                    id="bs-select-1-0" tabindex="0" aria-setsize="7"
                                                                    aria-posinset="1"><span class="text">All</span></a></li>
                                                            <li><a role="option" class="dropdown-item" id="bs-select-1-1"
                                                                    tabindex="0"><span class="text">Pending</span></a></li>
                                                            <li><a role="option" class="dropdown-item" id="bs-select-1-2"
                                                                    tabindex="0"><span class="text">Delivered</span></a>
                                                            </li>
                                                            <li class="selected active"><a role="option"
                                                                    class="dropdown-item active selected" id="bs-select-1-3"
                                                                    tabindex="0" aria-setsize="7" aria-posinset="4"
                                                                    aria-selected="true"><span
                                                                        class="text">Canceled</span></a></li>
                                                            <li><a role="option" class="dropdown-item" id="bs-select-1-4"
                                                                    tabindex="0" aria-setsize="7" aria-posinset="5"><span
                                                                        class="text">Success</span></a></li>
                                                            <li class="selected active"><a role="option"
                                                                    class="dropdown-item active selected" id="bs-select-1-5"
                                                                    tabindex="0" aria-setsize="7" aria-posinset="6"
                                                                    aria-selected="true"><span class="text">Info</span></a>
                                                            </li>
                                                            <li><a role="option" class="dropdown-item" id="bs-select-1-6"
                                                                    tabindex="0" aria-setsize="7" aria-posinset="7"><span
                                                                        class="text">Danger</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                            <div class="dropdown bootstrap-select form-control"><select class="form-control"
                                                    id="kt_datatable_search_type" tabindex="null">
                                                    <option value="">All</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Retail</option>
                                                    <option value="3">Direct</option>
                                                </select><button type="button" tabindex="-1"
                                                    class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                    role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"
                                                    aria-expanded="false" data-id="kt_datatable_search_type" title="Retail">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Retail</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu"
                                                    style="max-height: 223.75px; overflow: hidden; min-height: 130px;">
                                                    <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"
                                                        aria-activedescendant="bs-select-2-2"
                                                        style="max-height: 210.75px; overflow-y: auto; min-height: 117px;">
                                                        <ul class="dropdown-menu inner show" role="presentation"
                                                            style="margin-top: 0px; margin-bottom: 0px;">
                                                            <li class="selected active"><a role="option"
                                                                    class="dropdown-item active selected" id="bs-select-2-0"
                                                                    tabindex="0" aria-setsize="4" aria-posinset="1"
                                                                    aria-selected="true"><span class="text">All</span></a>
                                                            </li>
                                                            <li><a role="option" class="dropdown-item" id="bs-select-2-1"
                                                                    tabindex="0" aria-setsize="4" aria-posinset="2"><span
                                                                        class="text">Online</span></a></li>
                                                            <li class="selected active"><a role="option"
                                                                    class="dropdown-item active selected" id="bs-select-2-2"
                                                                    tabindex="0" aria-setsize="4" aria-posinset="3"
                                                                    aria-selected="true"><span
                                                                        class="text">Retail</span></a></li>
                                                            <li><a role="option" class="dropdown-item" id="bs-select-2-3"
                                                                    tabindex="0"><span class="text">Direct</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                                    Search
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->

                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                        id="kt_datatable" style="">
                        <table class="datatable-table" style="display: block;">
                            <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">
                                    <th data-field="RecordID"
                                        class="datatable-cell-center datatable-cell datatable-cell-check"><span
                                            style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input
                                                    type="checkbox">&nbsp;<span></span></label></span></th>
                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 137px;">Order ID</span></th>
                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 137px;">Country</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 137px;">Ship Date</span></th>
                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 137px;">Company Name</span></th>
                                    <th data-field="Status" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 137px;">Status</span></th>
                                    <th data-field="Type" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span style="width: 137px;">Type</span>
                                    </th>
                                    <th data-field="Actions" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 125px;">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body" style="">
                                <tr data-row="0" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="7"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="7">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="33261-641" class="datatable-cell"><span
                                            style="width: 137px;">33261-641</span></td>
                                    <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                            style="width: 137px;">China CN</span></td>
                                    <td data-field="ShipDate" aria-label="4/15/2017" class="datatable-cell"><span
                                            style="width: 137px;">4/15/2017</span></td>
                                    <td data-field="CompanyName" aria-label="Towne, MacGyver and Greenholt"
                                        class="datatable-cell"><span style="width: 137px;">Towne, MacGyver and
                                            Greenholt</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="1" class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="13"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="13">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="50813-0001" class="datatable-cell"><span
                                            style="width: 137px;">50813-0001</span></td>
                                    <td data-field="Country" aria-label="Tunisia" class="datatable-cell"><span
                                            style="width: 137px;">Tunisia TN</span></td>
                                    <td data-field="ShipDate" aria-label="3/4/2016" class="datatable-cell"><span
                                            style="width: 137px;">3/4/2016</span></td>
                                    <td data-field="CompanyName" aria-label="Cole-Hamill" class="datatable-cell"><span
                                            style="width: 137px;">Cole-Hamill</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="2" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="14"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="14">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="21695-353" class="datatable-cell"><span
                                            style="width: 137px;">21695-353</span></td>
                                    <td data-field="Country" aria-label="Argentina" class="datatable-cell"><span
                                            style="width: 137px;">Argentina AR</span></td>
                                    <td data-field="ShipDate" aria-label="10/4/2017" class="datatable-cell"><span
                                            style="width: 137px;">10/4/2017</span></td>
                                    <td data-field="CompanyName" aria-label="Frami Inc" class="datatable-cell"><span
                                            style="width: 137px;">Frami Inc</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="3" class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="16"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="16">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="42352-1001" class="datatable-cell"><span
                                            style="width: 137px;">42352-1001</span></td>
                                    <td data-field="Country" aria-label="Azerbaijan" class="datatable-cell"><span
                                            style="width: 137px;">Azerbaijan AZ</span></td>
                                    <td data-field="ShipDate" aria-label="6/13/2017" class="datatable-cell"><span
                                            style="width: 137px;">6/13/2017</span></td>
                                    <td data-field="CompanyName" aria-label="Moen, Walsh and Bednar" class="datatable-cell">
                                        <span style="width: 137px;">Moen, Walsh and Bednar</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="4" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="35"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="35">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="49981-010" class="datatable-cell"><span
                                            style="width: 137px;">49981-010</span></td>
                                    <td data-field="Country" aria-label="Philippines" class="datatable-cell"><span
                                            style="width: 137px;">Philippines PH</span></td>
                                    <td data-field="ShipDate" aria-label="11/27/2017" class="datatable-cell"><span
                                            style="width: 137px;">11/27/2017</span></td>
                                    <td data-field="CompanyName" aria-label="Goodwin and Sons" class="datatable-cell"><span
                                            style="width: 137px;">Goodwin and Sons</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="5" class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="44"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="44">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="36987-3290" class="datatable-cell"><span
                                            style="width: 137px;">36987-3290</span></td>
                                    <td data-field="Country" aria-label="South Africa" class="datatable-cell"><span
                                            style="width: 137px;">South Africa ZA</span></td>
                                    <td data-field="ShipDate" aria-label="7/9/2016" class="datatable-cell"><span
                                            style="width: 137px;">7/9/2016</span></td>
                                    <td data-field="CompanyName" aria-label="Larson-Kunze" class="datatable-cell"><span
                                            style="width: 137px;">Larson-Kunze</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="6" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="48"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="48">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="53346-1330" class="datatable-cell"><span
                                            style="width: 137px;">53346-1330</span></td>
                                    <td data-field="Country" aria-label="Indonesia" class="datatable-cell"><span
                                            style="width: 137px;">Indonesia ID</span></td>
                                    <td data-field="ShipDate" aria-label="5/8/2016" class="datatable-cell"><span
                                            style="width: 137px;">5/8/2016</span></td>
                                    <td data-field="CompanyName" aria-label="Mraz-Spinka" class="datatable-cell"><span
                                            style="width: 137px;">Mraz-Spinka</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="7" class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="54"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="54">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="68788-6760" class="datatable-cell"><span
                                            style="width: 137px;">68788-6760</span></td>
                                    <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                            style="width: 137px;">China CN</span></td>
                                    <td data-field="ShipDate" aria-label="8/13/2017" class="datatable-cell"><span
                                            style="width: 137px;">8/13/2017</span></td>
                                    <td data-field="CompanyName" aria-label="Blick-Farrell" class="datatable-cell"><span
                                            style="width: 137px;">Blick-Farrell</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                                <tr data-row="8" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                        data-field="RecordID" aria-label="59"><span style="width: 20px;"><label
                                                class="checkbox checkbox-single"><input type="checkbox"
                                                    value="59">&nbsp;<span></span></label></span></td>
                                    <td data-field="OrderID" aria-label="0143-1265" class="datatable-cell"><span
                                            style="width: 137px;">0143-1265</span></td>
                                    <td data-field="Country" aria-label="Indonesia" class="datatable-cell"><span
                                            style="width: 137px;">Indonesia ID</span></td>
                                    <td data-field="ShipDate" aria-label="7/7/2017" class="datatable-cell"><span
                                            style="width: 137px;">7/7/2017</span></td>
                                    <td data-field="CompanyName" aria-label="Zboncak-Hettinger" class="datatable-cell"><span
                                            style="width: 137px;">Zboncak-Hettinger</span></td>
                                    <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                            style="width: 137px;"><span
                                                class="label font-weight-bold label-lg  label-light-primary label-inline">Canceled</span></span>
                                    </td>
                                    <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                        class="datatable-cell"><span style="width: 137px;"><span
                                                class="label label-primary label-dot mr-2"></span><span
                                                class="font-weight-bold text-primary">Retail</span></span></td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 125px;">
                                            <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                    class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                        class="svg-icon svg-icon-md"> <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="datatable-pager datatable-paging-loaded">
                            <ul class="datatable-pager-nav mb-5 mb-sm-0">
                                <li><a title="First"
                                        class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                                <li><a title="Previous"
                                        class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                <li style=""></li>
                                <li style="display: none;"><input type="text" class="datatable-pager-input form-control"
                                        title="Page number"></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active"
                                        data-page="1" title="1">1</a></li>
                                <li style=""></li>
                                <li><a title="Next"
                                        class="datatable-pager-link datatable-pager-link-next datatable-pager-link-disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-next"></i></a></li>
                                <li><a title="Last"
                                        class="datatable-pager-link datatable-pager-link-last datatable-pager-link-disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-fast-next"></i></a></li>
                            </ul>
                            <div class="datatable-pager-info">
                                <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;"><select
                                        class="selectpicker datatable-pager-size" title="Select page size" data-width="60px"
                                        data-container="body" data-selected="10">
                                        <option class="bs-title-option" value=""></option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="combobox" aria-owns="bs-select-8"
                                        aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">10</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-8" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div><span class="datatable-pager-detail">Showing 1 - 9 of 9</span>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!-- end::Entery
@endsection
