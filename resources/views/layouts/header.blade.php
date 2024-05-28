<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Linking our css file -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/app.css">
    <!-- Linking website logo -->
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/laravel-logo.svg">
    <!-- Fontawsome -->
    <script src="https://kit.fontawesome.com/c7fb24f92a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Page title using stack -->
    @stack('title')
</head>
<style>
    .blured-background {
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="{{url('/welcome')}}">
                <img src="{{url('/')}}/assets/laravel-logo.svg" height="40rem" width="40rem" alt="Laravel Tutorial"/>
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
                        <ul class="dropdown-menu blured-background dropdown-maxminum-height custom-scroll-bar">
                            <li><a class="dropdown-item text-dark" href="{{url('/')}}">Blade Template</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/directives')}}">Blade Directives</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/controllers')}}">Controllers in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/form')}}">Form Submission in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/components')}}">Components in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/database-migration')}}">Database Configuration and Migration in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/intro-models')}}">Introduction to Models in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{url('/route-button-anchor')}}">Routing through Buttons & Anchor Tags | route() & <br/> url() in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('delete.query.doc')}}">Delete Query using Eloquent-ORM in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('update.query.doc')}}">Update Query using Eloquent-ORM in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('helpers.doc')}}">Configuration of Helpers in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('accessors.mutators.doc')}}">Accessors & Mutators in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('session.handling.doc')}}">Session Handling in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('softdelete.doc')}}">Softdelete(Move to Trash) in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('file.upload.doc')}}">File Upload in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('database.seeder.faker.doc')}}">Seeder & Faker in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('foreign.key.relation.doc')}}">Defining Foreign key Relation in Laravel</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('middleware.doc')}}">Middleware in Laravel</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-dark" target="_blank" href="https://laravel.com/docs/11.x">Laravel Documentation</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="{{url('/')}}/search">
                    @if( session()->has('customer_id') && session()->has('customer_name'))
                        <a class="text-decoration-none" href="{{route('sign.out')}}"><button class="btn btn-danger ms-1 min-width-sign-out me-2" type="button" >Sign Out</button></a>
                    @else
                        <a class="text-decoration-none" href="{{route('sign.in')}}"><button class="btn btn-outline-success me-1 min-height" type="button">Sign In</button></a>
                        <a class="text-decoration-none" href="{{route('sign.up')}}"><button class="btn btn-outline-primary ms-1 min-height me-2" type="button" >Sign Up</button></a>
                    @endif
                    <input name="search" class="form-control me-2 text-dark" type="search" placeholder="Search" value="{{old('search')}}" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
