<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Linking our css file -->
    <link rel="stylesheet" href='{{ asset("css/app.css") }}'>
    <!-- Linking website logo -->
    <link rel="icon" type="image/png" href="../../public/laravel-logo.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Page title using stack -->
    @stack('title')
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    /* Adding our own custom scrollbar */
    ::-webkit-scrollbar {
        width: 0.9375rem;
    }
    ::-webkit-scrollbar-track {
        background: #343a40;
    }
    ::-webkit-scrollbar-thumb {
        background-color: #B23744;
        border-radius: 1rem;
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: #C73645;
    }
    ::-webkit-scrollbar-thumb:active {
        background-color: #D23645;
    }
    .main-content {
        height: 78.9vh;
    }
    .single-line-content {
        height: 100vh;
    }
    .border-radius-top-left {
        border-top-left-radius: 5px
    }
    .border-radius-top-right {
        border-top-right-radius: 5px
    }
    .border-radius-bottom-left {
        border-bottom-left-radius: 5px
    }
    .border-radius-bottom-right {
        border-bottom-right-radius: 5px
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="{{url('/')}}">
                <!-- <img src="assets/laravel-logo.svg" alt="Laravel Logo"/> -->
                Laravel Tutorial
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown text-light">
                        <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chapters
                        </a>
                        <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-danger" href="{{url('/')}}">Blade Template</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/directives')}}">Blade Directives</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/controllers')}}">Controllers in Laravel</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/form')}}">Form Submission in Laravel</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/components')}}">Components in Laravel</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/database-migration')}}">Database Configuration and Migration in Laravel</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/intro-models')}}">Introduction to Models in Laravel</a></li>
                            <li><a class="dropdown-item text-danger" href="{{url('/route-button-anchor')}}">Routing through Buttons & Anchor Tags | route() & <br/> url() in Laravel</a></li>
                            <li><a class="dropdown-item text-danger" href="{{route('delete.query.doc')}}">Delete Query using Eloquent-ORM in Laravel</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" target="_blank" href="https://laravel.com/docs/11.x">Laravel Documentation</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 text-light" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
