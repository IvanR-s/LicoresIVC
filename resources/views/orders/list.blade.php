@php
    $html_tag_data = [];
    $title = 'Order List';
    $description= 'Ecommerce Order List Page';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/orders.list.js"></script>
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

        <!-- Order List Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <div class="card mb-2 bg-transparent no-shadow d-none d-md-block">
                    <div class="card-body pt-0 pb-0 sh-3">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-md-2 d-flex align-items-center mb-2 mb-md-0 text-muted text-small">ID</div>
                            <div class="col-md-3 d-flex align-items-center text-muted text-small">NAME</div>
                            <div class="col-md-2 d-flex align-items-center text-muted text-small">PRICE</div>
                            <div class="col-md-2 d-flex align-items-center text-muted text-small">DATE</div>
                            <div class="col-md-2 d-flex align-items-center text-muted text-small">STATUS</div>
                        </div>
                    </div>
                </div>
                <div id="checkboxTable">
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1239</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Joisse Kaycee</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    321.75
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">13.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">CONFIRMED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1251</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Esperanza Lodge</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    59.00
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">14.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">CONFIRMED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1397</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Blaine Cottrell</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    128.25
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">17.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">CONFIRMED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1421</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Daisy Hartley</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    252.75
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">17.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">CONFIRMED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1438</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Kathryn Mengel</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    189.50
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">18.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">CONFIRMED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1573</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Winry Rockbell</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    63.10
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">19.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-secondary">RECEIVED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">1633</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Olli Hawkins</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    45.10
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">20.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-secondary">RECEIVED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">2411</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Kirby Peters</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    79.75
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">22.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-tertiary">SHIPPED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">2743</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Zayn Hartley</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    124.75
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">26.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-tertiary">SHIPPED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
                                    <label class="form-check float-end pe-none mt-1">
                                        <input type="checkbox" class="form-check-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body pt-0 pb-0 sh-21 sh-md-8">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-11 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <a href="/Orders/Detail" class="text-truncate h-100 d-flex align-items-center">2768</a>
                                </div>
                                <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Name</div>
                                    <div class="text-alternate">Lyle Matthams</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Price</div>
                                    <div class="text-alternate">
                  <span>
                    <span class="text-small">$</span>
                    168.50
                  </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
                                    <div class="text-muted text-small d-md-none">Date</div>
                                    <div class="text-alternate">28.09.2020</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0 order-last order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-tertiary">SHIPPED</span>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 text-end order-md-last">
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
        <!-- Order List End -->

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
