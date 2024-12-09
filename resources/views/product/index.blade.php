@php
    $html_tag_data = [];
    $title =  'Apps';
    $description =  'Frontend implementations of different applications that might be useful to build on top of them or create totally different functionality with the provided layouts. They contain listing, detail and editing screens as well as usage examples of plugins such as List.js, Fuse.js and various form plugins.';
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
                            <i data-acorn-icon="calendar" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Apps/Calendar" class="heading stretched-link d-block">Calendar</a>
                            <div class="text-muted">Implementation for a basic events and schedule application that built on top of Full Calendar plugin.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="message" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Apps/Chat" class="heading stretched-link d-block">Chat</a>
                            <div class="text-muted">A basic chat application that built mobile first and has chat and talk screens and contains a contact list.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="phone" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Apps/Contacts" class="heading stretched-link d-block">Contacts</a>
                            <div class="text-muted">User directory application that built with the help of List.js. Can be searched, paged and sorted.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="email" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Apps/Mailbox" class="heading stretched-link d-block">Mailbox</a>
                            <div class="text-muted">Very basic email application that contains a list page rendering, new&reply layouts and a static details page.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-acorn-icon="check-square" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="/Apps/Tasks" class="heading stretched-link d-block">Tasks</a>
                            <div class="text-muted">Todo application that has create, edit and delete capabilities. Also has a Fuse.js search implementation.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Items End -->
    </div>
@endsection
