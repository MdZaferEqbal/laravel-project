@extends('layouts.main')
@push('title')
    <title>404</title>
@endpush
@section('main-section')
<div class="d-flex justify-content-center align-items-center">
    <img class="image-404" src="{{url('/')}}/assets/404-8.jpg"/>
    <div class="blured-background pop-up-404 position-absolute d-flex justify-content-center align-items-center rounded p-4">
        <div class="pop-404-text">
            <h1 class="flex-row-center"><a href="{{url('/')}}" class="text-decoration-none text-dark">Error 404: Lost? Return Home.</a></h1>
        </div>
    </div>
</div>
@endsection
