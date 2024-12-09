@php
    $html_tag_data = [];
    $title = 'Interface';
    $description = 'User interface elements that provides control over various content and layout. They are styled in a harmony with the rest of the template.';
    $breadcrumbs = ["/"=>"Home"]
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
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="card mb-2">
            <div class="card-body h-100">{{ $description }}</div>
        </div>
        <!-- Content End -->

        <!-- List Items Start -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="archive" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Interface/Components" class="heading stretched-link d-block">Components</a>
                            <div class="text-muted">Bootstrap components styled for the template as the core of the project.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="switch-off" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Interface/Forms" class="heading stretched-link d-block">Forms</a>
                            <div class="text-muted">Elements, layouts, validation and plugins that are needed for the forms.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="puzzle" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Interface/Plugins" class="heading stretched-link d-block">Plugins</a>
                            <div class="text-muted">Various implementations of plugins that are styled for the harmony of the template.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="news" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Interface/Content" class="heading stretched-link d-block">Content</a>
                            <div class="text-muted">Icons, images and typography of the project, and navigation options.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection
