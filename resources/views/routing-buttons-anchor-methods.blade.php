@extends('layouts.main')
@push('title')
    <title>Routing through Buttons & Anchor Tags | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Routing through Buttons & Anchor Tags route() & url() in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Routing Methods</h3>
        <!-- route() Method -->
        <strong>route() Method:</strong>
        <p>You can use this method by assigning a custom name to a route in the web.php file with Your Route->name('custom.name'). This custom name can then be used in a button or anchor tag href to link to that route, like href="{ { route('custom.name') } }".</p>
        <!-- url() Method -->
        <strong>url() Method:</strong>
        <p>This method is be used to redirect a user to a route by specifying the route URL in an anchor tag or button. The url method provides the base URL, which can be modified in the .env file(APP_URL) located in the root directory. This base URL is then concatenated with the custom route name provided as an argument to url method. For example: href="{ { url('/custom-route') } }".</p>
    </div>
</div>
@endsection
