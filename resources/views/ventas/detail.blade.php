@php
    $html_tag_data = [];
    $title = 'Product Detail';
    $description= 'Ecommerce Product Detail Page'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/tagify.css"/>
    <link rel="stylesheet" href="/css/vendor/dropzone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/imask.js"></script>
    <script src="/js/vendor/quill.min.js"></script>
    <script src="/js/vendor/quill.active.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
    <script src="/js/vendor/dropzone.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/dropzone.templates.js"></script>
    <script src="/js/pages/products.detail.js"></script>
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
                            <span class="text-small align-middle">Products</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="w-100 d-md-none"></div>
                <div class="col-auto d-flex align-items-end justify-content-end">
                    <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only"
                            data-delay='{"show":"500", "hide":"0"}'
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Save"
                    >
                        <i data-acorn-icon="save"></i>
                    </button>
                </div>
                <div class="col col-md-auto d-flex align-items-end justify-content-end">
                    <div class="btn-group ms-1 w-100 w-md-auto">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                            <i data-acorn-icon="send"></i>
                            <span>Publish</span>
                        </button>
                        <button
                                type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-offset="0,3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" type="button">Unpublish</button>
                            <button class="dropdown-item" type="button">Draft</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-xl-8">
                <!-- Product Info Start -->
                <div class="mb-5">
                    <h2 class="small-title">Product Info</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" value="Aromatic Green Candle" />
                                </div>
                                <div class="mb-3 w-100">
                                    <label class="form-label">Category</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="Breadstick">Whole Wheat</option>
                                        <option value="Biscotti">Rye</option>
                                        <option value="Fougasse" selected>Sourdough</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="html-editor-bubble html-editor sh-13" id="quillEditorBubble">
                                        Dessert gummies soufflé toffee cake. Sesame snaps marzipan sesame snaps gummies oat cake sesame snaps.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Details</label>
                                    <div class="html-editor-bubble html-editor sh-25" id="quillEditorDetails">
                                        <h6>Candy Muffin</h6>
                                        <p>
                                            Marshmallow halvah gummi bears dragée. Pudding tart macaroon jelly beans bonbon. Dessert ice cream sweet powder topping biscuit
                                            gummies jujubes. Candy muffin croissant. Gummi bears jelly beans tootsie roll powder macaroon. Danish brownie cake bar candy.
                                        </p>
                                        <p><br /></p>
                                        <h6>Fruitcake</h6>
                                        <p>
                                            Sugar plum fruitcake cotton candy lemon drops. Carrot cake bear claw fruitcake dragée pie cotton candy sesame snaps lollipop
                                            croissant. Croissant brownie pie. Candy sweet roll pudding pastry cotton candy donut apple pie cotton candy cookie. Icing cake
                                            donut. Topping candy canes fruitcake. Brownie danish cake. Marshmallow donut sweet roll. Wafer tootsie roll gingerbread croissant
                                            ice cream.
                                        </p>
                                        <p><br /></p>
                                        <h6>Gummi Bears</h6>
                                        <p>
                                            Dessert ice cream sweet powder topping biscuit gummies jujubes. Candy muffin croissant. Gummi bears jelly beans tootsie roll powder
                                            macaroon. Danish brownie cake gingerbread tiramisu chocolate bar candy. Jujubes apple pie tootsie roll topping croissant bear claw
                                            tootsie roll.Pastry cake bear claw marzipan jelly beans pastry lemon drops. Tart powder dragée cotton candy sugar plum jelly beans
                                            pastry tart sugar plum. Dragée jelly beans halvah chupa chups icing tart cake tootsie roll lemon drops.
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Product Info End -->

                <!-- Inventory Start -->
                <div class="mb-5">
                    <h2 class="small-title">Inventory</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">SKU</label>
                                    <input type="text" class="form-control" value="DB063-0003" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Barcode</label>
                                    <input type="text" class="form-control" value="038678561125" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="text" class="form-control" value="228" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Settings</label>
                                    <div class="form-check form-switch mb-1">
                                        <input type="checkbox" class="form-check-input" id="quantitySwitch1" />
                                        <label class="form-check-label" for="quantitySwitch1">Allow out of stock purchase</label>
                                    </div>
                                    <div class="form-check form-switch mb-1">
                                        <input type="checkbox" class="form-check-input" id="quantitySwitch2" checked />
                                        <label class="form-check-label" for="quantitySwitch2">Notify low stock</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="quantitySwitch3" />
                                        <label class="form-check-label" for="quantitySwitch3">Display quantity at storefront</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Inventory End -->

                <!-- Shipping Start -->
                <div class="mb-5">
                    <div class="d-flex justify-content-between">
                        <h2 class="small-title">Shipping</h2>
                        <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                            <span class="align-bottom">Edit Shipping Methods</span>
                            <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                        </button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form class="mb-n1">
                                <label class="form-check w-100 mb-1">
                                    <input type="checkbox" class="form-check-input" checked />
                                    <span class="form-check-label d-block">
                  <span class="mb-1 lh-1-25">Standard Shipping</span>
                  <span class="text-muted d-block text-small mt-0">(Price Based Rate)</span>
                </span>
                                </label>
                                <label class="form-check w-100 mb-1">
                                    <input type="checkbox" class="form-check-input" checked />
                                    <span class="form-check-label d-block">
                  <span class="mb-1 lh-1-25">Express Shipping</span>
                  <span class="text-muted d-block text-small mt-0">(Price Based Rate)</span>
                </span>
                                </label>
                                <label class="form-check w-100 mb-1">
                                    <input type="checkbox" class="form-check-input" checked />
                                    <span class="form-check-label d-block">
                  <span class="mb-1 lh-1-25">Priority Shipping</span>
                  <span class="text-muted d-block text-small mt-0">(Price Based Rate)</span>
                </span>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Shipping End -->

                <!-- Attributes Start -->
                <div class="mb-5">
                    <h2 class="small-title">Attributes</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-n6 border-last-none">
                                <div class="mb-3 pb-3 border-bottom border-separator-light">
                                    <div class="row gx-2">
                                        <div class="col col-md-auto order-1">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input class="form-control w-100 sw-md-13" value="Type" />
                                            </div>
                                        </div>
                                        <div class="col-md order-3">
                                            <div class="mb-0">
                                                <label class="form-label">Values</label>
                                                <input name="tagsBasic" value="Whole Wheat, Rye, Sourdough" />
                                            </div>
                                        </div>
                                        <div class="col-auto order-2 order-md-4">
                                            <label class="d-block form-label">&nbsp;</label>
                                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                                <i data-acorn-icon="bin"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 pb-3 border-bottom border-separator-light">
                                    <div class="row gx-2">
                                        <div class="col col-md-auto order-1">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input class="form-control w-100 sw-md-13" value="Size" />
                                            </div>
                                        </div>
                                        <div class="col-md order-3">
                                            <div class="mb-0">
                                                <label class="form-label">Values</label>
                                                <input name="tagsBasic" value="S, M, L, XL" />
                                            </div>
                                        </div>
                                        <div class="col-auto order-2 order-md-4">
                                            <label class="d-block form-label">&nbsp;</label>
                                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                                <i data-acorn-icon="bin"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 pb-3 border-bottom text-center">
                                    <button type="button" class="btn btn-foreground hover-outline btn-icon btn-icon-start mt-2">
                                        <i data-acorn-icon="plus"></i>
                                        <span>Add New</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Attributes End -->
            </div>

            <div class="col-xl-4 mb-n5">
                <!-- Price Start -->
                <div class="mb-5">
                    <h2 class="small-title">Price</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Tax Excluded</label>
                                    <input type="text" class="form-control mask-currency" value="16,20" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Tax Included</label>
                                    <input type="text" class="form-control mask-currency" value="20,40" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Price End -->

                <!-- History Start -->
                <div class="mb-5">
                    <h2 class="small-title">History</h2>
                    <div class="card">
                        <div class="card-body mb-n3">
                            <div class="mb-3">
                                <div class="text-small text-muted">STATUS</div>
                                <div>Published</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">CREATED BY</div>
                                <div>Lisa Jackson</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">CREATE DATE</div>
                                <div>12.05.2021 - 13:42</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">URL</div>
                                <div>/products/wholewheat/cornbread</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- History End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <h2 class="small-title">Image</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="dropzone dropzone-columns row g-2 row-cols-1 row-cols-md-1 border-0 p-0" id="dropzoneProductImage"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Image End -->

                <!-- Gallery Start -->
                <div class="mb-5">
                    <h2 class="small-title">Gallery</h2>
                    <div class="card">
                        <div class="card-body">
                            <form class="mb-3">
                                <div class="dropzone dropzone-columns row g-2 row-cols-1 row-cols-md-4 row-cols-xl-2 border-0 p-0" id="dropzoneProductGallery"></div>
                            </form>
                            <div class="text-center">
                                <button type="button" class="btn btn-foreground hover-outline btn-icon btn-icon-start mt-2" id="dropzoneProductGalleryButton">
                                    <i data-acorn-icon="plus"></i>
                                    <span>Add Files</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery End -->
            </div>
        </div>
    </div>
@endsection
