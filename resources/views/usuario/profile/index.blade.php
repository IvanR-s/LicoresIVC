@php
    $html_tag_data = [];
    $title = 'Profile';
    $description = 'Layouts for settings and social aspects of a user page.';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages"]
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
                            <i data-acorn-icon="user" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Pages/Profile/Standard" class="heading stretched-link d-block">Standard</a>
                            <div class="text-muted">User profile page with tab navigation featuring stats, charts and so on.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="settings-2" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Pages/Profile/Settings" class="heading stretched-link d-block">Settings</a>
                            <div class="text-muted">Settings page with a menu and categorized inputs.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection
