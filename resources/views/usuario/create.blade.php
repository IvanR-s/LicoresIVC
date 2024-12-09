@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Crear Usuario';
    $description= 'jQuery Validate makes simple clientside form validation easy, whilst still offering plenty of customization options.';
    $breadcrumbs = ["/"=>"Inicio","/Interface"=>"Usuario","/Interface/Forms"=>"Nuevo Usuario"]
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
                    <!-- Common Rules Start -->
                    <section class="scroll-section" id="commonRules">
                        <div class="card mb-5">
                            <div class="card-body">
                                <form id="userForm" class="tooltip-label-end" novalidate>
                                    <!-- Tipo de Documento -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Tipo de Documento</label>
                                        <select class="form-control" name="tipo_documento">
                                            <option value="Cédula">Cédula</option>
                                            <option value="Registro Civil">Registro Civil</option>
                                            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                                        </select>
                                    </div>

                                    <!-- Documento -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Documento</label>
                                        <input type="number" class="form-control" name="documento" required />
                                        <div class="form-text">Debe contener solo números.</div>
                                    </div>
                                
                                    <!-- Nombre -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" required />
                                        <div class="form-text">Debe contener solo letras.</div>
                                    </div>

                                    <!-- Apellido -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" required />
                                        <div class="form-text">Debe contener solo letras.</div>
                                    </div>

                                    <!-- Número de Teléfono -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Número de Teléfono</label>
                                        <input type="number" class="form-control" name="numero_telefono" required />
                                        <div class="form-text">Debe contener solo números.</div>
                                    </div>

                                    <!-- Correo -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" name="correo" required />
                                        <div class="form-text">Debe ser un correo válido.</div>
                                    </div>

                                    <!-- Dirección -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Dirección</label>
                                        <input type="text" class="form-control" name="direccion" required />
                                    </div>

                                    <!-- Contraseña -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" name="password" required />
                                        <div class="form-text">Debe tener al menos 6 caracteres.</div>
                                    </div>

                                    <!-- Confirmar Contraseña -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" name="confirm_password" required />
                                        <div class="form-text">Debe coincidir con la contraseña.</div>
                                    </div>

                                    <!-- Rol -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Rol</label>
                                        <select class="form-control" name="rol">
                                            <option value="Administrador">Administrador</option>
                                            <option value="Empleado">Empleado</option>
                                            <option value="Cliente">Cliente</option>
                                        </select>
                                    </div>

                                    <!-- Estado -->
                                    <div class="mb-3 position-relative form-group">
                                        <label class="form-label">Estado</label>
                                        <select class="form-control" name="estado">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        </select>
                                    </div>

                                    <!-- Botón de Enviar -->
                                    <button type="submit" class="btn btn-primary mb-0">Registrar Usuario</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>    <!-- Common Rules End -->
        </div>
    </div>
@endsection
