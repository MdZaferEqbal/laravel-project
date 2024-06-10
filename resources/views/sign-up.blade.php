@extends('layouts.main')
@push('title')
    <title>Middleware | Laravel</title>
@endpush
@section('main-section')
<div class="d-flex justify-content-center align-items-center">
    <img class="image-404" src="{{url('/')}}/assets/404-5.jpg"/>
    <div class="blured-background position-absolute d-flex justify-content-center align-items-center rounded p-4 sign-in-div">
        <form action="{{url('/')}}/sign-up" method="post">
            <h3 class="text-center text-dark">Sign Up</h3>
            @csrf
            <x-input id="exampleInputName" label="Name" type="text" value="{{old('customer_name')}}" name="customer_name" required="True"/>
            <!-- Gender checkbox -->
            <strong>Gender: </strong>
            <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" name="customer_gender" value="M" class="btn-check" id="btnradio1" autocomplete="off" {{old('customer_gender') == "M" ? "checked" : ""}}>
                <label class="btn btn-outline-dark" for="btnradio1">Male</label>

                <input type="radio" name="customer_gender" value="F" class="btn-check" id="btnradio2" autocomplete="off" {{old('customer_gender') == "F" ? "checked" : ""}}>
                <label class="btn btn-outline-dark" for="btnradio2">Female</label>

                <input type="radio" name="customer_gender" value="O" class="btn-check" id="btnradio3" autocomplete="off" {{old('customer_gender') == "O" ? "checked" : ""}}>
                <label class="btn btn-outline-dark" for="btnradio3">Others</label>
            </div>
            <!-- DOB -->
            <strong>Date of Birth(DOB): </strong>
            <input type="date" name="customer_dob" value="{{old('customer_dob')}}" id="btnradio1dob" autocomplete="off" class="btn btn-outline-dark rounded mb-2">
            {{-- email --}}
            <x-input id="exampleInputEmail1" label="Email" type="email" value="{{old('customer_email')}}" name="customer_email" info="We'll never share your email with anyone else." required="True" info="{{isset($customer_exists_message) ? $customer_exists_message : null}}" customClass="{{isset($class) ? $class : null}}"/>
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
            <label class="form-label" for="laravel-tutorial-state-option"><strong>Select State</strong></label>
            <select class="form-select form-select-md mb-3 bg-dark text-danger border-0" aria-label="Medium select example" id="laravel-tutorial-state-option" name="customer_state">
                <option value="Null" selected>Select State</option>
                @foreach( $indianStates as $key => $state )
                    <option value="{{$key}}" {{old('customer_state') == $key ? "selected" : ""}}>{{$state}}</option>
                @endforeach
            </select>
            <x-input id="customerPincode" label="Pincode" type="number" value="{{old('customer_pincode')}}" name="customer_pincode" minlength="6" maxlength="6"/>
            <x-input id="exampleInputPassword1" label="Password" type="password" name="customer_password" required="True"/>
            <x-input id="exampleInputConfirmPassword" label="Confirm Password" type="password" name="customer_confirmpassword" required="True"/>
            <div class="text-center">
                <button type="submit" onClick="signUp()" class="btn btn-dark text-light">{{isset($button) ? $button : "Submit"}}</button>
            </div>
        </form>
    </div>
</div>
@endsection
