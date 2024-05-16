@extends('layouts.main')
@push('title')
    <title>Introduction to Models | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Introduction to Models in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Overview</h3>
        <strong>What is Model in Laravel?</strong>
        <p> A "model" in Laravel is essentially a PHP class file. Laravel comes bundled with Eloquent, which is an ORM (Object-Relational Mapper) designed to streamline interactions with your database. It simplifies tasks like querying, inserting, updating, and deleting data, making database operations more intuitive and pleasant for developers. Essentially, each database table is associated with its own Model class.</p>
        <!-- Commands to make Models -->
        <h3 class="text-center">Commands to create Models</h3>
        <!-- Only Model Command -->
        <p><strong>Only Model (The ModelName in this command represents the table name with every word's first letter capitalized bacause it will create a class based file):</strong></p>
        <ul>
            <li><strong>php artisan make:model ModelName</strong></li>
        </ul>
        <!-- Model with Migration Command -->
        <p><strong>Model with Migration (This command will create both the files, one for model and one for migration):</strong></p>
        <ul>
            <li><strong>php artisan make:model ModelName --migration</strong></li>
        </ul>
        <!-- Insert Query in Laravel Eloquent ORM -->
        <h3 class="text-center">Insert Query in Laravel Eloquent ORM</h3>
        <a href="/model-demo" class="text-decoration-none text-center text-info"><p><strong>Click here to checkout the Demo!</strong></p></a>
    </div>
</div>
@endsection
