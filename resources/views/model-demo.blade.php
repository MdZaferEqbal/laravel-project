@extends('layouts.main')
@push('title')
    <title>Model Demo | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Model Insert Data Demo in Laravel</h2>
    </div>
    <div class="container pb-2">
        <form action="{{url('/')}}/model-demo" method="post">
            <h3 class="text-center">Customer Information Form</h3>
            @csrf
            <x-input id="exampleInputName" label="Name" type="text" value="{{old('customer_name')}}" name="customer_name" required="True"/>
            <!-- gender checkbox -->
            <strong>Gender: </strong>
            <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" name="customer_gender" value="M" class="btn-check" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio1">Male</label>

                <input type="radio" name="customer_gender" value="F" class="btn-check" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio2">Female</label>

                <input type="radio" name="customer_gender" value="O" class="btn-check" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio3">Others</label>
            </div>
            <!-- DOB -->
            <strong>Date of Birth(DOB): </strong>
            <input type="date" name="customer_dob" value="{{old('customer_dob')}}" id="btnradio1" autocomplete="off" class="btn btn-outline-dark rounded mb-2">

            <x-input id="exampleInputEmail1" label="Email" type="email" value="{{old('customer_email')}}" name="customer_email" info="We'll never share your email with anyone else." required="True"/>
            <x-input id="exampleInputAddress" label="Address" type="text" value="{{old('customer_address')}}" name="customer_address" info="We'll never share your address with anyone else."/>
            <!-- states -->
            @php
                $indianStates = ['AR' => 'Arunachal Pradesh',
                'AR' => 'Arunachal Pradesh',
                'AS' => 'Assam',
                'BR' => 'Bihar',
                'CT' => 'Chhattisgarh',
                'GA' => 'Goa',
                'GJ' => 'Gujarat',
                'HR' => 'Haryana',
                'HP' => 'Himachal Pradesh',
                'JK' => 'Jammu and Kashmir',
                'JH' => 'Jharkhand',
                'KA' => 'Karnataka',
                'KL' => 'Kerala',
                'MP' => 'Madhya Pradesh',
                'MH' => 'Maharashtra',
                'MN' => 'Manipur',
                'ML' => 'Meghalaya',
                'MZ' => 'Mizoram',
                'NL' => 'Nagaland',
                'OR' => 'Odisha',
                'PB' => 'Punjab',
                'RJ' => 'Rajasthan',
                'SK' => 'Sikkim',
                'TN' => 'Tamil Nadu',
                'TG' => 'Telangana',
                'TR' => 'Tripura',
                'UP' => 'Uttar Pradesh',
                'UT' => 'Uttarakhand',
                'WB' => 'West Bengal',
                'AN' => 'Andaman and Nicobar Islands',
                'CH' => 'Chandigarh',
                'DN' => 'Dadra and Nagar Haveli',
                'DD' => 'Daman and Diu',
                'LD' => 'Lakshadweep',
                'DL' => 'National Capital Territory of Delhi',
                'PY' => 'Puducherry'];
            @endphp
            <select class="form-select form-select-md mb-3 bg-dark text-danger border-0" aria-label="Medium select example" name="customer_state">
                <option value="Null" selected>Select State</option>
                @foreach( $indianStates as $key => $state )
                    <option value="{{$key}}">{{$state}}</option>
                @endforeach
            </select>
            <x-input id="customerPincode" label="Pincode" type="number" value="{{old('customer_pincode')}}" name="customer_pincode" minlength="6" maxlength="6"/>
            <x-input id="exampleInputPassword1" label="Password" type="password" name="customer_password" required="True"/>
            <x-input id="exampleInputConfirmPassword" label="Confirm Password" type="password" name="customer_confirmpassword" required="True"/>
            <button type="submit" class="btn btn-dark text-danger">Submit</button>
        </form>
        <div class="text-center">
            <a href="/customer/view" class="text-decoration-none text-info">(View all customer data by clicking here)</a>
        </div>
    </div>
</div>
@endsection
