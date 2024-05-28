@extends('layouts.main')
@push('title')
    <title>Middleware | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Middleware in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Overview</h3>
        {{-- Middleware --}}
        <strong>What is Middleware</strong>
        <ul>
            <li>The primary function of middleware is to filter all incoming requests to the application, determining whether they should be passed on to the application or not.</li>
            <li>Middleware provides a convenient mechanism for inspecting and filtering HTTP requests entering the application.</li>
            <li>To create a new middleware, use <strong>php artisan make:middleware MiddlewareName</strong> command.</li>
        </ul>
        {{-- Global Middleware --}}
        <strong>What is Global Middleware</strong>
        <ul>
            <li>Middleware that is applied across the entire web application or to every route is known as global middleware.</li>
            <li>If you want a middleware to run during every HTTP request to your application, list the middleware class in the <strong>$middleware</strong> property of your <strong>app/Http/Kernel.php</strong>. For example, in your kernel.php file, you will see a <strong>$middleware</strong> protected array where you can add your own custom global middleware by including the following code snippet: <strong>\App\Http\Middleware\MiddlewareName::class,</strong>. After that, simply run the command to configure the application using <strong>php artisan config:cache</strong>.</li>
        </ul>
        {{-- Route Middleware --}}
        <strong>What is Route Middleware</strong>
        <ul>
            <li>If you would like to assign middleware to specific routes, you should first assign the middleware a key in your application's <strong>app/Http/Kernel.php</strong> file.</li>
            <li>The <strong>$routeMiddleware</strong> property of this class contains entries for the middleware included in Laravel.</li>
        </ul>
        {{-- Middleware Groups--}}
        <strong>What is Middleware Groups</strong>
        <ul>
            <li>Sometimes you may want to group several middleware under a single key to make them easier to assign to routes. You may accomplish this using the<strong>$middlewareGroups</strong> property of your HTTP Kernel.</li>
            <li>Laravel comes with web and api middleware groups that contain common middleware you may want to apply to your web and API routes.</li>
        </ul>
    </div>
</div>
@endsection
