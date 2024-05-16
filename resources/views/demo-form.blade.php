@extends('layouts.main')
@push('title')
    <title>Form Submission | Laravel</title>
@endpush
@section('main-section')
    <div class="bg-danger">
        <div class="heading text-center text-light">
            <h1>Laravel-Tutorial</h1>
            <h2>Form Submission with Validation in Laravel</h2>
        </div>
        <div class="container main-content">
            <form action="{{url('/')}}/form" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label"><strong>Name</strong></label>
                    <input type="text" class="form-control bg-dark text-danger border-0" id="exampleInputName" name="name" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><strong>Email address</strong></label>
                    <input type="email" class="form-control bg-dark text-danger border-0" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    @error('email')
                    <div id="emailHelp" class="form-text text-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                    <input type="password" class="form-control bg-dark text-danger border-0" id="exampleInputPassword1" name="password">
                    @error('password')
                    <div id="emailHelp" class="form-text text-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputConfirmPassword" class="form-label"><strong>Confirm Password</strong></label>
                    <input type="password" class="form-control bg-dark text-danger border-0" id="exampleInputConfirmPassword" name="confirmpassword">
                    @error('confirmpassword')
                    <div id="emailHelp" class="form-text text-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termsNconditions">
                    <label class="form-check-label" for="exampleCheck1"><strong>Terms & Conditions<strong></label>
                </div>
                <button type="submit" class="btn btn-dark text-danger">Submit</button>
            </form>
        </div>
    </div>
@endsection
