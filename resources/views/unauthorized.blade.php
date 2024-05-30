@extends('layouts.main')
@push('title')
    <title>Unauthorized Page</title>
@endpush
@section('main-section')
<div class="d-flex justify-content-center align-items-center">
    <img class="image-404" src="{{url('/')}}/assets/404-8.jpg"/>
    <div class="blured-background pop-up-404 position-absolute d-flex justify-content-center align-items-center rounded p-4">
        <div class="pop-404-text">
            <h1 class="flex-row-center">Unauthorized Page: Please <a href="{{url('/sign-in')}}" class="text-dark">Sign In</a> or <a href="{{url('/sign-up')}}" class="text-dark">Sign Up</a> to access this page.</h1>
        </div>
    </div>
</div>
@endsection
