@extends('layouts.main')
@push('title')
    <title>File Uploading | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>File Uploading in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">File Uploading Form Demo</h3>
        {!! Form::open(['url' => '/file-upload', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation']) !!}
            <div class="input-group">
                <input type="file" class="form-control btn btn-secondary" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="fileToUpload">
                <button class="btn btn-success text-dark" type="submit" id="inputGroupFileAddon04">Upload</button>
            </div>
        {!! Form::close() !!}
        @if(isset($fileData))
            <div class="text-center mt-4">
                <h6 class="text-warning">Your file {{$fileData['oldFileName']}} is uploaded as {{$fileData['newFileName']}}.</h5>
            </div>
        @endif
    </div>
</div>
@endsection
