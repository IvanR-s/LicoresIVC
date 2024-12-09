@php
    $html_tag_data = [];
    $title = 'Product List';
    $description= 'Ecommerce Product List Page'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>

    <script src="/js/vendor/bootstrap-submenu.js"></script>
    <script src="/js/vendor/datatables.min.js"></script>
    <script src="/js/vendor/mousetrap.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/products.list.js"></script>

    <script src="/js/pages/blocks.thumbnails.js"></script>
    <script src="/js/plugins/datatable.editableboxed.js"></script>
    <script src="/js/cs/datatable.extend.js"></script>
    <script src="/js/plugins/datatable.editableboxed.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
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
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                        <i data-acorn-icon="plus"></i>
                        <span>Add Product</span>
                    </button>
                    <div class="dropdown d-inline-block d-lg-none">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false">
                            <i data-acorn-icon="sort"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end custom-sort">
                            <a class="dropdown-item sort" data-sort="name" href="#">Title</a>
                            <a class="dropdown-item sort" data-sort="email" href="#">Stock</a>
                            <a class="dropdown-item sort" data-sort="phone" href="#">Price</a>
                            <a class="dropdown-item sort" data-sort="group" href="#">Status</a>
                        </div>
                    </div>
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
                            <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
                                <!-- Add Button Start -->
                                <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow add-datatable"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Add"
                                        type="button"
                                        data-bs-delay="0"
                                >
                                    <i data-acorn-icon="plus"></i>
                                </button>
                                <!-- Add Button End -->

                                <!-- Edit Button Start -->
                                <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow edit-datatable disabled"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Edit"
                                        type="button"
                                        data-bs-delay="0"
                                >
                                    <i data-acorn-icon="edit"></i>
                                </button>
                                <!-- Edit Button End -->

                                <!-- Delete Button Start -->
                                <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow disabled delete-datatable"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Delete"
                                        type="button"
                                        data-bs-delay="0"
                                >
                                    <i data-acorn-icon="bin"></i>
                                </button>
                                <!-- Delete Button End -->
                            </div>
                            <div class="d-inline-block">
                                <!-- Print Button Start -->
                                <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print"
                                        data-datatable="#datatableRows"
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
                                <div class="d-inline-block datatable-export" data-datatable="#datatableRows">
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
                                <div class="dropdown-as-select d-inline-block datatable-length" data-datatable="#datatableRows" data-childSelector="span">
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

        <div class="row g-0">
            <div class="col-12 mb-5">
                <!-- List Items Start -->
                <div id="checkboxTable">
                    <!-- Items Container Start -->

                    <!-- Checkboxes Start -->
                <section class="scroll-section" id="checkboxes">
                    <div class="d-flex justify-content-between">
                        <h2 class="small-title">Checkboxes</h2>
                        <div class="btn-group check-all-container mt-n1">
                            <div class="btn btn-sm btn-outline-primary btn-custom-control" id="checkAllforCheckboxTable" data-target="#checkboxTable">
                                <span class="form-check mb-0 pe-1">
                                    <input type="checkbox" class="form-check-input" id="checkAllCheckbox" />
                                </span>
                            </div>
                            <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-offset="0,3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                            ></button>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <a class="dropdown-item" href="#">Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4" id="checkboxTable">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="/img/product/small/product-2.webp" class="card-img-top sh-22" alt="card image" />
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start">
                                            <input type="checkbox" class="form-check-input d-block" />
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Introduction to Bread Making</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="/img/product/small/product-2.webp" class="card-img-top sh-22" alt="card image" />
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block" />
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Facts About Sugar</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="/img/product/small/product-2.webp" class="card-img-top sh-22" alt="card image" />
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block" />
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Apple Cake Recipe</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img src="/img/product/small/product-2.webp" class="card-img-top sh-22" alt="card image" />
                                <div class="card-body pb-3">
                                    <h5 class="heading mb-0 d-flex">
                                        <label class="form-check float-start pe-none">
                                            <input type="checkbox" class="form-check-input d-block" />
                                        </label>
                                        <a href="#" class="body-link d-block lh-1-5">Dough for the Molds</a>
                                    </h5>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="mb-2">
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                    </div>
                                    <div class="card-text mb-0">
                                        <div class="text-muted text-overline text-small">
                                            <del>$ 42.25</del>
                                        </div>
                                        <div>$ 27.50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Checkboxes End -->

                    <!-- List Items End -->
                </div>
            </div>
            <!-- Items Pagination Start -->
            <div class="w-100 d-flex justify-content-center">
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
                            <a class="page-link shadow" href="#">
                                <i data-acorn-icon="chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Items Pagination End -->
        </div>
    </div>
@endsection
