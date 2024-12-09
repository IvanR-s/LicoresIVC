@php
    $html_tag_data = [];
    $title = 'Customer List';
    $description= 'Ecommerce Customer List Page'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/customers.list.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-3 d-flex align-items-end justify-content-end">
                    <!-- Check Button Start -->
                    <div class="btn-group ms-1 check-all-container">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2" data-target="#checkboxTable">
            <span class="form-check float-end">
              <input type="checkbox" class="form-check-input" id="checkAll" />
            </span>
                        </div>
                        <button
                                type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-offset="0,3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                                <span class="align-middle d-inline-block">Status</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="align-middle d-inline-block">Move</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="align-middle d-inline-block">Delete</span>
                            </a>
                        </div>
                    </div>
                    <!-- Check Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" />
                    <span class="search-magnifier-icon">
          <i data-acorn-icon="search"></i>
        </span>
                    <span class="search-delete-icon d-none">
          <i data-acorn-icon="close"></i>
        </span>
                </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                    <!-- Print Button Start -->
                    <button
                            class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-delay="0"
                            title="Print"
                            type="button"
                    >
                        <i data-acorn-icon="print"></i>
                    </button>
                    <!-- Print Button End -->

                    <!-- Export Dropdown Start -->
                    <div class="d-inline-block">
                        <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
            <span
                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                    data-bs-delay="0"
                    data-bs-placement="top"
                    data-bs-toggle="tooltip"
                    title="Export"
            >
              <i data-acorn-icon="download"></i>
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <button class="dropdown-item export-copy" type="button">Copy</button>
                            <button class="dropdown-item export-excel" type="button">Excel</button>
                            <button class="dropdown-item export-cvs" type="button">Cvs</button>
                        </div>
                    </div>
                    <!-- Export Dropdown End -->

                    <!-- Length Start -->
                    <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                        <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
            <span
                    class="btn btn-foreground-alternate dropdown-toggle"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-delay="0"
                    title="Item Count"
            >
              10 Items
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <a class="dropdown-item" href="#">5 Items</a>
                            <a class="dropdown-item active" href="#">10 Items</a>
                            <a class="dropdown-item" href="#">20 Items</a>
                        </div>
                    </div>
                    <!-- Length End -->
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Customers List Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
                    <div class="row g-0 sh-3">
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-lg-1 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small">ID</div>
                                    <div class="col-lg-2 d-flex align-items-center text-muted text-small">NAME</div>
                                    <div class="col-lg-2 d-flex align-items-center text-muted text-small">LOCATION</div>
                                    <div class="col-lg-2 d-flex align-items-center text-muted text-small">SPENT</div>
                                    <div class="col-lg-2 d-flex align-items-center text-muted text-small">LAST ORDER</div>
                                    <div class="col-lg-2 d-flex align-items-center text-muted text-small">STATUS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="checkboxTable">
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">245</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Joisse Kaycee</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Leipzig, DE</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    321.75
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5323</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">244</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Kathleen Bertha</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Salvador, BR</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    321.75
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5323</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">243</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Mickey Fianna</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">San Antonio, US</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">-</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">-</div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">242</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Emilia Antoine</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Los Angeles, US</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">-</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">-</div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">241</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Alicia Shannah</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Stuttgart, DE</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    29.30
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5321</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">240</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Sixte Tera</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Berlin, DE</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    462.20
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5320</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">239</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Gresham Jeanette</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Naples, IT</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">-</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">-</div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">238</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Elsie Pernilla</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Paris, FR</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    85.20
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5318</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">237</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Winry Rockbell</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Seul, KR</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    104.65
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5317</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                                    <div class="text-muted text-small d-lg-none">Id</div>
                                    <a href="/Customers/Detail" class="text-truncate h-100 d-flex align-items-center">236</a>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                    <div class="text-muted text-small d-lg-none">Name</div>
                                    <div class="text-alternate">Joisse Kaycee</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                                    <div class="text-muted text-small d-lg-none">Location</div>
                                    <div class="text-alternate">Rome, IT</div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Spent</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    72.50
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">Last Order</div>
                                    <div class="text-alternate">
                                        <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">5316</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                                    <div class="text-muted text-small d-lg-none mb-1">Status</div>
                                    <div>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="content"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Newsletter"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="boxes"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Purchased"
                                        ></i>
                                        <i
                                                class="text-separator me-2"
                                                data-acorn-icon="check-square"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Trusted"
                                        ></i>
                                        <i
                                                class="text-primary me-2"
                                                data-acorn-icon="phone"
                                                data-acorn-size="17"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="Phone"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customers List End -->

        <!-- Pagination Start -->
        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link shadow" href="#" tabindex="-1" aria-disabled="true">
                            <i data-acorn-icon="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link shadow" href="#">1</a></li>
                    <li class="page-item"><a class="page-link shadow" href="#">2</a></li>
                    <li class="page-item"><a class="page-link shadow" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i data-acorn-icon="chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Pagination End -->
    </div>
@endsection
