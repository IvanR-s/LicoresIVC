@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Settings Profile';
    $heading = 'Profile';
    $description = 'Settings Profile Page';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Profile"=>"Profile"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/movecontent.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/profile.settings.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-auto d-none d-lg-flex">
                <div class="nav flex-column sw-25 mt-n2" id="settingsColumn">
                    <!-- Content of this will be moved from #settingsMoveContent div based on the responsive breakpoint.  -->
                </div>
            </div>

            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col">
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                            @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        <div class="col-12 col-sm-auto d-flex align-items-start justify-content-end d-block d-lg-none">
                            <button type="button" class="btn btn-icon btn-icon-start btn-outline-primary w-100 w-sm-auto" data-bs-toggle="dropdown">
                                <i data-acorn-icon="gear"></i>
                                <span>Settings</span>
                            </button>
                            <!-- Content of below will be moved to #settingsColumn or back in here based on the data-move-breakpoint attribute below -->
                            <!-- Content will be here if the screen size is smaller than lg -->

                            <!-- In Page Menu Start -->
                            <div
                                    class="dropdown-menu dropdown-menu-end sw-25 py-3 px-4"
                                    id="settingsMoveContent"
                                    data-move-target="#settingsColumn"
                                    data-move-breakpoint="lg"
                            >
                                <div class="mb-2">
                                    <a class="nav-link active px-0" href="#">
                                        <i data-acorn-icon="activity" class="me-2" data-acorn-size="17"></i>
                                        <span class="align-middle">Profile</span>
                                    </a>
                                    <div>
                                        <a class="nav-link active py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Personal</span>
                                        </a>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Friends</span>
                                        </a>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Account</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <a class="nav-link px-0" href="#">
                                        <i data-acorn-icon="inbox" class="me-2" data-acorn-size="17"></i>
                                        <span class="align-middle">Payment</span>
                                    </a>
                                    <div>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Billing</span>
                                        </a>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Invoice</span>
                                        </a>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Tax Info</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <a class="nav-link px-0" href="#">
                                        <i data-acorn-icon="shield" class="me-2" data-acorn-size="17"></i>
                                        <span class="align-middle">Security</span>
                                    </a>
                                    <div>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Password</span>
                                        </a>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Security Log</span>
                                        </a>
                                        <a class="nav-link py-1 my-1 px-0" href="#">
                                            <i class="me-2 sw-2 d-inline-block"></i>
                                            <span class="align-middle">Devices</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <a class="nav-link px-0" href="#">
                                        <i data-acorn-icon="notification" class="me-2" data-acorn-size="17"></i>
                                        <span class="align-middle">Notifications</span>
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a class="nav-link px-0" href="#">
                                        <i data-acorn-icon="tablet" class="me-2" data-acorn-size="17"></i>
                                        <span class="align-middle">Applications</span>
                                    </a>
                                </div>
                            </div>
                            <!-- In Page Menu End -->
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Public Info Start -->
                <h2 class="small-title">Public Info</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Lisa Jackson" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="writerofrohan" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Company</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Colored Strategies" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Birthday</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control date-picker-close" id="birthday" value="08/08/1988" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <select class="select-single-no-search" data-width="100%" id="genderSelect">
                                        <option label="&nbsp;"></option>
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                        <option value="3">Other</option>
                                        <option value="4">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <textarea class="form-control" rows="3">I'm a Cyborg, But That's OK</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Public Info End -->

                <!-- Contact Start -->
                <h2 class="small-title">Contact</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Primary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Secondary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="lisajackson@gmail.com" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="+6443884455" />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact End -->

                <!-- Jobs Start -->
                <h2 class="small-title">Jobs</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Freelance</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <div class="form-check mt-2">
                                        <input type="checkbox" class="form-check-input" id="customCheck1" />
                                        <label class="form-check-label" for="customCheck1">I am available for hire</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Jobs End -->
            </div>
        </div>
    </div>
@endsection
