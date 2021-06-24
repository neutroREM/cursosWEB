@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
<!-- Contenido -->
<section class="container-fluid content">
    <!-- Categorías -->
    <div class="row justify-content-center">
        <div class="col-10 col-md-12">
            <nav class="text-center my-5">
                <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Inicio</a>
                <a href="{{asset(route('menu'))}}" class="mx-3 pb-3 link-category d-block d-md-inline" >Cursos</a>
            </nav>
        </div>
    </div>

    <!-- Posts -->
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <!-- Post 1 -->
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/4.png')}}" alt="Post Python">
                        <div class="card-body">
                            <small class="card-txt-category">Categoría: Programación</small>
                            <h5 class="card-title my-2">Aprende Python moderno</h5>
                            <div class="d-card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                eius corrupti nulla veniam, molestias nemo repudiandae?
                            </div>
                            <a href="#" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">rem</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date">Hace 1 día</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 2 -->
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/6.png')}}" alt="Post Python">
                        <div class="card-body">
                            <small class="card-txt-category">Categoría: Programación</small>
                            <h5 class="card-title my-2">Aprende HTML - Básico a profesional</h5>
                            <div class="d-card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                eius corrupti nulla veniam, molestias nemo repudiandae?
                            </div>
                            <a href="#" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">re</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date">Hace 2 días</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 3 -->
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/5.png')}}" alt="Post Python">
                        <div class="card-body">
                            <small class="card-txt-category">Categoría: Programación</small>
                            <h5 class="card-title my-2">Aprende PHP y como trabajar con bases de datos</h5>
                            <div class="d-card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                eius corrupti nulla veniam, molestias nemo repudiandae?
                            </div>
                            <a href="#" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">rem</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date">Hace 2 días</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <!-- Paginador -->
        </div>
    </div>
</section>

@endsection


