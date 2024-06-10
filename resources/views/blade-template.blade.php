@extends('layouts.main')
@push('title')
    <title>Laravel Tutorial</title>
@endpush
@section('main-section')
    <div class="bg-danger">
        <div class="heading text-center text-light">
            <h1>{{$heading ?? "Laravel-Tutorial"}}</h1>
            <h2>{{$sub_heading ?? "Want to start your carrer as a Laravel Developer?"}}</h2>
        </div>
        <div class="container main-content">
            <!-- Understanding Blade Template -->
            <h3 class="text-center">Understanding Blade Template</h3>
            <p><strong>Displaying Data:</strong></p>
            <ol>
                <li><strong>@{{$name}}:</strong> Prints the values passed to it as a string. E.g; if the value is {{"<h4>Test value</h4>"}} it will print the same value as {{"<h4>Test value</h4>"}}.</li>
                <li><strong>@{!!$name!!}:</strong> Prints the values passed to it as a syntax. E.g; if the value is {{"<h4>Test value</h4>"}} it will print the same value as <h4>Test value</h4></li>
            </ol>
            <hr/>
            <div class="text-center">
                <a href="https://github.com/MdZaferEqbal/laravel-project" target="_blank"><button class="btn btn-warning text-dark mb-1 fs-3"><i class="fa-brands fa-github"></i> Project</button></a>
            </div>
        </div>
    </div>
@endsection
