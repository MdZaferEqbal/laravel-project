@extends('layouts.main')
@push('title')
    <title>Middleware | Laravel</title>
@endpush
@section('main-section')
<div class="d-flex justify-content-center align-items-center">
    <img class="image-404" src="{{url('/')}}/assets/404-5.jpg"/>
    <div class="blured-background pop-up-404 position-absolute d-flex justify-content-center align-items-center rounded p-4 sign-in-div">
        <form action="{{url('/')}}/sign-in" method="post">
            @csrf
            <h2 class="text-dark text-center">Sign In</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><strong>Email address</strong>*</label>
                <input type="email" placeholder="Email" class="form-control bg-dark text-danger border-0" id="exampleInputEmail1" aria-describedby="emailHelp" name="customer_email" value="{{old('customer_email')}}">
                @error('customer_email')
                    <div class="form-text text-warning">{{$message}}</div>
                @elseif(isset($customer_not_found))
                    <div id="emailHelp" class="form-text text-warning">{!!$customer_not_found!!}</div>
                @else
                    <div id="emailHelp" class="form-text text-light">We'll share your email with everyone else.</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Password</strong>*</label>
                <input type="password" placeholder="Password" class="form-control bg-dark text-danger border-0" id="exampleInputPassword1" aria-describedby="passwordHelp" name="customer_password" value="{{old('customer_password')}}">
                @error('customer_password')
                    <div class="form-text text-warning">{{$message}}</div>
                @elseif(isset($incorrect_password))
                    <div id="emailHelp" class="form-text text-warning">{{$incorrect_password}}</div>
                @else
                    <div id="passwordHelp" class="form-text text-light">We'll not share your password with anyone else.</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" onclick="loginUser()" class="btn btn-success">Sign In</button>
            </div>
        </form>
    </div>
</div>
@endsection
