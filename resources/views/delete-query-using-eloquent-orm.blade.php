@extends('layouts.main')
@push('title')
    <title>Delete Query using Eloquent-ORM | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Delete Query using Eloquent-ORM in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Deleting Data from Database</h3>
        <strong>Deleting Data:</strong>
        <p>You can check out the code for this project by clicking on the highlighted text: <a class="text-decoration-none text-info" target="_blank" href="https://github.com/MdZaferEqbal/laravel-tutorial">Laravel Tutorial GitHub Link</a></p>
        <div class="text-center">
            <a class="text-decoration-none text-info" href="{{route('customer.view')}}"><strong>Click here to check out the fully functional delete button.</strong></a>
        </div>    
    </div>
</div>
@endsection
