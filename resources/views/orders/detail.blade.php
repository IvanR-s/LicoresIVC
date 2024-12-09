@php
    $html_tag_data = [];
    $title = 'Order Detail';
    $description= 'Ecommerce Order Detail Page'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
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
                            <span class="text-small align-middle">Orders</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-end justify-content-end">
                    <!-- Status Button Start -->
                    <div class="dropdown-as-select w-100 w-md-auto">
                        <button
                                class="btn btn btn-outline-primary w-100 w-md-auto dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Status: Pending</a>
                            <a class="dropdown-item" href="#">Status: Shipped</a>
                            <a class="dropdown-item active" href="#">Status: Delivered</a>
                        </div>
                    </div>
                    <!-- Status Button End -->

                    <!-- Dropdown Button Start -->
                    <div class="ms-1">
                        <button
                                type="button"
                                class="btn btn-outline-primary btn-icon btn-icon-only"
                                data-bs-offset="0,3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-submenu
                        >
                            <i data-acorn-icon="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">View Invoice</button>
                            <button class="dropdown-item" type="button">Track Package</button>
                        </div>
                    </div>
                    <!-- Dropdown Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row gx-4 gy-5">
            <div class="col-12 col-xl-8 col-xxl-9 mb-n5">
                <!-- Status Start -->
                <h2 class="small-title">Status</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="card sh-13 sh-lg-15 sh-xl-14">
                                <div class="h-100 row g-0 card-body align-items-center py-3">
                                    <div class="col-auto pe-3">
                                        <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="tag" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center lh-1-25">Order Id</div>
                                        <div class="text-primary">2241</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="card sh-13 sh-lg-15 sh-xl-14">
                                <div class="h-100 row g-0 card-body align-items-center py-3">
                                    <div class="col-auto pe-3">
                                        <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="clipboard" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center lh-1-25">Order Status</div>
                                        <div class="text-primary">Delivered</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="card sh-13 sh-lg-15 sh-xl-14">
                                <div class="h-100 row g-0 card-body align-items-center py-3">
                                    <div class="col-auto pe-3">
                                        <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="calendar" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center lh-1-25">Delivery Date</div>
                                        <div class="text-primary">17.11.2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="card sh-13 sh-lg-15 sh-xl-14">
                                <div class="h-100 row g-0 card-body align-items-center py-3">
                                    <div class="col-auto pe-3">
                                        <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="shipping" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center lh-1-25">Tracking Code</div>
                                        <div class="text-primary">US4244290109</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Status End -->

                <!-- Cart Start -->
                <h2 class="small-title">Cart</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <div class="row g-0 sh-9 mb-3">
                                        <div class="col-auto">
                                            <img src="/img/product/small/product-9.webp" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                <div class="row g-0 h-100 align-items-start align-content-center">
                                                    <div class="col-12 d-flex flex-column mb-2">
                                                        <div>XBox Controller</div>
                                                        <div class="text-muted text-small">Microsoft</div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                        <div class="row g-0">
                                                            <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                <span>12</span>
                                                                <span class="text-muted ms-1 me-1">x</span>
                                                                <span>
                                <span class="text-small">$</span>
                                1.10
                              </span>
                                                            </div>
                                                            <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                13.20
                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 sh-9 mb-3">
                                        <div class="col-auto">
                                            <img src="/img/product/small/product-8.webp" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                <div class="row g-0 h-100 align-items-start align-content-center">
                                                    <div class="col-12 d-flex flex-column mb-2">
                                                        <div>Geometric Chandelier</div>
                                                        <div class="text-muted text-small">Ikea</div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                        <div class="row g-0">
                                                            <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                <span>3</span>
                                                                <span class="text-muted ms-1 me-1">x</span>
                                                                <span>
                                <span class="text-small">$</span>
                                2.75
                              </span>
                                                            </div>
                                                            <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                8.25
                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 sh-9 mb-3">
                                        <div class="col-auto">
                                            <img src="/img/product/small/product-2.webp" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                <div class="row g-0 h-100 align-items-start align-content-center">
                                                    <div class="col-12 d-flex flex-column mb-2">
                                                        <div>Aromatic Green Candle</div>
                                                        <div class="text-muted text-small">Oakland</div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                        <div class="row g-0">
                                                            <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                <span>2</span>
                                                                <span class="text-muted ms-1 me-1">x</span>
                                                                <span>
                                <span class="text-small">$</span>
                                7.50
                              </span>
                                                            </div>
                                                            <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                15.00
                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 sh-9 mb-3">
                                        <div class="col-auto">
                                            <img src="/img/product/small/product-1.webp" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                <div class="row g-0 h-100 align-items-start align-content-center">
                                                    <div class="col-12 d-flex flex-column mb-2">
                                                        <div>Wooden Animal Toys</div>
                                                        <div class="text-muted text-small">Wood & Toy</div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                        <div class="row g-0">
                                                            <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                <span>3</span>
                                                                <span class="text-muted ms-1 me-1">x</span>
                                                                <span>
                                <span class="text-small">$</span>
                                6.25
                              </span>
                                                            </div>
                                                            <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                18.75
                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 sh-9 mb-3">
                                        <div class="col-auto">
                                            <img src="/img/product/small/product-3.webp" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                <div class="row g-0 h-100 align-items-start align-content-center">
                                                    <div class="col-12 d-flex flex-column mb-2">
                                                        <div>Good Glass Teapot</div>
                                                        <div class="text-muted text-small">Ikea</div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                        <div class="row g-0">
                                                            <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                <span>3</span>
                                                                <span class="text-muted ms-1 me-1">x</span>
                                                                <span>
                                <span class="text-small">$</span>
                                2.50
                              </span>
                                                            </div>
                                                            <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                7.50
                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 sh-9 mb-3">
                                        <div class="col-auto">
                                            <img src="/img/product/small/product-6.webp" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                                <div class="row g-0 h-100 align-items-start align-content-center">
                                                    <div class="col-12 d-flex flex-column mb-2">
                                                        <div>Wireless On-Ear Headphones</div>
                                                        <div class="text-muted text-small">Sony</div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                                        <div class="row g-0">
                                                            <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                                                <span>1</span>
                                                                <span class="text-muted ms-1 me-1">x</span>
                                                                <span>
                                <span class="text-small">$</span>
                                4.50
                              </span>
                                                            </div>
                                                            <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                4.50
                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto ms-auto ps-3 text-muted">Total</div>
                                        <div class="col-auto sw-13 text-end">
                    <span>
                      <span class="text-small text-muted">$</span>
                      285.25
                    </span>
                                        </div>
                                    </div>
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto ms-auto ps-3 text-muted">Shipping</div>
                                        <div class="col-auto sw-13 text-end">
                    <span>
                      <span class="text-small text-muted">$</span>
                      12.50
                    </span>
                                        </div>
                                    </div>
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto ms-auto ps-3 text-muted">Sale</div>
                                        <div class="col-auto sw-13 text-end">
                    <span>
                      <span class="text-small text-muted">$</span>
                      -24.50
                    </span>
                                        </div>
                                    </div>
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto ms-auto ps-3 text-muted">Grand Total</div>
                                        <div class="col-auto sw-13 text-end">
                    <span>
                      <span class="text-small text-muted">$</span>
                      321.50
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart End -->

                <!-- Activity Start -->
                <h2 class="small-title">Activity</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1"></div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Order Received</a>
                                            <div class="text-alternate">21.11.2020</div>
                                            <div class="text-muted mt-1">Biscuit donut powder sugar plum pastry. Chupa chups topping pastry halvah.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Shipped</a>
                                            <div class="text-alternate">03.12.2020</div>
                                            <div class="text-muted mt-1">Apple pie cotton candy tiramisu biscuit cake muffin tootsie roll bear claw cake.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                            </div>
                            <div class="col">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link pt-0">Delivered</a>
                                            <div class="text-alternate">09.12.2020</div>
                                            <div class="text-muted mt-1">
                                                Marzipan muffin cheesecake. Caramels wafer jelly beans. Icing pudding dessert caramels cake topping marzipan.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Activity End -->
            </div>

            <!-- Address Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <h2 class="small-title">Address</h2>
                <div class="card mb-5">
                    <div class="card-body mb-n5">
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">CUSTOMER</p>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate align-middle">Blaine Cottrell</div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate">blaine@cottrell.com</div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">SHIPPING ADDRESS</p>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate align-middle">Blaine Cottrell</div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate">4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand</div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate">+6443884455</div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">BILLING ADDRESS</p>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate align-middle">Blaine Cottrell</div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate">4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand</div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 me-1">
                                        <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                                    </div>
                                </div>
                                <div class="col text-alternate">+6443884455</div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div>
                                <p class="text-small text-muted mb-2">PAYMENT (CREDIT CARD)</p>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i data-acorn-icon="credit-card" class="text-primary" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col text-alternate">3452 42** **** 4251</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Address End -->
        </div>
    </div>
@endsection
