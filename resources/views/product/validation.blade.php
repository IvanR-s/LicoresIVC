@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Validation';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Forms"=>"Forms"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
    <link rel="stylesheet" href="/css/vendor/tagify.css"/>
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/forms/validation.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <p class="mb-0">{{ $description }}</p>
                        </div>
                    </div>
                    <!-- Common Rules Start -->
                    <section class="scroll-section" id="commonRules">
                        <h2 class="small-title">Common</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form id="rulesForm" class="tooltip-label-end" novalidate>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="rulesName" />
                                        <div class="form-text">Must be letters only!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Id</label>
                                        <input type="text" class="form-control" name="rulesId" />
                                        <div class="form-text">Must be digits and 8 chars only!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Age</label>
                                        <input type="text" class="form-control" name="rulesAge" />
                                        <div class="form-text">Must be 18 and over!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="rulesEmail" />
                                        <div class="form-text">Must be a valid email!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Details</label>
                                        <textarea class="form-control" rows="2" name="rulesDetail"></textarea>
                                        <div class="form-text">Must be 20 chars or less!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control" name="rulesPassword" id="rulesPassword" />
                                        <div class="form-text">Must be at least 6 chars!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="text" class="form-control" name="rulesPasswordConfirm" id="rulesPasswordConfirm" />
                                        <div class="form-text">Must be same with password!</div>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Credit Card</label>
                                        <input type="text" class="form-control" name="rulesCreditCard" id="rulesCreditCard" />
                                        <div class="form-text">Must be a valid credit card number without whitespace!</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                    <!-- Common Rules End -->
            </div>

            <!-- Scrollspy Start -->
            <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="#title">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Title</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#basic">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#commonRules">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Common Rules</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#topLabel">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Top Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#floatingLabel">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Floating Label</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#filled">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Filled</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#positions">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Positions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#bootstrapValidation">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Bootstrap Validation</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#bootstrapServerSide">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Bootstrap Server Side</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection
