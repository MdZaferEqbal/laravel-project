@extends('layouts.main')
@push('title')
    <title>Components | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Components in Laravel</h2>
    </div>
    <div class="container pb-2">
        <h3 class="text-center">Overview</h3>
        <strong>Defination</strong>
        <p>In Laravel, components are like building blocks that you can use to create different parts of your website. Each component is a small piece of code that does a specific job, like showing a button or a form. You can use these components over and over again in different parts of your website, which makes it easier to build and maintain your site.</p>
        <!-- Command to make components -->
        <p><strong>Command to make Components:</strong></p>
        <ul>
            <li><strong>php artisan make:component ComponentName</strong></li>
        </ul>
        <!-- More about components -->
        <p><strong>Some more details on Components:</strong></p>
        <ul>
            <li>To activate the components attribute, begin by employing attributeName="attributeName". Next, utilize the __construct function located in app/View/Components/ComponentName to allocate the values. For additional insights, refer to the code implemented on this page.</li>
            <li>To transfer the value or data to the component, you must follow two steps. Firstly, pass the value as :data="$data", then utilize the same __construct to assign the values once more. For additional insights, refer to the code implemented on this page.</li>
        </ul>

        <!-- Form example on how to use components -->
        <form action="{{url('/')}}/form" method="post">
            @csrf
            <x-input id="exampleInputName" label="Name" type="text" value="{{old('name')}}" name="name"/>
            <x-input id="exampleInputEmail1" label="Email address" type="email" value="{{old('email')}}" name="email" info="We'll never share your email with anyone else." required="True"/>
            <x-input id="exampleInputPassword1" label="Password" type="password" name="password" required="True"/>
            <x-input id="exampleInputConfirmPassword" label="Confirm Password" type="password" name="confirmpassword" required="True"/>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termsNconditions">
                <label class="form-check-label" for="exampleCheck1"><strong>Terms & Conditions<strong></label>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
@endsection
