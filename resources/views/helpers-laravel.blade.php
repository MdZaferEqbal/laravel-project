@extends('layouts.main')
@push('title')
    <title>Helpers | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Helpers in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Configuration of Helpers</h3>
        <strong>Helpers:</strong>
        <It>In Laravel, helpers store essential functions that are used across the application, allowing you to implement reusable functions that will be used or for future use on multiple pages. It's advisable to verify the existence of a function before implementing it by using the function_exists('functionName') in an if condition, as this practice helps prevent potential errors or conflicts within the code.</p>
        <p>You can check out the code for this project by clicking on this button: <a class="text-decoration-none btn btn-outline-dark" target="_blank" href="https://github.com/MdZaferEqbal/laravel-project"><i class="fa-brands fa-github"></i> Project</a></p>
    </div>
</div>
@endsection
